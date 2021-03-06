<?php return [
  'metadata' => [
    'apiVersion' => '2010-12-01',
    'endpointPrefix' => 'email',
    'serviceAbbreviation' => 'Amazon SES',
    'serviceFullName' => 'Amazon Simple Email Service',
    'signatureVersion' => 'v4',
    'signingName' => 'ses',
    'xmlNamespace' => 'http://ses.amazonaws.com/doc/2010-12-01/',
    'protocol' => 'query',
  ],
  'operations' => [
    'DeleteIdentity' => [
      'name' => 'DeleteIdentity',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteIdentityRequest',
      ],
      'output' => [
        'shape' => 'DeleteIdentityResponse',
        'resultWrapper' => 'DeleteIdentityResult',
      ],
    ],
    'DeleteVerifiedEmailAddress' => [
      'name' => 'DeleteVerifiedEmailAddress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteVerifiedEmailAddressRequest',
      ],
    ],
    'GetIdentityDkimAttributes' => [
      'name' => 'GetIdentityDkimAttributes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetIdentityDkimAttributesRequest',
      ],
      'output' => [
        'shape' => 'GetIdentityDkimAttributesResponse',
        'resultWrapper' => 'GetIdentityDkimAttributesResult',
      ],
    ],
    'GetIdentityNotificationAttributes' => [
      'name' => 'GetIdentityNotificationAttributes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetIdentityNotificationAttributesRequest',
      ],
      'output' => [
        'shape' => 'GetIdentityNotificationAttributesResponse',
        'resultWrapper' => 'GetIdentityNotificationAttributesResult',
      ],
    ],
    'GetIdentityVerificationAttributes' => [
      'name' => 'GetIdentityVerificationAttributes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetIdentityVerificationAttributesRequest',
      ],
      'output' => [
        'shape' => 'GetIdentityVerificationAttributesResponse',
        'resultWrapper' => 'GetIdentityVerificationAttributesResult',
      ],
    ],
    'GetSendQuota' => [
      'name' => 'GetSendQuota',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'output' => [
        'shape' => 'GetSendQuotaResponse',
        'resultWrapper' => 'GetSendQuotaResult',
      ],
    ],
    'GetSendStatistics' => [
      'name' => 'GetSendStatistics',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'output' => [
        'shape' => 'GetSendStatisticsResponse',
        'resultWrapper' => 'GetSendStatisticsResult',
      ],
    ],
    'ListIdentities' => [
      'name' => 'ListIdentities',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListIdentitiesRequest',
      ],
      'output' => [
        'shape' => 'ListIdentitiesResponse',
        'resultWrapper' => 'ListIdentitiesResult',
      ],
    ],
    'ListVerifiedEmailAddresses' => [
      'name' => 'ListVerifiedEmailAddresses',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'output' => [
        'shape' => 'ListVerifiedEmailAddressesResponse',
        'resultWrapper' => 'ListVerifiedEmailAddressesResult',
      ],
    ],
    'SendEmail' => [
      'name' => 'SendEmail',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SendEmailRequest',
      ],
      'output' => [
        'shape' => 'SendEmailResponse',
        'resultWrapper' => 'SendEmailResult',
      ],
      'errors' => [
        [
          'shape' => 'MessageRejected',
          'error' => [
            'code' => 'MessageRejected',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'SendRawEmail' => [
      'name' => 'SendRawEmail',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SendRawEmailRequest',
      ],
      'output' => [
        'shape' => 'SendRawEmailResponse',
        'resultWrapper' => 'SendRawEmailResult',
      ],
      'errors' => [
        [
          'shape' => 'MessageRejected',
          'error' => [
            'code' => 'MessageRejected',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'SetIdentityDkimEnabled' => [
      'name' => 'SetIdentityDkimEnabled',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SetIdentityDkimEnabledRequest',
      ],
      'output' => [
        'shape' => 'SetIdentityDkimEnabledResponse',
        'resultWrapper' => 'SetIdentityDkimEnabledResult',
      ],
    ],
    'SetIdentityFeedbackForwardingEnabled' => [
      'name' => 'SetIdentityFeedbackForwardingEnabled',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SetIdentityFeedbackForwardingEnabledRequest',
      ],
      'output' => [
        'shape' => 'SetIdentityFeedbackForwardingEnabledResponse',
        'resultWrapper' => 'SetIdentityFeedbackForwardingEnabledResult',
      ],
    ],
    'SetIdentityNotificationTopic' => [
      'name' => 'SetIdentityNotificationTopic',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SetIdentityNotificationTopicRequest',
      ],
      'output' => [
        'shape' => 'SetIdentityNotificationTopicResponse',
        'resultWrapper' => 'SetIdentityNotificationTopicResult',
      ],
    ],
    'VerifyDomainDkim' => [
      'name' => 'VerifyDomainDkim',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'VerifyDomainDkimRequest',
      ],
      'output' => [
        'shape' => 'VerifyDomainDkimResponse',
        'resultWrapper' => 'VerifyDomainDkimResult',
      ],
    ],
    'VerifyDomainIdentity' => [
      'name' => 'VerifyDomainIdentity',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'VerifyDomainIdentityRequest',
      ],
      'output' => [
        'shape' => 'VerifyDomainIdentityResponse',
        'resultWrapper' => 'VerifyDomainIdentityResult',
      ],
    ],
    'VerifyEmailAddress' => [
      'name' => 'VerifyEmailAddress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'VerifyEmailAddressRequest',
      ],
    ],
    'VerifyEmailIdentity' => [
      'name' => 'VerifyEmailIdentity',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'VerifyEmailIdentityRequest',
      ],
      'output' => [
        'shape' => 'VerifyEmailIdentityResponse',
        'resultWrapper' => 'VerifyEmailIdentityResult',
      ],
    ],
  ],
  'shapes' => [
    'Address' => [
      'type' => 'string',
    ],
    'AddressList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Address',
      ],
    ],
    'Body' => [
      'type' => 'structure',
      'members' => [
        'Text' => [
          'shape' => 'Content',
        ],
        'Html' => [
          'shape' => 'Content',
        ],
      ],
    ],
    'Charset' => [
      'type' => 'string',
    ],
    'Content' => [
      'type' => 'structure',
      'required' => [
        'Data',
      ],
      'members' => [
        'Data' => [
          'shape' => 'MessageData',
        ],
        'Charset' => [
          'shape' => 'Charset',
        ],
      ],
    ],
    'Counter' => [
      'type' => 'long',
    ],
    'DeleteIdentityRequest' => [
      'type' => 'structure',
      'required' => [
        'Identity',
      ],
      'members' => [
        'Identity' => [
          'shape' => 'Identity',
        ],
      ],
    ],
    'DeleteIdentityResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'DeleteVerifiedEmailAddressRequest' => [
      'type' => 'structure',
      'required' => [
        'EmailAddress',
      ],
      'members' => [
        'EmailAddress' => [
          'shape' => 'Address',
        ],
      ],
    ],
    'Destination' => [
      'type' => 'structure',
      'members' => [
        'ToAddresses' => [
          'shape' => 'AddressList',
        ],
        'CcAddresses' => [
          'shape' => 'AddressList',
        ],
        'BccAddresses' => [
          'shape' => 'AddressList',
        ],
      ],
    ],
    'DkimAttributes' => [
      'type' => 'map',
      'key' => [
        'shape' => 'Identity',
      ],
      'value' => [
        'shape' => 'IdentityDkimAttributes',
      ],
    ],
    'Domain' => [
      'type' => 'string',
    ],
    'Enabled' => [
      'type' => 'boolean',
    ],
    'GetIdentityDkimAttributesRequest' => [
      'type' => 'structure',
      'required' => [
        'Identities',
      ],
      'members' => [
        'Identities' => [
          'shape' => 'IdentityList',
        ],
      ],
    ],
    'GetIdentityDkimAttributesResponse' => [
      'type' => 'structure',
      'required' => [
        'DkimAttributes',
      ],
      'members' => [
        'DkimAttributes' => [
          'shape' => 'DkimAttributes',
        ],
      ],
    ],
    'GetIdentityNotificationAttributesRequest' => [
      'type' => 'structure',
      'required' => [
        'Identities',
      ],
      'members' => [
        'Identities' => [
          'shape' => 'IdentityList',
        ],
      ],
    ],
    'GetIdentityNotificationAttributesResponse' => [
      'type' => 'structure',
      'required' => [
        'NotificationAttributes',
      ],
      'members' => [
        'NotificationAttributes' => [
          'shape' => 'NotificationAttributes',
        ],
      ],
    ],
    'GetIdentityVerificationAttributesRequest' => [
      'type' => 'structure',
      'required' => [
        'Identities',
      ],
      'members' => [
        'Identities' => [
          'shape' => 'IdentityList',
        ],
      ],
    ],
    'GetIdentityVerificationAttributesResponse' => [
      'type' => 'structure',
      'required' => [
        'VerificationAttributes',
      ],
      'members' => [
        'VerificationAttributes' => [
          'shape' => 'VerificationAttributes',
        ],
      ],
    ],
    'GetSendQuotaResponse' => [
      'type' => 'structure',
      'members' => [
        'Max24HourSend' => [
          'shape' => 'Max24HourSend',
        ],
        'MaxSendRate' => [
          'shape' => 'MaxSendRate',
        ],
        'SentLast24Hours' => [
          'shape' => 'SentLast24Hours',
        ],
      ],
    ],
    'GetSendStatisticsResponse' => [
      'type' => 'structure',
      'members' => [
        'SendDataPoints' => [
          'shape' => 'SendDataPointList',
        ],
      ],
    ],
    'Identity' => [
      'type' => 'string',
    ],
    'IdentityDkimAttributes' => [
      'type' => 'structure',
      'required' => [
        'DkimEnabled',
        'DkimVerificationStatus',
      ],
      'members' => [
        'DkimEnabled' => [
          'shape' => 'Enabled',
        ],
        'DkimVerificationStatus' => [
          'shape' => 'VerificationStatus',
        ],
        'DkimTokens' => [
          'shape' => 'VerificationTokenList',
        ],
      ],
    ],
    'IdentityList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Identity',
      ],
    ],
    'IdentityNotificationAttributes' => [
      'type' => 'structure',
      'required' => [
        'BounceTopic',
        'ComplaintTopic',
        'DeliveryTopic',
        'ForwardingEnabled',
      ],
      'members' => [
        'BounceTopic' => [
          'shape' => 'NotificationTopic',
        ],
        'ComplaintTopic' => [
          'shape' => 'NotificationTopic',
        ],
        'DeliveryTopic' => [
          'shape' => 'NotificationTopic',
        ],
        'ForwardingEnabled' => [
          'shape' => 'Enabled',
        ],
      ],
    ],
    'IdentityType' => [
      'type' => 'string',
      'enum' => [
        'EmailAddress',
        'Domain',
      ],
    ],
    'IdentityVerificationAttributes' => [
      'type' => 'structure',
      'required' => [
        'VerificationStatus',
      ],
      'members' => [
        'VerificationStatus' => [
          'shape' => 'VerificationStatus',
        ],
        'VerificationToken' => [
          'shape' => 'VerificationToken',
        ],
      ],
    ],
    'ListIdentitiesRequest' => [
      'type' => 'structure',
      'members' => [
        'IdentityType' => [
          'shape' => 'IdentityType',
        ],
        'NextToken' => [
          'shape' => 'NextToken',
        ],
        'MaxItems' => [
          'shape' => 'MaxItems',
        ],
      ],
    ],
    'ListIdentitiesResponse' => [
      'type' => 'structure',
      'required' => [
        'Identities',
      ],
      'members' => [
        'Identities' => [
          'shape' => 'IdentityList',
        ],
        'NextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListVerifiedEmailAddressesResponse' => [
      'type' => 'structure',
      'members' => [
        'VerifiedEmailAddresses' => [
          'shape' => 'AddressList',
        ],
      ],
    ],
    'Max24HourSend' => [
      'type' => 'double',
    ],
    'MaxItems' => [
      'type' => 'integer',
    ],
    'MaxSendRate' => [
      'type' => 'double',
    ],
    'Message' => [
      'type' => 'structure',
      'required' => [
        'Subject',
        'Body',
      ],
      'members' => [
        'Subject' => [
          'shape' => 'Content',
        ],
        'Body' => [
          'shape' => 'Body',
        ],
      ],
    ],
    'MessageData' => [
      'type' => 'string',
    ],
    'MessageId' => [
      'type' => 'string',
    ],
    'MessageRejected' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'MessageRejected',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'NextToken' => [
      'type' => 'string',
    ],
    'NotificationAttributes' => [
      'type' => 'map',
      'key' => [
        'shape' => 'Identity',
      ],
      'value' => [
        'shape' => 'IdentityNotificationAttributes',
      ],
    ],
    'NotificationTopic' => [
      'type' => 'string',
    ],
    'NotificationType' => [
      'type' => 'string',
      'enum' => [
        'Bounce',
        'Complaint',
        'Delivery',
      ],
    ],
    'RawMessage' => [
      'type' => 'structure',
      'required' => [
        'Data',
      ],
      'members' => [
        'Data' => [
          'shape' => 'RawMessageData',
        ],
      ],
    ],
    'RawMessageData' => [
      'type' => 'blob',
    ],
    'SendDataPoint' => [
      'type' => 'structure',
      'members' => [
        'Timestamp' => [
          'shape' => 'Timestamp',
        ],
        'DeliveryAttempts' => [
          'shape' => 'Counter',
        ],
        'Bounces' => [
          'shape' => 'Counter',
        ],
        'Complaints' => [
          'shape' => 'Counter',
        ],
        'Rejects' => [
          'shape' => 'Counter',
        ],
      ],
    ],
    'SendDataPointList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SendDataPoint',
      ],
    ],
    'SendEmailRequest' => [
      'type' => 'structure',
      'required' => [
        'Source',
        'Destination',
        'Message',
      ],
      'members' => [
        'Source' => [
          'shape' => 'Address',
        ],
        'Destination' => [
          'shape' => 'Destination',
        ],
        'Message' => [
          'shape' => 'Message',
        ],
        'ReplyToAddresses' => [
          'shape' => 'AddressList',
        ],
        'ReturnPath' => [
          'shape' => 'Address',
        ],
      ],
    ],
    'SendEmailResponse' => [
      'type' => 'structure',
      'required' => [
        'MessageId',
      ],
      'members' => [
        'MessageId' => [
          'shape' => 'MessageId',
        ],
      ],
    ],
    'SendRawEmailRequest' => [
      'type' => 'structure',
      'required' => [
        'RawMessage',
      ],
      'members' => [
        'Source' => [
          'shape' => 'Address',
        ],
        'Destinations' => [
          'shape' => 'AddressList',
        ],
        'RawMessage' => [
          'shape' => 'RawMessage',
        ],
      ],
    ],
    'SendRawEmailResponse' => [
      'type' => 'structure',
      'required' => [
        'MessageId',
      ],
      'members' => [
        'MessageId' => [
          'shape' => 'MessageId',
        ],
      ],
    ],
    'SentLast24Hours' => [
      'type' => 'double',
    ],
    'SetIdentityDkimEnabledRequest' => [
      'type' => 'structure',
      'required' => [
        'Identity',
        'DkimEnabled',
      ],
      'members' => [
        'Identity' => [
          'shape' => 'Identity',
        ],
        'DkimEnabled' => [
          'shape' => 'Enabled',
        ],
      ],
    ],
    'SetIdentityDkimEnabledResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'SetIdentityFeedbackForwardingEnabledRequest' => [
      'type' => 'structure',
      'required' => [
        'Identity',
        'ForwardingEnabled',
      ],
      'members' => [
        'Identity' => [
          'shape' => 'Identity',
        ],
        'ForwardingEnabled' => [
          'shape' => 'Enabled',
        ],
      ],
    ],
    'SetIdentityFeedbackForwardingEnabledResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'SetIdentityNotificationTopicRequest' => [
      'type' => 'structure',
      'required' => [
        'Identity',
        'NotificationType',
      ],
      'members' => [
        'Identity' => [
          'shape' => 'Identity',
        ],
        'NotificationType' => [
          'shape' => 'NotificationType',
        ],
        'SnsTopic' => [
          'shape' => 'NotificationTopic',
        ],
      ],
    ],
    'SetIdentityNotificationTopicResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'Timestamp' => [
      'type' => 'timestamp',
    ],
    'VerificationAttributes' => [
      'type' => 'map',
      'key' => [
        'shape' => 'Identity',
      ],
      'value' => [
        'shape' => 'IdentityVerificationAttributes',
      ],
    ],
    'VerificationStatus' => [
      'type' => 'string',
      'enum' => [
        'Pending',
        'Success',
        'Failed',
        'TemporaryFailure',
        'NotStarted',
      ],
    ],
    'VerificationToken' => [
      'type' => 'string',
    ],
    'VerificationTokenList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VerificationToken',
      ],
    ],
    'VerifyDomainDkimRequest' => [
      'type' => 'structure',
      'required' => [
        'Domain',
      ],
      'members' => [
        'Domain' => [
          'shape' => 'Domain',
        ],
      ],
    ],
    'VerifyDomainDkimResponse' => [
      'type' => 'structure',
      'required' => [
        'DkimTokens',
      ],
      'members' => [
        'DkimTokens' => [
          'shape' => 'VerificationTokenList',
        ],
      ],
    ],
    'VerifyDomainIdentityRequest' => [
      'type' => 'structure',
      'required' => [
        'Domain',
      ],
      'members' => [
        'Domain' => [
          'shape' => 'Domain',
        ],
      ],
    ],
    'VerifyDomainIdentityResponse' => [
      'type' => 'structure',
      'required' => [
        'VerificationToken',
      ],
      'members' => [
        'VerificationToken' => [
          'shape' => 'VerificationToken',
        ],
      ],
    ],
    'VerifyEmailAddressRequest' => [
      'type' => 'structure',
      'required' => [
        'EmailAddress',
      ],
      'members' => [
        'EmailAddress' => [
          'shape' => 'Address',
        ],
      ],
    ],
    'VerifyEmailIdentityRequest' => [
      'type' => 'structure',
      'required' => [
        'EmailAddress',
      ],
      'members' => [
        'EmailAddress' => [
          'shape' => 'Address',
        ],
      ],
    ],
    'VerifyEmailIdentityResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
  ],
];
