<?php return [
  'operations' => [
    'BatchGetApplications' => '<p>Gets information about one or more applications.</p>',
    'BatchGetDeployments' => '<p>Gets information about one or more deployments.</p>',
    'CreateApplication' => '<p>Creates a new application.</p>',
    'CreateDeployment' => '<p>Deploys an application revision to the specified deployment group.</p>',
    'CreateDeploymentConfig' => '<p>Creates a new deployment configuration.</p>',
    'CreateDeploymentGroup' => '<p>Creates a new deployment group for application revisions to be deployed to.</p>',
    'DeleteApplication' => '<p>Deletes an application.</p>',
    'DeleteDeploymentConfig' => '<p>Deletes a deployment configuration.</p> <note>A deployment configuration cannot be deleted if it is currently in use. Also, predefined configurations cannot be deleted.</note>',
    'DeleteDeploymentGroup' => '<p>Deletes a deployment group.</p>',
    'GetApplication' => '<p>Gets information about an application.</p>',
    'GetApplicationRevision' => '<p>Gets information about an application revision.</p>',
    'GetDeployment' => '<p>Gets information about a deployment.</p>',
    'GetDeploymentConfig' => '<p>Gets information about a deployment configuration.</p>',
    'GetDeploymentGroup' => '<p>Gets information about a deployment group.</p>',
    'GetDeploymentInstance' => '<p>Gets information about an Amazon EC2 instance as part of a deployment.</p>',
    'ListApplicationRevisions' => '<p>Lists information about revisions for an application.</p>',
    'ListApplications' => '<p>Lists the applications registered within the AWS user account.</p>',
    'ListDeploymentConfigs' => '<p>Lists the deployment configurations within the AWS user account.</p>',
    'ListDeploymentGroups' => '<p>Lists the deployment groups for an application registered within the AWS user account.</p>',
    'ListDeploymentInstances' => '<p>Lists the Amazon EC2 instances for a deployment within the AWS user account.</p>',
    'ListDeployments' => '<p>Lists the deployments under a deployment group for an application registered within the AWS user account.</p>',
    'RegisterApplicationRevision' => '<p>Registers with AWS CodeDeploy a revision for the specified application.</p>',
    'StopDeployment' => '<p>Attempts to stop an ongoing deployment.</p>',
    'UpdateApplication' => '<p>Changes an existing application\'s name.</p>',
    'UpdateDeploymentGroup' => '<p>Changes information about an existing deployment group.</p>',
  ],
  'service' => '<fullname>AWS CodeDeploy</fullname> <b>Overview</b> <p>This is the AWS CodeDeploy API Reference. This guide provides descriptions of the AWS CodeDeploy APIs. For additional information, see the <a href="http://docs.aws.amazon.com/codedeploy/latest/userguide">AWS CodeDeploy User Guide</a>.</p> <b>Using the APIs</b> <p>You can use the AWS CodeDeploy APIs to work with the following items:</p> <ul> <li> <p><i>Applications</i>, which are unique identifiers that AWS CodeDeploy uses to ensure that the correct combinations of revisions, deployment configurations, and deployment groups are being referenced during deployments.</p> <p>You can work with applications by calling <a>CreateApplication</a>, <a>DeleteApplication</a>, <a>GetApplication</a>, <a>ListApplications</a>, <a>BatchGetApplications</a>, and <a>UpdateApplication</a> to create, delete, and get information about applications, and to change information about an application, respectively.</p> </li> <li> <p><i>Deployment configurations</i>, which are sets of deployment rules and deployment success and failure conditions that AWS CodeDeploy uses during deployments.</p> <p>You can work with deployment configurations by calling <a>CreateDeploymentConfig</a>, <a>DeleteDeploymentConfig</a>, <a>GetDeploymentConfig</a>, and <a>ListDeploymentConfigs</a> to create, delete, and get information about deployment configurations, respectively.</p> </li> <li> <p><i>Deployment groups</i>, which represent groups of Amazon EC2 instances to which application revisions can be deployed.</p> <p>You can work with deployment groups by calling <a>CreateDeploymentGroup</a>, <a>DeleteDeploymentGroup</a>, <a>GetDeploymentGroup</a>, <a>ListDeploymentGroups</a>, and <a>UpdateDeploymentGroup</a> to create, delete, and get information about single and multiple deployment groups, and to change information about a deployment group, respectively.</p> </li> <li> <p><i>Deployment instances</i> (also known simply as <i>instances</i>], which represent Amazon EC2 instances to which application revisions are deployed. Deployment instances are identified by their Amazon EC2 tags or Auto Scaling group names. Deployment instances belong to deployment groups.</p> <p>You can work with deployment instances by calling <a>GetDeploymentInstance</a> and <a>ListDeploymentInstances</a> to get information about single and multiple deployment instances, respectively.</p> </li> <li> <p><i>Deployments</i>, which represent the process of deploying revisions to deployment groups.</p> <p>You can work with deployments by calling <a>CreateDeployment</a>, <a>GetDeployment</a>, <a>ListDeployments</a>, <a>BatchGetDeployments</a>, and <a>StopDeployment</a> to create and get information about deployments, and to stop a deployment, respectively.</p> </li> <li> <p><i>Application revisions</i> (also known simply as <i>revisions</i>], which are archive files that are stored in Amazon S3 buckets or GitHub repositories. These revisions contain source content (such as source code, web pages, executable files, any deployment scripts, and similar] along with an Application Specification file (AppSpec file]. (The AppSpec file is unique to AWS CodeDeploy; it defines a series of deployment actions that you want AWS CodeDeploy to execute.] An application revision is uniquely identified by its Amazon S3 object key and its ETag, version, or both. Application revisions are deployed to deployment groups.</p> <p>You can work with application revisions by calling <a>GetApplicationRevision</a>, <a>ListApplicationRevisions</a>, and <a>RegisterApplicationRevision</a> to get information about application revisions and to inform AWS CodeDeploy about an application revision, respectively.</p> </li> </ul>',
  'shapes' => [
    'ApplicationAlreadyExistsException' => [
      'base' => '<p>An application with the specified name already exists within the AWS user account.</p>',
      'refs' => [],
    ],
    'ApplicationDoesNotExistException' => [
      'base' => '<p>The application does not exist within the AWS user account.</p>',
      'refs' => [],
    ],
    'ApplicationId' => [
      'base' => NULL,
      'refs' => [
        'ApplicationInfo$applicationId' => '<p>The application ID.</p>',
        'CreateApplicationOutput$applicationId' => '<p>A unique application ID.</p>',
      ],
    ],
    'ApplicationInfo' => [
      'base' => '<p>Information about an application.</p>',
      'refs' => [
        'ApplicationsInfoList$member' => NULL,
        'GetApplicationOutput$application' => '<p>Information about the application.</p>',
      ],
    ],
    'ApplicationLimitExceededException' => [
      'base' => '<p>More applications were attempted to be created than were allowed.</p>',
      'refs' => [],
    ],
    'ApplicationName' => [
      'base' => NULL,
      'refs' => [
        'ApplicationInfo$applicationName' => '<p>The application name.</p>',
        'ApplicationsList$member' => NULL,
        'CreateApplicationInput$applicationName' => '<p>The name of the application. This name must be unique within the AWS user account.</p>',
        'CreateDeploymentGroupInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'CreateDeploymentInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'DeleteApplicationInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'DeleteDeploymentGroupInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'DeploymentGroupInfo$applicationName' => '<p>The application name.</p>',
        'DeploymentInfo$applicationName' => '<p>The application name.</p>',
        'GetApplicationInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'GetApplicationRevisionInput$applicationName' => '<p>The name of the application that corresponds to the revision.</p>',
        'GetApplicationRevisionOutput$applicationName' => '<p>The name of the application that corresponds to the revision.</p>',
        'GetDeploymentGroupInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'ListApplicationRevisionsInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'ListDeploymentGroupsInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'ListDeploymentGroupsOutput$applicationName' => '<p>The application name.</p>',
        'ListDeploymentsInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'RegisterApplicationRevisionInput$applicationName' => '<p>The name of an existing AWS CodeDeploy application within the AWS user account.</p>',
        'UpdateApplicationInput$applicationName' => '<p>The current name of the application that you want to change.</p>',
        'UpdateApplicationInput$newApplicationName' => '<p>The new name that you want to change the application to.</p>',
        'UpdateDeploymentGroupInput$applicationName' => '<p>The application name corresponding to the deployment group to update.</p>',
      ],
    ],
    'ApplicationNameRequiredException' => [
      'base' => '<p>The minimum number of required application names was not specified.</p>',
      'refs' => [],
    ],
    'ApplicationRevisionSortBy' => [
      'base' => NULL,
      'refs' => [
        'ListApplicationRevisionsInput$sortBy' => '<p>The column name to sort the list results by:</p> <ul> <li>registerTime: Sort the list results by when the revisions were registered with AWS CodeDeploy.</li> <li>firstUsedTime: Sort the list results by when the revisions were first used by in a deployment.</li> <li>lastUsedTime: Sort the list results by when the revisions were last used in a deployment.</li> </ul> <p>If not specified or set to null, the results will be returned in an arbitrary order.</p>',
      ],
    ],
    'ApplicationsInfoList' => [
      'base' => NULL,
      'refs' => [
        'BatchGetApplicationsOutput$applicationsInfo' => '<p>Information about the applications.</p>',
      ],
    ],
    'ApplicationsList' => [
      'base' => NULL,
      'refs' => [
        'BatchGetApplicationsInput$applicationNames' => '<p>A list of application names, with multiple application names separated by spaces.</p>',
        'ListApplicationsOutput$applications' => '<p>A list of application names.</p>',
      ],
    ],
    'AutoScalingGroup' => [
      'base' => '<p>Information about an Auto Scaling group.</p>',
      'refs' => [
        'AutoScalingGroupList$member' => NULL,
      ],
    ],
    'AutoScalingGroupHook' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$hook' => '<p>An Auto Scaling lifecycle event hook name.</p>',
      ],
    ],
    'AutoScalingGroupList' => [
      'base' => NULL,
      'refs' => [
        'DeleteDeploymentGroupOutput$hooksNotCleanedUp' => '<p>If the output contains no data, and the corresponding deployment group contained at least one Auto Scaling group, AWS CodeDeploy successfully removed all corresponding Auto Scaling lifecycle event hooks from the instances in the Auto Scaling. If the output does contain data, AWS CodeDeploy could not remove some Auto Scaling lifecycle event hooks from the instances in the Auto Scaling group.</p>',
        'DeploymentGroupInfo$autoScalingGroups' => '<p>A list of associated Auto Scaling groups.</p>',
        'UpdateDeploymentGroupOutput$hooksNotCleanedUp' => '<p>If the output contains no data, and the corresponding deployment group contained at least one Auto Scaling group, AWS CodeDeploy successfully removed all corresponding Auto Scaling lifecycle event hooks from the AWS user account. If the output does contain data, AWS CodeDeploy could not remove some Auto Scaling lifecycle event hooks from the AWS user account.</p>',
      ],
    ],
    'AutoScalingGroupName' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$name' => '<p>The Auto Scaling group name.</p>',
        'AutoScalingGroupNameList$member' => NULL,
      ],
    ],
    'AutoScalingGroupNameList' => [
      'base' => NULL,
      'refs' => [
        'CreateDeploymentGroupInput$autoScalingGroups' => '<p>A list of associated Auto Scaling groups.</p>',
        'UpdateDeploymentGroupInput$autoScalingGroups' => '<p>The replacement list of Auto Scaling groups to be included in the deployment group, if you want to change them.</p>',
      ],
    ],
    'BatchGetApplicationsInput' => [
      'base' => '<p>Represents the input of a batch get applications operation.</p>',
      'refs' => [],
    ],
    'BatchGetApplicationsOutput' => [
      'base' => '<p>Represents the output of a batch get applications operation.</p>',
      'refs' => [],
    ],
    'BatchGetDeploymentsInput' => [
      'base' => '<p>Represents the input of a batch get deployments operation.</p>',
      'refs' => [],
    ],
    'BatchGetDeploymentsOutput' => [
      'base' => '<p>Represents the output of a batch get deployments operation.</p>',
      'refs' => [],
    ],
    'Boolean' => [
      'base' => NULL,
      'refs' => [
        'ApplicationInfo$linkedToGitHub' => '<p>True if the user has authenticated with GitHub for the specified application; otherwise, false.</p>',
        'CreateDeploymentInput$ignoreApplicationStopFailures' => '<p>If set to true, then if the deployment causes the ApplicationStop deployment lifecycle event to fail to a specific instance, the deployment will not be considered to have failed to that instance at that point and will continue on to the BeforeInstall deployment lifecycle event.</p> <p>If set to false or not specified, then if the deployment causes the ApplicationStop deployment lifecycle event to fail to a specific instance, the deployment will stop to that instance, and the deployment to that instance will be considered to have failed.</p>',
        'DeploymentInfo$ignoreApplicationStopFailures' => '<p>If true, then if the deployment causes the ApplicationStop deployment lifecycle event to fail to a specific instance, the deployment will not be considered to have failed to that instance at that point and will continue on to the BeforeInstall deployment lifecycle event.</p> <p>If false or not specified, then if the deployment causes the ApplicationStop deployment lifecycle event to fail to a specific instance, the deployment will stop to that instance, and the deployment to that instance will be considered to have failed.</p>',
      ],
    ],
    'BucketNameFilterRequiredException' => [
      'base' => '<p>A bucket name is required but was not provided.</p>',
      'refs' => [],
    ],
    'BundleType' => [
      'base' => NULL,
      'refs' => [
        'S3Location$bundleType' => '<p>The file type of the application revision. Must be one of the following:</p> <ul> <li>tar: A tar archive file.</li> <li>tgz: A compressed tar archive file.</li> <li>zip: A zip archive file.</li> </ul>',
      ],
    ],
    'CommitId' => [
      'base' => NULL,
      'refs' => [
        'GitHubLocation$commitId' => '<p>The SHA1 commit ID of the GitHub commit that references the that represents the bundled artifacts for the application revision.</p>',
      ],
    ],
    'CreateApplicationInput' => [
      'base' => '<p>Represents the input of a create application operation.</p>',
      'refs' => [],
    ],
    'CreateApplicationOutput' => [
      'base' => '<p>Represents the output of a create application operation.</p>',
      'refs' => [],
    ],
    'CreateDeploymentConfigInput' => [
      'base' => '<p>Represents the input of a create deployment configuration operation.</p>',
      'refs' => [],
    ],
    'CreateDeploymentConfigOutput' => [
      'base' => '<p>Represents the output of a create deployment configuration operation.</p>',
      'refs' => [],
    ],
    'CreateDeploymentGroupInput' => [
      'base' => '<p>Represents the input of a create deployment group operation.</p>',
      'refs' => [],
    ],
    'CreateDeploymentGroupOutput' => [
      'base' => '<p>Represents the output of a create deployment group operation.</p>',
      'refs' => [],
    ],
    'CreateDeploymentInput' => [
      'base' => '<p>Represents the input of a create deployment operation.</p>',
      'refs' => [],
    ],
    'CreateDeploymentOutput' => [
      'base' => '<p>Represents the output of a create deployment operation.</p>',
      'refs' => [],
    ],
    'DeleteApplicationInput' => [
      'base' => '<p>Represents the input of a delete application operation.</p>',
      'refs' => [],
    ],
    'DeleteDeploymentConfigInput' => [
      'base' => '<p>Represents the input of a delete deployment configuration operation.</p>',
      'refs' => [],
    ],
    'DeleteDeploymentGroupInput' => [
      'base' => '<p>Represents the input of a delete deployment group operation.</p>',
      'refs' => [],
    ],
    'DeleteDeploymentGroupOutput' => [
      'base' => '<p>Represents the output of a delete deployment group operation.</p>',
      'refs' => [],
    ],
    'DeploymentAlreadyCompletedException' => [
      'base' => '<p>The deployment is already completed.</p>',
      'refs' => [],
    ],
    'DeploymentConfigAlreadyExistsException' => [
      'base' => '<p>A deployment configuration with the specified name already exists within the AWS user account.</p>',
      'refs' => [],
    ],
    'DeploymentConfigDoesNotExistException' => [
      'base' => '<p>The deployment configuration does not exist within the AWS user account.</p>',
      'refs' => [],
    ],
    'DeploymentConfigId' => [
      'base' => NULL,
      'refs' => [
        'CreateDeploymentConfigOutput$deploymentConfigId' => '<p>A unique deployment configuration ID.</p>',
        'DeploymentConfigInfo$deploymentConfigId' => '<p>The deployment configuration ID.</p>',
      ],
    ],
    'DeploymentConfigInUseException' => [
      'base' => '<p>The deployment configuration is still in use.</p>',
      'refs' => [],
    ],
    'DeploymentConfigInfo' => [
      'base' => '<p>Information about a deployment configuration.</p>',
      'refs' => [
        'GetDeploymentConfigOutput$deploymentConfigInfo' => '<p>Information about the deployment configuration.</p>',
      ],
    ],
    'DeploymentConfigLimitExceededException' => [
      'base' => '<p>The deployment configurations limit was exceeded.</p>',
      'refs' => [],
    ],
    'DeploymentConfigName' => [
      'base' => NULL,
      'refs' => [
        'CreateDeploymentConfigInput$deploymentConfigName' => '<p>The name of the deployment configuration to create.</p>',
        'CreateDeploymentGroupInput$deploymentConfigName' => '<p>If specified, the deployment configuration name must be one of the predefined values, or it can be a custom deployment configuration:</p> <ul> <li>CodeDeployDefault.AllAtOnce deploys an application revision to up to all of the Amazon EC2 instances at once. The overall deployment succeeds if the application revision deploys to at least one of the instances. The overall deployment fails after the application revision fails to deploy to all of the instances. For example, for 9 instances, deploy to up to all 9 instances at once. The overall deployment succeeds if any of the 9 instances is successfully deployed to, and it fails if all 9 instances fail to be deployed to.</li> <li>CodeDeployDefault.HalfAtATime deploys to up to half of the instances at a time (with fractions rounded down]. The overall deployment succeeds if the application revision deploys to at least half of the instances (with fractions rounded up]; otherwise, the deployment fails. For example, for 9 instances, deploy to up to 4 instances at a time. The overall deployment succeeds if 5 or more instances are successfully deployed to; otherwise, the deployment fails. Note that the deployment may successfully deploy to some instances, even if the overall deployment fails.</li> <li>CodeDeployDefault.OneAtATime deploys the application revision to only one of the instances at a time. The overall deployment succeeds if the application revision deploys to all of the instances. The overall deployment fails after the application revision first fails to deploy to any one instance. For example, for 9 instances, deploy to one instance at a time. The overall deployment succeeds if all 9 instances are successfully deployed to, and it fails if any of one of the 9 instances fail to be deployed to. Note that the deployment may successfully deploy to some instances, even if the overall deployment fails. This is the default deployment configuration if a configuration isn\'t specified for either the deployment or the deployment group.</li> </ul> <p>To create a custom deployment configuration, call the create deployment configuration operation.</p>',
        'CreateDeploymentInput$deploymentConfigName' => '<p>The name of an existing deployment configuration within the AWS user account.</p> <p>If not specified, the value configured in the deployment group will be used as the default. If the deployment group does not have a deployment configuration associated with it, then CodeDeployDefault.OneAtATime will be used by default.</p>',
        'DeleteDeploymentConfigInput$deploymentConfigName' => '<p>The name of an existing deployment configuration within the AWS user account.</p>',
        'DeploymentConfigInfo$deploymentConfigName' => '<p>The deployment configuration name.</p>',
        'DeploymentConfigsList$member' => NULL,
        'DeploymentGroupInfo$deploymentConfigName' => '<p>The deployment configuration name.</p>',
        'DeploymentInfo$deploymentConfigName' => '<p>The deployment configuration name.</p>',
        'GetDeploymentConfigInput$deploymentConfigName' => '<p>The name of an existing deployment configuration within the AWS user account.</p>',
        'UpdateDeploymentGroupInput$deploymentConfigName' => '<p>The replacement deployment configuration name to use, if you want to change it.</p>',
      ],
    ],
    'DeploymentConfigNameRequiredException' => [
      'base' => '<p>The deployment configuration name was not specified.</p>',
      'refs' => [],
    ],
    'DeploymentConfigsList' => [
      'base' => NULL,
      'refs' => [
        'ListDeploymentConfigsOutput$deploymentConfigsList' => '<p>A list of deployment configurations, including the built-in configurations such as CodeDeployDefault.OneAtATime.</p>',
      ],
    ],
    'DeploymentCreator' => [
      'base' => NULL,
      'refs' => [
        'DeploymentInfo$creator' => '<p>How the deployment was created:</p> <ul> <li>user: A user created the deployment.</li> <li>autoscaling: Auto Scaling created the deployment.</li> </ul>',
      ],
    ],
    'DeploymentDoesNotExistException' => [
      'base' => '<p>The deployment does not exist within the AWS user account.</p>',
      'refs' => [],
    ],
    'DeploymentGroupAlreadyExistsException' => [
      'base' => '<p>A deployment group group with the specified name already exists within the AWS user account.</p>',
      'refs' => [],
    ],
    'DeploymentGroupDoesNotExistException' => [
      'base' => '<p>The named deployment group does not exist within the AWS user account.</p>',
      'refs' => [],
    ],
    'DeploymentGroupId' => [
      'base' => NULL,
      'refs' => [
        'CreateDeploymentGroupOutput$deploymentGroupId' => '<p>A unique deployment group ID.</p>',
        'DeploymentGroupInfo$deploymentGroupId' => '<p>The deployment group ID.</p>',
      ],
    ],
    'DeploymentGroupInfo' => [
      'base' => '<p>Information about a deployment group.</p>',
      'refs' => [
        'GetDeploymentGroupOutput$deploymentGroupInfo' => '<p>Information about the deployment group.</p>',
      ],
    ],
    'DeploymentGroupLimitExceededException' => [
      'base' => '<p> The deployment groups limit was exceeded.</p>',
      'refs' => [],
    ],
    'DeploymentGroupName' => [
      'base' => NULL,
      'refs' => [
        'CreateDeploymentGroupInput$deploymentGroupName' => '<p>The name of an existing deployment group for the specified application.</p>',
        'CreateDeploymentInput$deploymentGroupName' => '<p>The deployment group\'s name.</p>',
        'DeleteDeploymentGroupInput$deploymentGroupName' => '<p>The name of an existing deployment group for the specified application.</p>',
        'DeploymentGroupInfo$deploymentGroupName' => '<p>The deployment group name.</p>',
        'DeploymentGroupsList$member' => NULL,
        'DeploymentInfo$deploymentGroupName' => '<p>The deployment group name.</p>',
        'GetDeploymentGroupInput$deploymentGroupName' => '<p>The name of an existing deployment group for the specified application.</p>',
        'ListDeploymentsInput$deploymentGroupName' => '<p>The name of an existing deployment group for the specified application.</p>',
        'UpdateDeploymentGroupInput$currentDeploymentGroupName' => '<p>The current name of the existing deployment group.</p>',
        'UpdateDeploymentGroupInput$newDeploymentGroupName' => '<p>The new name of the deployment group, if you want to change it.</p>',
      ],
    ],
    'DeploymentGroupNameRequiredException' => [
      'base' => '<p>The deployment group name was not specified.</p>',
      'refs' => [],
    ],
    'DeploymentGroupsList' => [
      'base' => NULL,
      'refs' => [
        'GenericRevisionInfo$deploymentGroups' => '<p>A list of deployment groups that use this revision.</p>',
        'ListDeploymentGroupsOutput$deploymentGroups' => '<p>A list of corresponding deployment group names.</p>',
      ],
    ],
    'DeploymentId' => [
      'base' => NULL,
      'refs' => [
        'CreateDeploymentOutput$deploymentId' => '<p>A unique deployment ID.</p>',
        'DeploymentInfo$deploymentId' => '<p>The deployment ID.</p>',
        'DeploymentsList$member' => NULL,
        'GetDeploymentInput$deploymentId' => '<p>An existing deployment ID within the AWS user account.</p>',
        'GetDeploymentInstanceInput$deploymentId' => '<p>The unique ID of a deployment.</p>',
        'InstanceSummary$deploymentId' => '<p>The deployment ID.</p>',
        'ListDeploymentInstancesInput$deploymentId' => '<p>The unique ID of a deployment.</p>',
        'StopDeploymentInput$deploymentId' => '<p>The unique ID of a deployment.</p>',
      ],
    ],
    'DeploymentIdRequiredException' => [
      'base' => '<p>At least one deployment ID must be specified.</p>',
      'refs' => [],
    ],
    'DeploymentInfo' => [
      'base' => '<p>Information about a deployment.</p>',
      'refs' => [
        'DeploymentsInfoList$member' => NULL,
        'GetDeploymentOutput$deploymentInfo' => '<p>Information about the deployment.</p>',
      ],
    ],
    'DeploymentLimitExceededException' => [
      'base' => '<p>The number of allowed deployments was exceeded.</p>',
      'refs' => [],
    ],
    'DeploymentNotStartedException' => [
      'base' => '<p>The specified deployment has not started.</p>',
      'refs' => [],
    ],
    'DeploymentOverview' => [
      'base' => '<p>Information about the deployment status of the instances in the deployment.</p>',
      'refs' => [
        'DeploymentInfo$deploymentOverview' => '<p>A summary of the deployment status of the instances in the deployment.</p>',
      ],
    ],
    'DeploymentStatus' => [
      'base' => NULL,
      'refs' => [
        'DeploymentInfo$status' => '<p>The current state of the deployment as a whole.</p>',
        'DeploymentStatusList$member' => NULL,
      ],
    ],
    'DeploymentStatusList' => [
      'base' => NULL,
      'refs' => [
        'ListDeploymentsInput$includeOnlyStatuses' => '<para>A subset of deployments to list, by status:</para> <ul> <li>Created: Include in the resulting list created deployments.</li> <li>Queued: Include in the resulting list queued deployments.</li> <li>In Progress: Include in the resulting list in-progress deployments.</li> <li>Succeeded: Include in the resulting list succeeded deployments.</li> <li>Failed: Include in the resulting list failed deployments.</li> <li>Aborted: Include in the resulting list aborted deployments.</li> </ul>',
      ],
    ],
    'DeploymentsInfoList' => [
      'base' => NULL,
      'refs' => [
        'BatchGetDeploymentsOutput$deploymentsInfo' => '<p>Information about the deployments.</p>',
      ],
    ],
    'DeploymentsList' => [
      'base' => NULL,
      'refs' => [
        'BatchGetDeploymentsInput$deploymentIds' => '<p>A list of deployment IDs, with multiple deployment IDs separated by spaces.</p>',
        'ListDeploymentsOutput$deployments' => '<p>A list of deployment IDs.</p>',
      ],
    ],
    'Description' => [
      'base' => NULL,
      'refs' => [
        'CreateDeploymentInput$description' => '<p>A comment about the deployment.</p>',
        'DeploymentInfo$description' => '<p>A comment about the deployment.</p>',
        'GenericRevisionInfo$description' => '<p>A comment about the revision.</p>',
        'RegisterApplicationRevisionInput$description' => '<p>A comment about the revision.</p>',
      ],
    ],
    'DescriptionTooLongException' => [
      'base' => '<p>The description that was provided is too long.</p>',
      'refs' => [],
    ],
    'Diagnostics' => [
      'base' => '<p>Diagnostic information about executable scripts that are part of a deployment.</p>',
      'refs' => [
        'LifecycleEvent$diagnostics' => '<p>Diagnostic information about the deployment lifecycle event.</p>',
      ],
    ],
    'EC2TagFilter' => [
      'base' => '<p>Information about an Amazon EC2 tag filter.</p>',
      'refs' => [
        'EC2TagFilterList$member' => NULL,
      ],
    ],
    'EC2TagFilterList' => [
      'base' => NULL,
      'refs' => [
        'CreateDeploymentGroupInput$ec2TagFilters' => '<p>The Amazon EC2 tags to filter on.</p>',
        'DeploymentGroupInfo$ec2TagFilters' => '<p>The Amazon EC2 tags to filter on.</p>',
        'UpdateDeploymentGroupInput$ec2TagFilters' => '<p>The replacement set of Amazon EC2 tags to filter on, if you want to change them.</p>',
      ],
    ],
    'EC2TagFilterType' => [
      'base' => NULL,
      'refs' => [
        'EC2TagFilter$Type' => '<p>The Amazon EC2 tag filter type:</p> <ul> <li>KEY_ONLY: Key only.</li> <li>VALUE_ONLY: Value only.</li> <li>KEY_AND_VALUE: Key and value.</li> </ul>',
      ],
    ],
    'ETag' => [
      'base' => NULL,
      'refs' => [
        'S3Location$eTag' => '<p>The ETag of the Amazon S3 object that represents the bundled artifacts for the application revision.</p> <p>If the ETag is not specified as an input parameter, ETag validation of the object will be skipped.</p>',
      ],
    ],
    'ErrorCode' => [
      'base' => NULL,
      'refs' => [
        'ErrorInformation$code' => '<p>The error code:</p> <ul> <li>APPLICATION_MISSING: The application was missing. Note that this error code will most likely be raised if the application is deleted after the deployment is created but before it starts.</li> <li>DEPLOYMENT_GROUP_MISSING: The deployment group was missing. Note that this error code will most likely be raised if the deployment group is deleted after the deployment is created but before it starts.</li> <li>REVISION_MISSING: The revision ID was missing. Note that this error code will most likely be raised if the revision is deleted after the deployment is created but before it starts.</li> <li>IAM_ROLE_MISSING: The service role cannot be accessed.</li> <li>IAM_ROLE_PERMISSIONS: The service role does not have the correct permissions.</li> <li>OVER_MAX_INSTANCES: The maximum number of instances was exceeded.</li> <li>NO_INSTANCES: No instances were specified, or no instances can be found.</li> <li>TIMEOUT: The deployment has timed out.</li> <li>HEALTH_CONSTRAINTS_INVALID: The revision can never successfully deploy under the instance health constraints as specified.</li> <li>HEALTH_CONSTRAINTS: The deployment failed on too many instances to be able to successfully deploy under the specified instance health constraints.</li> <li>INTERNAL_ERROR: There was an internal error.</li> </ul>',
      ],
    ],
    'ErrorInformation' => [
      'base' => '<p>Information about a deployment error.</p>',
      'refs' => [
        'DeploymentInfo$errorInformation' => '<p>Information about any error associated with this deployment.</p>',
      ],
    ],
    'ErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'ErrorInformation$message' => '<p>An accompanying error message.</p>',
      ],
    ],
    'GenericRevisionInfo' => [
      'base' => '<p>Information about an application revision.</p>',
      'refs' => [
        'GetApplicationRevisionOutput$revisionInfo' => '<p>General information about the revision.</p>',
      ],
    ],
    'GetApplicationInput' => [
      'base' => '<p>Represents the input of a get application operation.</p>',
      'refs' => [],
    ],
    'GetApplicationOutput' => [
      'base' => '<p>Represents the output of a get application operation.</p>',
      'refs' => [],
    ],
    'GetApplicationRevisionInput' => [
      'base' => '<p>Represents the input of a get application revision operation.</p>',
      'refs' => [],
    ],
    'GetApplicationRevisionOutput' => [
      'base' => '<p>Represents the output of a get application revision operation.</p>',
      'refs' => [],
    ],
    'GetDeploymentConfigInput' => [
      'base' => '<p>Represents the input of a get deployment configuration operation.</p>',
      'refs' => [],
    ],
    'GetDeploymentConfigOutput' => [
      'base' => '<p>Represents the output of a get deployment configuration operation.</p>',
      'refs' => [],
    ],
    'GetDeploymentGroupInput' => [
      'base' => '<p>Represents the input of a get deployment group operation.</p>',
      'refs' => [],
    ],
    'GetDeploymentGroupOutput' => [
      'base' => '<p>Represents the output of a get deployment group operation.</p>',
      'refs' => [],
    ],
    'GetDeploymentInput' => [
      'base' => '<p>Represents the input of a get deployment operation.</p>',
      'refs' => [],
    ],
    'GetDeploymentInstanceInput' => [
      'base' => '<p>Represents the input of a get deployment instance operation.</p>',
      'refs' => [],
    ],
    'GetDeploymentInstanceOutput' => [
      'base' => '<p>Represents the output of a get deployment instance operation.</p>',
      'refs' => [],
    ],
    'GetDeploymentOutput' => [
      'base' => '<p>Represents the output of a get deployment operation.</p>',
      'refs' => [],
    ],
    'GitHubLocation' => [
      'base' => '<p>Information about the location of application artifacts that are stored in GitHub.</p>',
      'refs' => [
        'RevisionLocation$gitHubLocation' => NULL,
      ],
    ],
    'InstanceCount' => [
      'base' => NULL,
      'refs' => [
        'DeploymentOverview$Pending' => '<p>The number of instances that are pending in the deployment.</p>',
        'DeploymentOverview$InProgress' => '<p>The number of instances that are in progress in the deployment.</p>',
        'DeploymentOverview$Succeeded' => '<p>The number of instances that have succeeded in the deployment.</p>',
        'DeploymentOverview$Failed' => '<p>The number of instances that have failed in the deployment.</p>',
        'DeploymentOverview$Skipped' => '<p>The number of instances that have been skipped in the deployment.</p>',
      ],
    ],
    'InstanceDoesNotExistException' => [
      'base' => '<p>The specified instance does not exist in the deployment group.</p>',
      'refs' => [],
    ],
    'InstanceId' => [
      'base' => NULL,
      'refs' => [
        'GetDeploymentInstanceInput$instanceId' => '<p>The unique ID of an Amazon EC2 instance in the deployment\'s deployment group.</p>',
        'InstanceSummary$instanceId' => '<p>The instance ID.</p>',
        'InstancesList$member' => NULL,
      ],
    ],
    'InstanceIdRequiredException' => [
      'base' => '<p>The instance ID was not specified.</p>',
      'refs' => [],
    ],
    'InstanceStatus' => [
      'base' => NULL,
      'refs' => [
        'InstanceStatusList$member' => NULL,
        'InstanceSummary$status' => '<p>The deployment status for this instance:</p> <ul> <li>Pending: The deployment is pending for this instance.</li> <li>In Progress: The deployment is in progress for this instance.</li> <li>Succeeded: The deployment has succeeded for this instance.</li> <li>Failed: The deployment has failed for this instance.</li> <li>Skipped: The deployment has been skipped for this instance.</li> <li>Unknown: The deployment status is unknown for this instance.</li> </ul>',
      ],
    ],
    'InstanceStatusList' => [
      'base' => NULL,
      'refs' => [
        'ListDeploymentInstancesInput$instanceStatusFilter' => '<p>A subset of instances to list, by status:</p> <ul> <li>Pending: Include in the resulting list those instances with pending deployments.</li> <li>InProgress: Include in the resulting list those instances with in-progress deployments.</li> <li>Succeeded: Include in the resulting list those instances with succeeded deployments.</li> <li>Failed: Include in the resulting list those instances with failed deployments.</li> <li>Skipped: Include in the resulting list those instances with skipped deployments.</li> <li>Unknown: Include in the resulting list those instances with deployments in an unknown state.</li> </ul>',
      ],
    ],
    'InstanceSummary' => [
      'base' => '<p>Information about an Amazon EC2 instance in a deployment.</p>',
      'refs' => [
        'GetDeploymentInstanceOutput$instanceSummary' => '<p>Information about the instance.</p>',
      ],
    ],
    'InstancesList' => [
      'base' => NULL,
      'refs' => [
        'ListDeploymentInstancesOutput$instancesList' => '<p>A list of instance IDs.</p>',
      ],
    ],
    'InvalidApplicationNameException' => [
      'base' => '<p>The application name was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidAutoScalingGroupException' => [
      'base' => '<p>The Auto Scaling group was specified in an invalid format or does not exist.</p>',
      'refs' => [],
    ],
    'InvalidBucketNameFilterException' => [
      'base' => '<p>The bucket name either doesn\'t exist or was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidDeployedStateFilterException' => [
      'base' => '<p>The deployed state filter was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidDeploymentConfigNameException' => [
      'base' => '<p>The deployment configuration name was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidDeploymentGroupNameException' => [
      'base' => '<p>The deployment group name was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidDeploymentIdException' => [
      'base' => '<p>At least one of the deployment IDs was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidDeploymentStatusException' => [
      'base' => '<p>The specified deployment status doesn\'t exist or cannot be determined.</p>',
      'refs' => [],
    ],
    'InvalidEC2TagException' => [
      'base' => '<p>The Amazon EC2 tag was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidInstanceStatusException' => [
      'base' => '<p>The specified instance status does not exist.</p>',
      'refs' => [],
    ],
    'InvalidKeyPrefixFilterException' => [
      'base' => '<p>The specified key prefix filter was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidMinimumHealthyHostValueException' => [
      'base' => '<p>The minimum healthy instances value was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidNextTokenException' => [
      'base' => '<p>The next token was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidOperationException' => [
      'base' => '<p>An invalid operation was detected.</p>',
      'refs' => [],
    ],
    'InvalidRevisionException' => [
      'base' => '<p>The revision was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidRoleException' => [
      'base' => '<p>The service role ARN was specified in an invalid format. Or, if an Auto Scaling group was specified, the specified service role does not grant the appropriate permissions to Auto Scaling.</p>',
      'refs' => [],
    ],
    'InvalidSortByException' => [
      'base' => '<p>The column name to sort by is either not present or was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidSortOrderException' => [
      'base' => '<p>The sort order was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'InvalidTimeRangeException' => [
      'base' => '<p>The specified time range was specified in an invalid format.</p>',
      'refs' => [],
    ],
    'Key' => [
      'base' => NULL,
      'refs' => [
        'EC2TagFilter$Key' => '<p>The Amazon EC2 tag filter key.</p>',
      ],
    ],
    'LifecycleErrorCode' => [
      'base' => NULL,
      'refs' => [
        'Diagnostics$errorCode' => '<p>The associated error code:</p> <ul> <li>Success: The specified script ran.</li> <li>ScriptMissing: The specified script was not found in the specified location.</li> <li>ScriptNotExecutable: The specified script is not a recognized executable file type.</li> <li>ScriptTimedOut: The specified script did not finish running in the specified time period.</li> <li>ScriptFailed: The specified script failed to run as expected.</li> <li>UnknownError: The specified script did not run for an unknown reason.</li> </ul>',
      ],
    ],
    'LifecycleEvent' => [
      'base' => '<p>Information about a deployment lifecycle event.</p>',
      'refs' => [
        'LifecycleEventList$member' => NULL,
      ],
    ],
    'LifecycleEventList' => [
      'base' => NULL,
      'refs' => [
        'InstanceSummary$lifecycleEvents' => '<p>A list of lifecycle events for this instance.</p>',
      ],
    ],
    'LifecycleEventName' => [
      'base' => NULL,
      'refs' => [
        'LifecycleEvent$lifecycleEventName' => '<p>The deployment lifecycle event name, such as ApplicationStop, BeforeInstall, AfterInstall, ApplicationStart, or ValidateService.</p>',
      ],
    ],
    'LifecycleEventStatus' => [
      'base' => NULL,
      'refs' => [
        'LifecycleEvent$status' => '<p>The deployment lifecycle event status:</p> <ul> <li>Pending: The deployment lifecycle event is pending.</li> <li>InProgress: The deployment lifecycle event is in progress.</li> <li>Succeeded: The deployment lifecycle event has succeeded.</li> <li>Failed: The deployment lifecycle event has failed.</li> <li>Skipped: The deployment lifecycle event has been skipped.</li> <li>Unknown: The deployment lifecycle event is unknown.</li> </ul>',
      ],
    ],
    'LifecycleMessage' => [
      'base' => NULL,
      'refs' => [
        'Diagnostics$message' => '<p>The message associated with the error.</p>',
      ],
    ],
    'ListApplicationRevisionsInput' => [
      'base' => '<p>Represents the input of a list application revisions operation.</p>',
      'refs' => [],
    ],
    'ListApplicationRevisionsOutput' => [
      'base' => '<p>Represents the output of a list application revisions operation.</p>',
      'refs' => [],
    ],
    'ListApplicationsInput' => [
      'base' => '<p>Represents the input of a list applications operation.</p>',
      'refs' => [],
    ],
    'ListApplicationsOutput' => [
      'base' => '<p>Represents the output of a list applications operation.</p>',
      'refs' => [],
    ],
    'ListDeploymentConfigsInput' => [
      'base' => '<p>Represents the input of a list deployment configurations operation.</p>',
      'refs' => [],
    ],
    'ListDeploymentConfigsOutput' => [
      'base' => '<p>Represents the output of a list deployment configurations operation.</p>',
      'refs' => [],
    ],
    'ListDeploymentGroupsInput' => [
      'base' => '<p>Represents the input of a list deployment groups operation.</p>',
      'refs' => [],
    ],
    'ListDeploymentGroupsOutput' => [
      'base' => '<p>Represents the output of a list deployment groups operation.</p>',
      'refs' => [],
    ],
    'ListDeploymentInstancesInput' => [
      'base' => '<p>Represents the input of a list deployment instances operation.</p>',
      'refs' => [],
    ],
    'ListDeploymentInstancesOutput' => [
      'base' => '<p>Represents the output of a list deployment instances operation.</p>',
      'refs' => [],
    ],
    'ListDeploymentsInput' => [
      'base' => '<p>Represents the input of a list deployments operation.</p>',
      'refs' => [],
    ],
    'ListDeploymentsOutput' => [
      'base' => '<p>Represents the output of a list deployments operation.</p>',
      'refs' => [],
    ],
    'ListStateFilterAction' => [
      'base' => NULL,
      'refs' => [
        'ListApplicationRevisionsInput$deployed' => '<p>Whether to list revisions based on whether the revision is the target revision of an deployment group:</p> <ul> <li>include: List revisions that are target revisions of a deployment group.</li> <li>exclude: Do not list revisions that are target revisions of a deployment group.</li> <li>ignore: List all revisions, regardless of whether they are target revisions of a deployment group.</li> </ul>',
      ],
    ],
    'LogTail' => [
      'base' => NULL,
      'refs' => [
        'Diagnostics$logTail' => '<p>The last portion of the associated diagnostic log.</p>',
      ],
    ],
    'Message' => [
      'base' => NULL,
      'refs' => [
        'StopDeploymentOutput$statusMessage' => '<p>An accompanying status message.</p>',
      ],
    ],
    'MinimumHealthyHosts' => [
      'base' => '<p>Information about minimum healthy instances.</p>',
      'refs' => [
        'CreateDeploymentConfigInput$minimumHealthyHosts' => '<p>The minimum number of healthy instances that should be available at any time during the deployment. There are two parameters expected in the input: type and value.</p> <p>The type parameter takes either of the following values:</p> <ul> <li>HOST_COUNT: The value parameter represents the minimum number of healthy instances, as an absolute value.</li> <li>FLEET_PERCENT: The value parameter represents the minimum number of healthy instances, as a percentage of the total number of instances in the deployment. If you specify FLEET_PERCENT, then at the start of the deployment AWS CodeDeploy converts the percentage to the equivalent number of instances and rounds fractional instances up.</li> </ul> <p>The value parameter takes an integer.</p> <p>For example, to set a minimum of 95% healthy instances, specify a type of FLEET_PERCENT and a value of 95.</p>',
        'DeploymentConfigInfo$minimumHealthyHosts' => '<p>Information about the number or percentage of minimum healthy instances.</p>',
      ],
    ],
    'MinimumHealthyHostsType' => [
      'base' => NULL,
      'refs' => [
        'MinimumHealthyHosts$type' => '<p>The minimum healthy instances type:</p> <ul> <li>HOST_COUNT: The minimum number of healthy instances, as an absolute value.</li> <li>FLEET_PERCENT: The minimum number of healthy instances, as a percentage of the total number of instances in the deployment.</li> </ul> <p>For example, for 9 Amazon EC2 instances, if a HOST_COUNT of 6 is specified, deploy to up to 3 instances at a time. The deployment succeeds if 6 or more instances are successfully deployed to; otherwise, the deployment fails. If a FLEET_PERCENT of 40 is specified, deploy to up to 5 instances at a time. The deployment succeeds if 4 or more instances are successfully deployed to; otherwise, the deployment fails.</p> <note>In a call to the get deployment configuration operation, CodeDeployDefault.OneAtATime will return a minimum healthy instances type of MOST_CONCURRENCY and a value of 1. This means a deployment to only one Amazon EC2 instance at a time. (You cannot set the type to MOST_CONCURRENCY, only to HOST_COUNT or FLEET_PERCENT.]</note>',
      ],
    ],
    'MinimumHealthyHostsValue' => [
      'base' => NULL,
      'refs' => [
        'MinimumHealthyHosts$value' => '<p>The minimum healthy instances value.</p>',
      ],
    ],
    'NextToken' => [
      'base' => NULL,
      'refs' => [
        'ListApplicationRevisionsInput$nextToken' => '<p>An identifier that was returned from the previous list application revisions call, which can be used to return the next set of applications in the list.</p>',
        'ListApplicationRevisionsOutput$nextToken' => '<p>If the amount of information that is returned is significantly large, an identifier will also be returned, which can be used in a subsequent list application revisions call to return the next set of application revisions in the list.</p>',
        'ListApplicationsInput$nextToken' => '<p>An identifier that was returned from the previous list applications call, which can be used to return the next set of applications in the list.</p>',
        'ListApplicationsOutput$nextToken' => '<p>If the amount of information that is returned is significantly large, an identifier will also be returned, which can be used in a subsequent list applications call to return the next set of applications in the list.</p>',
        'ListDeploymentConfigsInput$nextToken' => '<p>An identifier that was returned from the previous list deployment configurations call, which can be used to return the next set of deployment configurations in the list.</p>',
        'ListDeploymentConfigsOutput$nextToken' => '<p>If the amount of information that is returned is significantly large, an identifier will also be returned, which can be used in a subsequent list deployment configurations call to return the next set of deployment configurations in the list.</p>',
        'ListDeploymentGroupsInput$nextToken' => '<p>An identifier that was returned from the previous list deployment groups call, which can be used to return the next set of deployment groups in the list.</p>',
        'ListDeploymentGroupsOutput$nextToken' => '<p>If the amount of information that is returned is significantly large, an identifier will also be returned, which can be used in a subsequent list deployment groups call to return the next set of deployment groups in the list.</p>',
        'ListDeploymentInstancesInput$nextToken' => '<p>An identifier that was returned from the previous list deployment instances call, which can be used to return the next set of deployment instances in the list.</p>',
        'ListDeploymentInstancesOutput$nextToken' => '<p>If the amount of information that is returned is significantly large, an identifier will also be returned, which can be used in a subsequent list deployment instances call to return the next set of deployment instances in the list.</p>',
        'ListDeploymentsInput$nextToken' => '<p>An identifier that was returned from the previous list deployments call, which can be used to return the next set of deployments in the list.</p>',
        'ListDeploymentsOutput$nextToken' => '<p>If the amount of information that is returned is significantly large, an identifier will also be returned, which can be used in a subsequent list deployments call to return the next set of deployments in the list.</p>',
      ],
    ],
    'RegisterApplicationRevisionInput' => [
      'base' => '<p>Represents the input of a register application revision operation.</p>',
      'refs' => [],
    ],
    'Repository' => [
      'base' => NULL,
      'refs' => [
        'GitHubLocation$repository' => '<p>The GitHub account and repository pair that stores a reference to the commit that represents the bundled artifacts for the application revision.</p> <p>Specified as account/repository.</p>',
      ],
    ],
    'RevisionDoesNotExistException' => [
      'base' => '<p>The named revision does not exist within the AWS user account.</p>',
      'refs' => [],
    ],
    'RevisionLocation' => [
      'base' => '<p>Information about an application revision\'s location.</p>',
      'refs' => [
        'CreateDeploymentInput$revision' => '<p>The type of revision to deploy, along with information about the revision\'s location.</p>',
        'DeploymentGroupInfo$targetRevision' => '<p>Information about the deployment group\'s target revision, including the revision\'s type and its location.</p>',
        'DeploymentInfo$revision' => '<p>Information about the location of application artifacts that are stored and the service to retrieve them from.</p>',
        'GetApplicationRevisionInput$revision' => '<p>Information about the application revision to get, including the revision\'s type and its location.</p>',
        'GetApplicationRevisionOutput$revision' => '<p>Additional information about the revision, including the revision\'s type and its location.</p>',
        'RegisterApplicationRevisionInput$revision' => '<p>Information about the application revision to register, including the revision\'s type and its location.</p>',
        'RevisionLocationList$member' => NULL,
      ],
    ],
    'RevisionLocationList' => [
      'base' => NULL,
      'refs' => [
        'ListApplicationRevisionsOutput$revisions' => '<p>A list of revision locations that contain the matching revisions.</p>',
      ],
    ],
    'RevisionLocationType' => [
      'base' => NULL,
      'refs' => [
        'RevisionLocation$revisionType' => '<p>The application revision\'s type:</p> <ul> <li>S3: An application revision stored in Amazon S3.</li> <li>GitHub: An application revision stored in GitHub.</li> </ul>',
      ],
    ],
    'RevisionRequiredException' => [
      'base' => '<p>The revision ID was not specified.</p>',
      'refs' => [],
    ],
    'Role' => [
      'base' => NULL,
      'refs' => [
        'CreateDeploymentGroupInput$serviceRoleArn' => '<p>A service role ARN that allows AWS CodeDeploy to act on the user\'s behalf when interacting with AWS services.</p>',
        'DeploymentGroupInfo$serviceRoleArn' => '<p>A service role ARN.</p>',
        'UpdateDeploymentGroupInput$serviceRoleArn' => '<p>A replacement service role\'s ARN, if you want to change it.</p>',
      ],
    ],
    'RoleRequiredException' => [
      'base' => '<p>The role ID was not specified.</p>',
      'refs' => [],
    ],
    'S3Bucket' => [
      'base' => NULL,
      'refs' => [
        'ListApplicationRevisionsInput$s3Bucket' => '<p>A specific Amazon S3 bucket name to limit the search for revisions.</p> <p>If set to null, then all of the user\'s buckets will be searched.</p>',
        'S3Location$bucket' => '<p>The name of the Amazon S3 bucket where the application revision is stored.</p>',
      ],
    ],
    'S3Key' => [
      'base' => NULL,
      'refs' => [
        'ListApplicationRevisionsInput$s3KeyPrefix' => '<p>A specific key prefix for the set of Amazon S3 objects to limit the search for revisions.</p>',
        'S3Location$key' => '<p>The name of the Amazon S3 object that represents the bundled artifacts for the application revision.</p>',
      ],
    ],
    'S3Location' => [
      'base' => '<p>Information about the location of application artifacts that are stored in Amazon S3.</p>',
      'refs' => [
        'RevisionLocation$s3Location' => NULL,
      ],
    ],
    'ScriptName' => [
      'base' => NULL,
      'refs' => [
        'Diagnostics$scriptName' => '<p>The name of the script.</p>',
      ],
    ],
    'SortOrder' => [
      'base' => NULL,
      'refs' => [
        'ListApplicationRevisionsInput$sortOrder' => '<p>The order to sort the list results by:</p> <ul> <li>ascending: Sort the list results in ascending order.</li> <li>descending: Sort the list results in descending order.</li> </ul> <p>If not specified, the results will be sorted in ascending order.</p> <p>If set to null, the results will be sorted in an arbitrary order.</p>',
      ],
    ],
    'StopDeploymentInput' => [
      'base' => '<p>Represents the input of a stop deployment operation.</p>',
      'refs' => [],
    ],
    'StopDeploymentOutput' => [
      'base' => '<p>Represents the output of a stop deployment operation.</p>',
      'refs' => [],
    ],
    'StopStatus' => [
      'base' => NULL,
      'refs' => [
        'StopDeploymentOutput$status' => '<p>The status of the stop deployment operation:</p> <ul> <li>Pending: The stop operation is pending.</li> <li>Succeeded: The stop operation succeeded.</li> </ul>',
      ],
    ],
    'TimeRange' => [
      'base' => '<p>Information about a time range.</p>',
      'refs' => [
        'ListDeploymentsInput$createTimeRange' => '<p>A deployment creation start- and end-time range for returning a subset of the list of deployments.</p>',
      ],
    ],
    'Timestamp' => [
      'base' => NULL,
      'refs' => [
        'ApplicationInfo$createTime' => '<p>The time that the application was created.</p>',
        'DeploymentConfigInfo$createTime' => '<p>The time that the deployment configuration was created.</p>',
        'DeploymentInfo$createTime' => '<p>A timestamp indicating when the deployment was created.</p>',
        'DeploymentInfo$startTime' => '<p>A timestamp indicating when the deployment began deploying to the deployment group.</p> <p>Note that in some cases, the reported value of the start time may be later than the complete time. This is due to differences in the clock settings of various back-end servers that participate in the overall deployment process.</p>',
        'DeploymentInfo$completeTime' => '<p>A timestamp indicating when the deployment was completed.</p>',
        'GenericRevisionInfo$firstUsedTime' => '<p>When the revision was first used by AWS CodeDeploy.</p>',
        'GenericRevisionInfo$lastUsedTime' => '<p>When the revision was last used by AWS CodeDeploy.</p>',
        'GenericRevisionInfo$registerTime' => '<p>When the revision was registered with AWS CodeDeploy.</p>',
        'InstanceSummary$lastUpdatedAt' => '<p>A timestamp indicating when the instance information was last updated.</p>',
        'LifecycleEvent$startTime' => '<p>A timestamp indicating when the deployment lifecycle event started.</p>',
        'LifecycleEvent$endTime' => '<p>A timestamp indicating when the deployment lifecycle event ended.</p>',
        'TimeRange$start' => '<p>The time range\'s start time.</p> <note>Specify null to leave the time range\'s start time open-ended.</note>',
        'TimeRange$end' => '<p>The time range\'s end time.</p> <note>Specify null to leave the time range\'s end time open-ended.</note>',
      ],
    ],
    'UpdateApplicationInput' => [
      'base' => '<p>Represents the input of an update application operation.</p>',
      'refs' => [],
    ],
    'UpdateDeploymentGroupInput' => [
      'base' => '<p>Represents the input of an update deployment group operation.</p>',
      'refs' => [],
    ],
    'UpdateDeploymentGroupOutput' => [
      'base' => '<p>Represents the output of an update deployment group operation.</p>',
      'refs' => [],
    ],
    'Value' => [
      'base' => NULL,
      'refs' => [
        'EC2TagFilter$Value' => '<p>The Amazon EC2 tag filter value.</p>',
      ],
    ],
    'VersionId' => [
      'base' => NULL,
      'refs' => [
        'S3Location$version' => '<p>A specific version of the Amazon S3 object that represents the bundled artifacts for the application revision.</p> <p>If the version is not specified, the system will use the most recent version by default.</p>',
      ],
    ],
  ],
];
