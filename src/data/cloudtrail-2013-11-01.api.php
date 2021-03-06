<?php return [
  'metadata' => [
    'apiVersion' => '2013-11-01',
    'endpointPrefix' => 'cloudtrail',
    'jsonVersion' => '1.1',
    'serviceAbbreviation' => 'CloudTrail',
    'serviceFullName' => 'AWS CloudTrail',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101',
    'protocol' => 'json',
  ],
  'operations' => [
    'CreateTrail' => [
      'name' => 'CreateTrail',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateTrailRequest',
      ],
      'output' => [
        'shape' => 'CreateTrailResponse',
      ],
      'errors' => [
        [
          'shape' => 'MaximumNumberOfTrailsExceededException',
          'error' => [
            'code' => 'MaximumNumberOfTrailsExceeded',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TrailAlreadyExistsException',
          'error' => [
            'code' => 'TrailAlreadyExists',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'S3BucketDoesNotExistException',
          'error' => [
            'code' => 'S3BucketDoesNotExist',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientS3BucketPolicyException',
          'error' => [
            'code' => 'InsufficientS3BucketPolicy',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientSnsTopicPolicyException',
          'error' => [
            'code' => 'InsufficientSnsTopicPolicy',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidS3BucketNameException',
          'error' => [
            'code' => 'InvalidS3BucketName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidS3PrefixException',
          'error' => [
            'code' => 'InvalidS3Prefix',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSnsTopicNameException',
          'error' => [
            'code' => 'InvalidSnsTopicName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidTrailNameException',
          'error' => [
            'code' => 'InvalidTrailName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCloudWatchLogsLogGroupArnException',
          'error' => [
            'code' => 'InvalidCloudWatchLogsLogGroupArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCloudWatchLogsRoleArnException',
          'error' => [
            'code' => 'InvalidCloudWatchLogsRoleArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CloudWatchLogsDeliveryUnavailableException',
          'error' => [
            'code' => 'CloudWatchLogsDeliveryUnavailable',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteTrail' => [
      'name' => 'DeleteTrail',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteTrailRequest',
      ],
      'output' => [
        'shape' => 'DeleteTrailResponse',
      ],
      'errors' => [
        [
          'shape' => 'TrailNotFoundException',
          'error' => [
            'code' => 'TrailNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidTrailNameException',
          'error' => [
            'code' => 'InvalidTrailName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeTrails' => [
      'name' => 'DescribeTrails',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTrailsRequest',
      ],
      'output' => [
        'shape' => 'DescribeTrailsResponse',
      ],
    ],
    'GetTrailStatus' => [
      'name' => 'GetTrailStatus',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetTrailStatusRequest',
      ],
      'output' => [
        'shape' => 'GetTrailStatusResponse',
      ],
      'errors' => [
        [
          'shape' => 'TrailNotFoundException',
          'error' => [
            'code' => 'TrailNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidTrailNameException',
          'error' => [
            'code' => 'InvalidTrailName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'StartLogging' => [
      'name' => 'StartLogging',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StartLoggingRequest',
      ],
      'output' => [
        'shape' => 'StartLoggingResponse',
      ],
      'errors' => [
        [
          'shape' => 'TrailNotFoundException',
          'error' => [
            'code' => 'TrailNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidTrailNameException',
          'error' => [
            'code' => 'InvalidTrailName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'StopLogging' => [
      'name' => 'StopLogging',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StopLoggingRequest',
      ],
      'output' => [
        'shape' => 'StopLoggingResponse',
      ],
      'errors' => [
        [
          'shape' => 'TrailNotFoundException',
          'error' => [
            'code' => 'TrailNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidTrailNameException',
          'error' => [
            'code' => 'InvalidTrailName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateTrail' => [
      'name' => 'UpdateTrail',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateTrailRequest',
      ],
      'output' => [
        'shape' => 'UpdateTrailResponse',
      ],
      'errors' => [
        [
          'shape' => 'S3BucketDoesNotExistException',
          'error' => [
            'code' => 'S3BucketDoesNotExist',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientS3BucketPolicyException',
          'error' => [
            'code' => 'InsufficientS3BucketPolicy',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientSnsTopicPolicyException',
          'error' => [
            'code' => 'InsufficientSnsTopicPolicy',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TrailNotFoundException',
          'error' => [
            'code' => 'TrailNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidS3BucketNameException',
          'error' => [
            'code' => 'InvalidS3BucketName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidS3PrefixException',
          'error' => [
            'code' => 'InvalidS3Prefix',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSnsTopicNameException',
          'error' => [
            'code' => 'InvalidSnsTopicName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidTrailNameException',
          'error' => [
            'code' => 'InvalidTrailName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCloudWatchLogsLogGroupArnException',
          'error' => [
            'code' => 'InvalidCloudWatchLogsLogGroupArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCloudWatchLogsRoleArnException',
          'error' => [
            'code' => 'InvalidCloudWatchLogsRoleArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CloudWatchLogsDeliveryUnavailableException',
          'error' => [
            'code' => 'CloudWatchLogsDeliveryUnavailable',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'Boolean' => [
      'type' => 'boolean',
    ],
    'CloudWatchLogsDeliveryUnavailableException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CloudWatchLogsDeliveryUnavailable',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CreateTrailRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
        'S3BucketName',
      ],
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'S3BucketName' => [
          'shape' => 'String',
        ],
        'S3KeyPrefix' => [
          'shape' => 'String',
        ],
        'SnsTopicName' => [
          'shape' => 'String',
        ],
        'IncludeGlobalServiceEvents' => [
          'shape' => 'Boolean',
        ],
        'CloudWatchLogsLogGroupArn' => [
          'shape' => 'String',
        ],
        'CloudWatchLogsRoleArn' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateTrailResponse' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'S3BucketName' => [
          'shape' => 'String',
        ],
        'S3KeyPrefix' => [
          'shape' => 'String',
        ],
        'SnsTopicName' => [
          'shape' => 'String',
        ],
        'IncludeGlobalServiceEvents' => [
          'shape' => 'Boolean',
        ],
        'CloudWatchLogsLogGroupArn' => [
          'shape' => 'String',
        ],
        'CloudWatchLogsRoleArn' => [
          'shape' => 'String',
        ],
      ],
    ],
    'Date' => [
      'type' => 'timestamp',
    ],
    'DeleteTrailRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
      ],
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteTrailResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'DescribeTrailsRequest' => [
      'type' => 'structure',
      'members' => [
        'trailNameList' => [
          'shape' => 'TrailNameList',
        ],
      ],
    ],
    'DescribeTrailsResponse' => [
      'type' => 'structure',
      'members' => [
        'trailList' => [
          'shape' => 'TrailList',
        ],
      ],
    ],
    'GetTrailStatusRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
      ],
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
      ],
    ],
    'GetTrailStatusResponse' => [
      'type' => 'structure',
      'members' => [
        'IsLogging' => [
          'shape' => 'Boolean',
        ],
        'LatestDeliveryError' => [
          'shape' => 'String',
        ],
        'LatestNotificationError' => [
          'shape' => 'String',
        ],
        'LatestDeliveryTime' => [
          'shape' => 'Date',
        ],
        'LatestNotificationTime' => [
          'shape' => 'Date',
        ],
        'StartLoggingTime' => [
          'shape' => 'Date',
        ],
        'StopLoggingTime' => [
          'shape' => 'Date',
        ],
        'LatestCloudWatchLogsDeliveryError' => [
          'shape' => 'String',
        ],
        'LatestCloudWatchLogsDeliveryTime' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'InsufficientS3BucketPolicyException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InsufficientS3BucketPolicy',
        'httpStatusCode' => 403,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InsufficientSnsTopicPolicyException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InsufficientSnsTopicPolicy',
        'httpStatusCode' => 403,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidCloudWatchLogsLogGroupArnException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidCloudWatchLogsLogGroupArn',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidCloudWatchLogsRoleArnException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidCloudWatchLogsRoleArn',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidS3BucketNameException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidS3BucketName',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidS3PrefixException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidS3Prefix',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidSnsTopicNameException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidSnsTopicName',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidTrailNameException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidTrailName',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'MaximumNumberOfTrailsExceededException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'MaximumNumberOfTrailsExceeded',
        'httpStatusCode' => 403,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'S3BucketDoesNotExistException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'S3BucketDoesNotExist',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'StartLoggingRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
      ],
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
      ],
    ],
    'StartLoggingResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'StopLoggingRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
      ],
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
      ],
    ],
    'StopLoggingResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'String' => [
      'type' => 'string',
    ],
    'Trail' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'S3BucketName' => [
          'shape' => 'String',
        ],
        'S3KeyPrefix' => [
          'shape' => 'String',
        ],
        'SnsTopicName' => [
          'shape' => 'String',
        ],
        'IncludeGlobalServiceEvents' => [
          'shape' => 'Boolean',
        ],
        'CloudWatchLogsLogGroupArn' => [
          'shape' => 'String',
        ],
        'CloudWatchLogsRoleArn' => [
          'shape' => 'String',
        ],
      ],
    ],
    'TrailAlreadyExistsException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'TrailAlreadyExists',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'TrailList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Trail',
      ],
    ],
    'TrailNameList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'TrailNotFoundException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'TrailNotFound',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'UpdateTrailRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
      ],
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'S3BucketName' => [
          'shape' => 'String',
        ],
        'S3KeyPrefix' => [
          'shape' => 'String',
        ],
        'SnsTopicName' => [
          'shape' => 'String',
        ],
        'IncludeGlobalServiceEvents' => [
          'shape' => 'Boolean',
        ],
        'CloudWatchLogsLogGroupArn' => [
          'shape' => 'String',
        ],
        'CloudWatchLogsRoleArn' => [
          'shape' => 'String',
        ],
      ],
    ],
    'UpdateTrailResponse' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'S3BucketName' => [
          'shape' => 'String',
        ],
        'S3KeyPrefix' => [
          'shape' => 'String',
        ],
        'SnsTopicName' => [
          'shape' => 'String',
        ],
        'IncludeGlobalServiceEvents' => [
          'shape' => 'Boolean',
        ],
        'CloudWatchLogsLogGroupArn' => [
          'shape' => 'String',
        ],
        'CloudWatchLogsRoleArn' => [
          'shape' => 'String',
        ],
      ],
    ],
  ],
];
