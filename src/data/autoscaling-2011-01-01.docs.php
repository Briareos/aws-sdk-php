<?php return [
  'operations' => [
    'AttachInstances' => '<p>Attaches one or more EC2 instances to the specified Auto Scaling group.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/attach-instance-asg.html">Attach Amazon EC2 Instances to Your Existing Auto Scaling Group</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'CompleteLifecycleAction' => '<p>Completes the lifecycle action for the associated token initiated under the given lifecycle hook with the specified result. </p> <p>This operation is a part of the basic sequence for adding a lifecycle hook to an Auto Scaling group:</p> <ol> <li>Create a notification target. A target can be either an Amazon SQS queue or an Amazon SNS topic.</li> <li>Create an IAM role. This role allows Auto Scaling to publish lifecycle notifications to the designated SQS queue or SNS topic.</li> <li>Create the lifecycle hook. You can create a hook that acts when instances launch or when instances terminate.</li> <li>If necessary, record the lifecycle action heartbeat to keep the instance in a pending state.</li> <li> <b>Complete the lifecycle action</b>.</li> </ol> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingPendingState.html">Auto Scaling Pending State</a> and <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingTerminatingState.html">Auto Scaling Terminating State</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'CreateAutoScalingGroup' => '<p>Creates an Auto Scaling group with the specified name and attributes.</p> <p>If you exceed your maximum limit of Auto Scaling groups, which by default is 20 per region, the call fails. For information about viewing and updating these limits, see <a>DescribeAccountLimits</a>.</p>',
    'CreateLaunchConfiguration' => '<p>Creates a launch configuration.</p> <p>If you exceed your maximum limit of launch configurations, which by default is 100 per region, the call fails. For information about viewing and updating these limits, see <a>DescribeAccountLimits</a>.</p>',
    'CreateOrUpdateTags' => '<p>Creates or updates tags for the specified Auto Scaling group.</p> <note> A tag\'s definition is composed of a resource ID, resource type, key and value, and the propagate flag. Value and the propagate flag are optional parameters. See the Request Parameters for more information. </note> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/ASTagging.html">Add, Modify, or Remove Auto Scaling Group Tags</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'DeleteAutoScalingGroup' => '<p>Deletes the specified Auto Scaling group.</p> <p>The group must have no instances and no scaling activities in progress.</p> <p>To remove all instances before calling <a>DeleteAutoScalingGroup</a>, you can call <a>UpdateAutoScalingGroup</a> to set the minimum and maximum size of the AutoScalingGroup to zero.</p>',
    'DeleteLaunchConfiguration' => '<p>Deletes the specified launch configuration.</p> <p>The launch configuration must not be attached to an Auto Scaling group. When this call completes, the launch configuration is no longer available for use.</p>',
    'DeleteLifecycleHook' => '<p>Deletes the specified lifecycle hook.</p> <p>If there are any outstanding lifecycle actions, they are completed first (<code>ABANDON</code> for launching instances, <code>CONTINUE</code> for terminating instances].</p>',
    'DeleteNotificationConfiguration' => '<p>Deletes the specified notification.</p>',
    'DeletePolicy' => '<p>Deletes the specified Auto Scaling policy.</p>',
    'DeleteScheduledAction' => '<p>Deletes the specified scheduled action.</p>',
    'DeleteTags' => '<p>Deletes the specified tags.</p>',
    'DescribeAccountLimits' => '<p>Describes the current Auto Scaling resource limits for your AWS account.</p> <p>For information about requesting an increase in these limits, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws_service_limits.html">AWS Service Limits</a>.</p>',
    'DescribeAdjustmentTypes' => '<p>Lists the policy adjustment types for use with <a>PutScalingPolicy</a>.</p>',
    'DescribeAutoScalingGroups' => '<p>Describes one or more Auto Scaling groups. If a list of names is not provided, the call describes all Auto Scaling groups.</p> <p>You can specify a maximum number of items to be returned with a single call. If there are more items to return, the call returns a token. To get the next set of items, repeat the call with the returned token in the <code>NextToken</code> parameter.</p>',
    'DescribeAutoScalingInstances' => '<p>Describes one or more Auto Scaling instances. If a list is not provided, the call describes all instances.</p> <p>You can describe up to a maximum of 50 instances with a single call. By default, a call returns up to 20 instances. If there are more items to return, the call returns a token. To get the next set of items, repeat the call with the returned token in the <code>NextToken</code> parameter.</p>',
    'DescribeAutoScalingNotificationTypes' => '<p>Lists the notification types that are supported by Auto Scaling.</p>',
    'DescribeLaunchConfigurations' => '<p>Describes one or more launch configurations. If you omit the list of names, then the call describes all launch configurations.</p> <p>You can specify a maximum number of items to be returned with a single call. If there are more items to return, the call returns a token. To get the next set of items, repeat the call with the returned token in the <code>NextToken</code> parameter.</p>',
    'DescribeLifecycleHookTypes' => '<p>Describes the available types of lifecycle hooks.</p>',
    'DescribeLifecycleHooks' => '<p>Describes the lifecycle hooks for the specified Auto Scaling group.</p>',
    'DescribeMetricCollectionTypes' => '<p> Returns a list of metrics and a corresponding list of granularities for each metric. </p> <note> <p>The <code>GroupStandbyInstances</code> metric is not returned by default. You must explicitly request it when calling <a>EnableMetricsCollection</a>.</p> </note>',
    'DescribeNotificationConfigurations' => '<p>Describes the notification actions associated with the specified Auto Scaling group.</p>',
    'DescribePolicies' => '<p>Describes the policies for the specified Auto Scaling group.</p> <p>You can specify a maximum number of items to be returned with a single call. If there are more items to return, the call returns a token. To get the next set of items, repeat the call with the returned token in the <code>NextToken</code> parameter.</p>',
    'DescribeScalingActivities' => '<p>Describes one or more scaling activities for the specified Auto Scaling group. If you omit the <code>ActivityIds</code>, the call returns all activities from the past six weeks. Activities are sorted by the start time. Activities still in progress appear first on the list.</p> <p>You can specify a maximum number of items to be returned with a single call. If there are more items to return, the call returns a token. To get the next set of items, repeat the call with the returned token in the <code>NextToken</code> parameter.</p>',
    'DescribeScalingProcessTypes' => '<p>Returns scaling process types for use in the <a>ResumeProcesses</a> and <a>SuspendProcesses</a> actions.</p>',
    'DescribeScheduledActions' => '<p>Lists the actions scheduled for your Auto Scaling group that haven\'t been executed. To list the actions that were already executed, use <a>DescribeScalingActivities</a>.</p>',
    'DescribeTags' => '<p>Describes the specified tags.</p> <p>You can use filters to limit the results. For example, you can query for the tags for a specific Auto Scaling group. You can specify multiple values for a filter. A tag must match at least one of the specified values for it to be included in the results.</p> <p>You can also specify multiple filters. The result includes information for a particular tag only if it matches all the filters. If there\'s no match, no special message is returned.</p>',
    'DescribeTerminationPolicyTypes' => '<p>Lists the termination policies supported by Auto Scaling.</p>',
    'DetachInstances' => '<p>Removes one or more instances from the specified Auto Scaling group. After the instances are detached, you can manage them independently from the rest of the Auto Scaling group.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/detach-instance-asg.html">Detach EC2 Instances from Your Auto Scaling Group</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'DisableMetricsCollection' => '<p>Disables monitoring of the specified metrics for the specified Auto Scaling group.</p>',
    'EnableMetricsCollection' => '<p>Enables monitoring of the specified metrics for the specified Auto Scaling group.</p> <p>You can only enable metrics collection if <code>InstanceMonitoring</code> in the launch configuration for the group is set to <code>True</code>.</p>',
    'EnterStandby' => '<p>Moves the specified instances into <code>Standby</code> mode.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingInServiceState.html">Auto Scaling InService State</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'ExecutePolicy' => '<p>Executes the specified policy.</p>',
    'ExitStandby' => '<p>Moves the specified instances out of <code>Standby</code> mode.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingInServiceState.html">Auto Scaling InService State</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'PutLifecycleHook' => '<p>Creates or updates a lifecycle hook for the specified Auto Scaling Group.</p> <p>A lifecycle hook tells Auto Scaling that you want to perform an action on an instance that is not actively in service; for example, either when the instance launches or before the instance terminates.</p> <p>This operation is a part of the basic sequence for adding a lifecycle hook to an Auto Scaling group:</p> <ol> <li>Create a notification target. A target can be either an Amazon SQS queue or an Amazon SNS topic.</li> <li>Create an IAM role. This role allows Auto Scaling to publish lifecycle notifications to the designated SQS queue or SNS topic.</li> <li><b>Create the lifecycle hook. You can create a hook that acts when instances launch or when instances terminate.</b></li> <li>If necessary, record the lifecycle action heartbeat to keep the instance in a pending state.</li> <li>Complete the lifecycle action.</li> </ol> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingPendingState.html">Auto Scaling Pending State</a> and <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingTerminatingState.html">Auto Scaling Terminating State</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'PutNotificationConfiguration' => '<p> Configures an Auto Scaling group to send notifications when specified events take place. Subscribers to this topic can have messages for events delivered to an endpoint such as a web server or email address. </p> <p>For more information see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/ASGettingNotifications.html">Getting Notifications When Your Auto Scaling Group Changes</a> in the <i>Auto Scaling Developer Guide</i>.</p> <p>This configuration overwrites an existing configuration.</p>',
    'PutScalingPolicy' => '<p>Creates or updates a policy for an Auto Scaling group. To update an existing policy, use the existing policy name and set the parameters you want to change. Any existing parameter not changed in an update to an existing policy is not changed in this update request.</p>',
    'PutScheduledUpdateGroupAction' => '<p> Creates or updates a scheduled scaling action for an Auto Scaling group. When updating a scheduled scaling action, if you leave a parameter unspecified, the corresponding value remains unchanged in the affected Auto Scaling group. </p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/schedule_time.html">Scheduled Scaling</a> in the <i>Auto Scaling Developer Guide</i>.</p> <note> <p>Auto Scaling supports the date and time expressed in "YYYY-MM-DDThh:mm:ssZ" format in UTC/GMT only.</p> </note>',
    'RecordLifecycleActionHeartbeat' => '<p>Records a heartbeat for the lifecycle action associated with a specific token. This extends the timeout by the length of time defined by the <code>HeartbeatTimeout</code> parameter of <a>PutLifecycleHook</a>.</p> <p>This operation is a part of the basic sequence for adding a lifecycle hook to an Auto Scaling group:</p> <ol> <li>Create a notification target. A target can be either an Amazon SQS queue or an Amazon SNS topic.</li> <li>Create an IAM role. This role allows Auto Scaling to publish lifecycle notifications to the designated SQS queue or SNS topic.</li> <li>Create the lifecycle hook. You can create a hook that acts when instances launch or when instances terminate.</li> <li><b>If necessary, record the lifecycle action heartbeat to keep the instance in a pending state.</b></li> <li>Complete the lifecycle action.</li> </ol> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingPendingState.html">Auto Scaling Pending State</a> and <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingTerminatingState.html">Auto Scaling Terminating State</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'ResumeProcesses' => '<p>Resumes the specified suspended Auto Scaling processes for the specified Auto Scaling group. To resume specific processes, use the <code>ScalingProcesses</code> parameter. To resume all processes, omit the <code>ScalingProcesses</code> parameter. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/US_SuspendResume.html">Suspend and Resume Auto Scaling Processes</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'SetDesiredCapacity' => '<p>Sets the size of the specified <a>AutoScalingGroup</a>.</p>',
    'SetInstanceHealth' => '<p>Sets the health status of the specified instance.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/healthcheck.html">Health Checks</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'SuspendProcesses' => '<p>Suspends the specified Auto Scaling processes for the specified Auto Scaling group. To suspend specific processes, use the <code>ScalingProcesses</code> parameter. To suspend all processes, omit the <code>ScalingProcesses</code> parameter.</p> <p>Note that if you suspend either the <code>Launch</code> or <code>Terminate</code> process types, it can prevent other process types from functioning properly.</p> <p>To resume processes that have been suspended, use <a>ResumeProcesses</a>.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/US_SuspendResume.html">Suspend and Resume Auto Scaling Processes</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
    'TerminateInstanceInAutoScalingGroup' => '<p>Terminates the specified instance and optionally adjusts the desired group size.</p> <note>This call simply makes a termination request. The instances is not terminated immediately.</note>',
    'UpdateAutoScalingGroup' => '<p> Updates the configuration for the specified <a>AutoScalingGroup</a>. </p> <note> <p> To update an Auto Scaling group with a launch configuration that has the <code>InstanceMonitoring</code> flag set to <code>False</code>, you must first ensure that collection of group metrics is disabled. Otherwise, calls to <a>UpdateAutoScalingGroup</a> will fail. If you have previously enabled group metrics collection, you can disable collection of all group metrics by calling <a>DisableMetricsCollection</a>. </p> </note> <p> The new settings are registered upon the completion of this call. Any launch configuration settings take effect on any triggers after this call returns. Scaling activities that are currently in progress aren\'t affected. </p> <note> <ul> <li> <p>If a new value is specified for <i>MinSize</i> without specifying the value for <i>DesiredCapacity</i>, and if the new <i>MinSize</i> is larger than the current size of the Auto Scaling group, there will be an implicit call to <a>SetDesiredCapacity</a> to set the group to the new <i>MinSize</i>. </p> </li> <li> <p>If a new value is specified for <i>MaxSize</i> without specifying the value for <i>DesiredCapacity</i>, and the new <i>MaxSize</i> is smaller than the current size of the Auto Scaling group, there will be an implicit call to <a>SetDesiredCapacity</a> to set the group to the new <i>MaxSize</i>. </p> </li> <li> <p>All other optional parameters are left unchanged if not passed in the request.</p> </li> </ul> </note>',
  ],
  'service' => '<fullname>Auto Scaling</fullname> <p>Auto Scaling is designed to automatically launch or terminate EC2 instances based on user-defined policies, schedules, and health checks. Use this service in conjunction with the Amazon CloudWatch and Elastic Load Balancing services.</p>',
  'shapes' => [
    'Activities' => [
      'base' => NULL,
      'refs' => [
        'ActivitiesType$Activities' => '<p>The scaling activities.</p>',
        'DetachInstancesAnswer$Activities' => '<p>The activities related to detaching the instances from the Auto Scaling group.</p>',
        'EnterStandbyAnswer$Activities' => '<p>The activities related to moving instances into <code>Standby</code> mode.</p>',
        'ExitStandbyAnswer$Activities' => '<p>The activities related to moving instances out of <code>Standby</code> mode.</p>',
      ],
    ],
    'ActivitiesType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Activity' => [
      'base' => '<p>Describes a long-running process that represents a change to your Auto Scaling group, such as changing its size. This can also be a process to replace an instance, or a process to perform any other long-running operations.</p>',
      'refs' => [
        'Activities$member' => NULL,
        'ActivityType$Activity' => '<p>A scaling activity.</p>',
      ],
    ],
    'ActivityIds' => [
      'base' => NULL,
      'refs' => [
        'DescribeScalingActivitiesType$ActivityIds' => '<p> A list containing the activity IDs of the desired scaling activities. If this list is omitted, all activities are described. If an <code>AutoScalingGroupName</code> is provided, the results are limited to that group. The list of requested activities cannot contain more than 50 items. If unknown activities are requested, they are ignored with no error. </p>',
      ],
    ],
    'ActivityType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AdjustmentType' => [
      'base' => '<p>Describes a policy adjustment type.</p>',
      'refs' => [
        'AdjustmentTypes$member' => NULL,
      ],
    ],
    'AdjustmentTypes' => [
      'base' => NULL,
      'refs' => [
        'DescribeAdjustmentTypesAnswer$AdjustmentTypes' => '<p>The policy adjustment types.</p>',
      ],
    ],
    'Alarm' => [
      'base' => '<p>Describes an alarm.</p>',
      'refs' => [
        'Alarms$member' => NULL,
      ],
    ],
    'Alarms' => [
      'base' => NULL,
      'refs' => [
        'ScalingPolicy$Alarms' => '<p>The CloudWatch Alarms related to the policy.</p>',
      ],
    ],
    'AlreadyExistsFault' => [
      'base' => '<p>You already have an Auto Scaling group or launch configuration with this name.</p>',
      'refs' => [],
    ],
    'AsciiStringMaxLen255' => [
      'base' => NULL,
      'refs' => [
        'CompleteLifecycleActionType$LifecycleHookName' => '<p>The name of the lifecycle hook.</p>',
        'DeleteLifecycleHookType$LifecycleHookName' => '<p>The name of the lifecycle hook.</p>',
        'LifecycleHook$LifecycleHookName' => '<p>The name of the lifecycle hook.</p>',
        'LifecycleHookNames$member' => NULL,
        'PutLifecycleHookType$LifecycleHookName' => '<p>The name of the lifecycle hook.</p>',
        'RecordLifecycleActionHeartbeatType$LifecycleHookName' => '<p>The name of the lifecycle hook.</p>',
      ],
    ],
    'AssociatePublicIpAddress' => [
      'base' => NULL,
      'refs' => [
        'CreateLaunchConfigurationType$AssociatePublicIpAddress' => '<p>Used for groups that launch instances into a virtual private cloud (VPC]. Specifies whether to assign a public IP address to each instance. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/autoscalingsubnets.html">Auto Scaling and Amazon VPC</a> in the <i>Auto Scaling Developer Guide</i>.</p> <note> <p>If you specify a value for this parameter, be sure to specify at least one subnet using the <i>VPCZoneIdentifier</i> parameter when you create your group. </p> </note> <p>Default: If the instance is launched into a default subnet, the default is <code>true</code>. If the instance is launched into a nondefault subnet, the default is <code>false</code>. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide//as-supported-platforms.html">Supported Platforms</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p>',
        'LaunchConfiguration$AssociatePublicIpAddress' => '<p>Specifies whether the EC2 instances are associated with a public IP address (<code>true</code>] or not (<code>false</code>].</p>',
      ],
    ],
    'AttachInstancesQuery' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AutoScalingGroup' => [
      'base' => '<p>Describes an Auto Scaling group.</p>',
      'refs' => [
        'AutoScalingGroups$member' => NULL,
      ],
    ],
    'AutoScalingGroupDesiredCapacity' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$DesiredCapacity' => '<p>The size of the group.</p>',
        'CreateAutoScalingGroupType$DesiredCapacity' => '<p>The number of EC2 instances that should be running in the group. This value must be greater than or equal to the minimum size of the group and less than or equal to the maximum size of the group.</p>',
        'PutScheduledUpdateGroupActionType$DesiredCapacity' => '<p> The number of Amazon EC2 instances that should be running in the group. </p>',
        'ScheduledUpdateGroupAction$DesiredCapacity' => '<p>The number of instances you prefer to maintain in the group.</p>',
        'SetDesiredCapacityType$DesiredCapacity' => '<p>The number of EC2 instances that should be running in the Auto Scaling group.</p>',
        'UpdateAutoScalingGroupType$DesiredCapacity' => '<p>The number of EC2 instances that should be running in the Auto Scaling group. This value must be greater than or equal to the minimum size of the group and less than or equal to the maximum size of the group.</p>',
      ],
    ],
    'AutoScalingGroupMaxSize' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$MaxSize' => '<p>The maximum size of the group.</p>',
        'CreateAutoScalingGroupType$MaxSize' => '<p>The maximum size of the group.</p>',
        'PutScheduledUpdateGroupActionType$MaxSize' => '<p> The maximum size for the Auto Scaling group. </p>',
        'ScheduledUpdateGroupAction$MaxSize' => '<p>The maximum size of the group.</p>',
        'UpdateAutoScalingGroupType$MaxSize' => '<p>The maximum size of the Auto Scaling group.</p>',
      ],
    ],
    'AutoScalingGroupMinSize' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$MinSize' => '<p>The minimum size of the group.</p>',
        'CreateAutoScalingGroupType$MinSize' => '<p>The minimum size of the group.</p>',
        'PutScheduledUpdateGroupActionType$MinSize' => '<p> The minimum size for the new Auto Scaling group. </p>',
        'ScheduledUpdateGroupAction$MinSize' => '<p>The minimum size of the group.</p>',
        'UpdateAutoScalingGroupType$MinSize' => '<p>The minimum size of the Auto Scaling group.</p>',
      ],
    ],
    'AutoScalingGroupNames' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroupNamesType$AutoScalingGroupNames' => '<p>The group names.</p>',
        'DescribeNotificationConfigurationsType$AutoScalingGroupNames' => '<p>The name of the group.</p>',
      ],
    ],
    'AutoScalingGroupNamesType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AutoScalingGroups' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroupsType$AutoScalingGroups' => '<p>The groups.</p>',
      ],
    ],
    'AutoScalingGroupsType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AutoScalingInstanceDetails' => [
      'base' => '<p>Describes an EC2 instance associated with an Auto Scaling group.</p>',
      'refs' => [
        'AutoScalingInstances$member' => NULL,
      ],
    ],
    'AutoScalingInstances' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingInstancesType$AutoScalingInstances' => '<p>The instances.</p>',
      ],
    ],
    'AutoScalingInstancesType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AutoScalingNotificationTypes' => [
      'base' => NULL,
      'refs' => [
        'DescribeAutoScalingNotificationTypesAnswer$AutoScalingNotificationTypes' => '<p>One or more of the following notification types:</p> <ul> <li><p><code>autoscaling:EC2_INSTANCE_LAUNCH</code></p></li> <li><p><code>autoscaling:EC2_INSTANCE_LAUNCH_ERROR</code></p></li> <li><p><code>autoscaling:EC2_INSTANCE_TERMINATE</code></p></li> <li><p><code>autoscaling:EC2_INSTANCE_TERMINATE_ERROR</code></p></li> <li><p><code>autoscaling:TEST_NOTIFICATION</code></p></li> </ul>',
        'DescribeLifecycleHookTypesAnswer$LifecycleHookTypes' => '<p>One or more of the following notification types:</p> <ul> <li><p><code>autoscaling:EC2_INSTANCE_LAUNCHING</code></p></li> <li><p><code>autoscaling:EC2_INSTANCE_TERMINATING</code></p></li> </ul>',
        'PutNotificationConfigurationType$NotificationTypes' => '<p>The type of event that will cause the notification to be sent. For details about notification types supported by Auto Scaling, see <a>DescribeAutoScalingNotificationTypes</a>.</p>',
      ],
    ],
    'AvailabilityZones' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$AvailabilityZones' => '<p>One or more Availability Zones for the group.</p>',
        'CreateAutoScalingGroupType$AvailabilityZones' => '<p>One or more Availability Zones for the group. This parameter is optional if you specify subnets using the <code>VPCZoneIdentifier</code> parameter.</p>',
        'UpdateAutoScalingGroupType$AvailabilityZones' => '<p>One or more Availability Zones for the group.</p>',
      ],
    ],
    'BlockDeviceEbsDeleteOnTermination' => [
      'base' => NULL,
      'refs' => [
        'Ebs$DeleteOnTermination' => '<p>Indicates whether to delete the volume on instance termination.</p> <p>Default: <code>true</code></p>',
      ],
    ],
    'BlockDeviceEbsIops' => [
      'base' => NULL,
      'refs' => [
        'Ebs$Iops' => '<p>For Provisioned IOPS (SSD] volumes only. The number of I/O operations per second (IOPS] to provision for the volume.</p> <p>Valid values: Range is 100 to 4000.</p> <p>Default: None</p>',
      ],
    ],
    'BlockDeviceEbsVolumeSize' => [
      'base' => NULL,
      'refs' => [
        'Ebs$VolumeSize' => '<p>The volume size, in gigabytes.</p> <p>Valid values: If the volume type is <code>io1</code>, the minimum size of the volume is 10 GiB. If you specify <code>SnapshotId</code> and <code>VolumeSize</code>, <code>VolumeSize</code> must be equal to or larger than the size of the snapshot.</p> <p>Default: If you create a volume from a snapshot and you don\'t specify a volume size, the default is the size of the snapshot.</p> <p>Required: Required when the volume type is <code>io1</code>. </p>',
      ],
    ],
    'BlockDeviceEbsVolumeType' => [
      'base' => NULL,
      'refs' => [
        'Ebs$VolumeType' => '<p>The volume type.</p> <p>Valid values: <code>standard | io1 | gp2</code></p> <p>Default: <code>standard</code></p>',
      ],
    ],
    'BlockDeviceMapping' => [
      'base' => '<p>Describes a block device mapping.</p>',
      'refs' => [
        'BlockDeviceMappings$member' => NULL,
      ],
    ],
    'BlockDeviceMappings' => [
      'base' => NULL,
      'refs' => [
        'CreateLaunchConfigurationType$BlockDeviceMappings' => '<p>One or more mappings that specify how block devices are exposed to the instance. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/block-device-mapping-concepts.html">Block Device Mapping</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p>',
        'LaunchConfiguration$BlockDeviceMappings' => '<p>A block device mapping that specifies how block devices are exposed to the instance. Each mapping is made up of a <code>virtualName</code> and a <code>deviceName</code>.</p>',
      ],
    ],
    'ClassicLinkVPCSecurityGroups' => [
      'base' => NULL,
      'refs' => [
        'CreateLaunchConfigurationType$ClassicLinkVPCSecurityGroups' => '<p>The IDs of one or more security groups for the VPC specified in <code>ClassicLinkVPCId</code>. This parameter is required if <code>ClassicLinkVPCId</code> is specified, and cannot be used otherwise. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/vpc-classiclink.html">ClassicLink</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p>',
        'LaunchConfiguration$ClassicLinkVPCSecurityGroups' => '<p>The IDs of one or more security groups for the VPC specified in <code>ClassicLinkVPCId</code>. This parameter is required if <code>ClassicLinkVPCId</code> is specified, and cannot be used otherwise. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/vpc-classiclink.html">ClassicLink</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p>',
      ],
    ],
    'CompleteLifecycleActionAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CompleteLifecycleActionType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Cooldown' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$DefaultCooldown' => '<p>The number of seconds after a scaling activity completes before any further scaling activities can start.</p>',
        'CreateAutoScalingGroupType$DefaultCooldown' => '<p>The amount of time, in seconds, after a scaling activity completes before another scaling activity can start.</p> <p>If <code>DefaultCooldown</code> is not specified, the default value is 300. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/Cooldown.html">Understanding Auto Scaling Cooldowns</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'PutScalingPolicyType$Cooldown' => '<p>The amount of time, in seconds, after a scaling activity completes and before the next scaling activity can start.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/Cooldown.html">Understanding Auto Scaling Cooldowns</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'ScalingPolicy$Cooldown' => '<p>The amount of time, in seconds, after a scaling activity completes before any further trigger-related scaling activities can start.</p>',
        'UpdateAutoScalingGroupType$DefaultCooldown' => '<p>The amount of time, in seconds, after a scaling activity completes before another scaling activity can start. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/Cooldown.html">Understanding Auto Scaling Cooldowns</a>.</p>',
      ],
    ],
    'CreateAutoScalingGroupType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateLaunchConfigurationType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateOrUpdateTagsType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteAutoScalingGroupType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteLifecycleHookAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteLifecycleHookType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteNotificationConfigurationType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeletePolicyType' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'DeleteScheduledActionType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteTagsType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAccountLimitsAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAdjustmentTypesAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAutoScalingInstancesType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAutoScalingNotificationTypesAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeLifecycleHookTypesAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeLifecycleHooksAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeLifecycleHooksType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeMetricCollectionTypesAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeNotificationConfigurationsAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeNotificationConfigurationsType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribePoliciesType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeScalingActivitiesType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeScheduledActionsType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeTagsType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeTerminationPolicyTypesAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DetachInstancesAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DetachInstancesQuery' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DisableMetricsCollectionQuery' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Ebs' => [
      'base' => '<p>Describes an Amazon EBS volume.</p>',
      'refs' => [
        'BlockDeviceMapping$Ebs' => '<p>The information about the Amazon EBS volume.</p>',
      ],
    ],
    'EbsOptimized' => [
      'base' => NULL,
      'refs' => [
        'CreateLaunchConfigurationType$EbsOptimized' => '<p>Indicates whether the instance is optimized for Amazon EBS I/O. By default, the instance is not optimized for EBS I/O. The optimization provides dedicated throughput to Amazon EBS and an optimized configuration stack to provide optimal I/O performance. This optimization is not available with all instance types. Additional usage charges apply. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSOptimized.html">Amazon EBS-Optimized Instances</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p>',
        'LaunchConfiguration$EbsOptimized' => '<p>Controls whether the instance is optimized for EBS I/O (<code>true</code>] or not (<code>false</code>].</p>',
      ],
    ],
    'EnableMetricsCollectionQuery' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EnabledMetric' => [
      'base' => '<p>Describes an enabled metric.</p>',
      'refs' => [
        'EnabledMetrics$member' => NULL,
      ],
    ],
    'EnabledMetrics' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$EnabledMetrics' => '<p>The metrics enabled for this Auto Scaling group.</p>',
      ],
    ],
    'EnterStandbyAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EnterStandbyQuery' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ExecutePolicyType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ExitStandbyAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ExitStandbyQuery' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Filter' => [
      'base' => '<p>Describes a filter.</p>',
      'refs' => [
        'Filters$member' => NULL,
      ],
    ],
    'Filters' => [
      'base' => NULL,
      'refs' => [
        'DescribeTagsType$Filters' => '<p>The value of the filter type used to identify the tags to be returned. For example, you can filter so that tags are returned according to Auto Scaling group, the key and value, or whether the new tag will be applied to instances launched after the tag is created (PropagateAtLaunch].</p>',
      ],
    ],
    'ForceDelete' => [
      'base' => NULL,
      'refs' => [
        'DeleteAutoScalingGroupType$ForceDelete' => '<p>Specifies that the group will be deleted along with all instances associated with the group, without waiting for all instances to be terminated. This parameter also deletes any lifecycle actions associated with the group.</p>',
      ],
    ],
    'GlobalTimeout' => [
      'base' => NULL,
      'refs' => [
        'LifecycleHook$GlobalTimeout' => '<p>The maximum length of time an instance can remain in a <code>Pending:Wait</code> or <code>Terminating:Wait</code> state. Currently, this value is set at 48 hours.</p>',
      ],
    ],
    'HealthCheckGracePeriod' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$HealthCheckGracePeriod' => '<p>The amount of time that Auto Scaling waits before checking an instance\'s health status. The grace period begins when an instance comes into service.</p>',
        'CreateAutoScalingGroupType$HealthCheckGracePeriod' => '<p>The amount of time, in seconds, after an EC2 instance comes into service that Auto Scaling starts checking its health. During this time, any health check failures for the instance are ignored.</p> <p>This parameter is required if you are adding an <code>ELB</code> health check. Frequently, new instances need to warm up, briefly, before they can pass a health check. To provide ample warm-up time, set the health check grace period of the group to match the expected startup period of your application.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/as-add-elb-healthcheck.html">Add an Elastic Load Balancing Health Check to Your Auto Scaling Group</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'UpdateAutoScalingGroupType$HealthCheckGracePeriod' => '<p>The amount of time, in second, that Auto Scaling waits before checking the health status of an instance. The grace period begins when the instance passes System Status and the Instance Status checks from Amazon EC2. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/APIReference/ApiReference-query-DescribeInstanceStatus.html">DescribeInstanceStatus</a>. </p>',
      ],
    ],
    'HeartbeatTimeout' => [
      'base' => NULL,
      'refs' => [
        'LifecycleHook$HeartbeatTimeout' => '<p>The amount of time that can elapse before the lifecycle hook times out. When the lifecycle hook times out, Auto Scaling performs the action defined in the <code>DefaultResult</code> parameter. You can prevent the lifecycle hook from timing out by calling <a>RecordLifecycleActionHeartbeat</a>.</p>',
        'PutLifecycleHookType$HeartbeatTimeout' => '<p>Defines the amount of time, in seconds, that can elapse before the lifecycle hook times out. When the lifecycle hook times out, Auto Scaling performs the action defined in the <code>DefaultResult</code> parameter. You can prevent the lifecycle hook from timing out by calling <a>RecordLifecycleActionHeartbeat</a>. The default value for this parameter is 3600 seconds (1 hour].</p>',
      ],
    ],
    'HonorCooldown' => [
      'base' => NULL,
      'refs' => [
        'ExecutePolicyType$HonorCooldown' => '<p>Set to <code>True</code> if you want Auto Scaling to wait for the cooldown period associated with the Auto Scaling group to complete before executing the policy.</p> <p>Set to <code>False</code> if you want Auto Scaling to circumvent the cooldown period associated with the Auto Scaling group and execute the policy before the cooldown period ends.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/Cooldown.html">Understanding Auto Scaling Cooldowns</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'SetDesiredCapacityType$HonorCooldown' => '<p>By default, <code>SetDesiredCapacity</code> overrides any cooldown period associated with the Auto Scaling group. Specify <code>True</code> to make Auto Scaling to wait for the cool-down period associated with the Auto Scaling group to complete before initiating a scaling activity to set your Auto Scaling group to its new capacity.</p>',
      ],
    ],
    'Instance' => [
      'base' => '<p>Describes an EC2 instance.</p>',
      'refs' => [
        'Instances$member' => NULL,
      ],
    ],
    'InstanceIds' => [
      'base' => NULL,
      'refs' => [
        'AttachInstancesQuery$InstanceIds' => '<p>One or more EC2 instance IDs. You must specify at least one ID.</p>',
        'DescribeAutoScalingInstancesType$InstanceIds' => '<p>One or more Auto Scaling instances to describe, up to 50 instances. If you omit this parameter, all Auto Scaling instances are described. If you specify an ID that does not exist, it is ignored with no error.</p>',
        'DetachInstancesQuery$InstanceIds' => '<p>One or more instance IDs.</p>',
        'EnterStandbyQuery$InstanceIds' => '<p>One or more instances to move into <code>Standby</code> mode. You must specify at least one instance ID.</p>',
        'ExitStandbyQuery$InstanceIds' => '<p>One or more instance IDs. You must specify at least one instance ID.</p>',
      ],
    ],
    'InstanceMonitoring' => [
      'base' => '<p>Describes whether instance monitoring is enabled.</p>',
      'refs' => [
        'CreateLaunchConfigurationType$InstanceMonitoring' => '<p>Enables detailed monitoring if it is disabled. Detailed monitoring is enabled by default.</p> <p>When detailed monitoring is enabled, Amazon Cloudwatch generates metrics every minute and your account is charged a fee. When you disable detailed monitoring, by specifying <code>False</code>, Cloudwatch generates metrics every 5 minutes. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/as-instance-monitoring.html">Monitor Your Auto Scaling Instances</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'LaunchConfiguration$InstanceMonitoring' => '<p>Controls whether instances in this group are launched with detailed monitoring.</p>',
      ],
    ],
    'Instances' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$Instances' => '<p>The EC2 instances associated with the group.</p>',
      ],
    ],
    'InvalidNextToken' => [
      'base' => '<p>The <code>NextToken</code> value is not valid.</p>',
      'refs' => [],
    ],
    'LaunchConfiguration' => [
      'base' => '<p>Describes a launch configuration.</p>',
      'refs' => [
        'LaunchConfigurations$member' => NULL,
      ],
    ],
    'LaunchConfigurationNameType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'LaunchConfigurationNames' => [
      'base' => NULL,
      'refs' => [
        'LaunchConfigurationNamesType$LaunchConfigurationNames' => '<p>The launch configuration names.</p>',
      ],
    ],
    'LaunchConfigurationNamesType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'LaunchConfigurations' => [
      'base' => NULL,
      'refs' => [
        'LaunchConfigurationsType$LaunchConfigurations' => '<p>The launch configurations.</p>',
      ],
    ],
    'LaunchConfigurationsType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'LifecycleActionResult' => [
      'base' => NULL,
      'refs' => [
        'CompleteLifecycleActionType$LifecycleActionResult' => '<p>The action for the group to take. This parameter can be either <code>CONTINUE</code> or <code>ABANDON</code>.</p>',
        'LifecycleHook$DefaultResult' => '<p>Defines the action the Auto Scaling group should take when the lifecycle hook timeout elapses or if an unexpected failure occurs. The valid values are <code>CONTINUE</code> and <code>ABANDON</code>. The default value is <code>CONTINUE</code>.</p>',
        'PutLifecycleHookType$DefaultResult' => '<p>Defines the action the Auto Scaling group should take when the lifecycle hook timeout elapses or if an unexpected failure occurs. The value for this parameter can be either <code>CONTINUE</code> or <code>ABANDON</code>. The default value for this parameter is <code>ABANDON</code>.</p>',
      ],
    ],
    'LifecycleActionToken' => [
      'base' => NULL,
      'refs' => [
        'CompleteLifecycleActionType$LifecycleActionToken' => '<p>A universally unique identifier (UUID] that identifies a specific lifecycle action associated with an instance. Auto Scaling sends this token to the notification target you specified when you created the lifecycle hook.</p>',
        'RecordLifecycleActionHeartbeatType$LifecycleActionToken' => '<p>A token that uniquely identifies a specific lifecycle action associated with an instance. Auto Scaling sends this token to the notification target you specified when you created the lifecycle hook.</p>',
      ],
    ],
    'LifecycleHook' => [
      'base' => '<p>Describes a lifecycle hook, which tells Auto Scaling that you want to perform an action when an instance launches or terminates. When you have a lifecycle hook in place, the Auto Scaling group will either:</p> <ul> <li>Pause the instance after it launches, but before it is put into service</li> <li>Pause the instance as it terminates, but before it is fully terminated</li> </ul> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingPendingState.html">Auto Scaling Pending State</a> and <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingTerminatingState.html">Auto Scaling Terminating State</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
      'refs' => [
        'LifecycleHooks$member' => NULL,
      ],
    ],
    'LifecycleHookNames' => [
      'base' => NULL,
      'refs' => [
        'DescribeLifecycleHooksType$LifecycleHookNames' => '<p>The names of one or more lifecycle hooks.</p>',
      ],
    ],
    'LifecycleHooks' => [
      'base' => NULL,
      'refs' => [
        'DescribeLifecycleHooksAnswer$LifecycleHooks' => '<p>The lifecycle hooks for the specified group.</p>',
      ],
    ],
    'LifecycleState' => [
      'base' => NULL,
      'refs' => [
        'Instance$LifecycleState' => '<p>A description of the current lifecycle state.</p> <note> <p>The <code>Quarantined</code> lifecycle state is not used.</p> </note>',
      ],
    ],
    'LifecycleTransition' => [
      'base' => NULL,
      'refs' => [
        'LifecycleHook$LifecycleTransition' => '<p>The state of the EC2 instance to which you want to attach the lifecycle hook. For a list of lifecycle hook types, see <a>DescribeLifecycleHooks</a>.</p>',
        'PutLifecycleHookType$LifecycleTransition' => '<p>The Amazon EC2 instance state to which you want to attach the lifecycle hook. See <a>DescribeLifecycleHookTypes</a> for a list of available lifecycle hook types.</p> <note> <p>This parameter is required for new lifecycle hooks, but optional when updating existing hooks.</p> </note>',
      ],
    ],
    'LimitExceededFault' => [
      'base' => '<p>The limit for the number of Auto Scaling groups or launch configurations has already been reached.</p>',
      'refs' => [],
    ],
    'LoadBalancerNames' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$LoadBalancerNames' => '<p>One or more load balancers associated with the group.</p>',
        'CreateAutoScalingGroupType$LoadBalancerNames' => '<p>One or more load balancers.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/US_SetUpASLBApp.html">Load Balance Your Auto Scaling Group</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
      ],
    ],
    'MaxNumberOfAutoScalingGroups' => [
      'base' => NULL,
      'refs' => [
        'DescribeAccountLimitsAnswer$MaxNumberOfAutoScalingGroups' => '<p>The maximum number of groups allowed for your AWS account. The default limit is 20 per region.</p>',
      ],
    ],
    'MaxNumberOfLaunchConfigurations' => [
      'base' => NULL,
      'refs' => [
        'DescribeAccountLimitsAnswer$MaxNumberOfLaunchConfigurations' => '<p>The maximum number of launch configurations allowed for your AWS account. The default limit is 100 per region.</p>',
      ],
    ],
    'MaxRecords' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroupNamesType$MaxRecords' => '<p>The maximum number of items to return with this call.</p>',
        'DescribeAutoScalingInstancesType$MaxRecords' => '<p>The maximum number of items to return with this call.</p>',
        'DescribeNotificationConfigurationsType$MaxRecords' => '<p>The maximum number of items to return with this call.</p>',
        'DescribePoliciesType$MaxRecords' => '<p>The maximum number of items to be returned with each call.</p>',
        'DescribeScalingActivitiesType$MaxRecords' => '<p>The maximum number of items to return with this call.</p>',
        'DescribeScheduledActionsType$MaxRecords' => '<p>The maximum number of items to return with this call.</p>',
        'DescribeTagsType$MaxRecords' => '<p>The maximum number of items to return with this call.</p>',
        'LaunchConfigurationNamesType$MaxRecords' => '<p>The maximum number of items to return with this call. The default is 100.</p>',
      ],
    ],
    'MetricCollectionType' => [
      'base' => '<p>Describes a metric.</p>',
      'refs' => [
        'MetricCollectionTypes$member' => NULL,
      ],
    ],
    'MetricCollectionTypes' => [
      'base' => NULL,
      'refs' => [
        'DescribeMetricCollectionTypesAnswer$Metrics' => '<p>One or more of the following metrics:</p> <ul> <li><p>GroupMinSize</p></li> <li><p>GroupMaxSize</p></li> <li><p>GroupDesiredCapacity</p></li> <li><p>GroupInServiceInstances</p></li> <li><p>GroupPendingInstances</p></li> <li><p>GroupStandbyInstances</p></li> <li><p>GroupTerminatingInstances</p></li> <li><p>GroupTotalInstances</p></li> </ul> <note> <p>The <code>GroupStandbyInstances</code> metric is not returned by default. You must explicitly request it when calling <a>EnableMetricsCollection</a>.</p> </note>',
      ],
    ],
    'MetricGranularityType' => [
      'base' => '<p>Describes a granularity of a metric.</p>',
      'refs' => [
        'MetricGranularityTypes$member' => NULL,
      ],
    ],
    'MetricGranularityTypes' => [
      'base' => NULL,
      'refs' => [
        'DescribeMetricCollectionTypesAnswer$Granularities' => '<p>The granularities for the listed metrics.</p>',
      ],
    ],
    'Metrics' => [
      'base' => NULL,
      'refs' => [
        'DisableMetricsCollectionQuery$Metrics' => '<p>One or more of the following metrics:</p> <ul> <li><p>GroupMinSize</p></li> <li><p>GroupMaxSize</p></li> <li><p>GroupDesiredCapacity</p></li> <li><p>GroupInServiceInstances</p></li> <li><p>GroupPendingInstances</p></li> <li><p>GroupStandbyInstances</p></li> <li><p>GroupTerminatingInstances</p></li> <li><p>GroupTotalInstances</p></li> </ul> <p>If you omit this parameter, all metrics are disabled.</p>',
        'EnableMetricsCollectionQuery$Metrics' => '<p>One or more of the following metrics:</p> <ul> <li><p>GroupMinSize</p></li> <li><p>GroupMaxSize</p></li> <li><p>GroupDesiredCapacity</p></li> <li><p>GroupInServiceInstances</p></li> <li><p>GroupPendingInstances</p></li> <li><p>GroupStandbyInstances</p></li> <li><p>GroupTerminatingInstances</p></li> <li><p>GroupTotalInstances</p></li> </ul> <p>If you omit this parameter, all metrics are enabled.</p> <note> <p>The <code>GroupStandbyInstances</code> metric is not returned by default. You must explicitly request it when calling <a>EnableMetricsCollection</a>.</p> </note>',
      ],
    ],
    'MinAdjustmentStep' => [
      'base' => NULL,
      'refs' => [
        'PutScalingPolicyType$MinAdjustmentStep' => '<p>Used with <code>AdjustmentType</code> with the value <code>PercentChangeInCapacity</code>, the scaling policy changes the <code>DesiredCapacity</code> of the Auto Scaling group by at least the number of instances specified in the value. </p> <p>You will get a <code>ValidationError</code> if you use <code>MinAdjustmentStep</code> on a policy with an <code>AdjustmentType</code> other than <code>PercentChangeInCapacity</code>.</p>',
        'ScalingPolicy$MinAdjustmentStep' => '<p>Changes the <code>DesiredCapacity</code> of the Auto Scaling group by at least the specified number of instances.</p>',
      ],
    ],
    'MonitoringEnabled' => [
      'base' => NULL,
      'refs' => [
        'InstanceMonitoring$Enabled' => '<p>If <code>True</code>, instance monitoring is enabled.</p>',
      ],
    ],
    'NoDevice' => [
      'base' => NULL,
      'refs' => [
        'BlockDeviceMapping$NoDevice' => '<p>Suppresses a device mapping.</p> <note>If <code>NoDevice</code> is set to <code>true</code> for the root device, the instance might fail the EC2 health check. Auto Scaling launches a replacement instance if the instance fails the health check.</note>',
      ],
    ],
    'NotificationConfiguration' => [
      'base' => '<p>Describes a notification.</p>',
      'refs' => [
        'NotificationConfigurations$member' => NULL,
      ],
    ],
    'NotificationConfigurations' => [
      'base' => NULL,
      'refs' => [
        'DescribeNotificationConfigurationsAnswer$NotificationConfigurations' => '<p>The notification configurations.</p>',
      ],
    ],
    'PoliciesType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PolicyARNType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PolicyIncrement' => [
      'base' => NULL,
      'refs' => [
        'PutScalingPolicyType$ScalingAdjustment' => '<p>The number of instances by which to scale. <code>AdjustmentType</code> determines the interpretation of this number (e.g., as an absolute number or as a percentage of the existing Auto Scaling group size]. A positive increment adds to the current capacity and a negative value removes from the current capacity.</p>',
        'ScalingPolicy$ScalingAdjustment' => '<p>The number associated with the specified adjustment type. A positive value adds to the current capacity and a negative value removes from the current capacity.</p>',
      ],
    ],
    'PolicyNames' => [
      'base' => NULL,
      'refs' => [
        'DescribePoliciesType$PolicyNames' => '<p>One or more policy names or policy ARNs to be described. If you omit this list, all policy names are described. If an group name is provided, the results are limited to that group. This list is limited to 50 items. If you specify an unknown policy name, it is ignored with no error.</p>',
      ],
    ],
    'ProcessNames' => [
      'base' => NULL,
      'refs' => [
        'ScalingProcessQuery$ScalingProcesses' => '<p>One or more of the following processes:</p> <ul> <li>Launch</li> <li>Terminate</li> <li>HealthCheck</li> <li>ReplaceUnhealthy</li> <li>AZRebalance</li> <li>AlarmNotification</li> <li>ScheduledActions</li> <li>AddToLoadBalancer</li> </ul>',
      ],
    ],
    'ProcessType' => [
      'base' => '<p>Describes a process type.</p> <p>There are two primary Auto Scaling process types--<code>Launch</code> and <code>Terminate</code>. The <code>Launch</code> process creates a new EC2 instance for an Auto Scaling group, and the <code>Terminate</code> process removes an existing EC2 instance. The remaining Auto Scaling process types relate to specific Auto Scaling features:</p> <ul> <li>AddToLoadBalancer</li> <li>AlarmNotification</li> <li>AZRebalance</li> <li>HealthCheck</li> <li>ReplaceUnhealthy</li> <li>ScheduledActions</li> </ul> <important> If you suspend <code>Launch</code> or <code>Terminate</code>, all other process types are affected to varying degrees. The following descriptions discuss how each process type is affected by a suspension of <code>Launch</code> or <code>Terminate</code>. </important> <p>The <code>AddToLoadBalancer</code> process type adds instances to the load balancer when the instances are launched. If you suspend this process, Auto Scaling will launch the instances but will not add them to the load balancer. If you resume the <code>AddToLoadBalancer</code> process, Auto Scaling will also resume adding new instances to the load balancer when they are launched. However, Auto Scaling will not add running instances that were launched while the process was suspended; those instances must be added manually using the <a href="http://docs.aws.amazon.com/ElasticLoadBalancing/latest/APIReference/API_RegisterInstancesWithLoadBalancer.html"> RegisterInstancesWithLoadBalancer</a> call.</p> <p>The <code>AlarmNotification</code> process type accepts notifications from Amazon CloudWatch alarms that are associated with the Auto Scaling group. If you suspend the <code>AlarmNotification</code> process type, Auto Scaling will not automatically execute scaling policies that would be triggered by alarms.</p> <p>Although the <code>AlarmNotification</code> process type is not directly affected by a suspension of <code>Launch</code> or <code>Terminate</code>, alarm notifications are often used to signal that a change in the size of the Auto Scaling group is warranted. If you suspend <code>Launch</code> or <code>Terminate</code>, Auto Scaling might not be able to implement the alarm\'s associated policy.</p> <p>The <code>AZRebalance</code> process type seeks to maintain a balanced number of instances across Availability Zones within a Region. If you remove an Availability Zone from your Auto Scaling group or an Availability Zone otherwise becomes unhealthy or unavailable, Auto Scaling launches new instances in an unaffected Availability Zone before terminating the unhealthy or unavailable instances. When the unhealthy Availability Zone returns to a healthy state, Auto Scaling automatically redistributes the application instances evenly across all of the designated Availability Zones.</p> <important> <p>If you call <a>SuspendProcesses</a> on the <code>launch</code> process type, the <code>AZRebalance</code> process will neither launch new instances nor terminate existing instances. This is because the <code>AZRebalance</code> process terminates existing instances only after launching the replacement instances.</p> <p>If you call <a>SuspendProcesses</a> on the <code>terminate</code> process type, the <code>AZRebalance</code> process can cause your Auto Scaling group to grow up to ten percent larger than the maximum size. This is because Auto Scaling allows groups to temporarily grow larger than the maximum size during rebalancing activities. If Auto Scaling cannot terminate instances, your Auto Scaling group could remain up to ten percent larger than the maximum size until you resume the <code>terminate</code> process type.</p> </important> <p>The <code>HealthCheck</code> process type checks the health of the instances. Auto Scaling marks an instance as unhealthy if Amazon EC2 or Elastic Load Balancing informs Auto Scaling that the instance is unhealthy. The <code>HealthCheck</code> process can override the health status of an instance that you set with <a>SetInstanceHealth</a>.</p> <p>The <code>ReplaceUnhealthy</code> process type terminates instances that are marked as unhealthy and subsequently creates new instances to replace them. This process calls both of the primary process types--first <code>Terminate</code> and then <code>Launch</code>.</p> <important> <p>The <code>HealthCheck</code> process type works in conjunction with the <code>ReplaceUnhealthly</code> process type to provide health check functionality. If you suspend either <code>Launch</code> or <code>Terminate</code>, the <code>ReplaceUnhealthy</code> process type will not function properly.</p> </important> <p>The <code>ScheduledActions</code> process type performs scheduled actions that you create with <a>PutScheduledUpdateGroupAction</a>. Scheduled actions often involve launching new instances or terminating existing instances. If you suspend either <code>Launch</code> or <code>Terminate</code>, your scheduled actions might not function as expected.</p>',
      'refs' => [
        'Processes$member' => NULL,
      ],
    ],
    'Processes' => [
      'base' => NULL,
      'refs' => [
        'ProcessesType$Processes' => '<p>The names of the process types.</p>',
      ],
    ],
    'ProcessesType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Progress' => [
      'base' => NULL,
      'refs' => [
        'Activity$Progress' => '<p>A value between 0 and 100 that indicates the progress of the activity.</p>',
      ],
    ],
    'PropagateAtLaunch' => [
      'base' => NULL,
      'refs' => [
        'Tag$PropagateAtLaunch' => '<p>Specifies whether the tag is applied to instances launched after the tag is created. The same behavior applies to updates: If you change a tag, it is applied to all instances launched after you made the change.</p>',
        'TagDescription$PropagateAtLaunch' => '<p>Specifies whether the tag is applied to instances launched after the tag is created. The same behavior applies to updates: If you change a tag, it is applied to all instances launched after you made the change.</p>',
      ],
    ],
    'PutLifecycleHookAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutLifecycleHookType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutNotificationConfigurationType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutScalingPolicyType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutScheduledUpdateGroupActionType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RecordLifecycleActionHeartbeatAnswer' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RecordLifecycleActionHeartbeatType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ResourceInUseFault' => [
      'base' => '<p>The Auto Scaling group or launch configuration can\'t be deleted because it is in use.</p>',
      'refs' => [],
    ],
    'ResourceName' => [
      'base' => NULL,
      'refs' => [
        'Alarm$AlarmARN' => '<p>The Amazon Resource Name (ARN] of the alarm.</p>',
        'AttachInstancesQuery$AutoScalingGroupName' => '<p>The name of the group.</p>',
        'AutoScalingGroup$AutoScalingGroupARN' => '<p>The Amazon Resource Name (ARN] of the group.</p>',
        'AutoScalingGroupNames$member' => NULL,
        'CompleteLifecycleActionType$AutoScalingGroupName' => '<p>The name of the group for the lifecycle hook.</p>',
        'CreateAutoScalingGroupType$LaunchConfigurationName' => '<p>The name of the launch configuration. Alternatively, use the <code>InstanceId</code> parameter to specify an EC2 instance instead of a launch configuration.</p>',
        'DeleteAutoScalingGroupType$AutoScalingGroupName' => '<p>The name of the group to delete.</p>',
        'DeleteLifecycleHookType$AutoScalingGroupName' => '<p>The name of the Auto Scaling group for the lifecycle hook.</p>',
        'DeleteNotificationConfigurationType$AutoScalingGroupName' => '<p>The name of the Auto Scaling group.</p>',
        'DeleteNotificationConfigurationType$TopicARN' => '<p>The Amazon Resource Name (ARN] of the Amazon Simple Notification Service (SNS] topic.</p>',
        'DeletePolicyType$AutoScalingGroupName' => '<p>The name of the Auto Scaling group.</p>',
        'DeletePolicyType$PolicyName' => '<p>The name or Amazon Resource Name (ARN] of the policy.</p>',
        'DeleteScheduledActionType$AutoScalingGroupName' => '<p>The name of the Auto Scaling group.</p>',
        'DeleteScheduledActionType$ScheduledActionName' => '<p>The name of the action to delete.</p>',
        'DescribeLifecycleHooksType$AutoScalingGroupName' => '<p>The name of the group.</p>',
        'DescribePoliciesType$AutoScalingGroupName' => '<p>The name of the group.</p>',
        'DescribeScalingActivitiesType$AutoScalingGroupName' => '<p>The name of the group.</p>',
        'DescribeScheduledActionsType$AutoScalingGroupName' => '<p>The name of the group.</p>',
        'DetachInstancesQuery$AutoScalingGroupName' => '<p>The name of the group.</p>',
        'DisableMetricsCollectionQuery$AutoScalingGroupName' => '<p>The name or Amazon Resource Name (ARN] of the group.</p>',
        'EnableMetricsCollectionQuery$AutoScalingGroupName' => '<p>The name or ARN of the Auto Scaling group.</p>',
        'EnterStandbyQuery$AutoScalingGroupName' => '<p>The name of the Auto Scaling group.</p>',
        'ExecutePolicyType$AutoScalingGroupName' => '<p>The name or Amazon Resource Name (ARN] of the Auto Scaling group.</p>',
        'ExecutePolicyType$PolicyName' => '<p>The name or ARN of the policy.</p>',
        'ExitStandbyQuery$AutoScalingGroupName' => '<p>The name of the Auto Scaling group.</p>',
        'LaunchConfiguration$LaunchConfigurationARN' => '<p>The Amazon Resource Name (ARN] of the launch configuration.</p>',
        'LaunchConfigurationNameType$LaunchConfigurationName' => '<p>The name of the launch configuration.</p>',
        'LaunchConfigurationNames$member' => NULL,
        'LifecycleHook$AutoScalingGroupName' => '<p>The name of the Auto Scaling group for the lifecycle hook.</p>',
        'LifecycleHook$NotificationTargetARN' => '<p>The ARN of the notification target that Auto Scaling uses to notify you when an instance is in the transition state for the lifecycle hook. This ARN target can be either an SQS queue or an SNS topic. The notification message sent to the target includes the following:</p> <ul> <li>Lifecycle action token</li> <li>User account ID</li> <li>Name of the Auto Scaling group</li> <li>Lifecycle hook name</li> <li>EC2 instance ID</li> <li>Lifecycle transition</li> <li>Notification metadata</li> </ul>',
        'LifecycleHook$RoleARN' => '<p>The ARN of the IAM role that allows the Auto Scaling group to publish to the specified notification target.</p>',
        'NotificationConfiguration$AutoScalingGroupName' => '<p>The name of the group.</p>',
        'NotificationConfiguration$TopicARN' => '<p>The Amazon Resource Name (ARN] of the Amazon Simple Notification Service (SNS] topic.</p>',
        'PolicyARNType$PolicyARN' => '<p>The Amazon Resource Name (ARN] of the policy.</p>',
        'PolicyNames$member' => NULL,
        'PutLifecycleHookType$AutoScalingGroupName' => '<p>The name of the Auto Scaling group to which you want to assign the lifecycle hook.</p>',
        'PutLifecycleHookType$RoleARN' => '<p>The ARN of the IAM role that allows the Auto Scaling group to publish to the specified notification target.</p> <note> <p>This parameter is required for new lifecycle hooks, but optional when updating existing hooks.</p> </note>',
        'PutLifecycleHookType$NotificationTargetARN' => '<p>The ARN of the notification target that Auto Scaling will use to notify you when an instance is in the transition state for the lifecycle hook. This ARN target can be either an SQS queue or an SNS topic. </p> <note> <p>This parameter is required for new lifecycle hooks, but optional when updating existing hooks.</p> </note> <p>The notification message sent to the target will include:</p> <ul> <li> <b>LifecycleActionToken</b>. The Lifecycle action token.</li> <li> <b>AccountId</b>. The user account ID.</li> <li> <b>AutoScalingGroupName</b>. The name of the Auto Scaling group.</li> <li> <b>LifecycleHookName</b>. The lifecycle hook name.</li> <li> <b>EC2InstanceId</b>. The EC2 instance ID.</li> <li> <b>LifecycleTransition</b>. The lifecycle transition.</li> <li> <b>NotificationMetadata</b>. The notification metadata.</li> </ul> <p>This operation uses the JSON format when sending notifications to an Amazon SQS queue, and an email key/value pair format when sending notifications to an Amazon SNS topic.</p> <p>When you call this operation, a test message is sent to the notification target. This test message contains an additional key/value pair: <code>Event:autoscaling:TEST_NOTIFICATION</code>.</p>',
        'PutNotificationConfigurationType$AutoScalingGroupName' => '<p>The name of the Auto Scaling group.</p>',
        'PutNotificationConfigurationType$TopicARN' => '<p> The Amazon Resource Name (ARN] of the Amazon Simple Notification Service (SNS] topic. </p>',
        'PutScalingPolicyType$AutoScalingGroupName' => '<p>The name or ARN of the group.</p>',
        'PutScheduledUpdateGroupActionType$AutoScalingGroupName' => '<p>The name or Amazon Resource Name (ARN] of the Auto Scaling group.</p>',
        'RecordLifecycleActionHeartbeatType$AutoScalingGroupName' => '<p>The name of the Auto Scaling group for the hook.</p>',
        'ScalingPolicy$PolicyARN' => '<p>The Amazon Resource Name (ARN] of the policy.</p>',
        'ScalingProcessQuery$AutoScalingGroupName' => '<p>The name or Amazon Resource Name (ARN] of the Auto Scaling group.</p>',
        'ScheduledActionNames$member' => NULL,
        'ScheduledUpdateGroupAction$ScheduledActionARN' => '<p>The Amazon Resource Name (ARN] of the scheduled action.</p>',
        'SetDesiredCapacityType$AutoScalingGroupName' => '<p>The name of the Auto Scaling group.</p>',
        'UpdateAutoScalingGroupType$AutoScalingGroupName' => '<p>The name of the Auto Scaling group.</p>',
        'UpdateAutoScalingGroupType$LaunchConfigurationName' => '<p>The name of the launch configuration.</p>',
      ],
    ],
    'ScalingActivityInProgressFault' => [
      'base' => '<p>The Auto Scaling group can\'t be deleted because there are scaling activities in progress.</p>',
      'refs' => [],
    ],
    'ScalingActivityStatusCode' => [
      'base' => NULL,
      'refs' => [
        'Activity$StatusCode' => '<p>The current status of the activity.</p>',
      ],
    ],
    'ScalingPolicies' => [
      'base' => NULL,
      'refs' => [
        'PoliciesType$ScalingPolicies' => '<p>The scaling policies.</p>',
      ],
    ],
    'ScalingPolicy' => [
      'base' => '<p>Describes a scaling policy.</p>',
      'refs' => [
        'ScalingPolicies$member' => NULL,
      ],
    ],
    'ScalingProcessQuery' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ScheduledActionNames' => [
      'base' => NULL,
      'refs' => [
        'DescribeScheduledActionsType$ScheduledActionNames' => '<p>Describes one or more scheduled actions. If you omit this list, the call describes all scheduled actions. If you specify an unknown scheduled action it is ignored with no error.</p> <p>You can describe up to a maximum of 50 instances with a single call. If there are more items to return, the call returns a token. To get the next set of items, repeat the call with the returned token in the <code>NextToken</code> parameter.</p>',
      ],
    ],
    'ScheduledActionsType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ScheduledUpdateGroupAction' => [
      'base' => '<p>Describes a scheduled update to an Auto Scaling group.</p>',
      'refs' => [
        'ScheduledUpdateGroupActions$member' => NULL,
      ],
    ],
    'ScheduledUpdateGroupActions' => [
      'base' => NULL,
      'refs' => [
        'ScheduledActionsType$ScheduledUpdateGroupActions' => '<p>The scheduled actions.</p>',
      ],
    ],
    'SecurityGroups' => [
      'base' => NULL,
      'refs' => [
        'CreateLaunchConfigurationType$SecurityGroups' => '<p>One or more security groups with which to associate the instances.</p> <p>If your instances are launched in EC2-Classic, you can either specify security group names or the security group IDs. For more information about security groups for EC2-Classic, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-network-security.html">Amazon EC2 Security Groups</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p> <p>If your instances are launched in a VPC, specify security group IDs. For more information, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_SecurityGroups.html">Security Groups for Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
        'LaunchConfiguration$SecurityGroups' => '<p>The security groups to associate with the EC2 instances.</p>',
      ],
    ],
    'SetDesiredCapacityType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'SetInstanceHealthQuery' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ShouldDecrementDesiredCapacity' => [
      'base' => NULL,
      'refs' => [
        'DetachInstancesQuery$ShouldDecrementDesiredCapacity' => '<p>If <code>True</code>, the Auto Scaling group decrements the desired capacity value by the number of instances detached.</p>',
        'EnterStandbyQuery$ShouldDecrementDesiredCapacity' => '<p>Specifies whether the instances moved to <code>Standby</code> mode count as part of the Auto Scaling group\'s desired capacity. If set, the desired capacity for the Auto Scaling group decrements by the number of instances moved to <code>Standby</code> mode.</p>',
        'TerminateInstanceInAutoScalingGroupType$ShouldDecrementDesiredCapacity' => '<p>If <code>true</code>, terminating this instance also decrements the size of the Auto Scaling group.</p>',
      ],
    ],
    'ShouldRespectGracePeriod' => [
      'base' => NULL,
      'refs' => [
        'SetInstanceHealthQuery$ShouldRespectGracePeriod' => '<p>If the Auto Scaling group of the specified instance has a <code>HealthCheckGracePeriod</code> specified for the group, by default, this call will respect the grace period. Set this to <code>False</code>, if you do not want the call to respect the grace period associated with the group.</p> <p>For more information, see the <code>HealthCheckGracePeriod</code> parameter description for <a>CreateAutoScalingGroup</a>.</p>',
      ],
    ],
    'SpotPrice' => [
      'base' => NULL,
      'refs' => [
        'CreateLaunchConfigurationType$SpotPrice' => '<p>The maximum hourly price to be paid for any Spot Instance launched to fulfill the request. Spot Instances are launched when the price you specify exceeds the current Spot market price. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/US-SpotInstances.html">Launch Spot Instances in Your Auto Scaling Group</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'LaunchConfiguration$SpotPrice' => '<p>The price to bid when launching Spot Instances.</p>',
      ],
    ],
    'SuspendedProcess' => [
      'base' => '<p>Describes an Auto Scaling process that has been suspended. For more information, see <a>ProcessType</a>.</p>',
      'refs' => [
        'SuspendedProcesses$member' => NULL,
      ],
    ],
    'SuspendedProcesses' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$SuspendedProcesses' => '<p>The suspended processes associated with the group.</p>',
      ],
    ],
    'Tag' => [
      'base' => '<p>Describes a tag applied to an Auto Scaling group.</p>',
      'refs' => [
        'Tags$member' => NULL,
      ],
    ],
    'TagDescription' => [
      'base' => '<p>Describes a tag applied to an Auto Scaling group.</p>',
      'refs' => [
        'TagDescriptionList$member' => NULL,
      ],
    ],
    'TagDescriptionList' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$Tags' => '<p>The tags for the Auto Scaling group.</p>',
        'TagsType$Tags' => '<p>The tags.</p>',
      ],
    ],
    'TagKey' => [
      'base' => NULL,
      'refs' => [
        'Tag$Key' => '<p>The tag key.</p>',
        'TagDescription$Key' => '<p>The tag key.</p>',
      ],
    ],
    'TagValue' => [
      'base' => NULL,
      'refs' => [
        'Tag$Value' => '<p>The tag value.</p>',
        'TagDescription$Value' => '<p>The tag value.</p>',
      ],
    ],
    'Tags' => [
      'base' => NULL,
      'refs' => [
        'CreateAutoScalingGroupType$Tags' => '<p>The tag to be created or updated. Each tag should be defined by its resource type, resource ID, key, value, and a propagate flag. Valid values: key=<i>value</i>, value=<i>value</i>, propagate=<i>true</i> or <i>false</i>. Value and propagate are optional parameters.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/ASTagging.html">Add, Modify, or Remove Auto Scaling Group Tags</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'CreateOrUpdateTagsType$Tags' => '<p> The tag to be created or updated. Each tag should be defined by its resource type, resource ID, key, value, and a propagate flag. The resource type and resource ID identify the type and name of resource for which the tag is created. Currently, <code>auto-scaling-group</code> is the only supported resource type. The valid value for the resource ID is <i>groupname</i>. </p> <p>The <code>PropagateAtLaunch</code> flag defines whether the new tag will be applied to instances launched by the group. Valid values are <code>true</code> or <code>false</code>. However, instances that are already running will not get the new or updated tag. Likewise, when you modify a tag, the updated version will be applied only to new instances launched by the group after the change. Running instances that had the previous version of the tag will continue to have the older tag. </p> <p>When you create a tag and a tag of the same name already exists, the operation overwrites the previous tag definition, but you will not get an error message. </p>',
        'DeleteTagsType$Tags' => '<p>Each tag should be defined by its resource type, resource ID, key, value, and a propagate flag. Valid values are: Resource type = <i>auto-scaling-group</i>, Resource ID = <i>AutoScalingGroupName</i>, key=<i>value</i>, value=<i>value</i>, propagate=<i>true</i> or <i>false</i>.</p>',
      ],
    ],
    'TagsType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'TerminateInstanceInAutoScalingGroupType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'TerminationPolicies' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$TerminationPolicies' => '<p>The termination policies for this Auto Scaling group.</p>',
        'CreateAutoScalingGroupType$TerminationPolicies' => '<p>One or more termination policies used to select the instance to terminate. These policies are executed in the order that they are listed.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/us-termination-policy.html">Choosing a Termination Policy for Your Auto Scaling Group</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'DescribeTerminationPolicyTypesAnswer$TerminationPolicyTypes' => '<p>The Termination policies supported by Auto Scaling. They are: <code>OldestInstance</code>, <code>OldestLaunchConfiguration</code>, <code>NewestInstance</code>, <code>ClosestToNextInstanceHour</code>, and <code>Default</code>.</p>',
        'UpdateAutoScalingGroupType$TerminationPolicies' => '<p> A standalone termination policy or a list of termination policies used to select the instance to terminate. The policies are executed in the order that they are listed. </p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/us-termination-policy.html">Choosing a Termination Policy for Your Auto Scaling Group</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
      ],
    ],
    'TimestampType' => [
      'base' => NULL,
      'refs' => [
        'Activity$StartTime' => '<p>The start time of this activity.</p>',
        'Activity$EndTime' => '<p>The end time of this activity.</p>',
        'AutoScalingGroup$CreatedTime' => '<p>The date and time the group was created.</p>',
        'DescribeScheduledActionsType$StartTime' => '<p>The earliest scheduled start time to return. If scheduled action names are provided, this parameter is ignored.</p>',
        'DescribeScheduledActionsType$EndTime' => '<p>The latest scheduled start time to return. If scheduled action names are provided, this parameter is ignored.</p>',
        'LaunchConfiguration$CreatedTime' => '<p>The creation date and time for the launch configuration.</p>',
        'PutScheduledUpdateGroupActionType$Time' => '<p><code>Time</code> is deprecated.</p> <p>The time for this action to start. <code>Time</code> is an alias for <code>StartTime</code> and can be specified instead of <code>StartTime</code>, or vice versa. If both <code>Time</code> and <code>StartTime</code> are specified, their values should be identical. Otherwise, <code>PutScheduledUpdateGroupAction</code> will return an error.</p>',
        'PutScheduledUpdateGroupActionType$StartTime' => '<p>The time for this action to start, as in <code>--start-time 2010-06-01T00:00:00Z</code>.</p> <p>If you try to schedule your action in the past, Auto Scaling returns an error message. </p> <p>When <code>StartTime</code> and <code>EndTime</code> are specified with <code>Recurrence</code>, they form the boundaries of when the recurring action will start and stop.</p>',
        'PutScheduledUpdateGroupActionType$EndTime' => '<p>The time for this action to end.</p>',
        'ScheduledUpdateGroupAction$Time' => '<p><code>Time</code> is deprecated.</p> <p>The time that the action is scheduled to begin. <code>Time</code> is an alias for <code>StartTime</code>.</p>',
        'ScheduledUpdateGroupAction$StartTime' => '<p>The time that the action is scheduled to begin. This value can be up to one month in the future.</p> <p>When <code>StartTime</code> and <code>EndTime</code> are specified with <code>Recurrence</code>, they form the boundaries of when the recurring action will start and stop.</p>',
        'ScheduledUpdateGroupAction$EndTime' => '<p>The time that the action is scheduled to end. This value can be up to one month in the future.</p>',
      ],
    ],
    'UpdateAutoScalingGroupType' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Values' => [
      'base' => NULL,
      'refs' => [
        'Filter$Values' => '<p>The value of the filter.</p>',
      ],
    ],
    'XmlString' => [
      'base' => NULL,
      'refs' => [
        'ActivitiesType$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'Activity$ActivityId' => '<p>The ID of the activity.</p>',
        'Activity$Description' => '<p>A friendly, more verbose description of the scaling activity.</p>',
        'Activity$Details' => '<p>The details about the scaling activity.</p>',
        'ActivityIds$member' => NULL,
        'AutoScalingGroupNamesType$NextToken' => '<p>The token for the next set of items to return. (You received this token from a previous call.]</p>',
        'AutoScalingGroupsType$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'AutoScalingInstancesType$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'DescribeAutoScalingInstancesType$NextToken' => '<p>The token for the next set of items to return. (You received this token from a previous call.]</p>',
        'DescribeNotificationConfigurationsAnswer$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'DescribeNotificationConfigurationsType$NextToken' => '<p>The token for the next set of items to return. (You received this token from a previous call.]</p>',
        'DescribePoliciesType$NextToken' => '<p>The token for the next set of items to return. (You received this token from a previous call.]</p>',
        'DescribeScalingActivitiesType$NextToken' => '<p>The token for the next set of items to return. (You received this token from a previous call.]</p>',
        'DescribeScheduledActionsType$NextToken' => '<p>The token for the next set of items to return. (You received this token from a previous call.]</p>',
        'DescribeTagsType$NextToken' => '<p>The token for the next set of items to return. (You received this token from a previous call.]</p>',
        'Filter$Name' => '<p>The name of the filter. The valid values are: <code>"auto-scaling-group"</code>, <code>"key"</code>, <code>"value"</code>, and <code>"propagate-at-launch"</code>.</p>',
        'LaunchConfigurationNamesType$NextToken' => '<p>The token for the next set of items to return. (You received this token from a previous call.]</p>',
        'LaunchConfigurationsType$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'PoliciesType$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'ScheduledActionsType$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'SecurityGroups$member' => NULL,
        'Tag$ResourceId' => '<p>The name of the group.</p>',
        'Tag$ResourceType' => '<p>The kind of resource to which the tag is applied. Currently, Auto Scaling supports the <code>auto-scaling-group</code> resource type.</p>',
        'TagDescription$ResourceId' => '<p>The name of the group.</p>',
        'TagDescription$ResourceType' => '<p>The kind of resource to which the tag is applied. Currently, Auto Scaling supports the <code>auto-scaling-group</code> resource type.</p>',
        'TagsType$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'Values$member' => NULL,
      ],
    ],
    'XmlStringMaxLen1023' => [
      'base' => NULL,
      'refs' => [
        'Activity$Cause' => '<p>The reason the activity was begun.</p>',
        'LifecycleHook$NotificationMetadata' => '<p>Additional information that you want to include any time Auto Scaling sends a message to the notification target.</p>',
        'PutLifecycleHookType$NotificationMetadata' => '<p>Contains additional information that you want to include any time Auto Scaling sends a message to the notification target.</p>',
      ],
    ],
    'XmlStringMaxLen16' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingInstanceDetails$InstanceId' => '<p>The ID of the instance.</p>',
        'CreateAutoScalingGroupType$InstanceId' => '<p>The ID of the EC2 instance used to create a launch configuration for the group. Alternatively, use the <code>LaunchConfigurationName</code> parameter to specify a launch configuration instead of an EC2 instance.</p> <p>When you specify an ID of an instance, Auto Scaling creates a new launch configuration and associates it with the group. This launch configuration derives its attributes from the specified instance, with the exception of the block device mapping.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/create-asg-from-instance.html">Create an Auto Scaling Group Using an EC2 Instance ID</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'CreateLaunchConfigurationType$InstanceId' => '<p>The ID of the EC2 instance to use to create the launch configuration.</p> <p>The new launch configuration derives attributes from the instance, with the exception of the block device mapping.</p> <p>To create a launch configuration with a block device mapping or override any other instance attributes, specify them as part of the same request.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/create-lc-with-instanceID.html">Create a Launch Configuration Using an EC2 Instance</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'Instance$InstanceId' => '<p>The ID of the instance.</p>',
        'InstanceIds$member' => NULL,
        'SetInstanceHealthQuery$InstanceId' => '<p>The ID of the EC2 instance.</p>',
        'TerminateInstanceInAutoScalingGroupType$InstanceId' => '<p>The ID of the EC2 instance.</p>',
      ],
    ],
    'XmlStringMaxLen1600' => [
      'base' => NULL,
      'refs' => [
        'CreateLaunchConfigurationType$IamInstanceProfile' => '<p>The name or the Amazon Resource Name (ARN] of the instance profile associated with the IAM role for the instance.</p> <p>Amazon EC2 instances launched with an IAM role will automatically have AWS security credentials available. You can use IAM roles with Auto Scaling to automatically enable applications running on your Amazon EC2 instances to securely access other AWS resources. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/us-iam-role.html">Launch Auto Scaling Instances with an IAM Role</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'LaunchConfiguration$IamInstanceProfile' => '<p>The name or Amazon Resource Name (ARN] of the instance profile associated with the IAM role for the instance.</p>',
        'TerminationPolicies$member' => NULL,
      ],
    ],
    'XmlStringMaxLen255' => [
      'base' => NULL,
      'refs' => [
        'Activity$AutoScalingGroupName' => '<p>The name of the Auto Scaling group.</p>',
        'Activity$StatusMessage' => '<p>A friendly, more verbose description of the activity status.</p>',
        'AdjustmentType$AdjustmentType' => '<p>The policy adjustment type. The valid values are <code>ChangeInCapacity</code>, <code>ExactCapacity</code>, and <code>PercentChangeInCapacity</code>.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/as-scale-based-on-demand.html">Dynamic Scaling</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'Alarm$AlarmName' => '<p>The name of the alarm.</p>',
        'AlreadyExistsFault$message' => NULL,
        'AutoScalingGroup$AutoScalingGroupName' => '<p>The name of the group.</p>',
        'AutoScalingGroup$LaunchConfigurationName' => '<p>The name of the associated launch configuration.</p>',
        'AutoScalingGroup$PlacementGroup' => '<p>The name of the placement group into which you\'ll launch your instances, if any. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/placement-groups.html">Placement Groups</a>.</p>',
        'AutoScalingGroup$VPCZoneIdentifier' => '<p>One or more subnet IDs, if applicable, separated by commas.</p> <p>If you specify <code>VPCZoneIdentifier</code> and <code>AvailabilityZones</code>, ensure that the Availability Zones of the subnets match the values for <code>AvailabilityZones</code>.</p>',
        'AutoScalingGroup$Status' => '<p>The current state of the Auto Scaling group when a <a>DeleteAutoScalingGroup</a> action is in progress.</p>',
        'AutoScalingInstanceDetails$AutoScalingGroupName' => '<p>The name of the Auto Scaling group associated with the instance.</p>',
        'AutoScalingInstanceDetails$AvailabilityZone' => '<p>The Availability Zone for the instance.</p>',
        'AutoScalingInstanceDetails$LaunchConfigurationName' => '<p>The launch configuration associated with the instance.</p>',
        'AutoScalingNotificationTypes$member' => NULL,
        'AvailabilityZones$member' => NULL,
        'BlockDeviceMapping$VirtualName' => '<p>The name of the virtual device, <code>ephemeral0</code> to <code>ephemeral3</code>.</p>',
        'BlockDeviceMapping$DeviceName' => '<p>The device name exposed to the EC2 instance (for example, <code>/dev/sdh</code> or <code>xvdh</code>].</p>',
        'ClassicLinkVPCSecurityGroups$member' => NULL,
        'CreateAutoScalingGroupType$AutoScalingGroupName' => '<p>The name of the group. This name must be unique within the scope of your AWS account.</p>',
        'CreateAutoScalingGroupType$PlacementGroup' => '<p>The name of the placement group into which you\'ll launch your instances, if any. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/placement-groups.html">Placement Groups</a>.</p>',
        'CreateAutoScalingGroupType$VPCZoneIdentifier' => '<p>A comma-separated list of subnet identifiers for your virtual private cloud (VPC].</p> <p>If you specify subnets and Availability Zones with this call, ensure that the subnets\' Availability Zones match the Availability Zones specified.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/autoscalingsubnets.html">Auto Scaling and Amazon VPC</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'CreateLaunchConfigurationType$LaunchConfigurationName' => '<p>The name of the launch configuration. This name must be unique within the scope of your AWS account.</p>',
        'CreateLaunchConfigurationType$ImageId' => '<p>The ID of the Amazon Machine Image (AMI] to use to launch your EC2 instances. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/finding-an-ami.html">Finding an AMI</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p>',
        'CreateLaunchConfigurationType$KeyName' => '<p>The name of the key pair. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html">Amazon EC2 Key Pairs</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p>',
        'CreateLaunchConfigurationType$ClassicLinkVPCId' => '<p>The ID of a ClassicLink-enabled VPC to link your EC2-Classic instances to. This parameter can only be used if you are launching EC2-Classic instances. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/vpc-classiclink.html">ClassicLink</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p>',
        'CreateLaunchConfigurationType$InstanceType' => '<p> The instance type of the Amazon EC2 instance. For information about available Amazon EC2 instance types, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instance-types.html#AvailableInstanceTypes"> Available Instance Types</a> in the <i>Amazon Elastic Cloud Compute User Guide.</i> </p>',
        'CreateLaunchConfigurationType$KernelId' => '<p> The ID of the kernel associated with the Amazon EC2 AMI. </p>',
        'CreateLaunchConfigurationType$RamdiskId' => '<p> The ID of the RAM disk associated with the Amazon EC2 AMI. </p>',
        'Ebs$SnapshotId' => '<p>The ID of the snapshot.</p>',
        'EnableMetricsCollectionQuery$Granularity' => '<p>The granularity to associate with the metrics to collect. Currently, the only valid value is "1Minute".</p>',
        'EnabledMetric$Metric' => '<p>The name of the metric.</p>',
        'EnabledMetric$Granularity' => '<p>The granularity of the metric.</p>',
        'Instance$AvailabilityZone' => '<p>The Availability Zone associated with this instance.</p>',
        'Instance$LaunchConfigurationName' => '<p>The launch configuration associated with the instance.</p>',
        'InvalidNextToken$message' => NULL,
        'LaunchConfiguration$LaunchConfigurationName' => '<p>The name of the launch configuration.</p>',
        'LaunchConfiguration$ImageId' => '<p>The ID of the Amazon Machine Image (AMI].</p>',
        'LaunchConfiguration$KeyName' => '<p>The name of the key pair.</p>',
        'LaunchConfiguration$ClassicLinkVPCId' => '<p>The ID of a ClassicLink-enabled VPC to link your EC2-Classic instances to. This parameter can only be used if you are launching EC2-Classic instances. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/vpc-classiclink.html">ClassicLink</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p>',
        'LaunchConfiguration$InstanceType' => '<p>The instance type for the EC2 instances.</p>',
        'LaunchConfiguration$KernelId' => '<p>The ID of the kernel associated with the AMI.</p>',
        'LaunchConfiguration$RamdiskId' => '<p>The ID of the RAM disk associated with the AMI.</p>',
        'LimitExceededFault$message' => NULL,
        'LoadBalancerNames$member' => NULL,
        'MetricCollectionType$Metric' => '<p>The metric.</p>',
        'MetricGranularityType$Granularity' => '<p>The granularity.</p>',
        'Metrics$member' => NULL,
        'NotificationConfiguration$NotificationType' => '<p>The types of events for an action to start.</p>',
        'ProcessNames$member' => NULL,
        'ProcessType$ProcessName' => '<p>The name of the process.</p>',
        'PutScalingPolicyType$PolicyName' => '<p>The name of the policy.</p>',
        'PutScalingPolicyType$AdjustmentType' => '<p>Specifies whether the <code>ScalingAdjustment</code> is an absolute number or a percentage of the current capacity. Valid values are <code>ChangeInCapacity</code>, <code>ExactCapacity</code>, and <code>PercentChangeInCapacity</code>.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/as-scale-based-on-demand.html">Dynamic Scaling</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'PutScheduledUpdateGroupActionType$ScheduledActionName' => '<p> The name of this scaling action. </p>',
        'PutScheduledUpdateGroupActionType$Recurrence' => '<p> The time when recurring future actions will start. Start time is specified by the user following the Unix cron syntax format. For information about cron syntax, go to <a href="http://en.wikipedia.org/wiki/Cron">Wikipedia, The Free Encyclopedia</a>.</p> <p>When <code>StartTime</code> and <code>EndTime</code> are specified with <code>Recurrence</code>, they form the boundaries of when the recurring action will start and stop.</p>',
        'ResourceInUseFault$message' => NULL,
        'ScalingActivityInProgressFault$message' => NULL,
        'ScalingPolicy$AutoScalingGroupName' => '<p>The name of the Auto Scaling group associated with this scaling policy.</p>',
        'ScalingPolicy$PolicyName' => '<p>The name of the scaling policy.</p>',
        'ScalingPolicy$AdjustmentType' => '<p>Specifies whether the <code>ScalingAdjustment</code> is an absolute number or a percentage of the current capacity. Valid values are <code>ChangeInCapacity</code>, <code>ExactCapacity</code>, and <code>PercentChangeInCapacity</code>.</p>',
        'ScheduledUpdateGroupAction$AutoScalingGroupName' => '<p>The name of the group.</p>',
        'ScheduledUpdateGroupAction$ScheduledActionName' => '<p>The name of the scheduled action.</p>',
        'ScheduledUpdateGroupAction$Recurrence' => '<p>The regular schedule that an action occurs.</p>',
        'SuspendedProcess$ProcessName' => '<p>The name of the suspended process.</p>',
        'SuspendedProcess$SuspensionReason' => '<p>The reason that the process was suspended.</p>',
        'UpdateAutoScalingGroupType$PlacementGroup' => '<p>The name of the placement group into which you\'ll launch your instances, if any. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/placement-groups.html">Placement Groups</a>.</p>',
        'UpdateAutoScalingGroupType$VPCZoneIdentifier' => '<p> The subnet identifier for the Amazon VPC connection, if applicable. You can specify several subnets in a comma-separated list. </p> <p> When you specify <code>VPCZoneIdentifier</code> with <code>AvailabilityZones</code>, ensure that the subnets\' Availability Zones match the values you specify for <code>AvailabilityZones</code>. </p> <p> For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/autoscalingsubnets.html">Auto Scaling and Amazon VPC</a> in the <i>Auto Scaling Developer Guide</i>. </p>',
      ],
    ],
    'XmlStringMaxLen32' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$HealthCheckType' => '<p>The service of interest for the health status check, which can be either <code>EC2</code> for Amazon EC2 or <code>ELB</code> for Elastic Load Balancing.</p>',
        'AutoScalingInstanceDetails$LifecycleState' => '<p>The lifecycle state for the instance. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/AutoScalingGroupLifecycle.html#AutoScalingStates">Auto Scaling Instance States</a> in the <i>Auto Scaling Developer Guide</i>.</p>',
        'AutoScalingInstanceDetails$HealthStatus' => '<p>The health status of this instance. "Healthy" means that the instance is healthy and should remain in service. "Unhealthy" means that the instance is unhealthy and Auto Scaling should terminate and replace it.</p>',
        'CreateAutoScalingGroupType$HealthCheckType' => '<p>The service to use for the health checks. The valid values are <code>EC2</code> and <code>ELB</code>.</p> <p>By default, health checks use Amazon EC2 instance status checks to determine the health of an instance. For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/healthcheck.html">Health Checks</a>.</p>',
        'Instance$HealthStatus' => '<p>The health status of the instance.</p>',
        'SetInstanceHealthQuery$HealthStatus' => '<p> The health status of the instance. Set to <code>Healthy</code> if you want the instance to remain in service. Set to <code>Unhealthy</code> if you want the instance to be out of service. Auto Scaling will terminate and replace the unhealthy instance. </p>',
        'UpdateAutoScalingGroupType$HealthCheckType' => '<p> The type of health check for the instances in the Auto Scaling group. The health check type can either be <code>EC2</code> for Amazon EC2 or <code>ELB</code> for Elastic Load Balancing. </p>',
      ],
    ],
    'XmlStringMaxLen64' => [
      'base' => NULL,
      'refs' => [
        'CreateLaunchConfigurationType$PlacementTenancy' => '<p>The tenancy of the instance. An instance with a tenancy of <code>dedicated</code> runs on single-tenant hardware and can only be launched in a VPC.</p> <p>You must set the value of this parameter to <code>dedicated</code> if want to launch Dedicated Instances in a shared tenancy VPC (VPC with instance placement tenancy attribute set to <code>default</code>].</p> <p>If you specify a value for this parameter, be sure to specify at least one VPC subnet using the <i>VPCZoneIdentifier</i> parameter when you create your group. </p> <p>For more information, see <a href="http://docs.aws.amazon.com/AutoScaling/latest/DeveloperGuide/autoscalingsubnets.html">Auto Scaling and Amazon VPC</a> in the <i>Auto Scaling Developer Guide</i>. </p> <p>Valid values: <code>default</code> | <code>dedicated</code></p>',
        'LaunchConfiguration$PlacementTenancy' => '<p>The tenancy of the instance, either <code>default</code> or <code>dedicated</code>. An instance with <code>dedicated</code> tenancy runs in an isolated, single-tenant hardware and can only be launched in a VPC.</p>',
      ],
    ],
    'XmlStringUserData' => [
      'base' => NULL,
      'refs' => [
        'CreateLaunchConfigurationType$UserData' => '<p>The user data to make available to the launched EC2 instances. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-instance-metadata.html">Instance Metadata and User Data</a> in the <i>Amazon Elastic Compute Cloud User Guide</i>.</p> <note>At this time, launch configurations don\'t support compressed (zipped] user data files.</note>',
        'LaunchConfiguration$UserData' => '<p>The user data available to the EC2 instances.</p>',
      ],
    ],
  ],
];
