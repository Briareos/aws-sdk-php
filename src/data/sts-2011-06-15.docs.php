<?php return [
  'operations' => [
    'AssumeRole' => '<p>Returns a set of temporary security credentials (consisting of an access key ID, a secret access key, and a security token] that you can use to access AWS resources that you might not normally have access to. Typically, you use <code>AssumeRole</code> for cross-account access or federation. </p> <p><b>Important:</b> You cannot call <code>AssumeRole</code> by using AWS account credentials; access will be denied. You must use IAM user credentials or temporary security credentials to call <code>AssumeRole</code>. </p> <p>For cross-account access, imagine that you own multiple accounts and need to access resources in each account. You could create long-term credentials in each account to access those resources. However, managing all those credentials and remembering which one can access which account can be time consuming. Instead, you can create one set of long-term credentials in one account and then use temporary security credentials to access all the other accounts by assuming roles in those accounts. For more information about roles, see <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/WorkingWithRoles.html">Roles</a> in <i>Using IAM</i>. </p> <p>For federation, you can, for example, grant single sign-on access to the AWS Management Console. If you already have an identity and authentication system in your corporate network, you don\'t have to recreate user identities in AWS in order to grant those user identities access to AWS. Instead, after a user has been authenticated, you call <code>AssumeRole</code> (and specify the role with the appropriate permissions] to get temporary security credentials for that user. With those temporary security credentials, you construct a sign-in URL that users can use to access the console. For more information, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/STSUseCases.html">Scenarios for Granting Temporary Access</a> in <i>Using Temporary Security Credentials</i>. </p> <p>The temporary security credentials are valid for the duration that you specified when calling <code>AssumeRole</code>, which can be from 900 seconds (15 minutes] to 3600 seconds (1 hour]. The default is 1 hour. </p> <p>Optionally, you can pass an IAM access policy to this operation. If you choose not to pass a policy, the temporary security credentials that are returned by the operation have the permissions that are defined in the access policy of the role that is being assumed. If you pass a policy to this operation, the temporary security credentials that are returned by the operation have the permissions that are allowed by both the access policy of the role that is being assumed, <i><b>and</b></i> the policy that you pass. This gives you a way to further restrict the permissions for the resulting temporary security credentials. You cannot use the passed policy to grant permissions that are in excess of those allowed by the access policy of the role that is being assumed. For more information, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/permissions-assume-role.html">Permissions for AssumeRole</a> in <i>Using Temporary Security Credentials</i>.</p> <p>To assume a role, your AWS account must be trusted by the role. The trust relationship is defined in the role\'s trust policy when the role is created. You must also have a policy that allows you to call <code>sts:AssumeRole</code>. </p> <p> <b>Using MFA with AssumeRole</b> </p> <p>You can optionally include multi-factor authentication (MFA] information when you call <code>AssumeRole</code>. This is useful for cross-account scenarios in which you want to make sure that the user who is assuming the role has been authenticated using an AWS MFA device. In that scenario, the trust policy of the role being assumed includes a condition that tests for MFA authentication; if the caller does not include valid MFA information, the request to assume the role is denied. The condition in a trust policy that tests for MFA authentication might look like the following example.</p> <p> <code>"Condition": {"Null": {"aws:MultiFactorAuthAge": false}}</code> </p> <p>For more information, see <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/MFAProtectedAPI.html">Configuring MFA-Protected API Access</a> in the <i>Using IAM</i> guide. </p> <p>To use MFA with <code>AssumeRole</code>, you pass values for the <code>SerialNumber</code> and <code>TokenCode</code> parameters. The <code>SerialNumber</code> value identifies the user\'s hardware or virtual MFA device. The <code>TokenCode</code> is the time-based one-time password (TOTP] that the MFA devices produces. </p> <member name="RoleArn" target="arnType"></member> <member name="RoleSessionName" target="userNameType"></member> <member name="Policy" target="sessionPolicyDocumentType"></member> <member name="DurationSeconds" target="roleDurationSecondsType"></member> <member name="ExternalId" target="externalIdType"></member>',
    'AssumeRoleWithSAML' => '<p>Returns a set of temporary security credentials for users who have been authenticated via a SAML authentication response. This operation provides a mechanism for tying an enterprise identity store or directory to role-based AWS access without user-specific credentials or configuration. </p> <p>The temporary security credentials returned by this operation consist of an access key ID, a secret access key, and a security token. Applications can use these temporary security credentials to sign calls to AWS services. The credentials are valid for the duration that you specified when calling <code>AssumeRoleWithSAML</code>, which can be up to 3600 seconds (1 hour] or until the time specified in the SAML authentication response\'s <code>NotOnOrAfter</code> value, whichever is shorter.</p> <p>Optionally, you can pass an IAM access policy to this operation. If you choose not to pass a policy, the temporary security credentials that are returned by the operation have the permissions that are defined in the access policy of the role that is being assumed. If you pass a policy to this operation, the temporary security credentials that are returned by the operation have the permissions that are allowed by both the access policy of the role that is being assumed, <i><b>and</b></i> the policy that you pass. This gives you a way to further restrict the permissions for the resulting temporary security credentials. You cannot use the passed policy to grant permissions that are in excess of those allowed by the access policy of the role that is being assumed. For more information, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/permissions-assume-role.html">Permissions for AssumeRoleWithSAML</a> in <i>Using Temporary Security Credentials</i>.</p> <p>Before your application can call <code>AssumeRoleWithSAML</code>, you must configure your SAML identity provider (IdP] to issue the claims required by AWS. Additionally, you must use AWS Identity and Access Management (IAM] to create a SAML provider entity in your AWS account that represents your identity provider, and create an IAM role that specifies this SAML provider in its trust policy. </p> <p>Calling <code>AssumeRoleWithSAML</code> does not require the use of AWS security credentials. The identity of the caller is validated by using keys in the metadata document that is uploaded for the SAML provider entity for your identity provider. </p> <p>For more information, see the following resources:</p> <ul> <li> <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/CreatingSAML.html">Creating Temporary Security Credentials for SAML Federation</a> in <i>Using Temporary Security Credentials</i>. </li> <li> <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/idp-managing-identityproviders.html">SAML Providers</a> in <i>Using IAM</i>. </li> <li> <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/create-role-saml-IdP-tasks.html">Configuring a Relying Party and Claims</a> in <i>Using IAM</i>. </li> <li> <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/create-role-saml.html">Creating a Role for SAML-Based Federation</a> in <i>Using IAM</i>. </li> </ul> <member name="RoleArn" target="arnType"></member> <member name="SAMLAssertion" target="SAMLAssertionType"></member> <member name="Policy" target="sessionPolicyDocumentType"></member> <member name="DurationSeconds" target="roleDurationSecondsType"></member>',
    'AssumeRoleWithWebIdentity' => '<p>Returns a set of temporary security credentials for users who have been authenticated in a mobile or web application with a web identity provider, such as Login with Amazon, Amazon Cognito, Facebook, or Google. </p> <p>Calling <code>AssumeRoleWithWebIdentity</code> does not require the use of AWS security credentials. Therefore, you can distribute an application (for example, on mobile devices] that requests temporary security credentials without including long-term AWS credentials in the application, and without deploying server-based proxy services that use long-term AWS credentials. Instead, the identity of the caller is validated by using a token from the web identity provider. </p> <p>The temporary security credentials returned by this API consist of an access key ID, a secret access key, and a security token. Applications can use these temporary security credentials to sign calls to AWS service APIs. The credentials are valid for the duration that you specified when calling <code>AssumeRoleWithWebIdentity</code>, which can be from 900 seconds (15 minutes] to 3600 seconds (1 hour]. By default, the temporary security credentials are valid for 1 hour. </p> <p>Optionally, you can pass an IAM access policy to this operation. If you choose not to pass a policy, the temporary security credentials that are returned by the operation have the permissions that are defined in the access policy of the role that is being assumed. If you pass a policy to this operation, the temporary security credentials that are returned by the operation have the permissions that are allowed by both the access policy of the role that is being assumed, <i><b>and</b></i> the policy that you pass. This gives you a way to further restrict the permissions for the resulting temporary security credentials. You cannot use the passed policy to grant permissions that are in excess of those allowed by the access policy of the role that is being assumed. For more information, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/permissions-assume-role.html">Permissions for AssumeRoleWithWebIdentity</a> in <i>Using Temporary Security Credentials</i>.</p> <p>Before your application can call <code>AssumeRoleWithWebIdentity</code>, you must have an identity token from a supported identity provider and create a role that the application can assume. The role that your application assumes must trust the identity provider that is associated with the identity token. In other words, the identity provider must be specified in the role\'s trust policy. </p> <p>For more information about how to use web identity federation and the <code>AssumeRoleWithWebIdentity</code>, see the following resources: </p> <ul> <li> <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/STSUseCases.html#MobileApplication-KnownProvider" target="_blank"> Creating a Mobile Application with Third-Party Sign-In</a> and <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/CreatingWIF.html" target="_blank"> Creating Temporary Security Credentials for Mobile Apps Using Third-Party Identity Providers</a> in <i>Using Temporary Security Credentials</i>. </li> <li> <a href="https://web-identity-federation-playground.s3.amazonaws.com/index.html" target="_blank"> Web Identity Federation Playground</a>. This interactive website lets you walk through the process of authenticating via Login with Amazon, Facebook, or Google, getting temporary security credentials, and then using those credentials to make a request to AWS. </li> <li> <a href="http://aws.amazon.com/sdkforios/">AWS SDK for iOS</a> and <a href="http://aws.amazon.com/sdkforandroid/" target="_blank">AWS SDK for Android</a>. These toolkits contain sample apps that show how to invoke the identity providers, and then how to use the information from these providers to get and use temporary security credentials. </li> <li> <a href="http://aws.amazon.com/articles/4617974389850313" target="_blank">Web Identity Federation with Mobile Applications</a>. This article discusses web identity federation and shows an example of how to use web identity federation to get access to content in Amazon S3. </li> </ul> <member name="RoleArn" target="arnType"></member> <member name="RoleSessionName" target="userNameType"></member> <member name="WebIdentityToken" target="clientTokenType"></member> <member name="ProviderId" target="urlType"></member> <member name="Policy" target="sessionPolicyDocumentType"></member> <member name="DurationSeconds" target="roleDurationSecondsType"></member>',
    'DecodeAuthorizationMessage' => '<p>Decodes additional information about the authorization status of a request from an encoded message returned in response to an AWS request. </p> <p>For example, if a user is not authorized to perform an action that he or she has requested, the request returns a <code>Client.UnauthorizedOperation</code> response (an HTTP 403 response]. Some AWS actions additionally return an encoded message that can provide details about this authorization failure. </p> <p>The message is encoded because the details of the authorization status can constitute privileged information that the user who requested the action should not see. To decode an authorization status message, a user must be granted permissions via an IAM policy to request the <code>DecodeAuthorizationMessage</code> (<code>sts:DecodeAuthorizationMessage</code>] action. </p> <p>The decoded message includes the following type of information: </p> <ul> <li>Whether the request was denied due to an explicit deny or due to the absence of an explicit allow. For more information, see <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/AccessPolicyLanguage_EvaluationLogic.html#policy-eval-denyallow">Determining Whether a Request is Allowed or Denied</a> in <i>Using IAM</i>. </li> <li>The principal who made the request.</li> <li>The requested action.</li> <li>The requested resource.</li> <li>The values of condition keys in the context of the user\'s request.</li> </ul>',
    'GetFederationToken' => '<p>Returns a set of temporary security credentials (consisting of an access key ID, a secret access key, and a security token] for a federated user. A typical use is in a proxy application that gets temporary security credentials on behalf of distributed applications inside a corporate network. Because you must call the <code>GetFederationToken</code> action using the long-term security credentials of an IAM user, this call is appropriate in contexts where those credentials can be safely stored, usually in a server-based application.</p> <p> <b>Note:</b> Do not use this call in mobile applications or client-based web applications that directly get temporary security credentials. For those types of applications, use <code>AssumeRoleWithWebIdentity</code>.</p> <p>The <code>GetFederationToken</code> action must be called by using the long-term AWS security credentials of an IAM user. You can also call <code>GetFederationToken</code> using the security credentials of an AWS account (root], but this is not recommended. Instead, we recommend that you create an IAM user for the purpose of the proxy application and then attach a policy to the IAM user that limits federated users to only the actions and resources they need access to. For more information, see <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/IAMBestPractices.html">IAM Best Practices</a> in <i>Using IAM</i>. </p> <p>The temporary security credentials that are obtained by using the long-term credentials of an IAM user are valid for the specified duration, between 900 seconds (15 minutes] and 129600 seconds (36 hours]. Temporary credentials that are obtained by using AWS account (root] credentials have a maximum duration of 3600 seconds (1 hour]</p> <p> <b>Permissions</b> </p> <p>The permissions for the temporary security credentials returned by <code>GetFederationToken</code> are determined by a combination of the following: </p> <ul> <li>The policy or policies that are attached to the IAM user whose credentials are used to call <code>GetFederationToken</code>.</li> <li>The policy that is passed as a parameter in the call.</li> </ul> <p>The passed policy is attached to the temporary security credentials that result from the <code>GetFederationToken</code> API call--that is, to the <i>federated user</i>. When the federated user makes an AWS request, AWS evaluates the policy attached to the federated user in combination with the policy or policies attached to the IAM user whose credentials were used to call <code>GetFederationToken</code>. AWS allows the federated user\'s request only when both the federated user <i><b>and</b></i> the IAM user are explicitly allowed to perform the requested action. The passed policy cannot grant more permissions than those that are defined in the IAM user policy.</p> <p>A typical use case is that the permissions of the IAM user whose credentials are used to call <code>GetFederationToken</code> are designed to allow access to all the actions and resources that any federated user will need. Then, for individual users, you pass a policy to the operation that scopes down the permissions to a level that\'s appropriate to that individual user, using a policy that allows only a subset of permissions that are granted to the IAM user. </p> <p>If you do not pass a policy, the resulting temporary security credentials have no effective permissions. The only exception is when the temporary security credentials are used to access a resource that has a resource-based policy that specifically allows the federated user to access the resource. </p> <p>For more information about how permissions work, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/permissions-get-federation-token.html">Permissions for GetFederationToken</a> in <i>Using Temporary Security Credentials</i>. For information about using <code>GetFederationToken</code> to create temporary security credentials, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/CreatingFedTokens.html">Creating Temporary Credentials to Enable Access for Federated Users</a> in <i>Using Temporary Security Credentials</i>. </p>',
    'GetSessionToken' => '<p>Returns a set of temporary credentials for an AWS account or IAM user. The credentials consist of an access key ID, a secret access key, and a security token. Typically, you use <code>GetSessionToken</code> if you want to use MFA to protect programmatic calls to specific AWS APIs like Amazon EC2 <code>StopInstances</code>. MFA-enabled IAM users would need to call <code>GetSessionToken</code> and submit an MFA code that is associated with their MFA device. Using the temporary security credentials that are returned from the call, IAM users can then make programmatic calls to APIs that require MFA authentication. </p> <p>The <code>GetSessionToken</code> action must be called by using the long-term AWS security credentials of the AWS account or an IAM user. Credentials that are created by IAM users are valid for the duration that you specify, between 900 seconds (15 minutes] and 129600 seconds (36 hours]; credentials that are created by using account credentials have a maximum duration of 3600 seconds (1 hour]. </p> <p>The permissions associated with the temporary security credentials returned by <code>GetSessionToken</code> are based on the permissions associated with account or IAM user whose credentials are used to call the action. If <code>GetSessionToken</code> is called using root account credentials, the temporary credentials have root account permissions. Similarly, if <code>GetSessionToken</code> is called using the credentials of an IAM user, the temporary credentials have the same permissions as the IAM user. </p> <p>For more information about using <code>GetSessionToken</code> to create temporary credentials, go to <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/CreatingSessionTokens.html" target="_blank">Creating Temporary Credentials to Enable Access for IAM Users</a> in <i>Using Temporary Security Credentials</i>. </p>',
  ],
  'service' => '<fullname>AWS Security Token Service</fullname> <p>The AWS Security Token Service (STS] is a web service that enables you to request temporary, limited-privilege credentials for AWS Identity and Access Management (IAM] users or for users that you authenticate (federated users]. This guide provides descriptions of the STS API. For more detailed information about using this service, go to <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/Welcome.html" target="_blank">Using Temporary Security Credentials</a>. </p> <p>For information about setting up signatures and authorization through the API, go to <a href="http://docs.aws.amazon.com/general/latest/gr/signing_aws_api_requests.html" target="_blank">Signing AWS API Requests</a> in the <i>AWS General Reference</i>. For general information about the Query API, go to <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/IAM_UsingQueryAPI.html" target="_blank">Making Query Requests</a> in <i>Using IAM</i>. For information about using security tokens with other AWS products, go to <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/UsingTokens.html">Using Temporary Security Credentials to Access AWS</a> in <i>Using Temporary Security Credentials</i>. </p> <p>If you\'re new to AWS and need additional technical information about a specific AWS product, you can find the product\'s technical documentation at <a href="http://aws.amazon.com/documentation/" target="_blank">http://aws.amazon.com/documentation/</a>. </p> <p> <b>Endpoints</b> </p> <p>For information about STS endpoints, see <a href="http://docs.aws.amazon.com/general/latest/gr/rande.html#sts_region" target="_blank">Regions and Endpoints</a> in the <i>AWS General Reference</i>.</p> <p> <b>Recording API requests</b> </p> <p>STS supports AWS CloudTrail, which is a service that records AWS calls for your AWS account and delivers log files to an Amazon S3 bucket. By using information collected by CloudTrail, you can determine what requests were successfully made to STS, who made the request, when it was made, and so on. To learn more about CloudTrail, including how to turn it on and find your log files, see the <a href="http://docs.aws.amazon.com/awscloudtrail/latest/userguide/what_is_cloud_trail_top_level.html">AWS CloudTrail User Guide</a>.</p>',
  'shapes' => [
    'AssumeRoleRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AssumeRoleResponse' => [
      'base' => '<p>Contains the result of a successful call to the <a>AssumeRole</a> action, including temporary AWS credentials that can be used to make AWS requests. </p>',
      'refs' => [],
    ],
    'AssumeRoleWithSAMLRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AssumeRoleWithSAMLResponse' => [
      'base' => '<p>Contains the result of a successful call to the <a>AssumeRoleWithSAML</a> action, including temporary AWS credentials that can be used to make AWS requests. </p>',
      'refs' => [],
    ],
    'AssumeRoleWithWebIdentityRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AssumeRoleWithWebIdentityResponse' => [
      'base' => '<p>Contains the result of a successful call to the <a>AssumeRoleWithWebIdentity</a> action, including temporary AWS credentials that can be used to make AWS requests. </p>',
      'refs' => [],
    ],
    'AssumedRoleUser' => [
      'base' => '<p>The identifiers for the temporary security credentials that the operation returns. </p>',
      'refs' => [
        'AssumeRoleResponse$AssumedRoleUser' => '<p>The Amazon Resource Name (ARN] and the assumed role ID, which are identifiers that you can use to refer to the resulting temporary security credentials. For example, you can reference these credentials as a principal in a resource-based policy by using the ARN or assumed role ID. The ARN and ID include the <code>RoleSessionName</code> that you specified when you called <code>AssumeRole</code>. </p>',
        'AssumeRoleWithSAMLResponse$AssumedRoleUser' => NULL,
        'AssumeRoleWithWebIdentityResponse$AssumedRoleUser' => '<p>The Amazon Resource Name (ARN] and the assumed role ID, which are identifiers that you can use to refer to the resulting temporary security credentials. For example, you can reference these credentials as a principal in a resource-based policy by using the ARN or assumed role ID. The ARN and ID include the <code>RoleSessionName</code> that you specified when you called <code>AssumeRole</code>. </p>',
      ],
    ],
    'Audience' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithSAMLResponse$Audience' => '<p> The value of the <code>Recipient</code> attribute of the <code>SubjectConfirmationData</code> element of the SAML assertion. </p>',
        'AssumeRoleWithWebIdentityResponse$Audience' => '<p> The intended audience of the web identity token. This is traditionally the client identifier issued to the application that requested the web identity token.</p>',
      ],
    ],
    'Credentials' => [
      'base' => '<p>AWS credentials for API authentication.</p>',
      'refs' => [
        'AssumeRoleResponse$Credentials' => '<p>The temporary security credentials, which include an access key ID, a secret access key, and a security (or session] token.</p>',
        'AssumeRoleWithSAMLResponse$Credentials' => NULL,
        'AssumeRoleWithWebIdentityResponse$Credentials' => '<p>The temporary security credentials, which include an access key ID, a secret access key, and a security token.</p>',
        'GetFederationTokenResponse$Credentials' => '<p>Credentials for the service API authentication. </p>',
        'GetSessionTokenResponse$Credentials' => '<p>The session credentials for API authentication. </p>',
      ],
    ],
    'DecodeAuthorizationMessageRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DecodeAuthorizationMessageResponse' => [
      'base' => '<p>A document that contains additional information about the authorization status of a request from an encoded message that is returned in response to an AWS request. </p>',
      'refs' => [],
    ],
    'ExpiredTokenException' => [
      'base' => '<p>The web identity token that was passed is expired or is not valid. Get a new identity token from the identity provider and then retry the request. </p>',
      'refs' => [],
    ],
    'FederatedUser' => [
      'base' => '<p>Identifiers for the federated user that is associated with the credentials.</p>',
      'refs' => [
        'GetFederationTokenResponse$FederatedUser' => '<p>Identifiers for the federated user associated with the credentials (such as <code>arn:aws:sts::123456789012:federated-user/Bob</code> or <code>123456789012:Bob</code>]. You can use the federated user\'s ARN in your resource-based policies, such as an Amazon S3 bucket policy. </p>',
      ],
    ],
    'GetFederationTokenRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetFederationTokenResponse' => [
      'base' => '<p>Contains the result of a successful call to the <a>GetFederationToken</a> action, including temporary AWS credentials that can be used to make AWS requests. </p>',
      'refs' => [],
    ],
    'GetSessionTokenRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetSessionTokenResponse' => [
      'base' => '<p>Contains the result of a successful call to the <a>GetSessionToken</a> action, including temporary AWS credentials that can be used to make AWS requests. </p>',
      'refs' => [],
    ],
    'IDPCommunicationErrorException' => [
      'base' => '<p>The request could not be fulfilled because the non-AWS identity provider (IDP] that was asked to verify the incoming identity token could not be reached. This is often a transient error caused by network conditions. Retry the request a limited number of times so that you don\'t exceed the request rate. If the error persists, the non-AWS identity provider might be down or not responding. </p>',
      'refs' => [],
    ],
    'IDPRejectedClaimException' => [
      'base' => '<p>The identity provider (IdP] reported that authentication failed. This might be because the claim is invalid.</p> <p>If this error is returned for the <code>AssumeRoleWithWebIdentity</code> operation, it can also mean that the claim has expired or has been explicitly revoked. </p>',
      'refs' => [],
    ],
    'InvalidAuthorizationMessageException' => [
      'base' => '<p>The error returned if the message passed to <code>DecodeAuthorizationMessage</code> was invalid. This can happen if the token contains invalid characters, such as linebreaks. </p>',
      'refs' => [],
    ],
    'InvalidIdentityTokenException' => [
      'base' => '<p>The web identity token that was passed could not be validated by AWS. Get a new identity token from the identity provider and then retry the request. </p>',
      'refs' => [],
    ],
    'Issuer' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithSAMLResponse$Issuer' => '<p>The value of the <code>Issuer</code> element of the SAML assertion.</p>',
        'AssumeRoleWithWebIdentityResponse$Provider' => '<p> The issuing authority of the web identity token presented. For OpenID Connect ID Tokens this contains the value of the <code>iss</code> field. For OAuth 2.0 Access Tokens, this contains the value of the <code>ProviderId</code> parameter that was passed in the <code>AssumeRoleWithWebIdentity</code> request.</p>',
      ],
    ],
    'MalformedPolicyDocumentException' => [
      'base' => '<p>The request was rejected because the policy document was malformed. The error message describes the specific error.</p>',
      'refs' => [],
    ],
    'NameQualifier' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithSAMLResponse$NameQualifier' => '<p>A hash value based on the concatenation of the <code>Issuer</code> response value, the AWS account ID, and the friendly name (the last part of the ARN] of the SAML provider in IAM. The combination of <code>NameQualifier</code> and <code>Subject</code> can be used to uniquely identify a federated user. </p> <p>The following pseudocode shows how the hash value is calculated:</p> <p> <code>BASE64 ( SHA1 ( "https://example.com/saml" + "123456789012" + "/MySAMLIdP" ] ]</code> </p>',
      ],
    ],
    'PackedPolicyTooLargeException' => [
      'base' => '<p>The request was rejected because the policy document was too large. The error message describes how big the policy document is, in packed form, as a percentage of what the API allows.</p>',
      'refs' => [],
    ],
    'SAMLAssertionType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithSAMLRequest$SAMLAssertion' => '<p>The base-64 encoded SAML authentication response provided by the IdP.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/create-role-saml-IdP-tasks.html">Configuring a Relying Party and Adding Claims</a> in the <i>Using IAM</i> guide. </p>',
      ],
    ],
    'Subject' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithSAMLResponse$Subject' => '<p>The value of the <code>NameID</code> element in the <code>Subject</code> element of the SAML assertion.</p>',
      ],
    ],
    'SubjectType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithSAMLResponse$SubjectType' => '<p> The format of the name ID, as defined by the <code>Format</code> attribute in the <code>NameID</code> element of the SAML assertion. Typical examples of the format are <code>transient</code> or <code>persistent</code>. </p> <p> If the format includes the prefix <code>urn:oasis:names:tc:SAML:2.0:nameid-format</code>, that prefix is removed. For example, <code>urn:oasis:names:tc:SAML:2.0:nameid-format:transient</code> is returned as <code>transient</code>. If the format includes any other prefix, the format is returned with no modifications.</p>',
      ],
    ],
    'accessKeyIdType' => [
      'base' => NULL,
      'refs' => [
        'Credentials$AccessKeyId' => '<p>The access key ID that identifies the temporary security credentials.</p>',
      ],
    ],
    'accessKeySecretType' => [
      'base' => NULL,
      'refs' => [
        'Credentials$SecretAccessKey' => '<p>The secret access key that can be used to sign requests.</p>',
      ],
    ],
    'arnType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleRequest$RoleArn' => '<p>The Amazon Resource Name (ARN] of the role that the caller is assuming.</p>',
        'AssumeRoleWithSAMLRequest$RoleArn' => '<p>The Amazon Resource Name (ARN] of the role that the caller is assuming.</p>',
        'AssumeRoleWithSAMLRequest$PrincipalArn' => '<p>The Amazon Resource Name (ARN] of the SAML provider in IAM that describes the IdP.</p>',
        'AssumeRoleWithWebIdentityRequest$RoleArn' => '<p>The Amazon Resource Name (ARN] of the role that the caller is assuming.</p>',
        'AssumedRoleUser$Arn' => '<p>The ARN of the temporary security credentials that are returned from the <a>AssumeRole</a> action. For more information about ARNs and how to use them in policies, see <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/Using_Identifiers.html" target="_blank"> Identifiers for IAM Entities </a> in <i>Using IAM</i>. </p>',
        'FederatedUser$Arn' => '<p>The ARN that specifies the federated user that is associated with the credentials. For more information about ARNs and how to use them in policies, see <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/Using_Identifiers.html" target="_blank">Identifiers for IAM Entities</a> in <i>Using IAM</i>. </p>',
      ],
    ],
    'assumedRoleIdType' => [
      'base' => NULL,
      'refs' => [
        'AssumedRoleUser$AssumedRoleId' => '<p>A unique identifier that contains the role ID and the role session name of the role that is being assumed. The role ID is generated by AWS when the role is created.</p>',
      ],
    ],
    'clientTokenType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithWebIdentityRequest$WebIdentityToken' => '<p>The OAuth 2.0 access token or OpenID Connect ID token that is provided by the identity provider. Your application must get this token by authenticating the user who is using your application with a web identity provider before the application makes an <code>AssumeRoleWithWebIdentity</code> call. </p>',
      ],
    ],
    'dateType' => [
      'base' => NULL,
      'refs' => [
        'Credentials$Expiration' => '<p>The date on which the current credentials expire.</p>',
      ],
    ],
    'decodedMessageType' => [
      'base' => NULL,
      'refs' => [
        'DecodeAuthorizationMessageResponse$DecodedMessage' => '<p>An XML document that contains the decoded message. For more information, see <code>DecodeAuthorizationMessage</code>. </p>',
      ],
    ],
    'durationSecondsType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithSAMLRequest$DurationSeconds' => '<p>The duration, in seconds, of the role session. The value can range from 900 seconds (15 minutes] to 3600 seconds (1 hour]. By default, the value is set to 3600 seconds. An expiration can also be specified in the SAML authentication response\'s <code>NotOnOrAfter</code> value. The actual expiration time is whichever value is shorter. </p>',
        'AssumeRoleWithWebIdentityRequest$DurationSeconds' => '<p>The duration, in seconds, of the role session. The value can range from 900 seconds (15 minutes] to 3600 seconds (1 hour]. By default, the value is set to 3600 seconds. </p>',
        'GetFederationTokenRequest$DurationSeconds' => '<p>The duration, in seconds, that the session should last. Acceptable durations for federation sessions range from 900 seconds (15 minutes] to 129600 seconds (36 hours], with 43200 seconds (12 hours] as the default. Sessions obtained using AWS account (root] credentials are restricted to a maximum of 3600 seconds (one hour]. If the specified duration is longer than one hour, the session obtained by using AWS account (root] credentials defaults to one hour. </p>',
        'GetSessionTokenRequest$DurationSeconds' => '<p>The duration, in seconds, that the credentials should remain valid. Acceptable durations for IAM user sessions range from 900 seconds (15 minutes] to 129600 seconds (36 hours], with 43200 seconds (12 hours] as the default. Sessions for AWS account owners are restricted to a maximum of 3600 seconds (one hour]. If the duration is longer than one hour, the session for AWS account owners defaults to one hour. </p>',
      ],
    ],
    'encodedMessageType' => [
      'base' => NULL,
      'refs' => [
        'DecodeAuthorizationMessageRequest$EncodedMessage' => '<p>The encoded message that was returned with the response.</p>',
      ],
    ],
    'expiredIdentityTokenMessage' => [
      'base' => NULL,
      'refs' => [
        'ExpiredTokenException$message' => NULL,
      ],
    ],
    'externalIdType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleRequest$ExternalId' => '<p>A unique identifier that is used by third parties to assume a role in their customers\' accounts. For each role that the third party can assume, they should instruct their customers to create a role with the external ID that the third party generated. Each time the third party assumes the role, they must pass the customer\'s external ID. The external ID is useful in order to help third parties bind a role to the customer who created it. For more information about the external ID, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/sts-delegating-externalid.html" target="_blank">About the External ID</a> in <i>Using Temporary Security Credentials</i>. </p>',
      ],
    ],
    'federatedIdType' => [
      'base' => NULL,
      'refs' => [
        'FederatedUser$FederatedUserId' => '<p>The string that identifies the federated user associated with the credentials, similar to the unique ID of an IAM user.</p>',
      ],
    ],
    'idpCommunicationErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'IDPCommunicationErrorException$message' => NULL,
      ],
    ],
    'idpRejectedClaimMessage' => [
      'base' => NULL,
      'refs' => [
        'IDPRejectedClaimException$message' => NULL,
      ],
    ],
    'invalidAuthorizationMessage' => [
      'base' => NULL,
      'refs' => [
        'InvalidAuthorizationMessageException$message' => '<p>The error message associated with the error.</p>',
      ],
    ],
    'invalidIdentityTokenMessage' => [
      'base' => NULL,
      'refs' => [
        'InvalidIdentityTokenException$message' => NULL,
      ],
    ],
    'malformedPolicyDocumentMessage' => [
      'base' => NULL,
      'refs' => [
        'MalformedPolicyDocumentException$message' => NULL,
      ],
    ],
    'nonNegativeIntegerType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleResponse$PackedPolicySize' => '<p>A percentage value that indicates the size of the policy in packed form. The service rejects any policy with a packed size greater than 100 percent, which means the policy exceeded the allowed space. </p>',
        'AssumeRoleWithSAMLResponse$PackedPolicySize' => '<p>A percentage value that indicates the size of the policy in packed form. The service rejects any policy with a packed size greater than 100 percent, which means the policy exceeded the allowed space. </p>',
        'AssumeRoleWithWebIdentityResponse$PackedPolicySize' => '<p>A percentage value that indicates the size of the policy in packed form. The service rejects any policy with a packed size greater than 100 percent, which means the policy exceeded the allowed space. </p>',
        'GetFederationTokenResponse$PackedPolicySize' => '<p>A percentage value indicating the size of the policy in packed form. The service rejects policies for which the packed size is greater than 100 percent of the allowed value. </p>',
      ],
    ],
    'packedPolicyTooLargeMessage' => [
      'base' => NULL,
      'refs' => [
        'PackedPolicyTooLargeException$message' => NULL,
      ],
    ],
    'roleDurationSecondsType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleRequest$DurationSeconds' => '<p>The duration, in seconds, of the role session. The value can range from 900 seconds (15 minutes] to 3600 seconds (1 hour]. By default, the value is set to 3600 seconds. </p>',
      ],
    ],
    'serialNumberType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleRequest$SerialNumber' => '<p>The identification number of the MFA device that is associated with the user who is making the <code>AssumeRole</code> call. Specify this value if the trust policy of the role being assumed includes a condition that requires MFA authentication. The value is either the serial number for a hardware device (such as <code>GAHT12345678</code>] or an Amazon Resource Name (ARN] for a virtual device (such as <code>arn:aws:iam::123456789012:mfa/user</code>]. </p>',
        'GetSessionTokenRequest$SerialNumber' => '<p>The identification number of the MFA device that is associated with the IAM user who is making the <code>GetSessionToken</code> call. Specify this value if the IAM user has a policy that requires MFA authentication. The value is either the serial number for a hardware device (such as <code>GAHT12345678</code>] or an Amazon Resource Name (ARN] for a virtual device (such as <code>arn:aws:iam::123456789012:mfa/user</code>]. You can find the device for an IAM user by going to the AWS Management Console and viewing the user\'s security credentials. </p>',
      ],
    ],
    'sessionPolicyDocumentType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleRequest$Policy' => '<p>An IAM policy in JSON format.</p> <p>The policy parameter is optional. If you pass a policy, the temporary security credentials that are returned by the operation have the permissions that are allowed by both the access policy of the role that is being assumed, <i><b>and</b></i> the policy that you pass. This gives you a way to further restrict the permissions for the resulting temporary security credentials. You cannot use the passed policy to grant permissions that are in excess of those allowed by the access policy of the role that is being assumed. For more information, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/permissions-assume-role.html">Permissions for AssumeRole</a> in <i>Using Temporary Security Credentials</i>. </p>',
        'AssumeRoleWithSAMLRequest$Policy' => '<p>An IAM policy in JSON format.</p> <p>The policy parameter is optional. If you pass a policy, the temporary security credentials that are returned by the operation have the permissions that are allowed by both the access policy of the role that is being assumed, <i><b>and</b></i> the policy that you pass. This gives you a way to further restrict the permissions for the resulting temporary security credentials. You cannot use the passed policy to grant permissions that are in excess of those allowed by the access policy of the role that is being assumed. For more information, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/permissions-assume-role.html">Permissions for AssumeRoleWithSAML</a> in <i>Using Temporary Security Credentials</i>. </p>',
        'AssumeRoleWithWebIdentityRequest$Policy' => '<p>An IAM policy in JSON format.</p> <p>The policy parameter is optional. If you pass a policy, the temporary security credentials that are returned by the operation have the permissions that are allowed by both the access policy of the role that is being assumed, <i><b>and</b></i> the policy that you pass. This gives you a way to further restrict the permissions for the resulting temporary security credentials. You cannot use the passed policy to grant permissions that are in excess of those allowed by the access policy of the role that is being assumed. For more information, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/permissions-assume-role.html">Permissions for AssumeRoleWithWebIdentity</a> in <i>Using Temporary Security Credentials</i>. </p>',
        'GetFederationTokenRequest$Policy' => '<p>An IAM policy in JSON format that is passed with the <code>GetFederationToken</code> call and evaluated along with the policy or policies that are attached to the IAM user whose credentials are used to call <code>GetFederationToken</code>. The passed policy is used to scope down the permissions that are available to the IAM user, by allowing only a subset of the permissions that are granted to the IAM user. The passed policy cannot grant more permissions than those granted to the IAM user. The final permissions for the federated user are the most restrictive set based on the intersection of the passed policy and the IAM user policy.</p> <p>If you do not pass a policy, the resulting temporary security credentials have no effective permissions. The only exception is when the temporary security credentials are used to access a resource that has a resource-based policy that specifically allows the federated user to access the resource. </p> <p>For more information about how permissions work, see <a href="http://docs.aws.amazon.com/STS/latest/UsingSTS/permissions-get-federation-token.html">Permissions for GetFederationToken</a> in <i>Using Temporary Security Credentials</i>.</p>',
      ],
    ],
    'tokenCodeType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleRequest$TokenCode' => '<p>The value provided by the MFA device, if the trust policy of the role being assumed requires MFA (that is, if the policy includes a condition that tests for MFA]. If the role being assumed requires MFA and if the <code>TokenCode</code> value is missing or expired, the <code>AssumeRole</code> call returns an "access denied" error. </p>',
        'GetSessionTokenRequest$TokenCode' => '<p>The value provided by the MFA device, if MFA is required. If any policy requires the IAM user to submit an MFA code, specify this value. If MFA authentication is required, and the user does not provide a code when requesting a set of temporary security credentials, the user will receive an "access denied" response when requesting resources that require MFA authentication.</p>',
      ],
    ],
    'tokenType' => [
      'base' => NULL,
      'refs' => [
        'Credentials$SessionToken' => '<p>The token that users must pass to the service API to use the temporary credentials.</p>',
      ],
    ],
    'urlType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithWebIdentityRequest$ProviderId' => '<p>The fully-qualified host component of the domain name of the identity provider. Specify this value only for OAuth access tokens. Do not specify this value for OpenID Connect ID tokens, such as <code>accounts.google.com</code>. Do not include URL schemes and port numbers. Currently, <code>www.amazon.com</code> and <code>graph.facebook.com</code> are supported. </p>',
      ],
    ],
    'userNameType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleRequest$RoleSessionName' => '<p>An identifier for the assumed role session. The session name is included as part of the <code>AssumedRoleUser</code>. </p>',
        'AssumeRoleWithWebIdentityRequest$RoleSessionName' => '<p>An identifier for the assumed role session. Typically, you pass the name or identifier that is associated with the user who is using your application. That way, the temporary security credentials that your application will use are associated with that user. This session name is included as part of the ARN and assumed role ID in the <code>AssumedRoleUser</code> response element. </p>',
        'GetFederationTokenRequest$Name' => '<p>The name of the federated user. The name is used as an identifier for the temporary security credentials (such as <code>Bob</code>]. For example, you can reference the federated user name in a resource-based policy, such as in an Amazon S3 bucket policy. </p>',
      ],
    ],
    'webIdentitySubjectType' => [
      'base' => NULL,
      'refs' => [
        'AssumeRoleWithWebIdentityResponse$SubjectFromWebIdentityToken' => '<p>The unique user identifier that is returned by the identity provider. This identifier is associated with the <code>WebIdentityToken</code> that was submitted with the <code>AssumeRoleWithWebIdentity</code> call. The identifier is typically unique to the user and the application that acquired the <code>WebIdentityToken</code> (pairwise identifier]. If an OpenID Connect ID token was submitted in the <code>WebIdentityToken</code>, this value is returned by the identity provider as the token\'s <code>sub</code> (Subject] claim. </p>',
      ],
    ],
  ],
];
