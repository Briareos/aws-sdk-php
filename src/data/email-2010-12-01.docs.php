<?php return [
  'operations' => [
    'DeleteIdentity' => '<p>Deletes the specified identity (email address or domain] from the list of verified identities.</p> <p>This action is throttled at one request per second.</p>',
    'DeleteVerifiedEmailAddress' => '<p>Deletes the specified email address from the list of verified addresses.</p> <important>The DeleteVerifiedEmailAddress action is deprecated as of the May 15, 2012 release of Domain Verification. The DeleteIdentity action is now preferred.</important> <p>This action is throttled at one request per second.</p>',
    'GetIdentityDkimAttributes' => '<p>Returns the current status of Easy DKIM signing for an entity. For domain name identities, this action also returns the DKIM tokens that are required for Easy DKIM signing, and whether Amazon SES has successfully verified that these tokens have been published.</p> <p>This action takes a list of identities as input and returns the following information for each:</p> <ul> <li>Whether Easy DKIM signing is enabled or disabled.</li> <li>A set of DKIM tokens that represent the identity. If the identity is an email address, the tokens represent the domain of that address.</li> <li>Whether Amazon SES has successfully verified the DKIM tokens published in the domain\'s DNS. This information is only returned for domain name identities, not for email addresses.</li> </ul> <p>This action is throttled at one request per second.</p> <p>For more information about creating DNS records using DKIM tokens, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/easy-dkim-dns-records.html">Amazon SES Developer Guide</a>.</p>',
    'GetIdentityNotificationAttributes' => '<p>Given a list of verified identities (email addresses and/or domains], returns a structure describing identity notification attributes.</p> <p>This action is throttled at one request per second.</p> <p>For more information about using notifications with Amazon SES, see the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/notifications.html">Amazon SES Developer Guide</a>.</p>',
    'GetIdentityVerificationAttributes' => '<p>Given a list of identities (email addresses and/or domains], returns the verification status and (for domain identities] the verification token for each identity.</p> <p>This action is throttled at one request per second.</p>',
    'GetSendQuota' => '<p>Returns the user\'s current sending limits.</p> <p>This action is throttled at one request per second.</p>',
    'GetSendStatistics' => '<p>Returns the user\'s sending statistics. The result is a list of data points, representing the last two weeks of sending activity. </p> <p>Each data point in the list contains statistics for a 15-minute interval.</p> <p>This action is throttled at one request per second.</p>',
    'ListIdentities' => '<p>Returns a list containing all of the identities (email addresses and domains] for a specific AWS Account, regardless of verification status.</p> <p>This action is throttled at one request per second.</p>',
    'ListVerifiedEmailAddresses' => '<p>Returns a list containing all of the email addresses that have been verified.</p> <important>The ListVerifiedEmailAddresses action is deprecated as of the May 15, 2012 release of Domain Verification. The ListIdentities action is now preferred.</important> <p>This action is throttled at one request per second.</p>',
    'SendEmail' => '<p>Composes an email message based on input data, and then immediately queues the message for sending. </p> <important> You can only send email from verified email addresses and domains. If you have not requested production access to Amazon SES, you must also verify every recipient email address except for the recipients provided by the Amazon SES mailbox simulator. For more information, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/verify-addresses-and-domains.html">Amazon SES Developer Guide</a>. </important> <p>The total size of the message cannot exceed 10 MB.</p> <p>Amazon SES has a limit on the total number of recipients per message: The combined number of To:, CC: and BCC: email addresses cannot exceed 50. If you need to send an email message to a larger audience, you can divide your recipient list into groups of 50 or fewer, and then call Amazon SES repeatedly to send the message to each group. </p> <p>For every message that you send, the total number of recipients (To:, CC: and BCC:] is counted against your <i>sending quota</i> - the maximum number of emails you can send in a 24-hour period. For information about your sending quota, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/manage-sending-limits.html">Amazon SES Developer Guide</a>. </p>',
    'SendRawEmail' => '<p>Sends an email message, with header and content specified by the client. The <code>SendRawEmail</code> action is useful for sending multipart MIME emails. The raw text of the message must comply with Internet email standards; otherwise, the message cannot be sent. </p> <important> You can only send email from verified email addresses and domains. If you have not requested production access to Amazon SES, you must also verify every recipient email address except for the recipients provided by the Amazon SES mailbox simulator. For more information, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/verify-addresses-and-domains.html">Amazon SES Developer Guide</a>. </important> <p>The total size of the message cannot exceed 10 MB. This includes any attachments that are part of the message.</p> <p>Amazon SES has a limit on the total number of recipients per message: The combined number of To:, CC: and BCC: email addresses cannot exceed 50. If you need to send an email message to a larger audience, you can divide your recipient list into groups of 50 or fewer, and then call Amazon SES repeatedly to send the message to each group. </p> <p>The To:, CC:, and BCC: headers in the raw message can contain a group list. Note that each recipient in a group list counts towards the 50-recipient limit. </p> <p>For every message that you send, the total number of recipients (To:, CC: and BCC:] is counted against your <i>sending quota</i> - the maximum number of emails you can send in a 24-hour period. For information about your sending quota, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/manage-sending-limits.html">Amazon SES Developer Guide</a>. </p>',
    'SetIdentityDkimEnabled' => '<p>Enables or disables Easy DKIM signing of email sent from an identity:</p> <ul> <li>If Easy DKIM signing is enabled for a domain name identity (e.g., <code>example.com</code>], then Amazon SES will DKIM-sign all email sent by addresses under that domain name (e.g., <code>user@example.com</code>].</li> <li>If Easy DKIM signing is enabled for an email address, then Amazon SES will DKIM-sign all email sent by that email address.</li> </ul> <p>For email addresses (e.g., <code>user@example.com</code>], you can only enable Easy DKIM signing if the corresponding domain (e.g., <code>example.com</code>] has been set up for Easy DKIM using the AWS Console or the <code>VerifyDomainDkim</code> action.</p> <p>This action is throttled at one request per second.</p> <p>For more information about Easy DKIM signing, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/easy-dkim.html">Amazon SES Developer Guide</a>.</p>',
    'SetIdentityFeedbackForwardingEnabled' => '<p>Given an identity (email address or domain], enables or disables whether Amazon SES forwards bounce and complaint notifications as email. Feedback forwarding can only be disabled when Amazon Simple Notification Service (Amazon SNS] topics are specified for both bounces and complaints.</p> <p>This action is throttled at one request per second.</p> <p>For more information about using notifications with Amazon SES, see the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/notifications.html">Amazon SES Developer Guide</a>.</p>',
    'SetIdentityNotificationTopic' => '<p>Given an identity (email address or domain], sets the Amazon Simple Notification Service (Amazon SNS] topic to which Amazon SES will publish bounce, complaint, and/or delivery notifications for emails sent with that identity as the <code>Source</code>.</p> <p>This action is throttled at one request per second.</p> <p>For more information about feedback notification, see the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/notifications.html">Amazon SES Developer Guide</a>.</p>',
    'VerifyDomainDkim' => '<p>Returns a set of DKIM tokens for a domain. DKIM <i>tokens</i> are character strings that represent your domain\'s identity. Using these tokens, you will need to create DNS CNAME records that point to DKIM public keys hosted by Amazon SES. Amazon Web Services will eventually detect that you have updated your DNS records; this detection process may take up to 72 hours. Upon successful detection, Amazon SES will be able to DKIM-sign email originating from that domain.</p> <p>This action is throttled at one request per second.</p> <p>To enable or disable Easy DKIM signing for a domain, use the <code>SetIdentityDkimEnabled</code> action.</p> <p>For more information about creating DNS records using DKIM tokens, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/easy-dkim-dns-records.html">Amazon SES Developer Guide</a>.</p>',
    'VerifyDomainIdentity' => '<p>Verifies a domain.</p> <p>This action is throttled at one request per second.</p>',
    'VerifyEmailAddress' => '<p>Verifies an email address. This action causes a confirmation email message to be sent to the specified address.</p> <important>The VerifyEmailAddress action is deprecated as of the May 15, 2012 release of Domain Verification. The VerifyEmailIdentity action is now preferred.</important> <p>This action is throttled at one request per second.</p>',
    'VerifyEmailIdentity' => '<p>Verifies an email address. This action causes a confirmation email message to be sent to the specified address.</p> <p>This action is throttled at one request per second.</p>',
  ],
  'service' => '<fullname>Amazon Simple Email Service</fullname> <p> This is the API Reference for Amazon Simple Email Service (Amazon SES]. This documentation is intended to be used in conjunction with the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/Welcome.html">Amazon SES Developer Guide</a>. </p>',
  'shapes' => [
    'Address' => [
      'base' => NULL,
      'refs' => [
        'AddressList$member' => NULL,
        'DeleteVerifiedEmailAddressRequest$EmailAddress' => '<p>An email address to be removed from the list of verified addresses.</p>',
        'SendEmailRequest$Source' => '<p>The identity\'s email address.</p> <p> By default, the string must be 7-bit ASCII. If the text must contain any other characters, then you must use MIME encoded-word syntax (RFC 2047] instead of a literal string. MIME encoded-word syntax uses the following form: <code>=?charset?encoding?encoded-text?=</code>. For more information, see <a href="http://tools.ietf.org/html/rfc2047">RFC 2047</a>. </p>',
        'SendEmailRequest$ReturnPath' => '<p>The email address to which bounces and complaints are to be forwarded when feedback forwarding is enabled. If the message cannot be delivered to the recipient, then an error message will be returned from the recipient\'s ISP; this message will then be forwarded to the email address specified by the <code>ReturnPath</code> parameter. </p>',
        'SendRawEmailRequest$Source' => '<p>The identity\'s email address.</p> <p> By default, the string must be 7-bit ASCII. If the text must contain any other characters, then you must use MIME encoded-word syntax (RFC 2047] instead of a literal string. MIME encoded-word syntax uses the following form: <code>=?charset?encoding?encoded-text?=</code>. For more information, see <a href="http://tools.ietf.org/html/rfc2047">RFC 2047</a>. </p>',
        'VerifyEmailAddressRequest$EmailAddress' => '<p>The email address to be verified.</p>',
        'VerifyEmailIdentityRequest$EmailAddress' => '<p>The email address to be verified.</p>',
      ],
    ],
    'AddressList' => [
      'base' => NULL,
      'refs' => [
        'Destination$ToAddresses' => '<p>The To: field(s] of the message.</p>',
        'Destination$CcAddresses' => '<p>The CC: field(s] of the message.</p>',
        'Destination$BccAddresses' => '<p>The BCC: field(s] of the message.</p>',
        'ListVerifiedEmailAddressesResponse$VerifiedEmailAddresses' => '<p>A list of email addresses that have been verified.</p>',
        'SendEmailRequest$ReplyToAddresses' => '<p>The reply-to email address(es] for the message. If the recipient replies to the message, each reply-to address will receive the reply. </p>',
        'SendRawEmailRequest$Destinations' => '<p>A list of destinations for the message, consisting of To:, CC:, and BCC: addresses.</p>',
      ],
    ],
    'Body' => [
      'base' => '<p>Represents the body of the message. You can specify text, HTML, or both. If you use both, then the message should display correctly in the widest variety of email clients. </p>',
      'refs' => [
        'Message$Body' => '<p>The message body.</p>',
      ],
    ],
    'Charset' => [
      'base' => NULL,
      'refs' => [
        'Content$Charset' => '<p>The character set of the content.</p>',
      ],
    ],
    'Content' => [
      'base' => '<p>Represents textual data, plus an optional character set specification.</p> <p>By default, the text must be 7-bit ASCII, due to the constraints of the SMTP protocol. If the text must contain any other characters, then you must also specify a character set. Examples include UTF-8, ISO-8859-1, and Shift_JIS. </p>',
      'refs' => [
        'Body$Text' => '<p>The content of the message, in text format. Use this for text-based email clients, or clients on high-latency networks (such as mobile devices]. </p>',
        'Body$Html' => '<p>The content of the message, in HTML format. Use this for email clients that can process HTML. You can include clickable links, formatted text, and much more in an HTML message. </p>',
        'Message$Subject' => '<p>The subject of the message: A short summary of the content, which will appear in the recipient\'s inbox.</p>',
      ],
    ],
    'Counter' => [
      'base' => NULL,
      'refs' => [
        'SendDataPoint$DeliveryAttempts' => '<p>Number of emails that have been enqueued for sending.</p>',
        'SendDataPoint$Bounces' => '<p>Number of emails that have bounced.</p>',
        'SendDataPoint$Complaints' => '<p>Number of unwanted emails that were rejected by recipients.</p>',
        'SendDataPoint$Rejects' => '<p>Number of emails rejected by Amazon SES.</p>',
      ],
    ],
    'DeleteIdentityRequest' => [
      'base' => '<p>Represents a request instructing the service to delete an identity from the list of identities for the AWS Account.</p>',
      'refs' => [],
    ],
    'DeleteIdentityResponse' => [
      'base' => '<p>An empty element. Receiving this element indicates that the request completed successfully.</p>',
      'refs' => [],
    ],
    'DeleteVerifiedEmailAddressRequest' => [
      'base' => '<p>Represents a request instructing the service to delete an address from the list of verified email addresses.</p>',
      'refs' => [],
    ],
    'Destination' => [
      'base' => '<p>Represents the destination of the message, consisting of To:, CC:, and BCC: fields.</p> <p> By default, the string must be 7-bit ASCII. If the text must contain any other characters, then you must use MIME encoded-word syntax (RFC 2047] instead of a literal string. MIME encoded-word syntax uses the following form: <code>=?charset?encoding?encoded-text?=</code>. For more information, see <a href="http://tools.ietf.org/html/rfc2047">RFC 2047</a>. </p>',
      'refs' => [
        'SendEmailRequest$Destination' => '<p>The destination for this email, composed of To:, CC:, and BCC: fields.</p>',
      ],
    ],
    'DkimAttributes' => [
      'base' => NULL,
      'refs' => [
        'GetIdentityDkimAttributesResponse$DkimAttributes' => '<p>The DKIM attributes for an email address or a domain. </p>',
      ],
    ],
    'Domain' => [
      'base' => NULL,
      'refs' => [
        'VerifyDomainDkimRequest$Domain' => '<p>The name of the domain to be verified for Easy DKIM signing.</p>',
        'VerifyDomainIdentityRequest$Domain' => '<p>The domain to be verified.</p>',
      ],
    ],
    'Enabled' => [
      'base' => NULL,
      'refs' => [
        'IdentityDkimAttributes$DkimEnabled' => '<p>True if DKIM signing is enabled for email sent from the identity; false otherwise.</p>',
        'IdentityNotificationAttributes$ForwardingEnabled' => '<p>Describes whether Amazon SES will forward bounce and complaint notifications as email. <code>true</code> indicates that Amazon SES will forward bounce and complaint notifications as email, while <code>false</code> indicates that bounce and complaint notifications will be published only to the specified bounce and complaint Amazon SNS topics.</p>',
        'SetIdentityDkimEnabledRequest$DkimEnabled' => '<p>Sets whether DKIM signing is enabled for an identity. Set to <code>true</code> to enable DKIM signing for this identity; <code>false</code> to disable it. </p>',
        'SetIdentityFeedbackForwardingEnabledRequest$ForwardingEnabled' => '<p>Sets whether Amazon SES will forward bounce and complaint notifications as email. <code>true</code> specifies that Amazon SES will forward bounce and complaint notifications as email, in addition to any Amazon SNS topic publishing otherwise specified. <code>false</code> specifies that Amazon SES will publish bounce and complaint notifications only through Amazon SNS. This value can only be set to <code>false</code> when Amazon SNS topics are set for both <code>Bounce</code> and <code>Complaint</code> notification types.</p>',
      ],
    ],
    'GetIdentityDkimAttributesRequest' => [
      'base' => '<p>Given a list of verified identities, describes their DKIM attributes. The DKIM attributes of an email address identity includes whether DKIM signing is individually enabled or disabled for that address. The DKIM attributes of a domain name identity includes whether DKIM signing is enabled, as well as the DNS records (tokens] that must remain published in the domain name\'s DNS.</p>',
      'refs' => [],
    ],
    'GetIdentityDkimAttributesResponse' => [
      'base' => '<p>Represents a list of all the DKIM attributes for the specified identity.</p>',
      'refs' => [],
    ],
    'GetIdentityNotificationAttributesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetIdentityNotificationAttributesResponse' => [
      'base' => '<p>Describes whether an identity has Amazon Simple Notification Service (Amazon SNS] topics set for bounce, complaint, and/or delivery notifications, and specifies whether feedback forwarding is enabled for bounce and complaint notifications.</p>',
      'refs' => [],
    ],
    'GetIdentityVerificationAttributesRequest' => [
      'base' => '<p>Represents a request instructing the service to provide the verification attributes for a list of identities.</p>',
      'refs' => [],
    ],
    'GetIdentityVerificationAttributesResponse' => [
      'base' => '<p>Represents the verification attributes for a list of identities.</p>',
      'refs' => [],
    ],
    'GetSendQuotaResponse' => [
      'base' => '<p>Represents the user\'s current activity limits returned from a successful <code>GetSendQuota</code> request. </p>',
      'refs' => [],
    ],
    'GetSendStatisticsResponse' => [
      'base' => '<p>Represents a list of <code>SendDataPoint</code> items returned from a successful <code>GetSendStatistics</code> request. This list contains aggregated data from the previous two weeks of sending activity. </p>',
      'refs' => [],
    ],
    'Identity' => [
      'base' => NULL,
      'refs' => [
        'DeleteIdentityRequest$Identity' => '<p>The identity to be removed from the list of identities for the AWS Account.</p>',
        'DkimAttributes$key' => NULL,
        'IdentityList$member' => NULL,
        'NotificationAttributes$key' => NULL,
        'SetIdentityDkimEnabledRequest$Identity' => '<p>The identity for which DKIM signing should be enabled or disabled.</p>',
        'SetIdentityFeedbackForwardingEnabledRequest$Identity' => '<p>The identity for which to set bounce and complaint notification forwarding. Examples: <code>user@example.com</code>, <code>example.com</code>.</p>',
        'SetIdentityNotificationTopicRequest$Identity' => '<p>The identity for which the Amazon SNS topic will be set. Examples: <code>user@example.com</code>, <code>example.com</code>.</p>',
        'VerificationAttributes$key' => NULL,
      ],
    ],
    'IdentityDkimAttributes' => [
      'base' => '<p>Represents the DKIM attributes of a verified email address or a domain.</p>',
      'refs' => [
        'DkimAttributes$value' => NULL,
      ],
    ],
    'IdentityList' => [
      'base' => NULL,
      'refs' => [
        'GetIdentityDkimAttributesRequest$Identities' => '<p>A list of one or more verified identities - email addresses, domains, or both.</p>',
        'GetIdentityNotificationAttributesRequest$Identities' => '<p>A list of one or more identities.</p>',
        'GetIdentityVerificationAttributesRequest$Identities' => '<p>A list of identities.</p>',
        'ListIdentitiesResponse$Identities' => '<p>A list of identities.</p>',
      ],
    ],
    'IdentityNotificationAttributes' => [
      'base' => '<p>Represents the notification attributes of an identity, including whether an identity has Amazon Simple Notification Service (Amazon SNS] topics set for bounce, complaint, and/or delivery notifications, and whether feedback forwarding is enabled for bounce and complaint notifications.</p>',
      'refs' => [
        'NotificationAttributes$value' => NULL,
      ],
    ],
    'IdentityType' => [
      'base' => NULL,
      'refs' => [
        'ListIdentitiesRequest$IdentityType' => '<p>The type of the identities to list. Possible values are "EmailAddress" and "Domain". If this parameter is omitted, then all identities will be listed.</p>',
      ],
    ],
    'IdentityVerificationAttributes' => [
      'base' => '<p>Represents the verification attributes of a single identity.</p>',
      'refs' => [
        'VerificationAttributes$value' => NULL,
      ],
    ],
    'ListIdentitiesRequest' => [
      'base' => '<p>Represents a request instructing the service to list all identities for the AWS Account.</p>',
      'refs' => [],
    ],
    'ListIdentitiesResponse' => [
      'base' => '<p>Represents a list of all verified identities for the AWS Account.</p>',
      'refs' => [],
    ],
    'ListVerifiedEmailAddressesResponse' => [
      'base' => '<p>Represents a list of all the email addresses verified for the current user.</p>',
      'refs' => [],
    ],
    'Max24HourSend' => [
      'base' => NULL,
      'refs' => [
        'GetSendQuotaResponse$Max24HourSend' => '<p>The maximum number of emails the user is allowed to send in a 24-hour interval.</p>',
      ],
    ],
    'MaxItems' => [
      'base' => NULL,
      'refs' => [
        'ListIdentitiesRequest$MaxItems' => '<p>The maximum number of identities per page. Possible values are 1-100 inclusive.</p>',
      ],
    ],
    'MaxSendRate' => [
      'base' => NULL,
      'refs' => [
        'GetSendQuotaResponse$MaxSendRate' => '<p>The maximum number of emails the user is allowed to send per second.</p>',
      ],
    ],
    'Message' => [
      'base' => '<p>Represents the message to be sent, composed of a subject and a body.</p>',
      'refs' => [
        'SendEmailRequest$Message' => '<p>The message to be sent.</p>',
      ],
    ],
    'MessageData' => [
      'base' => NULL,
      'refs' => [
        'Content$Data' => '<p>The textual data of the content.</p>',
      ],
    ],
    'MessageId' => [
      'base' => NULL,
      'refs' => [
        'SendEmailResponse$MessageId' => '<p>The unique message identifier returned from the <code>SendEmail</code> action. </p>',
        'SendRawEmailResponse$MessageId' => '<p>The unique message identifier returned from the <code>SendRawEmail</code> action. </p>',
      ],
    ],
    'MessageRejected' => [
      'base' => 'Indicates that the action failed, and the message could not be sent. Check the error stack for more information about what caused the error.',
      'refs' => [],
    ],
    'NextToken' => [
      'base' => NULL,
      'refs' => [
        'ListIdentitiesRequest$NextToken' => '<p>The token to use for pagination.</p>',
        'ListIdentitiesResponse$NextToken' => '<p>The token used for pagination.</p>',
      ],
    ],
    'NotificationAttributes' => [
      'base' => NULL,
      'refs' => [
        'GetIdentityNotificationAttributesResponse$NotificationAttributes' => '<p>A map of Identity to IdentityNotificationAttributes.</p>',
      ],
    ],
    'NotificationTopic' => [
      'base' => NULL,
      'refs' => [
        'IdentityNotificationAttributes$BounceTopic' => '<p>The Amazon Resource Name (ARN] of the Amazon SNS topic where Amazon SES will publish bounce notifications.</p>',
        'IdentityNotificationAttributes$ComplaintTopic' => '<p>The Amazon Resource Name (ARN] of the Amazon SNS topic where Amazon SES will publish complaint notifications.</p>',
        'IdentityNotificationAttributes$DeliveryTopic' => '<p>The Amazon Resource Name (ARN] of the Amazon SNS topic where Amazon SES will publish delivery notifications.</p>',
        'SetIdentityNotificationTopicRequest$SnsTopic' => '<p>The Amazon Resource Name (ARN] of the Amazon SNS topic. If the parameter is omitted from the request or a null value is passed, <code>SnsTopic</code> is cleared and publishing is disabled.</p>',
      ],
    ],
    'NotificationType' => [
      'base' => NULL,
      'refs' => [
        'SetIdentityNotificationTopicRequest$NotificationType' => '<p>The type of notifications that will be published to the specified Amazon SNS topic.</p>',
      ],
    ],
    'RawMessage' => [
      'base' => '<p>Represents the raw data of the message.</p>',
      'refs' => [
        'SendRawEmailRequest$RawMessage' => '<p>The raw text of the message. The client is responsible for ensuring the following:</p> <p> <ul> <li>Message must contain a header and a body, separated by a blank line.</li> <li>All required header fields must be present.</li> <li>Each part of a multipart MIME message must be formatted properly.</li> <li>MIME content types must be among those supported by Amazon SES. For more information, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/mime-types.html">Amazon SES Developer Guide</a>. </li> <li>Content must be base64-encoded, if MIME requires it.</li> </ul> </p>',
      ],
    ],
    'RawMessageData' => [
      'base' => NULL,
      'refs' => [
        'RawMessage$Data' => '<p>The raw data of the message. The client must ensure that the message format complies with Internet email standards regarding email header fields, MIME types, MIME encoding, and base64 encoding (if necessary]. </p> <p>The To:, CC:, and BCC: headers in the raw message can contain a group list. </p> <p>For more information, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/send-email-raw.html">Amazon SES Developer Guide</a>. </p>',
      ],
    ],
    'SendDataPoint' => [
      'base' => '<p>Represents sending statistics data. Each <code>SendDataPoint</code> contains statistics for a 15-minute period of sending activity. </p>',
      'refs' => [
        'SendDataPointList$member' => NULL,
      ],
    ],
    'SendDataPointList' => [
      'base' => NULL,
      'refs' => [
        'GetSendStatisticsResponse$SendDataPoints' => '<p>A list of data points, each of which represents 15 minutes of activity.</p>',
      ],
    ],
    'SendEmailRequest' => [
      'base' => '<p>Represents a request instructing the service to send a single email message.</p> <p>This datatype can be used in application code to compose a message consisting of source, destination, message, reply-to, and return-path parts. This object can then be sent using the <code>SendEmail</code> action. </p>',
      'refs' => [],
    ],
    'SendEmailResponse' => [
      'base' => '<p>Represents a unique message ID returned from a successful <code>SendEmail</code> request. </p>',
      'refs' => [],
    ],
    'SendRawEmailRequest' => [
      'base' => '<p>Represents a request instructing the service to send a raw email message.</p> <p>This datatype can be used in application code to compose a message consisting of source, destination, and raw message text. This object can then be sent using the <code>SendRawEmail</code> action. </p>',
      'refs' => [],
    ],
    'SendRawEmailResponse' => [
      'base' => '<p>Represents a unique message ID returned from a successful <code>SendRawEmail</code> request. </p>',
      'refs' => [],
    ],
    'SentLast24Hours' => [
      'base' => NULL,
      'refs' => [
        'GetSendQuotaResponse$SentLast24Hours' => '<p>The number of emails sent during the previous 24 hours.</p>',
      ],
    ],
    'SetIdentityDkimEnabledRequest' => [
      'base' => '<p>Represents a request instructing the service to enable or disable DKIM signing for an identity.</p>',
      'refs' => [],
    ],
    'SetIdentityDkimEnabledResponse' => [
      'base' => '<p>An empty element. Receiving this element indicates that the request completed successfully.</p>',
      'refs' => [],
    ],
    'SetIdentityFeedbackForwardingEnabledRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'SetIdentityFeedbackForwardingEnabledResponse' => [
      'base' => '<p>An empty element. Receiving this element indicates that the request completed successfully.</p>',
      'refs' => [],
    ],
    'SetIdentityNotificationTopicRequest' => [
      'base' => '<p>Represents a request to set or clear an identity\'s notification topic.</p>',
      'refs' => [],
    ],
    'SetIdentityNotificationTopicResponse' => [
      'base' => '<p>An empty element. Receiving this element indicates that the request completed successfully.</p>',
      'refs' => [],
    ],
    'Timestamp' => [
      'base' => NULL,
      'refs' => [
        'SendDataPoint$Timestamp' => '<p>Time of the data point.</p>',
      ],
    ],
    'VerificationAttributes' => [
      'base' => NULL,
      'refs' => [
        'GetIdentityVerificationAttributesResponse$VerificationAttributes' => '<p>A map of Identities to IdentityVerificationAttributes objects.</p>',
      ],
    ],
    'VerificationStatus' => [
      'base' => NULL,
      'refs' => [
        'IdentityDkimAttributes$DkimVerificationStatus' => '<p>Describes whether Amazon SES has successfully verified the DKIM DNS records (tokens] published in the domain name\'s DNS. (This only applies to domain identities, not email address identities.]</p>',
        'IdentityVerificationAttributes$VerificationStatus' => '<p>The verification status of the identity: "Pending", "Success", "Failed", or "TemporaryFailure".</p>',
      ],
    ],
    'VerificationToken' => [
      'base' => NULL,
      'refs' => [
        'IdentityVerificationAttributes$VerificationToken' => '<p>The verification token for a domain identity. Null for email address identities.</p>',
        'VerificationTokenList$member' => NULL,
        'VerifyDomainIdentityResponse$VerificationToken' => '<p>A TXT record that must be placed in the DNS settings for the domain, in order to complete domain verification.</p>',
      ],
    ],
    'VerificationTokenList' => [
      'base' => NULL,
      'refs' => [
        'IdentityDkimAttributes$DkimTokens' => '<p>A set of character strings that represent the domain\'s identity. Using these tokens, you will need to create DNS CNAME records that point to DKIM public keys hosted by Amazon SES. Amazon Web Services will eventually detect that you have updated your DNS records; this detection process may take up to 72 hours. Upon successful detection, Amazon SES will be able to DKIM-sign email originating from that domain. (This only applies to domain identities, not email address identities.]</p> <p>For more information about creating DNS records using DKIM tokens, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/easy-dkim-dns-records.html">Amazon SES Developer Guide</a>.</p>',
        'VerifyDomainDkimResponse$DkimTokens' => '<p>A set of character strings that represent the domain\'s identity. If the identity is an email address, the tokens represent the domain of that address.</p> <p>Using these tokens, you will need to create DNS CNAME records that point to DKIM public keys hosted by Amazon SES. Amazon Web Services will eventually detect that you have updated your DNS records; this detection process may take up to 72 hours. Upon successful detection, Amazon SES will be able to DKIM-sign emails originating from that domain.</p> <p>For more information about creating DNS records using DKIM tokens, go to the <a href="http://docs.aws.amazon.com/ses/latest/DeveloperGuide/easy-dkim-dns-records.html">Amazon SES Developer Guide</a>.</p>',
      ],
    ],
    'VerifyDomainDkimRequest' => [
      'base' => '<p>Represents a request instructing the service to begin DKIM verification for a domain.</p>',
      'refs' => [],
    ],
    'VerifyDomainDkimResponse' => [
      'base' => '<p>Represents the DNS records that must be published in the domain name\'s DNS to complete DKIM setup.</p>',
      'refs' => [],
    ],
    'VerifyDomainIdentityRequest' => [
      'base' => '<p>Represents a request instructing the service to begin domain verification.</p>',
      'refs' => [],
    ],
    'VerifyDomainIdentityResponse' => [
      'base' => '<p>Represents a token used for domain ownership verification.</p>',
      'refs' => [],
    ],
    'VerifyEmailAddressRequest' => [
      'base' => '<p>Represents a request instructing the service to begin email address verification.</p>',
      'refs' => [],
    ],
    'VerifyEmailIdentityRequest' => [
      'base' => '<p>Represents a request instructing the service to begin email address verification.</p>',
      'refs' => [],
    ],
    'VerifyEmailIdentityResponse' => [
      'base' => '<p>An empty element. Receiving this element indicates that the request completed successfully.</p>',
      'refs' => [],
    ],
  ],
];
