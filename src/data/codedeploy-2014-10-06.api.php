<?php return [
  'metadata' => [
    'apiVersion' => '2014-10-06',
    'endpointPrefix' => 'codedeploy',
    'jsonVersion' => '1.1',
    'serviceAbbreviation' => 'CodeDeploy',
    'serviceFullName' => 'AWS CodeDeploy',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'CodeDeploy_20141006',
    'timestampFormat' => 'unixTimestamp',
    'protocol' => 'json',
  ],
  'operations' => [
    'BatchGetApplications' => [
      'name' => 'BatchGetApplications',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'BatchGetApplicationsInput',
      ],
      'output' => [
        'shape' => 'BatchGetApplicationsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
      ],
    ],
    'BatchGetDeployments' => [
      'name' => 'BatchGetDeployments',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'BatchGetDeploymentsInput',
      ],
      'output' => [
        'shape' => 'BatchGetDeploymentsOutput',
      ],
      'errors' => [
        [
          'shape' => 'DeploymentIdRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentIdException',
          'exception' => true,
        ],
      ],
    ],
    'CreateApplication' => [
      'name' => 'CreateApplication',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateApplicationInput',
      ],
      'output' => [
        'shape' => 'CreateApplicationOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationAlreadyExistsException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationLimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'CreateDeployment' => [
      'name' => 'CreateDeployment',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateDeploymentInput',
      ],
      'output' => [
        'shape' => 'CreateDeploymentOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentGroupNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'RevisionRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRevisionException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentConfigNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'DescriptionTooLongException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentLimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'CreateDeploymentConfig' => [
      'name' => 'CreateDeploymentConfig',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateDeploymentConfigInput',
      ],
      'output' => [
        'shape' => 'CreateDeploymentConfigOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidDeploymentConfigNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigAlreadyExistsException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidMinimumHealthyHostValueException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigLimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'CreateDeploymentGroup' => [
      'name' => 'CreateDeploymentGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateDeploymentGroupInput',
      ],
      'output' => [
        'shape' => 'CreateDeploymentGroupOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentGroupNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupAlreadyExistsException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidEC2TagException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidAutoScalingGroupException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentConfigNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'RoleRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRoleException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupLimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'DeleteApplication' => [
      'name' => 'DeleteApplication',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteApplicationInput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
      ],
    ],
    'DeleteDeploymentConfig' => [
      'name' => 'DeleteDeploymentConfig',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteDeploymentConfigInput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidDeploymentConfigNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigInUseException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidOperationException',
          'exception' => true,
        ],
      ],
    ],
    'DeleteDeploymentGroup' => [
      'name' => 'DeleteDeploymentGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteDeploymentGroupInput',
      ],
      'output' => [
        'shape' => 'DeleteDeploymentGroupOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentGroupNameException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRoleException',
          'exception' => true,
        ],
      ],
    ],
    'GetApplication' => [
      'name' => 'GetApplication',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetApplicationInput',
      ],
      'output' => [
        'shape' => 'GetApplicationOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
      ],
    ],
    'GetApplicationRevision' => [
      'name' => 'GetApplicationRevision',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetApplicationRevisionInput',
      ],
      'output' => [
        'shape' => 'GetApplicationRevisionOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'RevisionDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'RevisionRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRevisionException',
          'exception' => true,
        ],
      ],
    ],
    'GetDeployment' => [
      'name' => 'GetDeployment',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetDeploymentInput',
      ],
      'output' => [
        'shape' => 'GetDeploymentOutput',
      ],
      'errors' => [
        [
          'shape' => 'DeploymentIdRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentIdException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentDoesNotExistException',
          'exception' => true,
        ],
      ],
    ],
    'GetDeploymentConfig' => [
      'name' => 'GetDeploymentConfig',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetDeploymentConfigInput',
      ],
      'output' => [
        'shape' => 'GetDeploymentConfigOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidDeploymentConfigNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigDoesNotExistException',
          'exception' => true,
        ],
      ],
    ],
    'GetDeploymentGroup' => [
      'name' => 'GetDeploymentGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetDeploymentGroupInput',
      ],
      'output' => [
        'shape' => 'GetDeploymentGroupOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentGroupNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupDoesNotExistException',
          'exception' => true,
        ],
      ],
    ],
    'GetDeploymentInstance' => [
      'name' => 'GetDeploymentInstance',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetDeploymentInstanceInput',
      ],
      'output' => [
        'shape' => 'GetDeploymentInstanceOutput',
      ],
      'errors' => [
        [
          'shape' => 'DeploymentIdRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'InstanceIdRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentIdException',
          'exception' => true,
        ],
        [
          'shape' => 'InstanceDoesNotExistException',
          'exception' => true,
        ],
      ],
    ],
    'ListApplicationRevisions' => [
      'name' => 'ListApplicationRevisions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListApplicationRevisionsInput',
      ],
      'output' => [
        'shape' => 'ListApplicationRevisionsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSortByException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSortOrderException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidBucketNameFilterException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidKeyPrefixFilterException',
          'exception' => true,
        ],
        [
          'shape' => 'BucketNameFilterRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeployedStateFilterException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidNextTokenException',
          'exception' => true,
        ],
      ],
    ],
    'ListApplications' => [
      'name' => 'ListApplications',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListApplicationsInput',
      ],
      'output' => [
        'shape' => 'ListApplicationsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidNextTokenException',
          'exception' => true,
        ],
      ],
    ],
    'ListDeploymentConfigs' => [
      'name' => 'ListDeploymentConfigs',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListDeploymentConfigsInput',
      ],
      'output' => [
        'shape' => 'ListDeploymentConfigsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidNextTokenException',
          'exception' => true,
        ],
      ],
    ],
    'ListDeploymentGroups' => [
      'name' => 'ListDeploymentGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListDeploymentGroupsInput',
      ],
      'output' => [
        'shape' => 'ListDeploymentGroupsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidNextTokenException',
          'exception' => true,
        ],
      ],
    ],
    'ListDeploymentInstances' => [
      'name' => 'ListDeploymentInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListDeploymentInstancesInput',
      ],
      'output' => [
        'shape' => 'ListDeploymentInstancesOutput',
      ],
      'errors' => [
        [
          'shape' => 'DeploymentIdRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentNotStartedException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidNextTokenException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentIdException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInstanceStatusException',
          'exception' => true,
        ],
      ],
    ],
    'ListDeployments' => [
      'name' => 'ListDeployments',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListDeploymentsInput',
      ],
      'output' => [
        'shape' => 'ListDeploymentsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentGroupNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidTimeRangeException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentStatusException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidNextTokenException',
          'exception' => true,
        ],
      ],
    ],
    'RegisterApplicationRevision' => [
      'name' => 'RegisterApplicationRevision',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RegisterApplicationRevisionInput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DescriptionTooLongException',
          'exception' => true,
        ],
        [
          'shape' => 'RevisionRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRevisionException',
          'exception' => true,
        ],
      ],
    ],
    'StopDeployment' => [
      'name' => 'StopDeployment',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StopDeploymentInput',
      ],
      'output' => [
        'shape' => 'StopDeploymentOutput',
      ],
      'errors' => [
        [
          'shape' => 'DeploymentIdRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentAlreadyCompletedException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentIdException',
          'exception' => true,
        ],
      ],
    ],
    'UpdateApplication' => [
      'name' => 'UpdateApplication',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateApplicationInput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationAlreadyExistsException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
      ],
    ],
    'UpdateDeploymentGroup' => [
      'name' => 'UpdateDeploymentGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateDeploymentGroupInput',
      ],
      'output' => [
        'shape' => 'UpdateDeploymentGroupOutput',
      ],
      'errors' => [
        [
          'shape' => 'ApplicationNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidApplicationNameException',
          'exception' => true,
        ],
        [
          'shape' => 'ApplicationDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentGroupNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupAlreadyExistsException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentGroupNameRequiredException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidEC2TagException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidAutoScalingGroupException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDeploymentConfigNameException',
          'exception' => true,
        ],
        [
          'shape' => 'DeploymentConfigDoesNotExistException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRoleException',
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'ApplicationAlreadyExistsException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'ApplicationDoesNotExistException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'ApplicationId' => [
      'type' => 'string',
    ],
    'ApplicationInfo' => [
      'type' => 'structure',
      'members' => [
        'applicationId' => [
          'shape' => 'ApplicationId',
        ],
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'createTime' => [
          'shape' => 'Timestamp',
        ],
        'linkedToGitHub' => [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'ApplicationLimitExceededException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'ApplicationName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 100,
    ],
    'ApplicationNameRequiredException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'ApplicationRevisionSortBy' => [
      'type' => 'string',
      'enum' => [
        'registerTime',
        'firstUsedTime',
        'lastUsedTime',
      ],
    ],
    'ApplicationsInfoList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ApplicationInfo',
      ],
    ],
    'ApplicationsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ApplicationName',
      ],
    ],
    'AutoScalingGroup' => [
      'type' => 'structure',
      'members' => [
        'name' => [
          'shape' => 'AutoScalingGroupName',
        ],
        'hook' => [
          'shape' => 'AutoScalingGroupHook',
        ],
      ],
    ],
    'AutoScalingGroupHook' => [
      'type' => 'string',
    ],
    'AutoScalingGroupList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AutoScalingGroup',
      ],
    ],
    'AutoScalingGroupName' => [
      'type' => 'string',
    ],
    'AutoScalingGroupNameList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AutoScalingGroupName',
      ],
    ],
    'BatchGetApplicationsInput' => [
      'type' => 'structure',
      'members' => [
        'applicationNames' => [
          'shape' => 'ApplicationsList',
        ],
      ],
    ],
    'BatchGetApplicationsOutput' => [
      'type' => 'structure',
      'members' => [
        'applicationsInfo' => [
          'shape' => 'ApplicationsInfoList',
        ],
      ],
    ],
    'BatchGetDeploymentsInput' => [
      'type' => 'structure',
      'members' => [
        'deploymentIds' => [
          'shape' => 'DeploymentsList',
        ],
      ],
    ],
    'BatchGetDeploymentsOutput' => [
      'type' => 'structure',
      'members' => [
        'deploymentsInfo' => [
          'shape' => 'DeploymentsInfoList',
        ],
      ],
    ],
    'Boolean' => [
      'type' => 'boolean',
    ],
    'BucketNameFilterRequiredException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'BundleType' => [
      'type' => 'string',
      'enum' => [
        'tar',
        'tgz',
        'zip',
      ],
    ],
    'CommitId' => [
      'type' => 'string',
    ],
    'CreateApplicationInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
      ],
    ],
    'CreateApplicationOutput' => [
      'type' => 'structure',
      'members' => [
        'applicationId' => [
          'shape' => 'ApplicationId',
        ],
      ],
    ],
    'CreateDeploymentConfigInput' => [
      'type' => 'structure',
      'required' => [
        'deploymentConfigName',
      ],
      'members' => [
        'deploymentConfigName' => [
          'shape' => 'DeploymentConfigName',
        ],
        'minimumHealthyHosts' => [
          'shape' => 'MinimumHealthyHosts',
        ],
      ],
    ],
    'CreateDeploymentConfigOutput' => [
      'type' => 'structure',
      'members' => [
        'deploymentConfigId' => [
          'shape' => 'DeploymentConfigId',
        ],
      ],
    ],
    'CreateDeploymentGroupInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
        'deploymentGroupName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'deploymentGroupName' => [
          'shape' => 'DeploymentGroupName',
        ],
        'deploymentConfigName' => [
          'shape' => 'DeploymentConfigName',
        ],
        'ec2TagFilters' => [
          'shape' => 'EC2TagFilterList',
        ],
        'autoScalingGroups' => [
          'shape' => 'AutoScalingGroupNameList',
        ],
        'serviceRoleArn' => [
          'shape' => 'Role',
        ],
      ],
    ],
    'CreateDeploymentGroupOutput' => [
      'type' => 'structure',
      'members' => [
        'deploymentGroupId' => [
          'shape' => 'DeploymentGroupId',
        ],
      ],
    ],
    'CreateDeploymentInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'deploymentGroupName' => [
          'shape' => 'DeploymentGroupName',
        ],
        'revision' => [
          'shape' => 'RevisionLocation',
        ],
        'deploymentConfigName' => [
          'shape' => 'DeploymentConfigName',
        ],
        'description' => [
          'shape' => 'Description',
        ],
        'ignoreApplicationStopFailures' => [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'CreateDeploymentOutput' => [
      'type' => 'structure',
      'members' => [
        'deploymentId' => [
          'shape' => 'DeploymentId',
        ],
      ],
    ],
    'DeleteApplicationInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
      ],
    ],
    'DeleteDeploymentConfigInput' => [
      'type' => 'structure',
      'required' => [
        'deploymentConfigName',
      ],
      'members' => [
        'deploymentConfigName' => [
          'shape' => 'DeploymentConfigName',
        ],
      ],
    ],
    'DeleteDeploymentGroupInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
        'deploymentGroupName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'deploymentGroupName' => [
          'shape' => 'DeploymentGroupName',
        ],
      ],
    ],
    'DeleteDeploymentGroupOutput' => [
      'type' => 'structure',
      'members' => [
        'hooksNotCleanedUp' => [
          'shape' => 'AutoScalingGroupList',
        ],
      ],
    ],
    'DeploymentAlreadyCompletedException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentConfigAlreadyExistsException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentConfigDoesNotExistException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentConfigId' => [
      'type' => 'string',
    ],
    'DeploymentConfigInUseException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentConfigInfo' => [
      'type' => 'structure',
      'members' => [
        'deploymentConfigId' => [
          'shape' => 'DeploymentConfigId',
        ],
        'deploymentConfigName' => [
          'shape' => 'DeploymentConfigName',
        ],
        'minimumHealthyHosts' => [
          'shape' => 'MinimumHealthyHosts',
        ],
        'createTime' => [
          'shape' => 'Timestamp',
        ],
      ],
    ],
    'DeploymentConfigLimitExceededException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentConfigName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 100,
    ],
    'DeploymentConfigNameRequiredException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentConfigsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DeploymentConfigName',
      ],
    ],
    'DeploymentCreator' => [
      'type' => 'string',
      'enum' => [
        'user',
        'autoscaling',
      ],
    ],
    'DeploymentDoesNotExistException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentGroupAlreadyExistsException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentGroupDoesNotExistException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentGroupId' => [
      'type' => 'string',
    ],
    'DeploymentGroupInfo' => [
      'type' => 'structure',
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'deploymentGroupId' => [
          'shape' => 'DeploymentGroupId',
        ],
        'deploymentGroupName' => [
          'shape' => 'DeploymentGroupName',
        ],
        'deploymentConfigName' => [
          'shape' => 'DeploymentConfigName',
        ],
        'ec2TagFilters' => [
          'shape' => 'EC2TagFilterList',
        ],
        'autoScalingGroups' => [
          'shape' => 'AutoScalingGroupList',
        ],
        'serviceRoleArn' => [
          'shape' => 'Role',
        ],
        'targetRevision' => [
          'shape' => 'RevisionLocation',
        ],
      ],
    ],
    'DeploymentGroupLimitExceededException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentGroupName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 100,
    ],
    'DeploymentGroupNameRequiredException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentGroupsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DeploymentGroupName',
      ],
    ],
    'DeploymentId' => [
      'type' => 'string',
    ],
    'DeploymentIdRequiredException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentInfo' => [
      'type' => 'structure',
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'deploymentGroupName' => [
          'shape' => 'DeploymentGroupName',
        ],
        'deploymentConfigName' => [
          'shape' => 'DeploymentConfigName',
        ],
        'deploymentId' => [
          'shape' => 'DeploymentId',
        ],
        'revision' => [
          'shape' => 'RevisionLocation',
        ],
        'status' => [
          'shape' => 'DeploymentStatus',
        ],
        'errorInformation' => [
          'shape' => 'ErrorInformation',
        ],
        'createTime' => [
          'shape' => 'Timestamp',
        ],
        'startTime' => [
          'shape' => 'Timestamp',
        ],
        'completeTime' => [
          'shape' => 'Timestamp',
        ],
        'deploymentOverview' => [
          'shape' => 'DeploymentOverview',
        ],
        'description' => [
          'shape' => 'Description',
        ],
        'creator' => [
          'shape' => 'DeploymentCreator',
        ],
        'ignoreApplicationStopFailures' => [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DeploymentLimitExceededException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentNotStartedException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'DeploymentOverview' => [
      'type' => 'structure',
      'members' => [
        'Pending' => [
          'shape' => 'InstanceCount',
        ],
        'InProgress' => [
          'shape' => 'InstanceCount',
        ],
        'Succeeded' => [
          'shape' => 'InstanceCount',
        ],
        'Failed' => [
          'shape' => 'InstanceCount',
        ],
        'Skipped' => [
          'shape' => 'InstanceCount',
        ],
      ],
    ],
    'DeploymentStatus' => [
      'type' => 'string',
      'enum' => [
        'Created',
        'Queued',
        'InProgress',
        'Succeeded',
        'Failed',
        'Stopped',
      ],
    ],
    'DeploymentStatusList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DeploymentStatus',
      ],
    ],
    'DeploymentsInfoList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DeploymentInfo',
      ],
    ],
    'DeploymentsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DeploymentId',
      ],
    ],
    'Description' => [
      'type' => 'string',
    ],
    'DescriptionTooLongException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'Diagnostics' => [
      'type' => 'structure',
      'members' => [
        'errorCode' => [
          'shape' => 'LifecycleErrorCode',
        ],
        'scriptName' => [
          'shape' => 'ScriptName',
        ],
        'message' => [
          'shape' => 'LifecycleMessage',
        ],
        'logTail' => [
          'shape' => 'LogTail',
        ],
      ],
    ],
    'EC2TagFilter' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'Key',
        ],
        'Value' => [
          'shape' => 'Value',
        ],
        'Type' => [
          'shape' => 'EC2TagFilterType',
        ],
      ],
    ],
    'EC2TagFilterList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'EC2TagFilter',
      ],
    ],
    'EC2TagFilterType' => [
      'type' => 'string',
      'enum' => [
        'KEY_ONLY',
        'VALUE_ONLY',
        'KEY_AND_VALUE',
      ],
    ],
    'ETag' => [
      'type' => 'string',
    ],
    'ErrorCode' => [
      'type' => 'string',
      'enum' => [
        'DEPLOYMENT_GROUP_MISSING',
        'APPLICATION_MISSING',
        'REVISION_MISSING',
        'IAM_ROLE_MISSING',
        'IAM_ROLE_PERMISSIONS',
        'OVER_MAX_INSTANCES',
        'NO_INSTANCES',
        'TIMEOUT',
        'HEALTH_CONSTRAINTS_INVALID',
        'HEALTH_CONSTRAINTS',
        'INTERNAL_ERROR',
      ],
    ],
    'ErrorInformation' => [
      'type' => 'structure',
      'members' => [
        'code' => [
          'shape' => 'ErrorCode',
        ],
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
    ],
    'ErrorMessage' => [
      'type' => 'string',
    ],
    'GenericRevisionInfo' => [
      'type' => 'structure',
      'members' => [
        'description' => [
          'shape' => 'Description',
        ],
        'deploymentGroups' => [
          'shape' => 'DeploymentGroupsList',
        ],
        'firstUsedTime' => [
          'shape' => 'Timestamp',
        ],
        'lastUsedTime' => [
          'shape' => 'Timestamp',
        ],
        'registerTime' => [
          'shape' => 'Timestamp',
        ],
      ],
    ],
    'GetApplicationInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
      ],
    ],
    'GetApplicationOutput' => [
      'type' => 'structure',
      'members' => [
        'application' => [
          'shape' => 'ApplicationInfo',
        ],
      ],
    ],
    'GetApplicationRevisionInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
        'revision',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'revision' => [
          'shape' => 'RevisionLocation',
        ],
      ],
    ],
    'GetApplicationRevisionOutput' => [
      'type' => 'structure',
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'revision' => [
          'shape' => 'RevisionLocation',
        ],
        'revisionInfo' => [
          'shape' => 'GenericRevisionInfo',
        ],
      ],
    ],
    'GetDeploymentConfigInput' => [
      'type' => 'structure',
      'required' => [
        'deploymentConfigName',
      ],
      'members' => [
        'deploymentConfigName' => [
          'shape' => 'DeploymentConfigName',
        ],
      ],
    ],
    'GetDeploymentConfigOutput' => [
      'type' => 'structure',
      'members' => [
        'deploymentConfigInfo' => [
          'shape' => 'DeploymentConfigInfo',
        ],
      ],
    ],
    'GetDeploymentGroupInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
        'deploymentGroupName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'deploymentGroupName' => [
          'shape' => 'DeploymentGroupName',
        ],
      ],
    ],
    'GetDeploymentGroupOutput' => [
      'type' => 'structure',
      'members' => [
        'deploymentGroupInfo' => [
          'shape' => 'DeploymentGroupInfo',
        ],
      ],
    ],
    'GetDeploymentInput' => [
      'type' => 'structure',
      'required' => [
        'deploymentId',
      ],
      'members' => [
        'deploymentId' => [
          'shape' => 'DeploymentId',
        ],
      ],
    ],
    'GetDeploymentInstanceInput' => [
      'type' => 'structure',
      'required' => [
        'deploymentId',
        'instanceId',
      ],
      'members' => [
        'deploymentId' => [
          'shape' => 'DeploymentId',
        ],
        'instanceId' => [
          'shape' => 'InstanceId',
        ],
      ],
    ],
    'GetDeploymentInstanceOutput' => [
      'type' => 'structure',
      'members' => [
        'instanceSummary' => [
          'shape' => 'InstanceSummary',
        ],
      ],
    ],
    'GetDeploymentOutput' => [
      'type' => 'structure',
      'members' => [
        'deploymentInfo' => [
          'shape' => 'DeploymentInfo',
        ],
      ],
    ],
    'GitHubLocation' => [
      'type' => 'structure',
      'members' => [
        'repository' => [
          'shape' => 'Repository',
        ],
        'commitId' => [
          'shape' => 'CommitId',
        ],
      ],
    ],
    'InstanceCount' => [
      'type' => 'long',
    ],
    'InstanceDoesNotExistException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InstanceId' => [
      'type' => 'string',
    ],
    'InstanceIdRequiredException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InstanceStatus' => [
      'type' => 'string',
      'enum' => [
        'Pending',
        'InProgress',
        'Succeeded',
        'Failed',
        'Skipped',
        'Unknown',
      ],
    ],
    'InstanceStatusList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceStatus',
      ],
    ],
    'InstanceSummary' => [
      'type' => 'structure',
      'members' => [
        'deploymentId' => [
          'shape' => 'DeploymentId',
        ],
        'instanceId' => [
          'shape' => 'InstanceId',
        ],
        'status' => [
          'shape' => 'InstanceStatus',
        ],
        'lastUpdatedAt' => [
          'shape' => 'Timestamp',
        ],
        'lifecycleEvents' => [
          'shape' => 'LifecycleEventList',
        ],
      ],
    ],
    'InstancesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceId',
      ],
    ],
    'InvalidApplicationNameException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidAutoScalingGroupException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidBucketNameFilterException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidDeployedStateFilterException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidDeploymentConfigNameException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidDeploymentGroupNameException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidDeploymentIdException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidDeploymentStatusException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidEC2TagException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidInstanceStatusException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidKeyPrefixFilterException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidMinimumHealthyHostValueException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidNextTokenException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidOperationException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidRevisionException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidRoleException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidSortByException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidSortOrderException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidTimeRangeException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'Key' => [
      'type' => 'string',
    ],
    'LifecycleErrorCode' => [
      'type' => 'string',
      'enum' => [
        'Success',
        'ScriptMissing',
        'ScriptNotExecutable',
        'ScriptTimedOut',
        'ScriptFailed',
        'UnknownError',
      ],
    ],
    'LifecycleEvent' => [
      'type' => 'structure',
      'members' => [
        'lifecycleEventName' => [
          'shape' => 'LifecycleEventName',
        ],
        'diagnostics' => [
          'shape' => 'Diagnostics',
        ],
        'startTime' => [
          'shape' => 'Timestamp',
        ],
        'endTime' => [
          'shape' => 'Timestamp',
        ],
        'status' => [
          'shape' => 'LifecycleEventStatus',
        ],
      ],
    ],
    'LifecycleEventList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'LifecycleEvent',
      ],
    ],
    'LifecycleEventName' => [
      'type' => 'string',
    ],
    'LifecycleEventStatus' => [
      'type' => 'string',
      'enum' => [
        'Pending',
        'InProgress',
        'Succeeded',
        'Failed',
        'Skipped',
        'Unknown',
      ],
    ],
    'LifecycleMessage' => [
      'type' => 'string',
    ],
    'ListApplicationRevisionsInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'sortBy' => [
          'shape' => 'ApplicationRevisionSortBy',
        ],
        'sortOrder' => [
          'shape' => 'SortOrder',
        ],
        's3Bucket' => [
          'shape' => 'S3Bucket',
        ],
        's3KeyPrefix' => [
          'shape' => 'S3Key',
        ],
        'deployed' => [
          'shape' => 'ListStateFilterAction',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListApplicationRevisionsOutput' => [
      'type' => 'structure',
      'members' => [
        'revisions' => [
          'shape' => 'RevisionLocationList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListApplicationsInput' => [
      'type' => 'structure',
      'members' => [
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListApplicationsOutput' => [
      'type' => 'structure',
      'members' => [
        'applications' => [
          'shape' => 'ApplicationsList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListDeploymentConfigsInput' => [
      'type' => 'structure',
      'members' => [
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListDeploymentConfigsOutput' => [
      'type' => 'structure',
      'members' => [
        'deploymentConfigsList' => [
          'shape' => 'DeploymentConfigsList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListDeploymentGroupsInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListDeploymentGroupsOutput' => [
      'type' => 'structure',
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'deploymentGroups' => [
          'shape' => 'DeploymentGroupsList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListDeploymentInstancesInput' => [
      'type' => 'structure',
      'required' => [
        'deploymentId',
      ],
      'members' => [
        'deploymentId' => [
          'shape' => 'DeploymentId',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
        'instanceStatusFilter' => [
          'shape' => 'InstanceStatusList',
        ],
      ],
    ],
    'ListDeploymentInstancesOutput' => [
      'type' => 'structure',
      'members' => [
        'instancesList' => [
          'shape' => 'InstancesList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListDeploymentsInput' => [
      'type' => 'structure',
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'deploymentGroupName' => [
          'shape' => 'DeploymentGroupName',
        ],
        'includeOnlyStatuses' => [
          'shape' => 'DeploymentStatusList',
        ],
        'createTimeRange' => [
          'shape' => 'TimeRange',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListDeploymentsOutput' => [
      'type' => 'structure',
      'members' => [
        'deployments' => [
          'shape' => 'DeploymentsList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListStateFilterAction' => [
      'type' => 'string',
      'enum' => [
        'include',
        'exclude',
        'ignore',
      ],
    ],
    'LogTail' => [
      'type' => 'string',
    ],
    'Message' => [
      'type' => 'string',
    ],
    'MinimumHealthyHosts' => [
      'type' => 'structure',
      'members' => [
        'value' => [
          'shape' => 'MinimumHealthyHostsValue',
        ],
        'type' => [
          'shape' => 'MinimumHealthyHostsType',
        ],
      ],
    ],
    'MinimumHealthyHostsType' => [
      'type' => 'string',
      'enum' => [
        'HOST_COUNT',
        'FLEET_PERCENT',
      ],
    ],
    'MinimumHealthyHostsValue' => [
      'type' => 'integer',
    ],
    'NextToken' => [
      'type' => 'string',
    ],
    'RegisterApplicationRevisionInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
        'revision',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'description' => [
          'shape' => 'Description',
        ],
        'revision' => [
          'shape' => 'RevisionLocation',
        ],
      ],
    ],
    'Repository' => [
      'type' => 'string',
    ],
    'RevisionDoesNotExistException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'RevisionLocation' => [
      'type' => 'structure',
      'members' => [
        'revisionType' => [
          'shape' => 'RevisionLocationType',
        ],
        's3Location' => [
          'shape' => 'S3Location',
        ],
        'gitHubLocation' => [
          'shape' => 'GitHubLocation',
        ],
      ],
    ],
    'RevisionLocationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'RevisionLocation',
      ],
    ],
    'RevisionLocationType' => [
      'type' => 'string',
      'enum' => [
        'S3',
        'GitHub',
      ],
    ],
    'RevisionRequiredException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'Role' => [
      'type' => 'string',
    ],
    'RoleRequiredException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'S3Bucket' => [
      'type' => 'string',
    ],
    'S3Key' => [
      'type' => 'string',
    ],
    'S3Location' => [
      'type' => 'structure',
      'members' => [
        'bucket' => [
          'shape' => 'S3Bucket',
        ],
        'key' => [
          'shape' => 'S3Key',
        ],
        'bundleType' => [
          'shape' => 'BundleType',
        ],
        'version' => [
          'shape' => 'VersionId',
        ],
        'eTag' => [
          'shape' => 'ETag',
        ],
      ],
    ],
    'ScriptName' => [
      'type' => 'string',
    ],
    'SortOrder' => [
      'type' => 'string',
      'enum' => [
        'ascending',
        'descending',
      ],
    ],
    'StopDeploymentInput' => [
      'type' => 'structure',
      'required' => [
        'deploymentId',
      ],
      'members' => [
        'deploymentId' => [
          'shape' => 'DeploymentId',
        ],
      ],
    ],
    'StopDeploymentOutput' => [
      'type' => 'structure',
      'members' => [
        'status' => [
          'shape' => 'StopStatus',
        ],
        'statusMessage' => [
          'shape' => 'Message',
        ],
      ],
    ],
    'StopStatus' => [
      'type' => 'string',
      'enum' => [
        'Pending',
        'Succeeded',
      ],
    ],
    'TimeRange' => [
      'type' => 'structure',
      'members' => [
        'start' => [
          'shape' => 'Timestamp',
        ],
        'end' => [
          'shape' => 'Timestamp',
        ],
      ],
    ],
    'Timestamp' => [
      'type' => 'timestamp',
    ],
    'UpdateApplicationInput' => [
      'type' => 'structure',
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'newApplicationName' => [
          'shape' => 'ApplicationName',
        ],
      ],
    ],
    'UpdateDeploymentGroupInput' => [
      'type' => 'structure',
      'required' => [
        'applicationName',
        'currentDeploymentGroupName',
      ],
      'members' => [
        'applicationName' => [
          'shape' => 'ApplicationName',
        ],
        'currentDeploymentGroupName' => [
          'shape' => 'DeploymentGroupName',
        ],
        'newDeploymentGroupName' => [
          'shape' => 'DeploymentGroupName',
        ],
        'deploymentConfigName' => [
          'shape' => 'DeploymentConfigName',
        ],
        'ec2TagFilters' => [
          'shape' => 'EC2TagFilterList',
        ],
        'autoScalingGroups' => [
          'shape' => 'AutoScalingGroupNameList',
        ],
        'serviceRoleArn' => [
          'shape' => 'Role',
        ],
      ],
    ],
    'UpdateDeploymentGroupOutput' => [
      'type' => 'structure',
      'members' => [
        'hooksNotCleanedUp' => [
          'shape' => 'AutoScalingGroupList',
        ],
      ],
    ],
    'Value' => [
      'type' => 'string',
    ],
    'VersionId' => [
      'type' => 'string',
    ],
  ],
];
