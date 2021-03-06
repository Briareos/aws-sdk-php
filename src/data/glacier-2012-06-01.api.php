<?php return [
  'metadata' => [
    'apiVersion' => '2012-06-01',
    'checksumFormat' => 'sha256',
    'endpointPrefix' => 'glacier',
    'serviceFullName' => 'Amazon Glacier',
    'signatureVersion' => 'v4',
    'protocol' => 'rest-json',
  ],
  'operations' => [
    'AbortMultipartUpload' => [
      'name' => 'AbortMultipartUpload',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'AbortMultipartUploadInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CompleteMultipartUpload' => [
      'name' => 'CompleteMultipartUpload',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CompleteMultipartUploadInput',
      ],
      'output' => [
        'shape' => 'ArchiveCreationOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateVault' => [
      'name' => 'CreateVault',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/{accountId}/vaults/{vaultName}',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreateVaultInput',
      ],
      'output' => [
        'shape' => 'CreateVaultOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteArchive' => [
      'name' => 'DeleteArchive',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/{accountId}/vaults/{vaultName}/archives/{archiveId}',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'DeleteArchiveInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteVault' => [
      'name' => 'DeleteVault',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/{accountId}/vaults/{vaultName}',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'DeleteVaultInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteVaultNotifications' => [
      'name' => 'DeleteVaultNotifications',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/{accountId}/vaults/{vaultName}/notification-configuration',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'DeleteVaultNotificationsInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeJob' => [
      'name' => 'DescribeJob',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/{accountId}/vaults/{vaultName}/jobs/{jobId}',
      ],
      'input' => [
        'shape' => 'DescribeJobInput',
      ],
      'output' => [
        'shape' => 'GlacierJobDescription',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeVault' => [
      'name' => 'DescribeVault',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/{accountId}/vaults/{vaultName}',
      ],
      'input' => [
        'shape' => 'DescribeVaultInput',
      ],
      'output' => [
        'shape' => 'DescribeVaultOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetDataRetrievalPolicy' => [
      'name' => 'GetDataRetrievalPolicy',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/{accountId}/policies/data-retrieval',
      ],
      'input' => [
        'shape' => 'GetDataRetrievalPolicyInput',
      ],
      'output' => [
        'shape' => 'GetDataRetrievalPolicyOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetJobOutput' => [
      'name' => 'GetJobOutput',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/{accountId}/vaults/{vaultName}/jobs/{jobId}/output',
      ],
      'input' => [
        'shape' => 'GetJobOutputInput',
      ],
      'output' => [
        'shape' => 'GetJobOutputOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetVaultNotifications' => [
      'name' => 'GetVaultNotifications',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/{accountId}/vaults/{vaultName}/notification-configuration',
      ],
      'input' => [
        'shape' => 'GetVaultNotificationsInput',
      ],
      'output' => [
        'shape' => 'GetVaultNotificationsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'InitiateJob' => [
      'name' => 'InitiateJob',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/{accountId}/vaults/{vaultName}/jobs',
        'responseCode' => 202,
      ],
      'input' => [
        'shape' => 'InitiateJobInput',
      ],
      'output' => [
        'shape' => 'InitiateJobOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PolicyEnforcedException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'InitiateMultipartUpload' => [
      'name' => 'InitiateMultipartUpload',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'InitiateMultipartUploadInput',
      ],
      'output' => [
        'shape' => 'InitiateMultipartUploadOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListJobs' => [
      'name' => 'ListJobs',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/{accountId}/vaults/{vaultName}/jobs',
      ],
      'input' => [
        'shape' => 'ListJobsInput',
      ],
      'output' => [
        'shape' => 'ListJobsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListMultipartUploads' => [
      'name' => 'ListMultipartUploads',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads',
      ],
      'input' => [
        'shape' => 'ListMultipartUploadsInput',
      ],
      'output' => [
        'shape' => 'ListMultipartUploadsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListParts' => [
      'name' => 'ListParts',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
      ],
      'input' => [
        'shape' => 'ListPartsInput',
      ],
      'output' => [
        'shape' => 'ListPartsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListVaults' => [
      'name' => 'ListVaults',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/{accountId}/vaults',
      ],
      'input' => [
        'shape' => 'ListVaultsInput',
      ],
      'output' => [
        'shape' => 'ListVaultsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'SetDataRetrievalPolicy' => [
      'name' => 'SetDataRetrievalPolicy',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/{accountId}/policies/data-retrieval',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'SetDataRetrievalPolicyInput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'SetVaultNotifications' => [
      'name' => 'SetVaultNotifications',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/{accountId}/vaults/{vaultName}/notification-configuration',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'SetVaultNotificationsInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UploadArchive' => [
      'name' => 'UploadArchive',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/{accountId}/vaults/{vaultName}/archives',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'UploadArchiveInput',
      ],
      'output' => [
        'shape' => 'ArchiveCreationOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'RequestTimeoutException',
          'error' => [
            'httpStatusCode' => 408,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UploadMultipartPart' => [
      'name' => 'UploadMultipartPart',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'UploadMultipartPartInput',
      ],
      'output' => [
        'shape' => 'UploadMultipartPartOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'RequestTimeoutException',
          'error' => [
            'httpStatusCode' => 408,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'AbortMultipartUploadInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'uploadId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'uploadId',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
        'uploadId',
      ],
    ],
    'ActionCode' => [
      'type' => 'string',
      'enum' => [
        'ArchiveRetrieval',
        'InventoryRetrieval',
      ],
    ],
    'ArchiveCreationOutput' => [
      'type' => 'structure',
      'members' => [
        'location' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Location',
        ],
        'checksum' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-sha256-tree-hash',
        ],
        'archiveId' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-archive-id',
        ],
      ],
    ],
    'CompleteMultipartUploadInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'uploadId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'uploadId',
        ],
        'archiveSize' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-archive-size',
        ],
        'checksum' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-sha256-tree-hash',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
        'uploadId',
      ],
    ],
    'CreateVaultInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
    ],
    'CreateVaultOutput' => [
      'type' => 'structure',
      'members' => [
        'location' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Location',
        ],
      ],
    ],
    'DataRetrievalPolicy' => [
      'type' => 'structure',
      'members' => [
        'Rules' => [
          'shape' => 'DataRetrievalRulesList',
        ],
      ],
    ],
    'DataRetrievalRule' => [
      'type' => 'structure',
      'members' => [
        'Strategy' => [
          'shape' => 'string',
        ],
        'BytesPerHour' => [
          'shape' => 'NullableLong',
        ],
      ],
    ],
    'DataRetrievalRulesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DataRetrievalRule',
      ],
    ],
    'DateTime' => [
      'type' => 'string',
    ],
    'DeleteArchiveInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'archiveId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'archiveId',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
        'archiveId',
      ],
    ],
    'DeleteVaultInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
    ],
    'DeleteVaultNotificationsInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
    ],
    'DescribeJobInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'jobId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'jobId',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
        'jobId',
      ],
    ],
    'DescribeVaultInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
    ],
    'DescribeVaultOutput' => [
      'type' => 'structure',
      'members' => [
        'VaultARN' => [
          'shape' => 'string',
        ],
        'VaultName' => [
          'shape' => 'string',
        ],
        'CreationDate' => [
          'shape' => 'string',
        ],
        'LastInventoryDate' => [
          'shape' => 'string',
        ],
        'NumberOfArchives' => [
          'shape' => 'long',
        ],
        'SizeInBytes' => [
          'shape' => 'long',
        ],
      ],
    ],
    'GetDataRetrievalPolicyInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
      ],
      'required' => [
        'accountId',
      ],
    ],
    'GetDataRetrievalPolicyOutput' => [
      'type' => 'structure',
      'members' => [
        'Policy' => [
          'shape' => 'DataRetrievalPolicy',
        ],
      ],
    ],
    'GetJobOutputInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'jobId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'jobId',
        ],
        'range' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Range',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
        'jobId',
      ],
    ],
    'GetJobOutputOutput' => [
      'type' => 'structure',
      'members' => [
        'body' => [
          'shape' => 'Stream',
        ],
        'checksum' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-sha256-tree-hash',
        ],
        'status' => [
          'shape' => 'httpstatus',
          'location' => 'statusCode',
        ],
        'contentRange' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Content-Range',
        ],
        'acceptRanges' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Accept-Ranges',
        ],
        'contentType' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Content-Type',
        ],
        'archiveDescription' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-archive-description',
        ],
      ],
      'payload' => 'body',
    ],
    'GetVaultNotificationsInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
    ],
    'GetVaultNotificationsOutput' => [
      'type' => 'structure',
      'members' => [
        'vaultNotificationConfig' => [
          'shape' => 'VaultNotificationConfig',
        ],
      ],
      'payload' => 'vaultNotificationConfig',
    ],
    'GlacierJobDescription' => [
      'type' => 'structure',
      'members' => [
        'JobId' => [
          'shape' => 'string',
        ],
        'JobDescription' => [
          'shape' => 'string',
        ],
        'Action' => [
          'shape' => 'ActionCode',
        ],
        'ArchiveId' => [
          'shape' => 'string',
        ],
        'VaultARN' => [
          'shape' => 'string',
        ],
        'CreationDate' => [
          'shape' => 'string',
        ],
        'Completed' => [
          'shape' => 'boolean',
        ],
        'StatusCode' => [
          'shape' => 'StatusCode',
        ],
        'StatusMessage' => [
          'shape' => 'string',
        ],
        'ArchiveSizeInBytes' => [
          'shape' => 'Size',
        ],
        'InventorySizeInBytes' => [
          'shape' => 'Size',
        ],
        'SNSTopic' => [
          'shape' => 'string',
        ],
        'CompletionDate' => [
          'shape' => 'string',
        ],
        'SHA256TreeHash' => [
          'shape' => 'string',
        ],
        'ArchiveSHA256TreeHash' => [
          'shape' => 'string',
        ],
        'RetrievalByteRange' => [
          'shape' => 'string',
        ],
        'InventoryRetrievalParameters' => [
          'shape' => 'InventoryRetrievalJobDescription',
        ],
      ],
    ],
    'InitiateJobInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'jobParameters' => [
          'shape' => 'JobParameters',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
      'payload' => 'jobParameters',
    ],
    'InitiateJobOutput' => [
      'type' => 'structure',
      'members' => [
        'location' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Location',
        ],
        'jobId' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-job-id',
        ],
      ],
    ],
    'InitiateMultipartUploadInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'archiveDescription' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-archive-description',
        ],
        'partSize' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-part-size',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
    ],
    'InitiateMultipartUploadOutput' => [
      'type' => 'structure',
      'members' => [
        'location' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Location',
        ],
        'uploadId' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-multipart-upload-id',
        ],
      ],
    ],
    'InvalidParameterValueException' => [
      'type' => 'structure',
      'members' => [
        'type' => [
          'shape' => 'string',
        ],
        'code' => [
          'shape' => 'string',
        ],
        'message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InventoryRetrievalJobDescription' => [
      'type' => 'structure',
      'members' => [
        'Format' => [
          'shape' => 'string',
        ],
        'StartDate' => [
          'shape' => 'DateTime',
        ],
        'EndDate' => [
          'shape' => 'DateTime',
        ],
        'Limit' => [
          'shape' => 'string',
        ],
        'Marker' => [
          'shape' => 'string',
        ],
      ],
    ],
    'InventoryRetrievalJobInput' => [
      'type' => 'structure',
      'members' => [
        'StartDate' => [
          'shape' => 'string',
        ],
        'EndDate' => [
          'shape' => 'string',
        ],
        'Limit' => [
          'shape' => 'string',
        ],
        'Marker' => [
          'shape' => 'string',
        ],
      ],
    ],
    'JobList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'GlacierJobDescription',
      ],
    ],
    'JobParameters' => [
      'type' => 'structure',
      'members' => [
        'Format' => [
          'shape' => 'string',
        ],
        'Type' => [
          'shape' => 'string',
        ],
        'ArchiveId' => [
          'shape' => 'string',
        ],
        'Description' => [
          'shape' => 'string',
        ],
        'SNSTopic' => [
          'shape' => 'string',
        ],
        'RetrievalByteRange' => [
          'shape' => 'string',
        ],
        'InventoryRetrievalParameters' => [
          'shape' => 'InventoryRetrievalJobInput',
        ],
      ],
    ],
    'LimitExceededException' => [
      'type' => 'structure',
      'members' => [
        'type' => [
          'shape' => 'string',
        ],
        'code' => [
          'shape' => 'string',
        ],
        'message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'ListJobsInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'limit' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'limit',
        ],
        'marker' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'marker',
        ],
        'statuscode' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'statuscode',
        ],
        'completed' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'completed',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
    ],
    'ListJobsOutput' => [
      'type' => 'structure',
      'members' => [
        'JobList' => [
          'shape' => 'JobList',
        ],
        'Marker' => [
          'shape' => 'string',
        ],
      ],
    ],
    'ListMultipartUploadsInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'marker' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'marker',
        ],
        'limit' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'limit',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
    ],
    'ListMultipartUploadsOutput' => [
      'type' => 'structure',
      'members' => [
        'UploadsList' => [
          'shape' => 'UploadsList',
        ],
        'Marker' => [
          'shape' => 'string',
        ],
      ],
    ],
    'ListPartsInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'uploadId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'uploadId',
        ],
        'marker' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'marker',
        ],
        'limit' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'limit',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
        'uploadId',
      ],
    ],
    'ListPartsOutput' => [
      'type' => 'structure',
      'members' => [
        'MultipartUploadId' => [
          'shape' => 'string',
        ],
        'VaultARN' => [
          'shape' => 'string',
        ],
        'ArchiveDescription' => [
          'shape' => 'string',
        ],
        'PartSizeInBytes' => [
          'shape' => 'long',
        ],
        'CreationDate' => [
          'shape' => 'string',
        ],
        'Parts' => [
          'shape' => 'PartList',
        ],
        'Marker' => [
          'shape' => 'string',
        ],
      ],
    ],
    'ListVaultsInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'marker' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'marker',
        ],
        'limit' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'limit',
        ],
      ],
      'required' => [
        'accountId',
      ],
    ],
    'ListVaultsOutput' => [
      'type' => 'structure',
      'members' => [
        'VaultList' => [
          'shape' => 'VaultList',
        ],
        'Marker' => [
          'shape' => 'string',
        ],
      ],
    ],
    'MissingParameterValueException' => [
      'type' => 'structure',
      'members' => [
        'type' => [
          'shape' => 'string',
        ],
        'code' => [
          'shape' => 'string',
        ],
        'message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'NotificationEventList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'string',
      ],
    ],
    'NullableLong' => [
      'type' => 'long',
    ],
    'PartList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PartListElement',
      ],
    ],
    'PartListElement' => [
      'type' => 'structure',
      'members' => [
        'RangeInBytes' => [
          'shape' => 'string',
        ],
        'SHA256TreeHash' => [
          'shape' => 'string',
        ],
      ],
    ],
    'PolicyEnforcedException' => [
      'type' => 'structure',
      'members' => [
        'type' => [
          'shape' => 'string',
        ],
        'code' => [
          'shape' => 'string',
        ],
        'message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'RequestTimeoutException' => [
      'type' => 'structure',
      'members' => [
        'type' => [
          'shape' => 'string',
        ],
        'code' => [
          'shape' => 'string',
        ],
        'message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 408,
      ],
      'exception' => true,
    ],
    'ResourceNotFoundException' => [
      'type' => 'structure',
      'members' => [
        'type' => [
          'shape' => 'string',
        ],
        'code' => [
          'shape' => 'string',
        ],
        'message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'ServiceUnavailableException' => [
      'type' => 'structure',
      'members' => [
        'type' => [
          'shape' => 'string',
        ],
        'code' => [
          'shape' => 'string',
        ],
        'message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 500,
      ],
      'exception' => true,
    ],
    'SetDataRetrievalPolicyInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'Policy' => [
          'shape' => 'DataRetrievalPolicy',
        ],
      ],
      'required' => [
        'accountId',
      ],
    ],
    'SetVaultNotificationsInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'vaultNotificationConfig' => [
          'shape' => 'VaultNotificationConfig',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
      ],
      'payload' => 'vaultNotificationConfig',
    ],
    'Size' => [
      'type' => 'long',
    ],
    'StatusCode' => [
      'type' => 'string',
      'enum' => [
        'InProgress',
        'Succeeded',
        'Failed',
      ],
    ],
    'Stream' => [
      'type' => 'blob',
      'streaming' => true,
    ],
    'UploadArchiveInput' => [
      'type' => 'structure',
      'members' => [
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'archiveDescription' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-archive-description',
        ],
        'checksum' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-sha256-tree-hash',
        ],
        'body' => [
          'shape' => 'Stream',
        ],
      ],
      'required' => [
        'vaultName',
        'accountId',
      ],
      'payload' => 'body',
    ],
    'UploadListElement' => [
      'type' => 'structure',
      'members' => [
        'MultipartUploadId' => [
          'shape' => 'string',
        ],
        'VaultARN' => [
          'shape' => 'string',
        ],
        'ArchiveDescription' => [
          'shape' => 'string',
        ],
        'PartSizeInBytes' => [
          'shape' => 'long',
        ],
        'CreationDate' => [
          'shape' => 'string',
        ],
      ],
    ],
    'UploadMultipartPartInput' => [
      'type' => 'structure',
      'members' => [
        'accountId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'accountId',
        ],
        'vaultName' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'vaultName',
        ],
        'uploadId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'uploadId',
        ],
        'checksum' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-sha256-tree-hash',
        ],
        'range' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Content-Range',
        ],
        'body' => [
          'shape' => 'Stream',
        ],
      ],
      'required' => [
        'accountId',
        'vaultName',
        'uploadId',
      ],
      'payload' => 'body',
    ],
    'UploadMultipartPartOutput' => [
      'type' => 'structure',
      'members' => [
        'checksum' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'x-amz-sha256-tree-hash',
        ],
      ],
    ],
    'UploadsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'UploadListElement',
      ],
    ],
    'VaultList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DescribeVaultOutput',
      ],
    ],
    'VaultNotificationConfig' => [
      'type' => 'structure',
      'members' => [
        'SNSTopic' => [
          'shape' => 'string',
        ],
        'Events' => [
          'shape' => 'NotificationEventList',
        ],
      ],
    ],
    'boolean' => [
      'type' => 'boolean',
    ],
    'httpstatus' => [
      'type' => 'integer',
    ],
    'long' => [
      'type' => 'long',
    ],
    'string' => [
      'type' => 'string',
    ],
  ],
];
