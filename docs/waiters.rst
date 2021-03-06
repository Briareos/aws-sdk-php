=======
Waiters
=======

Introduction
------------

.. include:: _snippets/waiters-intro.txt

If the waiter has to poll the bucket too many times, it will throw an ``Aws\Common\Exception\RuntimeException``
exception.

The "``waitUntil[…]``" methods are all implemented via the ``__call`` magic method, and are a more discoverable shortcut
to using the concrete ``waitUntil()`` method, since many IDEs can auto-complete methods defined using the ``@method``
annotation. The following code uses the ``waitUntil()`` method, but is equivalent to the previous code sample.

.. code-block:: php

    $s3Client->waitUntil('BucketExists', array('Bucket' => 'my-bucket'));

Basic Configuration
-------------------

You can tune the number of polling attempts issued by a waiter or the number of seconds to delay between each poll by
passing optional values prefixed with "waiter.":

.. code-block:: php

    $s3Client->waitUntilBucketExists(array(
        'Bucket'              => 'my-bucket',
        'waiter.interval'     => 10,
        'waiter.max_attempts' => 3
    ));

Waiter Objects
--------------

To interact with the waiter object directly, you must use the ``getWaiter()`` method. The following code is equivalent
to the example in the preceding section.

.. code-block:: php

    $bucketExistsWaiter = $s3Client->getWaiter('BucketExists')
        ->setConfig(array('Bucket' => 'my-bucket'))
        ->setInterval(10)
        ->setMaxAttempts(3);
    $bucketExistsWaiter->wait();

Waiter Events
-------------

One benefit of working directly with the waiter object is that you can attach event listeners. Waiters emit up to two
events in each **wait cycle**. A wait cycle does the following:

#. Dispatch the ``waiter.before_attempt`` event.
#. Attempt to resolve the wait condition by making a request to the service and checking the result.
#. If the wait condition is resolved, the wait cycle exits. If ``max_attempts`` is reached, an exception is thrown.
#. Dispatch the ``waiter.before_wait`` event.
#. Sleep ``interval`` amount of seconds.

Waiter objects extend the ``Guzzle\Common\AbstractHasDispatcher`` class which exposes the ``addSubscriber()`` method and
``getEventDispatcher()`` method. To attach listeners, you can use the following example, which is a modified version of
the previous one.

.. code-block:: php

    // Get and configure the waiter object
    $waiter = $s3Client->getWaiter('BucketExists')
        ->setConfig(array('Bucket' => 'my-bucket'))
        ->setInterval(10)
        ->setMaxAttempts(3);

    // Get the event dispatcher and register listeners for both events emitted by the waiter
    $dispatcher = $waiter->getEventDispatcher();
    $dispatcher->addListener('waiter.before_attempt', function () {
        echo "Checking if the wait condition has been met…\n";
    });
    $dispatcher->addListener('waiter.before_wait', function () use ($waiter) {
        $interval = $waiter->getInterval();
        echo "Sleeping for {$interval} seconds…\n";
    });

    $waiter->wait();

Custom Waiters
--------------

It is possible to implement custom waiter objects if your use case requires application-specific waiter logic or waiters
that are not yet supported by the SDK. You can use the ``getWaiterFactory()`` and ``setWaiterFactory()`` methods on the
client to manipulate the waiter factory used by the client such that your custom waiter can be instantiated. By default
the service clients use a ``Aws\Common\Waiter\CompositeWaiterFactory`` which allows you to add additional factories if
needed. The following example shows how to implement a contrived custom waiter class and then modify a client's waiter
factory such that it can create instances of the custom waiter.

.. code-block:: php

    namespace MyApp\FakeWaiters
    {
        use Aws\Common\Waiter\AbstractResourceWaiter;

        class SleptThreeTimes extends AbstractResourceWaiter
        {
            public function doWait()
            {
                if ($this->attempts < 3) {
                    echo "Need to sleep…\n";
                    return false;
                } else {
                    echo "Now I've slept 3 times.\n";
                    return true;
                }
            }
        }
    }

    namespace
    {
        use Aws\S3\S3Client;
        use Aws\Common\Waiter\WaiterClassFactory;

        $s3Client = S3Client::factory();

        $compositeFactory = $s3Client->getWaiterFactory();
        $compositeFactory->addFactory(new WaiterClassFactory('MyApp\FakeWaiters'));

        $waiter = $s3Client->waitUntilSleptThreeTimes();
    }

The result of this code should look like the following::

    Need to sleep…
    Need to sleep…
    Need to sleep…
    Now I've slept 3 times.

