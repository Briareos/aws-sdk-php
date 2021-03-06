<?php return [
  'operations' => [
    'DeleteDeliveryChannel' => '<p>Deletes the specified delivery channel.</p> <p>The delivery channel cannot be deleted if it is the only delivery channel and the configuration recorder is still running. To delete the delivery channel, stop the running configuration recorder using the <a>StopConfigurationRecorder</a> action.</p>',
    'DeliverConfigSnapshot' => '<p>Schedules delivery of a configuration snapshot to the Amazon S3 bucket in the specified delivery channel. After the delivery has started, AWS Config sends following notifications using an Amazon SNS topic that you have specified.</p> <ul> <li>Notification of starting the delivery.</li> <li>Notification of delivery completed, if the delivery was successfully completed.</li> <li>Notification of delivery failure, if the delivery failed to complete.</li> </ul>',
    'DescribeConfigurationRecorderStatus' => '<p>Returns the current status of the specified configuration recorder. If a configuration recorder is not specified, this action returns the status of all configuration recorder associated with the account.</p>',
    'DescribeConfigurationRecorders' => '<p>Returns the name of one or more specified configuration recorders. If the recorder name is not specified, this action returns the names of all the configuration recorders associated with the account. </p>',
    'DescribeDeliveryChannelStatus' => '<p>Returns the current status of the specified delivery channel. If a delivery channel is not specified, this action returns the current status of all delivery channels associated with the account. </p>',
    'DescribeDeliveryChannels' => '<p>Returns details about the specified delivery channel. If a delivery channel is not specified, this action returns the details of all delivery channels associated with the account. </p>',
    'GetResourceConfigHistory' => '<p>Returns a list of configuration items for the specified resource. The list contains details about each state of the resource during the specified time interval. You can specify a <code>limit</code> on the number of results returned on the page. If a limit is specified, a <code>nextToken</code> is returned as part of the result that you can use to continue this request. </p>',
    'PutConfigurationRecorder' => '<p>Creates a new configuration recorder to record the resource configurations. </p> <p>You can use this action to change the role (<code>roleARN</code>] of an existing recorder. To change the role, call the action on the existing configuration recorder and specify a role.</p>',
    'PutDeliveryChannel' => '<p>Creates a new delivery channel object to deliver the configuration information to an Amazon S3 bucket, and to an Amazon SNS topic. </p> <p>You can use this action to change the Amazon S3 bucket or an Amazon SNS topic of the existing delivery channel. To change the Amazon S3 bucket or an Amazon SNS topic, call this action and specify the changed values for the S3 bucket and the SNS topic. If you specify a different value for either the S3 bucket or the SNS topic, this action will keep the existing value for the parameter that is not changed. </p>',
    'StartConfigurationRecorder' => '<p>Starts recording configurations of all the resources associated with the account.</p> <p>You must have created at least one delivery channel to successfully start the configuration recorder.</p>',
    'StopConfigurationRecorder' => '<p>Stops recording configurations of all the resources associated with the account.</p>',
  ],
  'service' => '<fullname>AWS Config</fullname> <p>AWS Config provides a way to keep track of the configurations of all the AWS resources associated with your AWS account. You can use AWS Config to get the current and historical configurations of each AWS resource and also to get information about the relationship between the resources. An AWS resource can be an Amazon Compute Cloud (Amazon EC2] instance, an Elastic Block Store (EBS] volume, an Elastic network Interface (ENI], or a security group. For a complete list of resources currently supported by AWS Config, see <a href="http://docs.aws.amazon.com/config/latest/developerguide/config-concepts.html">Supported AWS Resources</a>.</p> <p>You can access and manage AWS Config through the AWS Management Console, the AWS Command Line Interface (AWS CLI], the AWS Config API, or the AWS SDKs for AWS Config</p> <p>This reference guide contains documentation for the AWS Config API and the AWS CLI commands that you can use to manage AWS Config.</p> <p>The AWS Config API uses the Signature Version 4 protocol for signing requests. For more information about how to sign a request with this protocol, see <a href="http://docs.aws.amazon.com/general/latest/gr/signature-version-4.html">Signature Version 4 Signing Process</a>.</p> <p>For detailed information about AWS Config features and their associated actions or commands, as well as how to work with AWS Management Console, see <a href="http://docs.aws.amazon.com/config/latest/developerguide/WhatIsConfig.html">What Is AWS Config?</a> in the <i>AWS Config Developer Guide</i>.</p>',
  'shapes' => [
    'ARN' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$arn' => '<p>The Amazon Resource Name (ARN] of the resource.</p>',
      ],
    ],
    'AccountId' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$accountId' => '<p>The 12 digit AWS account ID associated with the resource.</p>',
      ],
    ],
    'AvailabilityZone' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$availabilityZone' => '<p>The Availability Zone associated with the resource.</p>',
      ],
    ],
    'Boolean' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationRecorderStatus$recording' => '<p>Specifies whether the recorder is currently recording or not.</p>',
      ],
    ],
    'ChannelName' => [
      'base' => NULL,
      'refs' => [
        'DeleteDeliveryChannelRequest$DeliveryChannelName' => '<p>The name of the delivery channel to delete.</p>',
        'DeliverConfigSnapshotRequest$deliveryChannelName' => '<p>The name of the delivery channel through which the snapshot is delivered.</p>',
        'DeliveryChannel$name' => '<p>The name of the delivery channel. By default, AWS Config automatically assigns the name "default" when creating the delivery channel. You cannot change the assigned name. </p>',
        'DeliveryChannelNameList$member' => NULL,
      ],
    ],
    'ChronologicalOrder' => [
      'base' => NULL,
      'refs' => [
        'GetResourceConfigHistoryRequest$chronologicalOrder' => '<p>The chronological order for configuration items listed. By default the results are listed in reverse chronological order.</p>',
      ],
    ],
    'ConfigExportDeliveryInfo' => [
      'base' => '<p>A list that contains the status of the delivery of either the snapshot or the configuration history to the specified Amazon S3 bucket.</p>',
      'refs' => [
        'DeliveryChannelStatus$configSnapshotDeliveryInfo' => '<p>A list containing the status of the delivery of the snapshot to the specified Amazon S3 bucket.</p>',
        'DeliveryChannelStatus$configHistoryDeliveryInfo' => '<p>A list that contains the status of the delivery of the configuration history to the specified Amazon S3 bucket.</p>',
      ],
    ],
    'ConfigStreamDeliveryInfo' => [
      'base' => '<p>A list that contains the status of the delivery of the configuration stream notification to the Amazon SNS topic. </p>',
      'refs' => [
        'DeliveryChannelStatus$configStreamDeliveryInfo' => '<p>A list containing the status of the delivery of the configuration stream notification to the specified Amazon SNS topic.</p>',
      ],
    ],
    'Configuration' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$configuration' => '<p>The description of the resource configuration.</p>',
      ],
    ],
    'ConfigurationItem' => [
      'base' => '<p>A list that contains detailed configurations of a specified resource.</p>',
      'refs' => [
        'ConfigurationItemList$member' => NULL,
      ],
    ],
    'ConfigurationItemCaptureTime' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$configurationItemCaptureTime' => '<p>The time when the configuration recording was initiated.</p>',
      ],
    ],
    'ConfigurationItemList' => [
      'base' => NULL,
      'refs' => [
        'GetResourceConfigHistoryResponse$configurationItems' => '<p>A list that contains the configuration history of one or more resources.</p>',
      ],
    ],
    'ConfigurationItemMD5Hash' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$configurationItemMD5Hash' => '<p>Unique MD5 hash that represents the configuration item\'s state.</p> <p>You can use MD5 hash to compare the states of two or more configuration items that are associated with the same resource.</p>',
      ],
    ],
    'ConfigurationItemStatus' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$configurationItemStatus' => '<p>The configuration item status.</p>',
      ],
    ],
    'ConfigurationRecorder' => [
      'base' => '<p>An object that represents the recording of configuration changes of an AWS resource.</p>',
      'refs' => [
        'ConfigurationRecorderList$member' => NULL,
        'PutConfigurationRecorderRequest$ConfigurationRecorder' => '<p>The configuration recorder object that records each configuration change made to the resources.</p>',
      ],
    ],
    'ConfigurationRecorderList' => [
      'base' => NULL,
      'refs' => [
        'DescribeConfigurationRecordersResponse$ConfigurationRecorders' => '<p>A list that contains the descriptions of the specified configuration recorders.</p>',
      ],
    ],
    'ConfigurationRecorderNameList' => [
      'base' => NULL,
      'refs' => [
        'DescribeConfigurationRecorderStatusRequest$ConfigurationRecorderNames' => '<p>The name(s] of the configuration recorder. If the name is not specified, the action returns the current status of all the configuration recorders associated with the account. </p>',
        'DescribeConfigurationRecordersRequest$ConfigurationRecorderNames' => '<p>A list of configuration recorder names.</p>',
      ],
    ],
    'ConfigurationRecorderStatus' => [
      'base' => '<p>The current status of the configuration recorder.</p>',
      'refs' => [
        'ConfigurationRecorderStatusList$member' => NULL,
      ],
    ],
    'ConfigurationRecorderStatusList' => [
      'base' => NULL,
      'refs' => [
        'DescribeConfigurationRecorderStatusResponse$ConfigurationRecordersStatus' => '<p> A list that contains status of the specified recorders. </p>',
      ],
    ],
    'ConfigurationStateId' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$configurationStateId' => '<p>An identifier that indicates the ordering of the configuration items of a resource.</p>',
      ],
    ],
    'Date' => [
      'base' => NULL,
      'refs' => [
        'ConfigExportDeliveryInfo$lastAttemptTime' => '<p>The time of the last attempted delivery.</p>',
        'ConfigExportDeliveryInfo$lastSuccessfulTime' => '<p>The time of the last successful delivery.</p>',
        'ConfigStreamDeliveryInfo$lastStatusChangeTime' => '<p>The time from the last status change.</p>',
        'ConfigurationRecorderStatus$lastStartTime' => '<p>The time the recorder was last started.</p>',
        'ConfigurationRecorderStatus$lastStopTime' => '<p>The time the recorder was last stopped.</p>',
        'ConfigurationRecorderStatus$lastStatusChangeTime' => '<p>The time when the status was last changed.</p>',
      ],
    ],
    'DeleteDeliveryChannelRequest' => [
      'base' => '<p> The input for the <a>DeleteDeliveryChannel</a> action. The action accepts the following data in JSON format. </p>',
      'refs' => [],
    ],
    'DeliverConfigSnapshotRequest' => [
      'base' => '<p> The input for the <a>DeliverConfigSnapshot</a> action. </p>',
      'refs' => [],
    ],
    'DeliverConfigSnapshotResponse' => [
      'base' => '<p> The output for the <a>DeliverConfigSnapshot</a> action in JSON format. </p>',
      'refs' => [],
    ],
    'DeliveryChannel' => [
      'base' => '<p>A logical container used for storing the configuration changes of an AWS resource.</p>',
      'refs' => [
        'DeliveryChannelList$member' => NULL,
        'PutDeliveryChannelRequest$DeliveryChannel' => '<p>The configuration delivery channel object that delivers the configuration information to an Amazon S3 bucket, and to an Amazon SNS topic.</p>',
      ],
    ],
    'DeliveryChannelList' => [
      'base' => NULL,
      'refs' => [
        'DescribeDeliveryChannelsResponse$DeliveryChannels' => '<p>A list that contains the descriptions of the specified delivery channel.</p>',
      ],
    ],
    'DeliveryChannelNameList' => [
      'base' => NULL,
      'refs' => [
        'DescribeDeliveryChannelStatusRequest$DeliveryChannelNames' => '<p>A list of delivery channel names.</p>',
        'DescribeDeliveryChannelsRequest$DeliveryChannelNames' => '<p>A list of delivery channel names.</p>',
      ],
    ],
    'DeliveryChannelStatus' => [
      'base' => '<p>The status of a specified delivery channel.</p> <p>Valid values: <code>Success</code> | <code>Failure</code></p>',
      'refs' => [
        'DeliveryChannelStatusList$member' => NULL,
      ],
    ],
    'DeliveryChannelStatusList' => [
      'base' => NULL,
      'refs' => [
        'DescribeDeliveryChannelStatusResponse$DeliveryChannelsStatus' => '<p>A list that contains the status of a specified delivery channel.</p>',
      ],
    ],
    'DeliveryStatus' => [
      'base' => NULL,
      'refs' => [
        'ConfigExportDeliveryInfo$lastStatus' => '<p>Status of the last attempted delivery.</p>',
        'ConfigStreamDeliveryInfo$lastStatus' => '<p>Status of the last attempted delivery.</p>',
      ],
    ],
    'DescribeConfigurationRecorderStatusRequest' => [
      'base' => '<p>The input for the <a>DescribeConfigurationRecorderStatus</a> action.</p>',
      'refs' => [],
    ],
    'DescribeConfigurationRecorderStatusResponse' => [
      'base' => '<p>The output for the <a>DescribeConfigurationRecorderStatus</a> action in JSON format.</p>',
      'refs' => [],
    ],
    'DescribeConfigurationRecordersRequest' => [
      'base' => '<p>The input for the <a>DescribeConfigurationRecorders</a> action.</p>',
      'refs' => [],
    ],
    'DescribeConfigurationRecordersResponse' => [
      'base' => '<p>The output for the <a>DescribeConfigurationRecorders</a> action.</p>',
      'refs' => [],
    ],
    'DescribeDeliveryChannelStatusRequest' => [
      'base' => '<p>The input for the <a>DeliveryChannelStatus</a> action.</p>',
      'refs' => [],
    ],
    'DescribeDeliveryChannelStatusResponse' => [
      'base' => '<p>The output for the <a>DescribeDeliveryChannelStatus</a> action.</p>',
      'refs' => [],
    ],
    'DescribeDeliveryChannelsRequest' => [
      'base' => '<p>The input for the <a>DescribeDeliveryChannels</a> action.</p>',
      'refs' => [],
    ],
    'DescribeDeliveryChannelsResponse' => [
      'base' => '<p>The output for the <a>DescribeDeliveryChannels</a> action.</p>',
      'refs' => [],
    ],
    'EarlierTime' => [
      'base' => NULL,
      'refs' => [
        'GetResourceConfigHistoryRequest$earlierTime' => '<p>The time stamp that indicates an earlier time. If not specified, the action returns paginated results that contain configuration items that start from when the first configuration item was recorded.</p>',
      ],
    ],
    'GetResourceConfigHistoryRequest' => [
      'base' => '<p>The input for the <a>GetResourceConfigHistory</a> action.</p>',
      'refs' => [],
    ],
    'GetResourceConfigHistoryResponse' => [
      'base' => '<p>The output for the <a>GetResourceConfigHistory</a> action.</p>',
      'refs' => [],
    ],
    'InsufficientDeliveryPolicyException' => [
      'base' => '<p>Your Amazon S3 bucket policy does not permit AWS Config to write to it.</p>',
      'refs' => [],
    ],
    'InvalidConfigurationRecorderNameException' => [
      'base' => '<p>You have provided a configuration recorder name that is not valid.</p>',
      'refs' => [],
    ],
    'InvalidDeliveryChannelNameException' => [
      'base' => '<p>The specified delivery channel name is not valid.</p>',
      'refs' => [],
    ],
    'InvalidLimitException' => [
      'base' => '<p>You have reached the limit on the pagination.</p>',
      'refs' => [],
    ],
    'InvalidNextTokenException' => [
      'base' => '<p>The specified nextToken for pagination is not valid.</p>',
      'refs' => [],
    ],
    'InvalidRoleException' => [
      'base' => '<p>You have provided a null or empty role ARN.</p>',
      'refs' => [],
    ],
    'InvalidS3KeyPrefixException' => [
      'base' => '<p>The specified Amazon S3 key prefix is not valid.</p>',
      'refs' => [],
    ],
    'InvalidSNSTopicARNException' => [
      'base' => '<p>The specified Amazon SNS topic does not exist.</p>',
      'refs' => [],
    ],
    'InvalidTimeRangeException' => [
      'base' => '<p>The specified time range is not valid. The earlier time is not chronologically before the later time.</p>',
      'refs' => [],
    ],
    'LastDeliveryChannelDeleteFailedException' => [
      'base' => '<p>You cannot delete the delivery channel you specified because the configuration recorder is running.</p>',
      'refs' => [],
    ],
    'LaterTime' => [
      'base' => NULL,
      'refs' => [
        'GetResourceConfigHistoryRequest$laterTime' => '<p>The time stamp that indicates a later time. If not specified, current time is taken.</p>',
      ],
    ],
    'Limit' => [
      'base' => NULL,
      'refs' => [
        'GetResourceConfigHistoryRequest$limit' => '<p>The maximum number of configuration items returned in each page. The default is 10. You cannot specify a limit greater than 100.</p>',
      ],
    ],
    'MaxNumberOfConfigurationRecordersExceededException' => [
      'base' => '<p>You have reached the limit on the number of recorders you can create.</p>',
      'refs' => [],
    ],
    'MaxNumberOfDeliveryChannelsExceededException' => [
      'base' => '<p>You have reached the limit on the number of delivery channels you can create.</p>',
      'refs' => [],
    ],
    'Name' => [
      'base' => NULL,
      'refs' => [
        'Tags$key' => NULL,
      ],
    ],
    'NextToken' => [
      'base' => NULL,
      'refs' => [
        'GetResourceConfigHistoryRequest$nextToken' => '<p>An optional parameter used for pagination of the results. </p>',
        'GetResourceConfigHistoryResponse$nextToken' => '<p>A token used for pagination of results. </p>',
      ],
    ],
    'NoAvailableConfigurationRecorderException' => [
      'base' => '<p>There are no configuration recorders available to provide the role needed to describe your resources.</p>',
      'refs' => [],
    ],
    'NoAvailableDeliveryChannelException' => [
      'base' => '<p>There is no delivery channel available to record configurations.</p>',
      'refs' => [],
    ],
    'NoRunningConfigurationRecorderException' => [
      'base' => '<p>There is no configuration recorder running.</p>',
      'refs' => [],
    ],
    'NoSuchBucketException' => [
      'base' => '<p>The specified Amazon S3 bucket does not exist.</p>',
      'refs' => [],
    ],
    'NoSuchConfigurationRecorderException' => [
      'base' => '<p>You have specified a configuration recorder that does not exist.</p>',
      'refs' => [],
    ],
    'NoSuchDeliveryChannelException' => [
      'base' => '<p>You have specified a delivery channel that does not exist.</p>',
      'refs' => [],
    ],
    'PutConfigurationRecorderRequest' => [
      'base' => '<p>The input for the <a>PutConfigurationRecorder</a> action.</p>',
      'refs' => [],
    ],
    'PutDeliveryChannelRequest' => [
      'base' => '<p>The input for the <a>PutDeliveryChannel</a> action.</p>',
      'refs' => [],
    ],
    'RecorderName' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationRecorder$name' => '<p>The name of the recorder. By default, AWS Config automatically assigns the name "default" when creating the configuration recorder. You cannot change the assigned name.</p>',
        'ConfigurationRecorderNameList$member' => NULL,
        'StartConfigurationRecorderRequest$ConfigurationRecorderName' => '<p>The name of the recorder object that records each configuration change made to the resources.</p>',
        'StopConfigurationRecorderRequest$ConfigurationRecorderName' => '<p>The name of the recorder object that records each configuration change made to the resources.</p>',
      ],
    ],
    'RecorderStatus' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationRecorderStatus$lastStatus' => '<p>The last (previous] status of the recorder.</p>',
      ],
    ],
    'RelatedEvent' => [
      'base' => NULL,
      'refs' => [
        'RelatedEventList$member' => NULL,
      ],
    ],
    'RelatedEventList' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$relatedEvents' => '<p>A list of CloudTrail event IDs.</p> <p>A populated field indicates that the current configuration was initiated by the events recorded in the CloudTrail log. For more information about CloudTrail, see <a href="http://docs.aws.amazon.com/awscloudtrail/latest/userguide/what_is_cloud_trail_top_level.html">What is AWS CloudTrail?</a>.</p> <p>An empty field indicates that the current configuration was not initiated by any event.</p>',
      ],
    ],
    'Relationship' => [
      'base' => '<p>The relationship of the related resource to the main resource.</p>',
      'refs' => [
        'RelationshipList$member' => NULL,
      ],
    ],
    'RelationshipList' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$relationships' => '<p>A list of related AWS resources.</p>',
      ],
    ],
    'RelationshipName' => [
      'base' => NULL,
      'refs' => [
        'Relationship$relationshipName' => '<p>The name of the related resource.</p>',
      ],
    ],
    'ResourceCreationTime' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$resourceCreationTime' => '<p>The time stamp when the resource was created. </p>',
      ],
    ],
    'ResourceId' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$resourceId' => '<p>The ID of the resource (for example., <code>sg-xxxxxx</code>].</p>',
        'GetResourceConfigHistoryRequest$resourceId' => '<p>The ID of the resource (for example., <code>sg-xxxxxx</code>].</p>',
        'Relationship$resourceId' => '<p>The resource ID of the related resource (for example, <code>sg-xxxxxx</code>.</p>',
      ],
    ],
    'ResourceNotDiscoveredException' => [
      'base' => '<p>You have specified a resource that is either unknown or has not been discovered.</p>',
      'refs' => [],
    ],
    'ResourceType' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$resourceType' => '<p>The type of AWS resource.</p>',
        'GetResourceConfigHistoryRequest$resourceType' => '<p>The resource type.</p>',
        'Relationship$resourceType' => '<p>The resource type of the related resource.</p>',
      ],
    ],
    'StartConfigurationRecorderRequest' => [
      'base' => '<p>The input for the <a>StartConfigurationRecorder</a> action.</p>',
      'refs' => [],
    ],
    'StopConfigurationRecorderRequest' => [
      'base' => '<p><p>The input for the <a>StopConfigurationRecorder</a> action.</p></p>',
      'refs' => [],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'ConfigExportDeliveryInfo$lastErrorCode' => '<p>The error code from the last attempted delivery.</p>',
        'ConfigExportDeliveryInfo$lastErrorMessage' => '<p>The error message from the last attempted delivery.</p>',
        'ConfigStreamDeliveryInfo$lastErrorCode' => '<p>The error code from the last attempted delivery.</p>',
        'ConfigStreamDeliveryInfo$lastErrorMessage' => '<p>The error message from the last attempted delivery.</p>',
        'ConfigurationRecorder$roleARN' => '<p>Amazon Resource Name (ARN] of the IAM role used to describe the AWS resources associated with the account.</p>',
        'ConfigurationRecorderStatus$name' => '<p>The name of the configuration recorder.</p>',
        'ConfigurationRecorderStatus$lastErrorCode' => '<p>The error code indicating that the recording failed.</p>',
        'ConfigurationRecorderStatus$lastErrorMessage' => '<p>The message indicating that the recording failed due to an error.</p>',
        'DeliverConfigSnapshotResponse$configSnapshotId' => '<p>The ID of the snapshot that is being created.</p>',
        'DeliveryChannel$s3BucketName' => '<p>The name of the Amazon S3 bucket used to store configuration history for the delivery channel.</p>',
        'DeliveryChannel$s3KeyPrefix' => '<p>The prefix for the specified Amazon S3 bucket.</p>',
        'DeliveryChannel$snsTopicARN' => '<p>The Amazon Resource Name (ARN] of the IAM role used for accessing the Amazon S3 bucket and the Amazon SNS topic.</p>',
        'DeliveryChannelStatus$name' => '<p>The name of the delivery channel.</p>',
      ],
    ],
    'Tags' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$tags' => '<p>A mapping of key value tags associated with the resource.</p>',
      ],
    ],
    'ValidationException' => [
      'base' => '<p>The requested action is not valid.</p>',
      'refs' => [],
    ],
    'Value' => [
      'base' => NULL,
      'refs' => [
        'Tags$value' => NULL,
      ],
    ],
    'Version' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationItem$version' => '<p>The version number of the resource configuration.</p>',
      ],
    ],
  ],
];
