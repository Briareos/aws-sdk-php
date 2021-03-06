<?php return [
  'metadata' => [
    'apiVersion' => '2014-11-01',
    'endpointPrefix' => 'kms',
    'jsonVersion' => '1.1',
    'serviceAbbreviation' => 'KMS',
    'serviceFullName' => 'AWS Key Management Service',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'TrentService',
    'protocol' => 'json',
  ],
  'operations' => [
    'CreateAlias' => [
      'name' => 'CreateAlias',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateAliasRequest',
      ],
      'errors' => [
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'AlreadyExistsException',
          'error' => [
            'code' => 'AlreadyExists',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidAliasNameException',
          'error' => [
            'code' => 'InvalidAliasName',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateGrant' => [
      'name' => 'CreateGrant',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateGrantRequest',
      ],
      'output' => [
        'shape' => 'CreateGrantResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DisabledException',
          'error' => [
            'code' => 'Disabled',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidGrantTokenException',
          'error' => [
            'code' => 'InvalidGrantToken',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateKey' => [
      'name' => 'CreateKey',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateKeyRequest',
      ],
      'output' => [
        'shape' => 'CreateKeyResponse',
      ],
      'errors' => [
        [
          'shape' => 'MalformedPolicyDocumentException',
          'error' => [
            'code' => 'MalformedPolicyDocument',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'UnsupportedOperationException',
          'error' => [
            'code' => 'UnsupportedOperation',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'Decrypt' => [
      'name' => 'Decrypt',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DecryptRequest',
      ],
      'output' => [
        'shape' => 'DecryptResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DisabledException',
          'error' => [
            'code' => 'Disabled',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCiphertextException',
          'error' => [
            'code' => 'InvalidCiphertext',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KeyUnavailableException',
          'error' => [
            'code' => 'KeyUnavailable',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidGrantTokenException',
          'error' => [
            'code' => 'InvalidGrantToken',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteAlias' => [
      'name' => 'DeleteAlias',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteAliasRequest',
      ],
      'errors' => [
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeKey' => [
      'name' => 'DescribeKey',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeKeyRequest',
      ],
      'output' => [
        'shape' => 'DescribeKeyResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DisableKey' => [
      'name' => 'DisableKey',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DisableKeyRequest',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DisableKeyRotation' => [
      'name' => 'DisableKeyRotation',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DisableKeyRotationRequest',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'EnableKey' => [
      'name' => 'EnableKey',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'EnableKeyRequest',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'EnableKeyRotation' => [
      'name' => 'EnableKeyRotation',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'EnableKeyRotationRequest',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'Encrypt' => [
      'name' => 'Encrypt',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'EncryptRequest',
      ],
      'output' => [
        'shape' => 'EncryptResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DisabledException',
          'error' => [
            'code' => 'Disabled',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KeyUnavailableException',
          'error' => [
            'code' => 'KeyUnavailable',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidKeyUsageException',
          'error' => [
            'code' => 'InvalidKeyUsage',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidGrantTokenException',
          'error' => [
            'code' => 'InvalidGrantToken',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GenerateDataKey' => [
      'name' => 'GenerateDataKey',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GenerateDataKeyRequest',
      ],
      'output' => [
        'shape' => 'GenerateDataKeyResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DisabledException',
          'error' => [
            'code' => 'Disabled',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KeyUnavailableException',
          'error' => [
            'code' => 'KeyUnavailable',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidKeyUsageException',
          'error' => [
            'code' => 'InvalidKeyUsage',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidGrantTokenException',
          'error' => [
            'code' => 'InvalidGrantToken',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GenerateDataKeyWithoutPlaintext' => [
      'name' => 'GenerateDataKeyWithoutPlaintext',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GenerateDataKeyWithoutPlaintextRequest',
      ],
      'output' => [
        'shape' => 'GenerateDataKeyWithoutPlaintextResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DisabledException',
          'error' => [
            'code' => 'Disabled',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KeyUnavailableException',
          'error' => [
            'code' => 'KeyUnavailable',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidKeyUsageException',
          'error' => [
            'code' => 'InvalidKeyUsage',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidGrantTokenException',
          'error' => [
            'code' => 'InvalidGrantToken',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GenerateRandom' => [
      'name' => 'GenerateRandom',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GenerateRandomRequest',
      ],
      'output' => [
        'shape' => 'GenerateRandomResponse',
      ],
      'errors' => [
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetKeyPolicy' => [
      'name' => 'GetKeyPolicy',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetKeyPolicyRequest',
      ],
      'output' => [
        'shape' => 'GetKeyPolicyResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetKeyRotationStatus' => [
      'name' => 'GetKeyRotationStatus',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetKeyRotationStatusRequest',
      ],
      'output' => [
        'shape' => 'GetKeyRotationStatusResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListAliases' => [
      'name' => 'ListAliases',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListAliasesRequest',
      ],
      'output' => [
        'shape' => 'ListAliasesResponse',
      ],
      'errors' => [
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListGrants' => [
      'name' => 'ListGrants',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListGrantsRequest',
      ],
      'output' => [
        'shape' => 'ListGrantsResponse',
      ],
      'errors' => [
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidMarkerException',
          'error' => [
            'code' => 'InvalidMarker',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListKeyPolicies' => [
      'name' => 'ListKeyPolicies',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListKeyPoliciesRequest',
      ],
      'output' => [
        'shape' => 'ListKeyPoliciesResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListKeys' => [
      'name' => 'ListKeys',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListKeysRequest',
      ],
      'output' => [
        'shape' => 'ListKeysResponse',
      ],
      'errors' => [
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'PutKeyPolicy' => [
      'name' => 'PutKeyPolicy',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PutKeyPolicyRequest',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MalformedPolicyDocumentException',
          'error' => [
            'code' => 'MalformedPolicyDocument',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'UnsupportedOperationException',
          'error' => [
            'code' => 'UnsupportedOperation',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ReEncrypt' => [
      'name' => 'ReEncrypt',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ReEncryptRequest',
      ],
      'output' => [
        'shape' => 'ReEncryptResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DisabledException',
          'error' => [
            'code' => 'Disabled',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCiphertextException',
          'error' => [
            'code' => 'InvalidCiphertext',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KeyUnavailableException',
          'error' => [
            'code' => 'KeyUnavailable',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidKeyUsageException',
          'error' => [
            'code' => 'InvalidKeyUsage',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidGrantTokenException',
          'error' => [
            'code' => 'InvalidGrantToken',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'RetireGrant' => [
      'name' => 'RetireGrant',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RetireGrantRequest',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGrantTokenException',
          'error' => [
            'code' => 'InvalidGrantToken',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'RevokeGrant' => [
      'name' => 'RevokeGrant',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RevokeGrantRequest',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateKeyDescription' => [
      'name' => 'UpdateKeyDescription',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateKeyDescriptionRequest',
      ],
      'errors' => [
        [
          'shape' => 'NotFoundException',
          'error' => [
            'code' => 'NotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArnException',
          'error' => [
            'code' => 'InvalidArn',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DependencyTimeoutException',
          'error' => [
            'code' => 'DependencyTimeout',
            'httpStatusCode' => 503,
          ],
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'KMSInternalException',
          'error' => [
            'code' => 'KMSInternal',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'AWSAccountIdType' => [
      'type' => 'string',
    ],
    'AliasList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AliasListEntry',
      ],
    ],
    'AliasListEntry' => [
      'type' => 'structure',
      'members' => [
        'AliasName' => [
          'shape' => 'AliasNameType',
        ],
        'AliasArn' => [
          'shape' => 'ArnType',
        ],
        'TargetKeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'AliasNameType' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
      'pattern' => '^[a-zA-Z0-9:/_-]+$',
    ],
    'AlreadyExistsException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'AlreadyExists',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ArnType' => [
      'type' => 'string',
      'min' => 20,
      'max' => 2048,
    ],
    'BooleanType' => [
      'type' => 'boolean',
    ],
    'CiphertextType' => [
      'type' => 'blob',
      'min' => 1,
      'max' => 6144,
    ],
    'CreateAliasRequest' => [
      'type' => 'structure',
      'required' => [
        'AliasName',
        'TargetKeyId',
      ],
      'members' => [
        'AliasName' => [
          'shape' => 'AliasNameType',
        ],
        'TargetKeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'CreateGrantRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
        'GranteePrincipal',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'GranteePrincipal' => [
          'shape' => 'PrincipalIdType',
        ],
        'RetiringPrincipal' => [
          'shape' => 'PrincipalIdType',
        ],
        'Operations' => [
          'shape' => 'GrantOperationList',
        ],
        'Constraints' => [
          'shape' => 'GrantConstraints',
        ],
        'GrantTokens' => [
          'shape' => 'GrantTokenList',
        ],
      ],
    ],
    'CreateGrantResponse' => [
      'type' => 'structure',
      'members' => [
        'GrantToken' => [
          'shape' => 'GrantTokenType',
        ],
        'GrantId' => [
          'shape' => 'GrantIdType',
        ],
      ],
    ],
    'CreateKeyRequest' => [
      'type' => 'structure',
      'members' => [
        'Policy' => [
          'shape' => 'PolicyType',
        ],
        'Description' => [
          'shape' => 'DescriptionType',
        ],
        'KeyUsage' => [
          'shape' => 'KeyUsageType',
        ],
      ],
    ],
    'CreateKeyResponse' => [
      'type' => 'structure',
      'members' => [
        'KeyMetadata' => [
          'shape' => 'KeyMetadata',
        ],
      ],
    ],
    'DataKeySpec' => [
      'type' => 'string',
      'enum' => [
        'AES_256',
        'AES_128',
      ],
    ],
    'DateType' => [
      'type' => 'timestamp',
    ],
    'DecryptRequest' => [
      'type' => 'structure',
      'required' => [
        'CiphertextBlob',
      ],
      'members' => [
        'CiphertextBlob' => [
          'shape' => 'CiphertextType',
        ],
        'EncryptionContext' => [
          'shape' => 'EncryptionContextType',
        ],
        'GrantTokens' => [
          'shape' => 'GrantTokenList',
        ],
      ],
    ],
    'DecryptResponse' => [
      'type' => 'structure',
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'Plaintext' => [
          'shape' => 'PlaintextType',
        ],
      ],
    ],
    'DeleteAliasRequest' => [
      'type' => 'structure',
      'required' => [
        'AliasName',
      ],
      'members' => [
        'AliasName' => [
          'shape' => 'AliasNameType',
        ],
      ],
    ],
    'DependencyTimeoutException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'DependencyTimeout',
        'httpStatusCode' => 503,
      ],
      'exception' => true,
      'fault' => true,
    ],
    'DescribeKeyRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'DescribeKeyResponse' => [
      'type' => 'structure',
      'members' => [
        'KeyMetadata' => [
          'shape' => 'KeyMetadata',
        ],
      ],
    ],
    'DescriptionType' => [
      'type' => 'string',
      'min' => 0,
      'max' => 8192,
    ],
    'DisableKeyRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'DisableKeyRotationRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'DisabledException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'Disabled',
        'httpStatusCode' => 409,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'EnableKeyRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'EnableKeyRotationRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'EncryptRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
        'Plaintext',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'Plaintext' => [
          'shape' => 'PlaintextType',
        ],
        'EncryptionContext' => [
          'shape' => 'EncryptionContextType',
        ],
        'GrantTokens' => [
          'shape' => 'GrantTokenList',
        ],
      ],
    ],
    'EncryptResponse' => [
      'type' => 'structure',
      'members' => [
        'CiphertextBlob' => [
          'shape' => 'CiphertextType',
        ],
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'EncryptionContextKey' => [
      'type' => 'string',
    ],
    'EncryptionContextType' => [
      'type' => 'map',
      'key' => [
        'shape' => 'EncryptionContextKey',
      ],
      'value' => [
        'shape' => 'EncryptionContextValue',
      ],
    ],
    'EncryptionContextValue' => [
      'type' => 'string',
    ],
    'ErrorMessageType' => [
      'type' => 'string',
    ],
    'GenerateDataKeyRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'EncryptionContext' => [
          'shape' => 'EncryptionContextType',
        ],
        'NumberOfBytes' => [
          'shape' => 'NumberOfBytesType',
        ],
        'KeySpec' => [
          'shape' => 'DataKeySpec',
        ],
        'GrantTokens' => [
          'shape' => 'GrantTokenList',
        ],
      ],
    ],
    'GenerateDataKeyResponse' => [
      'type' => 'structure',
      'members' => [
        'CiphertextBlob' => [
          'shape' => 'CiphertextType',
        ],
        'Plaintext' => [
          'shape' => 'PlaintextType',
        ],
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'GenerateDataKeyWithoutPlaintextRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'EncryptionContext' => [
          'shape' => 'EncryptionContextType',
        ],
        'KeySpec' => [
          'shape' => 'DataKeySpec',
        ],
        'NumberOfBytes' => [
          'shape' => 'NumberOfBytesType',
        ],
        'GrantTokens' => [
          'shape' => 'GrantTokenList',
        ],
      ],
    ],
    'GenerateDataKeyWithoutPlaintextResponse' => [
      'type' => 'structure',
      'members' => [
        'CiphertextBlob' => [
          'shape' => 'CiphertextType',
        ],
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'GenerateRandomRequest' => [
      'type' => 'structure',
      'members' => [
        'NumberOfBytes' => [
          'shape' => 'NumberOfBytesType',
        ],
      ],
    ],
    'GenerateRandomResponse' => [
      'type' => 'structure',
      'members' => [
        'Plaintext' => [
          'shape' => 'PlaintextType',
        ],
      ],
    ],
    'GetKeyPolicyRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
        'PolicyName',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'PolicyName' => [
          'shape' => 'PolicyNameType',
        ],
      ],
    ],
    'GetKeyPolicyResponse' => [
      'type' => 'structure',
      'members' => [
        'Policy' => [
          'shape' => 'PolicyType',
        ],
      ],
    ],
    'GetKeyRotationStatusRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'GetKeyRotationStatusResponse' => [
      'type' => 'structure',
      'members' => [
        'KeyRotationEnabled' => [
          'shape' => 'BooleanType',
        ],
      ],
    ],
    'GrantConstraints' => [
      'type' => 'structure',
      'members' => [
        'EncryptionContextSubset' => [
          'shape' => 'EncryptionContextType',
        ],
        'EncryptionContextEquals' => [
          'shape' => 'EncryptionContextType',
        ],
      ],
    ],
    'GrantIdType' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
    ],
    'GrantList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'GrantListEntry',
      ],
    ],
    'GrantListEntry' => [
      'type' => 'structure',
      'members' => [
        'GrantId' => [
          'shape' => 'GrantIdType',
        ],
        'GranteePrincipal' => [
          'shape' => 'PrincipalIdType',
        ],
        'RetiringPrincipal' => [
          'shape' => 'PrincipalIdType',
        ],
        'IssuingAccount' => [
          'shape' => 'PrincipalIdType',
        ],
        'Operations' => [
          'shape' => 'GrantOperationList',
        ],
        'Constraints' => [
          'shape' => 'GrantConstraints',
        ],
      ],
    ],
    'GrantOperation' => [
      'type' => 'string',
      'enum' => [
        'Decrypt',
        'Encrypt',
        'GenerateDataKey',
        'GenerateDataKeyWithoutPlaintext',
        'ReEncryptFrom',
        'ReEncryptTo',
        'CreateGrant',
        'RetireGrant',
      ],
    ],
    'GrantOperationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'GrantOperation',
      ],
    ],
    'GrantTokenList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'GrantTokenType',
      ],
      'min' => 0,
      'max' => 10,
    ],
    'GrantTokenType' => [
      'type' => 'string',
      'min' => 1,
      'max' => 8192,
    ],
    'InvalidAliasNameException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'InvalidAliasName',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidArnException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'InvalidArn',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidCiphertextException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'InvalidCiphertext',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidGrantTokenException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'InvalidGrantToken',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidKeyUsageException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'InvalidKeyUsage',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidMarkerException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'InvalidMarker',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'KMSInternalException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'KMSInternal',
        'httpStatusCode' => 500,
      ],
      'exception' => true,
    ],
    'KeyIdType' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'KeyList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'KeyListEntry',
      ],
    ],
    'KeyListEntry' => [
      'type' => 'structure',
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'KeyArn' => [
          'shape' => 'ArnType',
        ],
      ],
    ],
    'KeyMetadata' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'AWSAccountId' => [
          'shape' => 'AWSAccountIdType',
        ],
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'Arn' => [
          'shape' => 'ArnType',
        ],
        'CreationDate' => [
          'shape' => 'DateType',
        ],
        'Enabled' => [
          'shape' => 'BooleanType',
        ],
        'Description' => [
          'shape' => 'DescriptionType',
        ],
        'KeyUsage' => [
          'shape' => 'KeyUsageType',
        ],
      ],
    ],
    'KeyUnavailableException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'KeyUnavailable',
        'httpStatusCode' => 500,
      ],
      'exception' => true,
      'fault' => true,
    ],
    'KeyUsageType' => [
      'type' => 'string',
      'enum' => [
        'ENCRYPT_DECRYPT',
      ],
    ],
    'LimitExceededException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'LimitExceeded',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'LimitType' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 1000,
    ],
    'ListAliasesRequest' => [
      'type' => 'structure',
      'members' => [
        'Limit' => [
          'shape' => 'LimitType',
        ],
        'Marker' => [
          'shape' => 'MarkerType',
        ],
      ],
    ],
    'ListAliasesResponse' => [
      'type' => 'structure',
      'members' => [
        'Aliases' => [
          'shape' => 'AliasList',
        ],
        'NextMarker' => [
          'shape' => 'MarkerType',
        ],
        'Truncated' => [
          'shape' => 'BooleanType',
        ],
      ],
    ],
    'ListGrantsRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'Limit' => [
          'shape' => 'LimitType',
        ],
        'Marker' => [
          'shape' => 'MarkerType',
        ],
      ],
    ],
    'ListGrantsResponse' => [
      'type' => 'structure',
      'members' => [
        'Grants' => [
          'shape' => 'GrantList',
        ],
        'NextMarker' => [
          'shape' => 'MarkerType',
        ],
        'Truncated' => [
          'shape' => 'BooleanType',
        ],
      ],
    ],
    'ListKeyPoliciesRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'Limit' => [
          'shape' => 'LimitType',
        ],
        'Marker' => [
          'shape' => 'MarkerType',
        ],
      ],
    ],
    'ListKeyPoliciesResponse' => [
      'type' => 'structure',
      'members' => [
        'PolicyNames' => [
          'shape' => 'PolicyNameList',
        ],
        'NextMarker' => [
          'shape' => 'MarkerType',
        ],
        'Truncated' => [
          'shape' => 'BooleanType',
        ],
      ],
    ],
    'ListKeysRequest' => [
      'type' => 'structure',
      'members' => [
        'Limit' => [
          'shape' => 'LimitType',
        ],
        'Marker' => [
          'shape' => 'MarkerType',
        ],
      ],
    ],
    'ListKeysResponse' => [
      'type' => 'structure',
      'members' => [
        'Keys' => [
          'shape' => 'KeyList',
        ],
        'NextMarker' => [
          'shape' => 'MarkerType',
        ],
        'Truncated' => [
          'shape' => 'BooleanType',
        ],
      ],
    ],
    'MalformedPolicyDocumentException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'MalformedPolicyDocument',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'MarkerType' => [
      'type' => 'string',
      'min' => 1,
      'max' => 320,
      'pattern' => '[\\u0020-\\u00FF]*',
    ],
    'NotFoundException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'NotFound',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'NumberOfBytesType' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 1024,
    ],
    'PlaintextType' => [
      'type' => 'blob',
      'min' => 1,
      'max' => 4096,
      'sensitive' => true,
    ],
    'PolicyNameList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PolicyNameType',
      ],
    ],
    'PolicyNameType' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[\\w]+',
    ],
    'PolicyType' => [
      'type' => 'string',
      'min' => 1,
      'max' => 131072,
      'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+',
    ],
    'PrincipalIdType' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'PutKeyPolicyRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
        'PolicyName',
        'Policy',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'PolicyName' => [
          'shape' => 'PolicyNameType',
        ],
        'Policy' => [
          'shape' => 'PolicyType',
        ],
      ],
    ],
    'ReEncryptRequest' => [
      'type' => 'structure',
      'required' => [
        'CiphertextBlob',
        'DestinationKeyId',
      ],
      'members' => [
        'CiphertextBlob' => [
          'shape' => 'CiphertextType',
        ],
        'SourceEncryptionContext' => [
          'shape' => 'EncryptionContextType',
        ],
        'DestinationKeyId' => [
          'shape' => 'KeyIdType',
        ],
        'DestinationEncryptionContext' => [
          'shape' => 'EncryptionContextType',
        ],
        'GrantTokens' => [
          'shape' => 'GrantTokenList',
        ],
      ],
    ],
    'ReEncryptResponse' => [
      'type' => 'structure',
      'members' => [
        'CiphertextBlob' => [
          'shape' => 'CiphertextType',
        ],
        'SourceKeyId' => [
          'shape' => 'KeyIdType',
        ],
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
      ],
    ],
    'RetireGrantRequest' => [
      'type' => 'structure',
      'required' => [
        'GrantToken',
      ],
      'members' => [
        'GrantToken' => [
          'shape' => 'GrantTokenType',
        ],
      ],
    ],
    'RevokeGrantRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
        'GrantId',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'GrantId' => [
          'shape' => 'GrantIdType',
        ],
      ],
    ],
    'UnsupportedOperationException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessageType',
        ],
      ],
      'error' => [
        'code' => 'UnsupportedOperation',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'UpdateKeyDescriptionRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyId',
        'Description',
      ],
      'members' => [
        'KeyId' => [
          'shape' => 'KeyIdType',
        ],
        'Description' => [
          'shape' => 'DescriptionType',
        ],
      ],
    ],
  ],
];
