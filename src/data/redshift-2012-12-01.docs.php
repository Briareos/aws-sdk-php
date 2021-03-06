<?php return [
  'operations' => [
    'AuthorizeClusterSecurityGroupIngress' => '<p> Adds an inbound (ingress] rule to an Amazon Redshift security group. Depending on whether the application accessing your cluster is running on the Internet or an EC2 instance, you can authorize inbound access to either a Classless Interdomain Routing (CIDR] IP address range or an EC2 security group. You can add as many as 20 ingress rules to an Amazon Redshift security group. </p> <note> The EC2 security group must be defined in the AWS region where the cluster resides. </note> <p>For an overview of CIDR blocks, see the Wikipedia article on <a href="http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing">Classless Inter-Domain Routing</a>. </p> <p> You must also associate the security group with a cluster so that clients running on these IP addresses or the EC2 instance are authorized to connect to the cluster. For information about managing security groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-security-groups.html">Working with Security Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>.</p>',
    'AuthorizeSnapshotAccess' => '<p> Authorizes the specified AWS customer account to restore the specified snapshot. </p> <p> For more information about working with snapshots, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-snapshots.html">Amazon Redshift Snapshots</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'CopyClusterSnapshot' => '<p> Copies the specified automated cluster snapshot to a new manual cluster snapshot. The source must be an automated snapshot and it must be in the available state. </p> <p> When you delete a cluster, Amazon Redshift deletes any automated snapshots of the cluster. Also, when the retention period of the snapshot expires, Amazon Redshift automatically deletes it. If you want to keep an automated snapshot for a longer period, you can make a manual copy of the snapshot. Manual snapshots are retained until you delete them. </p> <p> For more information about working with snapshots, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-snapshots.html">Amazon Redshift Snapshots</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'CreateCluster' => '<p> Creates a new cluster. To create the cluster in virtual private cloud (VPC], you must provide cluster subnet group name. If you don\'t provide a cluster subnet group name or the cluster security group parameter, Amazon Redshift creates a non-VPC cluster, it associates the default cluster security group with the cluster. For more information about managing clusters, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html">Amazon Redshift Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i> . </p>',
    'CreateClusterParameterGroup' => '<p> Creates an Amazon Redshift parameter group. </p> <p>Creating parameter groups is independent of creating clusters. You can associate a cluster with a parameter group when you create the cluster. You can also associate an existing cluster with a parameter group after the cluster is created by using <a>ModifyCluster</a>. </p> <p> Parameters in the parameter group define specific behavior that applies to the databases you create on the cluster. For more information about managing parameter groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-parameter-groups.html">Amazon Redshift Parameter Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'CreateClusterSecurityGroup' => '<p> Creates a new Amazon Redshift security group. You use security groups to control access to non-VPC clusters. </p> <p> For information about managing security groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-security-groups.html">Amazon Redshift Cluster Security Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'CreateClusterSnapshot' => '<p> Creates a manual snapshot of the specified cluster. The cluster must be in the <code>available</code> state. </p> <p> For more information about working with snapshots, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-snapshots.html">Amazon Redshift Snapshots</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'CreateClusterSubnetGroup' => '<p> Creates a new Amazon Redshift subnet group. You must provide a list of one or more subnets in your existing Amazon Virtual Private Cloud (Amazon VPC] when creating Amazon Redshift subnet group. </p> <p> For information about subnet groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-cluster-subnet-groups.html">Amazon Redshift Cluster Subnet Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'CreateEventSubscription' => '<p> Creates an Amazon Redshift event notification subscription. This action requires an ARN (Amazon Resource Name] of an Amazon SNS topic created by either the Amazon Redshift console, the Amazon SNS console, or the Amazon SNS API. To obtain an ARN with Amazon SNS, you must create a topic in Amazon SNS and subscribe to the topic. The ARN is displayed in the SNS console. </p> <p> You can specify the source type, and lists of Amazon Redshift source IDs, event categories, and event severities. Notifications will be sent for all events you want that match those criteria. For example, you can specify source type = cluster, source ID = my-cluster-1 and mycluster2, event categories = Availability, Backup, and severity = ERROR. The subscription will only send notifications for those ERROR events in the Availability and Backup categories for the specified clusters. </p> <p> If you specify both the source type and source IDs, such as source type = cluster and source identifier = my-cluster-1, notifications will be sent for all the cluster events for my-cluster-1. If you specify a source type but do not specify a source identifier, you will receive notice of the events for the objects of that type in your AWS account. If you do not specify either the SourceType nor the SourceIdentifier, you will be notified of events generated from all Amazon Redshift sources belonging to your AWS account. You must specify a source type if you specify a source ID. </p>',
    'CreateHsmClientCertificate' => '<p>Creates an HSM client certificate that an Amazon Redshift cluster will use to connect to the client\'s HSM in order to store and retrieve the keys used to encrypt the cluster databases.</p> <p>The command returns a public key, which you must store in the HSM. In addition to creating the HSM certificate, you must create an Amazon Redshift HSM configuration that provides a cluster the information needed to store and use encryption keys in the HSM. For more information, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-HSM.html">Hardware Security Modules</a> in the Amazon Redshift Cluster Management Guide.</p>',
    'CreateHsmConfiguration' => '<p>Creates an HSM configuration that contains the information required by an Amazon Redshift cluster to store and use database encryption keys in a Hardware Security Module (HSM]. After creating the HSM configuration, you can specify it as a parameter when creating a cluster. The cluster will then store its encryption keys in the HSM.</p> <p>In addition to creating an HSM configuration, you must also create an HSM client certificate. For more information, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-HSM.html">Hardware Security Modules</a> in the Amazon Redshift Cluster Management Guide.</p>',
    'CreateTags' => '<p> Adds one or more tags to a specified resource. </p> <p> A resource can have up to 10 tags. If you try to create more than 10 tags for a resource, you will receive an error and the attempt will fail. </p> <p> If you specify a key that already exists for the resource, the value for that key will be updated with the new value. </p>',
    'DeleteCluster' => '<p> Deletes a previously provisioned cluster. A successful response from the web service indicates that the request was received correctly. Use <a>DescribeClusters</a> to monitor the status of the deletion. The delete operation cannot be canceled or reverted once submitted. For more information about managing clusters, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html">Amazon Redshift Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i> . </p> <p> If you want to shut down the cluster and retain it for future use, set <i>SkipFinalClusterSnapshot</i> to <code>false</code> and specify a name for <i>FinalClusterSnapshotIdentifier</i>. You can later restore this snapshot to resume using the cluster. If a final cluster snapshot is requested, the status of the cluster will be "final-snapshot" while the snapshot is being taken, then it\'s "deleting" once Amazon Redshift begins deleting the cluster. </p> <p> For more information about managing clusters, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html">Amazon Redshift Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i> . </p>',
    'DeleteClusterParameterGroup' => '<p> Deletes a specified Amazon Redshift parameter group. <note>You cannot delete a parameter group if it is associated with a cluster.</note> </p>',
    'DeleteClusterSecurityGroup' => '<p> Deletes an Amazon Redshift security group. </p> <note>You cannot delete a security group that is associated with any clusters. You cannot delete the default security group.</note> <p> For information about managing security groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-security-groups.html">Amazon Redshift Cluster Security Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'DeleteClusterSnapshot' => '<p> Deletes the specified manual snapshot. The snapshot must be in the <code>available</code> state, with no other users authorized to access the snapshot. </p> <p> Unlike automated snapshots, manual snapshots are retained even after you delete your cluster. Amazon Redshift does not delete your manual snapshots. You must delete manual snapshot explicitly to avoid getting charged. If other accounts are authorized to access the snapshot, you must revoke all of the authorizations before you can delete the snapshot. </p>',
    'DeleteClusterSubnetGroup' => '<p> Deletes the specified cluster subnet group. </p>',
    'DeleteEventSubscription' => '<p> Deletes an Amazon Redshift event notification subscription. </p>',
    'DeleteHsmClientCertificate' => '<p>Deletes the specified HSM client certificate.</p>',
    'DeleteHsmConfiguration' => '<p>Deletes the specified Amazon Redshift HSM configuration.</p>',
    'DeleteTags' => '<p> Deletes a tag or tags from a resource. You must provide the ARN of the resource from which you want to delete the tag or tags.</p>',
    'DescribeClusterParameterGroups' => '<p> Returns a list of Amazon Redshift parameter groups, including parameter groups you created and the default parameter group. For each parameter group, the response includes the parameter group name, description, and parameter group family name. You can optionally specify a name to retrieve the description of a specific parameter group. </p> <p> For more information about managing parameter groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-parameter-groups.html">Amazon Redshift Parameter Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p> <p>If you specify both tag keys and tag values in the same request, Amazon Redshift returns all parameter groups that match any combination of the specified keys and values. For example, if you have <code>owner</code> and <code>environment</code> for tag keys, and <code>admin</code> and <code>test</code> for tag values, all parameter groups that have any combination of those values are returned.</p> <p>If both tag keys and values are omitted from the request, parameter groups are returned regardless of whether they have tag keys or values associated with them.</p>',
    'DescribeClusterParameters' => '<p> Returns a detailed list of parameters contained within the specified Amazon Redshift parameter group. For each parameter the response includes information such as parameter name, description, data type, value, whether the parameter value is modifiable, and so on. </p> <p>You can specify <i>source</i> filter to retrieve parameters of only specific type. For example, to retrieve parameters that were modified by a user action such as from <a>ModifyClusterParameterGroup</a>, you can specify <i>source</i> equal to <i>user</i>.</p> <p> For more information about managing parameter groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-parameter-groups.html">Amazon Redshift Parameter Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'DescribeClusterSecurityGroups' => '<p> Returns information about Amazon Redshift security groups. If the name of a security group is specified, the response will contain only information about only that security group. </p> <p> For information about managing security groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-security-groups.html">Amazon Redshift Cluster Security Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p> <p>If you specify both tag keys and tag values in the same request, Amazon Redshift returns all security groups that match any combination of the specified keys and values. For example, if you have <code>owner</code> and <code>environment</code> for tag keys, and <code>admin</code> and <code>test</code> for tag values, all security groups that have any combination of those values are returned.</p> <p>If both tag keys and values are omitted from the request, security groups are returned regardless of whether they have tag keys or values associated with them.</p>',
    'DescribeClusterSnapshots' => '<p> Returns one or more snapshot objects, which contain metadata about your cluster snapshots. By default, this operation returns information about all snapshots of all clusters that are owned by you AWS customer account. No information is returned for snapshots owned by inactive AWS customer accounts. </p> <p>If you specify both tag keys and tag values in the same request, Amazon Redshift returns all snapshots that match any combination of the specified keys and values. For example, if you have <code>owner</code> and <code>environment</code> for tag keys, and <code>admin</code> and <code>test</code> for tag values, all snapshots that have any combination of those values are returned. Only snapshots that you own are returned in the response; shared snapshots are not returned with the tag key and tag value request parameters.</p> <p>If both tag keys and values are omitted from the request, snapshots are returned regardless of whether they have tag keys or values associated with them.</p>',
    'DescribeClusterSubnetGroups' => '<p> Returns one or more cluster subnet group objects, which contain metadata about your cluster subnet groups. By default, this operation returns information about all cluster subnet groups that are defined in you AWS account. </p> <p>If you specify both tag keys and tag values in the same request, Amazon Redshift returns all subnet groups that match any combination of the specified keys and values. For example, if you have <code>owner</code> and <code>environment</code> for tag keys, and <code>admin</code> and <code>test</code> for tag values, all subnet groups that have any combination of those values are returned.</p> <p>If both tag keys and values are omitted from the request, subnet groups are returned regardless of whether they have tag keys or values associated with them.</p>',
    'DescribeClusterVersions' => '<p> Returns descriptions of the available Amazon Redshift cluster versions. You can call this operation even before creating any clusters to learn more about the Amazon Redshift versions. For more information about managing clusters, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html">Amazon Redshift Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i> </p>',
    'DescribeClusters' => '<p> Returns properties of provisioned clusters including general cluster properties, cluster database properties, maintenance and backup properties, and security and access properties. This operation supports pagination. For more information about managing clusters, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html">Amazon Redshift Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i> . </p> <p>If you specify both tag keys and tag values in the same request, Amazon Redshift returns all clusters that match any combination of the specified keys and values. For example, if you have <code>owner</code> and <code>environment</code> for tag keys, and <code>admin</code> and <code>test</code> for tag values, all clusters that have any combination of those values are returned.</p> <p>If both tag keys and values are omitted from the request, clusters are returned regardless of whether they have tag keys or values associated with them.</p>',
    'DescribeDefaultClusterParameters' => '<p> Returns a list of parameter settings for the specified parameter group family. </p> <p> For more information about managing parameter groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-parameter-groups.html">Amazon Redshift Parameter Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'DescribeEventCategories' => '<p>Displays a list of event categories for all event source types, or for a specified source type. For a list of the event categories and source types, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-event-notifications.html">Amazon Redshift Event Notifications</a>.</p>',
    'DescribeEventSubscriptions' => '<p> Lists descriptions of all the Amazon Redshift event notifications subscription for a customer account. If you specify a subscription name, lists the description for that subscription. </p>',
    'DescribeEvents' => '<p> Returns events related to clusters, security groups, snapshots, and parameter groups for the past 14 days. Events specific to a particular cluster, security group, snapshot or parameter group can be obtained by providing the name as a parameter. By default, the past hour of events are returned. </p>',
    'DescribeHsmClientCertificates' => '<p>Returns information about the specified HSM client certificate. If no certificate ID is specified, returns information about all the HSM certificates owned by your AWS customer account.</p> <p>If you specify both tag keys and tag values in the same request, Amazon Redshift returns all HSM client certificates that match any combination of the specified keys and values. For example, if you have <code>owner</code> and <code>environment</code> for tag keys, and <code>admin</code> and <code>test</code> for tag values, all HSM client certificates that have any combination of those values are returned.</p> <p>If both tag keys and values are omitted from the request, HSM client certificates are returned regardless of whether they have tag keys or values associated with them.</p>',
    'DescribeHsmConfigurations' => '<p>Returns information about the specified Amazon Redshift HSM configuration. If no configuration ID is specified, returns information about all the HSM configurations owned by your AWS customer account.</p> <p>If you specify both tag keys and tag values in the same request, Amazon Redshift returns all HSM connections that match any combination of the specified keys and values. For example, if you have <code>owner</code> and <code>environment</code> for tag keys, and <code>admin</code> and <code>test</code> for tag values, all HSM connections that have any combination of those values are returned.</p> <p>If both tag keys and values are omitted from the request, HSM connections are returned regardless of whether they have tag keys or values associated with them.</p>',
    'DescribeLoggingStatus' => '<p>Describes whether information, such as queries and connection attempts, is being logged for the specified Amazon Redshift cluster.</p>',
    'DescribeOrderableClusterOptions' => '<p> Returns a list of orderable cluster options. Before you create a new cluster you can use this operation to find what options are available, such as the EC2 Availability Zones (AZ] in the specific AWS region that you can specify, and the node types you can request. The node types differ by available storage, memory, CPU and price. With the cost involved you might want to obtain a list of cluster options in the specific region and specify values when creating a cluster. For more information about managing clusters, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html">Amazon Redshift Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i> </p>',
    'DescribeReservedNodeOfferings' => '<p> Returns a list of the available reserved node offerings by Amazon Redshift with their descriptions including the node type, the fixed and recurring costs of reserving the node and duration the node will be reserved for you. These descriptions help you determine which reserve node offering you want to purchase. You then use the unique offering ID in you call to <a>PurchaseReservedNodeOffering</a> to reserve one or more nodes for your Amazon Redshift cluster. </p> <p> For more information about managing parameter groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/purchase-reserved-node-instance.html">Purchasing Reserved Nodes</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'DescribeReservedNodes' => '<p> Returns the descriptions of the reserved nodes. </p>',
    'DescribeResize' => '<p> Returns information about the last resize operation for the specified cluster. If no resize operation has ever been initiated for the specified cluster, a <code>HTTP 404</code> error is returned. If a resize operation was initiated and completed, the status of the resize remains as <code>SUCCEEDED</code> until the next resize. </p> <p> A resize operation can be requested using <a>ModifyCluster</a> and specifying a different number or type of nodes for the cluster. </p>',
    'DescribeTags' => '<p> Returns a list of tags. You can return tags from a specific resource by specifying an ARN, or you can return all tags for a given type of resource, such as clusters, snapshots, and so on.</p> <p> The following are limitations for <code>DescribeTags</code>: <ul> <li>You cannot specify an ARN and a resource-type value together in the same request.</li> <li>You cannot use the <code>MaxRecords</code> and <code>Marker</code> parameters together with the ARN parameter.</li> <li>The <code>MaxRecords</code> parameter can be a range from 10 to 50 results to return in a request.</li> </ul> </p> <p>If you specify both tag keys and tag values in the same request, Amazon Redshift returns all resources that match any combination of the specified keys and values. For example, if you have <code>owner</code> and <code>environment</code> for tag keys, and <code>admin</code> and <code>test</code> for tag values, all resources that have any combination of those values are returned.</p> <p>If both tag keys and values are omitted from the request, resources are returned regardless of whether they have tag keys or values associated with them.</p>',
    'DisableLogging' => '<p>Stops logging information, such as queries and connection attempts, for the specified Amazon Redshift cluster.</p>',
    'DisableSnapshotCopy' => '<p>Disables the automatic copying of snapshots from one region to another region for a specified cluster.</p>',
    'EnableLogging' => '<p>Starts logging information, such as queries and connection attempts, for the specified Amazon Redshift cluster.</p>',
    'EnableSnapshotCopy' => '<p>Enables the automatic copy of snapshots from one region to another region for a specified cluster.</p>',
    'ModifyCluster' => '<p> Modifies the settings for a cluster. For example, you can add another security or parameter group, update the preferred maintenance window, or change the master user password. Resetting a cluster password or modifying the security groups associated with a cluster do not need a reboot. However, modifying a parameter group requires a reboot for parameters to take effect. For more information about managing clusters, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html">Amazon Redshift Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i> . </p> <p>You can also change node type and the number of nodes to scale up or down the cluster. When resizing a cluster, you must specify both the number of nodes and the node type even if one of the parameters does not change.</p>',
    'ModifyClusterParameterGroup' => '<p> Modifies the parameters of a parameter group. </p> <p> For more information about managing parameter groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-parameter-groups.html">Amazon Redshift Parameter Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'ModifyClusterSubnetGroup' => '<p> Modifies a cluster subnet group to include the specified list of VPC subnets. The operation replaces the existing list of subnets with the new list of subnets. </p>',
    'ModifyEventSubscription' => '<p> Modifies an existing Amazon Redshift event notification subscription. </p>',
    'ModifySnapshotCopyRetentionPeriod' => '<p> Modifies the number of days to retain automated snapshots in the destination region after they are copied from the source region. </p>',
    'PurchaseReservedNodeOffering' => '<p> Allows you to purchase reserved nodes. Amazon Redshift offers a predefined set of reserved node offerings. You can purchase one of the offerings. You can call the <a>DescribeReservedNodeOfferings</a> API to obtain the available reserved node offerings. You can call this API by providing a specific reserved node offering and the number of nodes you want to reserve. </p> <p> For more information about managing parameter groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/purchase-reserved-node-instance.html">Purchasing Reserved Nodes</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'RebootCluster' => '<p> Reboots a cluster. This action is taken as soon as possible. It results in a momentary outage to the cluster, during which the cluster status is set to <code>rebooting</code>. A cluster event is created when the reboot is completed. Any pending cluster modifications (see <a>ModifyCluster</a>] are applied at this reboot. For more information about managing clusters, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html">Amazon Redshift Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i> </p>',
    'ResetClusterParameterGroup' => '<p> Sets one or more parameters of the specified parameter group to their default values and sets the source values of the parameters to "engine-default". To reset the entire parameter group specify the <i>ResetAllParameters</i> parameter. For parameter changes to take effect you must reboot any associated clusters. </p>',
    'RestoreFromClusterSnapshot' => '<p> Creates a new cluster from a snapshot. Amazon Redshift creates the resulting cluster with the same configuration as the original cluster from which the snapshot was created, except that the new cluster is created with the default cluster security and parameter group. After Amazon Redshift creates the cluster you can use the <a>ModifyCluster</a> API to associate a different security group and different parameter group with the restored cluster. </p> <p> If you restore a cluster into a VPC, you must provide a cluster subnet group where you want the cluster restored. </p> <p> For more information about working with snapshots, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-snapshots.html">Amazon Redshift Snapshots</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'RevokeClusterSecurityGroupIngress' => '<p> Revokes an ingress rule in an Amazon Redshift security group for a previously authorized IP range or Amazon EC2 security group. To add an ingress rule, see <a>AuthorizeClusterSecurityGroupIngress</a>. For information about managing security groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-security-groups.html">Amazon Redshift Cluster Security Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'RevokeSnapshotAccess' => '<p> Removes the ability of the specified AWS customer account to restore the specified snapshot. If the account is currently restoring the snapshot, the restore will run to completion. </p> <p> For more information about working with snapshots, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-snapshots.html">Amazon Redshift Snapshots</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
    'RotateEncryptionKey' => '<p> Rotates the encryption keys for a cluster. </p>',
  ],
  'service' => '<fullname>Amazon Redshift</fullname> <b>Overview</b> <p> This is an interface reference for Amazon Redshift. It contains documentation for one of the programming or command line interfaces you can use to manage Amazon Redshift clusters. Note that Amazon Redshift is asynchronous, which means that some interfaces may require techniques, such as polling or asynchronous callback handlers, to determine when a command has been applied. In this reference, the parameter descriptions indicate whether a change is applied immediately, on the next instance reboot, or during the next maintenance window. For a summary of the Amazon Redshift cluster management interfaces, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/using-aws-sdk.html">Using the Amazon Redshift Management Interfaces </a>.</p> <p> Amazon Redshift manages all the work of setting up, operating, and scaling a data warehouse: provisioning capacity, monitoring and backing up the cluster, and applying patches and upgrades to the Amazon Redshift engine. You can focus on using your data to acquire new insights for your business and customers. </p> <p>If you are a first-time user of Amazon Redshift, we recommend that you begin by reading the The <a href="http://docs.aws.amazon.com/redshift/latest/gsg/getting-started.html">Amazon Redshift Getting Started Guide</a></p> <p>If you are a database developer, the <a href="http://docs.aws.amazon.com/redshift/latest/dg/welcome.html">Amazon Redshift Database Developer Guide</a> explains how to design, build, query, and maintain the databases that make up your data warehouse. </p>',
  'shapes' => [
    'AccessToSnapshotDeniedFault' => [
      'base' => '<p> The owner of the specified snapshot has not authorized your account to access the snapshot. </p>',
      'refs' => [],
    ],
    'AccountWithRestoreAccess' => [
      'base' => '<p> Describes an AWS customer account authorized to restore a snapshot. </p>',
      'refs' => [
        'AccountsWithRestoreAccessList$member' => NULL,
      ],
    ],
    'AccountsWithRestoreAccessList' => [
      'base' => NULL,
      'refs' => [
        'Snapshot$AccountsWithRestoreAccess' => '<p> A list of the AWS customer accounts authorized to restore the snapshot. Returns <code>null</code> if no accounts are authorized. Visible only to the snapshot owner. </p>',
      ],
    ],
    'AuthorizationAlreadyExistsFault' => [
      'base' => '<p> The specified CIDR block or EC2 security group is already authorized for the specified cluster security group. </p>',
      'refs' => [],
    ],
    'AuthorizationNotFoundFault' => [
      'base' => '<p> The specified CIDR IP range or EC2 security group is not authorized for the specified cluster security group. </p>',
      'refs' => [],
    ],
    'AuthorizationQuotaExceededFault' => [
      'base' => '<p> The authorization quota for the cluster security group has been reached. </p>',
      'refs' => [],
    ],
    'AuthorizeClusterSecurityGroupIngressMessage' => [
      'base' => '<p> ??? </p>',
      'refs' => [],
    ],
    'AuthorizeSnapshotAccessMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'AvailabilityZone' => [
      'base' => '<p> Describes an availability zone. </p>',
      'refs' => [
        'AvailabilityZoneList$member' => NULL,
        'Subnet$SubnetAvailabilityZone' => NULL,
      ],
    ],
    'AvailabilityZoneList' => [
      'base' => NULL,
      'refs' => [
        'OrderableClusterOption$AvailabilityZones' => '<p> A list of availability zones for the orderable cluster. </p>',
      ],
    ],
    'Boolean' => [
      'base' => NULL,
      'refs' => [
        'Cluster$AllowVersionUpgrade' => '<p> If <code>true</code>, major version upgrades will be applied automatically to the cluster during the maintenance window. </p>',
        'Cluster$PubliclyAccessible' => '<p>If <code>true</code>, the cluster can be accessed from a public network.</p>',
        'Cluster$Encrypted' => '<p>If <code>true</code>, data in the cluster is encrypted at rest.</p>',
        'DeleteClusterMessage$SkipFinalClusterSnapshot' => '<p> Determines whether a final snapshot of the cluster is created before Amazon Redshift deletes the cluster. If <code>true</code>, a final cluster snapshot is not created. If <code>false</code>, a final cluster snapshot is created before the cluster is deleted. </p> <note>The <i>FinalClusterSnapshotIdentifier</i> parameter must be specified if <i>SkipFinalClusterSnapshot</i> is <code>false</code>.</note> <p>Default: <code>false</code></p>',
        'EventSubscription$Enabled' => '<p>A Boolean value indicating whether the subscription is enabled. <code>true</code> indicates the subscription is enabled.</p>',
        'LoggingStatus$LoggingEnabled' => '<p><code>true</code> if logging is on, <code>false</code> if logging is off.</p>',
        'Parameter$IsModifiable' => '<p> If <code>true</code>, the parameter can be modified. Some parameters have security or operational implications that prevent them from being changed. </p>',
        'ResetClusterParameterGroupMessage$ResetAllParameters' => '<p> If <code>true</code>, all parameters in the specified parameter group will be reset to their default values. </p> <p>Default: <code>true</code></p>',
        'Snapshot$Encrypted' => '<p>If <code>true</code>, the data in the snapshot is encrypted at rest.</p>',
        'Snapshot$EncryptedWithHSM' => '<p>A boolean that indicates whether the snapshot data is encrypted using the HSM keys of the source cluster. <code>true</code> indicates that the data is encrypted using HSM keys.</p>',
      ],
    ],
    'BooleanOptional' => [
      'base' => NULL,
      'refs' => [
        'CreateClusterMessage$AllowVersionUpgrade' => '<p>If <code>true</code>, major version upgrades can be applied during the maintenance window to the Amazon Redshift engine that is running on the cluster.</p> <p> When a new major version of the Amazon Redshift engine is released, you can request that the service automatically apply upgrades during the maintenance window to the Amazon Redshift engine that is running on your cluster. </p> <p>Default: <code>true</code></p>',
        'CreateClusterMessage$PubliclyAccessible' => '<p>If <code>true</code>, the cluster can be accessed from a public network. </p>',
        'CreateClusterMessage$Encrypted' => '<p>If <code>true</code>, the data in the cluster is encrypted at rest. </p> <p>Default: false</p>',
        'CreateEventSubscriptionMessage$Enabled' => '<p> A Boolean value; set to <code>true</code> to activate the subscription, set to <code>false</code> to create the subscription but not active it. </p>',
        'ModifyClusterMessage$AllowVersionUpgrade' => '<p> If <code>true</code>, major version upgrades will be applied automatically to the cluster during the maintenance window. </p> <p>Default: <code>false</code></p>',
        'ModifyEventSubscriptionMessage$Enabled' => '<p> A Boolean value indicating if the subscription is enabled. <code>true</code> indicates the subscription is enabled </p>',
        'RestoreFromClusterSnapshotMessage$AllowVersionUpgrade' => '<p> If <code>true</code>, major version upgrades can be applied during the maintenance window to the Amazon Redshift engine that is running on the cluster. </p> <p>Default: <code>true</code></p>',
        'RestoreFromClusterSnapshotMessage$PubliclyAccessible' => '<p> If <code>true</code>, the cluster can be accessed from a public network. </p>',
      ],
    ],
    'BucketNotFoundFault' => [
      'base' => '<p> Could not find the specified S3 bucket. </p>',
      'refs' => [],
    ],
    'Cluster' => [
      'base' => '<p>Describes a cluster.</p>',
      'refs' => [
        'ClusterList$member' => NULL,
        'CreateClusterResult$Cluster' => NULL,
        'DeleteClusterResult$Cluster' => NULL,
        'DisableSnapshotCopyResult$Cluster' => NULL,
        'EnableSnapshotCopyResult$Cluster' => NULL,
        'ModifyClusterResult$Cluster' => NULL,
        'ModifySnapshotCopyRetentionPeriodResult$Cluster' => NULL,
        'RebootClusterResult$Cluster' => NULL,
        'RestoreFromClusterSnapshotResult$Cluster' => NULL,
        'RotateEncryptionKeyResult$Cluster' => NULL,
      ],
    ],
    'ClusterAlreadyExistsFault' => [
      'base' => '<p> The account already has a cluster with the given identifier. </p>',
      'refs' => [],
    ],
    'ClusterList' => [
      'base' => NULL,
      'refs' => [
        'ClustersMessage$Clusters' => '<p> A list of <a>Cluster</a> objects, where each object describes one cluster. </p>',
      ],
    ],
    'ClusterNode' => [
      'base' => '<p>The identifier of a node in a cluster.</p>',
      'refs' => [
        'ClusterNodesList$member' => NULL,
      ],
    ],
    'ClusterNodesList' => [
      'base' => NULL,
      'refs' => [
        'Cluster$ClusterNodes' => '<p>The nodes in a cluster.</p>',
      ],
    ],
    'ClusterNotFoundFault' => [
      'base' => '<p> The <i>ClusterIdentifier</i> parameter does not refer to an existing cluster. </p>',
      'refs' => [],
    ],
    'ClusterParameterGroup' => [
      'base' => '<p>Describes a parameter group.</p>',
      'refs' => [
        'ParameterGroupList$member' => NULL,
        'CreateClusterParameterGroupResult$ClusterParameterGroup' => NULL,
      ],
    ],
    'ClusterParameterGroupAlreadyExistsFault' => [
      'base' => '<p> A cluster parameter group with the same name already exists. </p>',
      'refs' => [],
    ],
    'ClusterParameterGroupDetails' => [
      'base' => '<p> Contains the output from the <a>DescribeClusterParameters</a> action. </p>',
      'refs' => [],
    ],
    'ClusterParameterGroupNameMessage' => [
      'base' => '<p> Contains the output from the <a>ModifyClusterParameterGroup</a> and <a>ResetClusterParameterGroup</a> actions and indicate the parameter group involved and the status of the operation on the parameter group. </p>',
      'refs' => [],
    ],
    'ClusterParameterGroupNotFoundFault' => [
      'base' => '<p> The parameter group name does not refer to an existing parameter group. </p>',
      'refs' => [],
    ],
    'ClusterParameterGroupQuotaExceededFault' => [
      'base' => '<p> The request would result in the user exceeding the allowed number of cluster parameter groups. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'ClusterParameterGroupStatus' => [
      'base' => '<p> Describes the status of a parameter group. </p>',
      'refs' => [
        'ClusterParameterGroupStatusList$member' => NULL,
      ],
    ],
    'ClusterParameterGroupStatusList' => [
      'base' => NULL,
      'refs' => [
        'Cluster$ClusterParameterGroups' => '<p> The list of cluster parameter groups that are associated with this cluster. </p>',
      ],
    ],
    'ClusterParameterGroupsMessage' => [
      'base' => '<p> Contains the output from the <a>DescribeClusterParameterGroups</a> action. </p>',
      'refs' => [],
    ],
    'ClusterQuotaExceededFault' => [
      'base' => '<p> The request would exceed the allowed number of cluster instances for this account. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'ClusterSecurityGroup' => [
      'base' => '<p>Describes a security group.</p>',
      'refs' => [
        'ClusterSecurityGroups$member' => NULL,
        'AuthorizeClusterSecurityGroupIngressResult$ClusterSecurityGroup' => NULL,
        'CreateClusterSecurityGroupResult$ClusterSecurityGroup' => NULL,
        'RevokeClusterSecurityGroupIngressResult$ClusterSecurityGroup' => NULL,
      ],
    ],
    'ClusterSecurityGroupAlreadyExistsFault' => [
      'base' => '<p> A cluster security group with the same name already exists. </p>',
      'refs' => [],
    ],
    'ClusterSecurityGroupMembership' => [
      'base' => '<p>Describes a security group.</p>',
      'refs' => [
        'ClusterSecurityGroupMembershipList$member' => NULL,
      ],
    ],
    'ClusterSecurityGroupMembershipList' => [
      'base' => NULL,
      'refs' => [
        'Cluster$ClusterSecurityGroups' => '<p> A list of cluster security group that are associated with the cluster. Each security group is represented by an element that contains <code>ClusterSecurityGroup.Name</code> and <code>ClusterSecurityGroup.Status</code> subelements. </p> <p>Cluster security groups are used when the cluster is not created in a VPC. Clusters that are created in a VPC use VPC security groups, which are listed by the <b>VpcSecurityGroups</b> parameter. </p>',
      ],
    ],
    'ClusterSecurityGroupMessage' => [
      'base' => '<p> Contains the output from the <a>DescribeClusterSecurityGroups</a> action. </p>',
      'refs' => [],
    ],
    'ClusterSecurityGroupNameList' => [
      'base' => NULL,
      'refs' => [
        'CreateClusterMessage$ClusterSecurityGroups' => '<p> A list of security groups to be associated with this cluster. </p> <p> Default: The default cluster security group for Amazon Redshift. </p>',
        'ModifyClusterMessage$ClusterSecurityGroups' => '<p> A list of cluster security groups to be authorized on this cluster. This change is asynchronously applied as soon as possible. </p> <p>Security groups currently associated with the cluster, and not in the list of groups to apply, will be revoked from the cluster.</p> <p>Constraints:</p> <ul> <li>Must be 1 to 255 alphanumeric characters or hyphens</li> <li>First character must be a letter</li> <li>Cannot end with a hyphen or contain two consecutive hyphens</li> </ul>',
        'RestoreFromClusterSnapshotMessage$ClusterSecurityGroups' => '<p> A list of security groups to be associated with this cluster. </p> <p> Default: The default cluster security group for Amazon Redshift. </p> <p>Cluster security groups only apply to clusters outside of VPCs.</p>',
      ],
    ],
    'ClusterSecurityGroupNotFoundFault' => [
      'base' => '<p> The cluster security group name does not refer to an existing cluster security group. </p>',
      'refs' => [],
    ],
    'ClusterSecurityGroupQuotaExceededFault' => [
      'base' => '<p> The request would result in the user exceeding the allowed number of cluster security groups. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'ClusterSecurityGroups' => [
      'base' => NULL,
      'refs' => [
        'ClusterSecurityGroupMessage$ClusterSecurityGroups' => '<p> A list of <a>ClusterSecurityGroup</a> instances. </p>',
      ],
    ],
    'ClusterSnapshotAlreadyExistsFault' => [
      'base' => '<p> The value specified as a snapshot identifier is already used by an existing snapshot. </p>',
      'refs' => [],
    ],
    'ClusterSnapshotCopyStatus' => [
      'base' => '<p> Returns the destination region and retention period that are configured for cross-region snapshot copy. </p>',
      'refs' => [
        'Cluster$ClusterSnapshotCopyStatus' => '<p> Returns the destination region and retention period that are configured for cross-region snapshot copy. </p>',
      ],
    ],
    'ClusterSnapshotNotFoundFault' => [
      'base' => '<p> The snapshot identifier does not refer to an existing cluster snapshot. </p>',
      'refs' => [],
    ],
    'ClusterSnapshotQuotaExceededFault' => [
      'base' => '<p> The request would result in the user exceeding the allowed number of cluster snapshots. </p>',
      'refs' => [],
    ],
    'ClusterSubnetGroup' => [
      'base' => '<p>Describes a subnet group.</p>',
      'refs' => [
        'ClusterSubnetGroups$member' => NULL,
        'CreateClusterSubnetGroupResult$ClusterSubnetGroup' => NULL,
        'ModifyClusterSubnetGroupResult$ClusterSubnetGroup' => NULL,
      ],
    ],
    'ClusterSubnetGroupAlreadyExistsFault' => [
      'base' => '<p> A <i>ClusterSubnetGroupName</i> is already used by an existing cluster subnet group. </p>',
      'refs' => [],
    ],
    'ClusterSubnetGroupMessage' => [
      'base' => '<p> Contains the output from the <a>DescribeClusterSubnetGroups</a> action. </p>',
      'refs' => [],
    ],
    'ClusterSubnetGroupNotFoundFault' => [
      'base' => '<p> The cluster subnet group name does not refer to an existing cluster subnet group. </p>',
      'refs' => [],
    ],
    'ClusterSubnetGroupQuotaExceededFault' => [
      'base' => '<p> The request would result in user exceeding the allowed number of cluster subnet groups. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'ClusterSubnetGroups' => [
      'base' => NULL,
      'refs' => [
        'ClusterSubnetGroupMessage$ClusterSubnetGroups' => '<p> A list of <a>ClusterSubnetGroup</a> instances. </p>',
      ],
    ],
    'ClusterSubnetQuotaExceededFault' => [
      'base' => '<p> The request would result in user exceeding the allowed number of subnets in a cluster subnet groups. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'ClusterVersion' => [
      'base' => '<p>Describes a cluster version, including the parameter group family and description of the version.</p>',
      'refs' => [
        'ClusterVersionList$member' => NULL,
      ],
    ],
    'ClusterVersionList' => [
      'base' => NULL,
      'refs' => [
        'ClusterVersionsMessage$ClusterVersions' => '<p> A list of <code>Version</code> elements. </p>',
      ],
    ],
    'ClusterVersionsMessage' => [
      'base' => '<p> Contains the output from the <a>DescribeClusterVersions</a> action. </p>',
      'refs' => [],
    ],
    'ClustersMessage' => [
      'base' => '<p> Contains the output from the <a>DescribeClusters</a> action. </p>',
      'refs' => [],
    ],
    'CopyClusterSnapshotMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'CopyToRegionDisabledFault' => [
      'base' => '<p> Cross-region snapshot copy was temporarily disabled. Try your request again. </p>',
      'refs' => [],
    ],
    'CreateClusterMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'CreateClusterParameterGroupMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'CreateClusterSecurityGroupMessage' => [
      'base' => '<p>???</p>',
      'refs' => [],
    ],
    'CreateClusterSnapshotMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'CreateClusterSubnetGroupMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'CreateEventSubscriptionMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'CreateHsmClientCertificateMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'CreateHsmConfigurationMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'CreateTagsMessage' => [
      'base' => '<p> Contains the output from the <code>CreateTags</code> action. </p>',
      'refs' => [],
    ],
    'DefaultClusterParameters' => [
      'base' => '<p>Describes the default cluster parameters for a parameter group family. </p>',
      'refs' => [
        'DescribeDefaultClusterParametersResult$DefaultClusterParameters' => NULL,
      ],
    ],
    'DeleteClusterMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DeleteClusterParameterGroupMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DeleteClusterSecurityGroupMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DeleteClusterSnapshotMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DeleteClusterSubnetGroupMessage' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteEventSubscriptionMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'DeleteHsmClientCertificateMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'DeleteHsmConfigurationMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'DeleteTagsMessage' => [
      'base' => '<p> Contains the output from the <code>DeleteTags</code> action. </p>',
      'refs' => [],
    ],
    'DescribeClusterParameterGroupsMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeClusterParametersMessage' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeClusterSecurityGroupsMessage' => [
      'base' => '<p>???</p>',
      'refs' => [],
    ],
    'DescribeClusterSnapshotsMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeClusterSubnetGroupsMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeClusterVersionsMessage' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeClustersMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeDefaultClusterParametersMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeEventCategoriesMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeEventSubscriptionsMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'DescribeEventsMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeHsmClientCertificatesMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'DescribeHsmConfigurationsMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'DescribeLoggingStatusMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeOrderableClusterOptionsMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeReservedNodeOfferingsMessage' => [
      'base' => '<p>to be provided.</p>',
      'refs' => [],
    ],
    'DescribeReservedNodesMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeResizeMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DescribeTagsMessage' => [
      'base' => '<p> Contains the output from the <code>DescribeTags</code> action. </p>',
      'refs' => [],
    ],
    'DisableLoggingMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'DisableSnapshotCopyMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'Double' => [
      'base' => NULL,
      'refs' => [
        'RecurringCharge$RecurringChargeAmount' => '<p>The amount charged per the period of time specified by the recurring charge frequency. </p>',
        'ReservedNode$FixedPrice' => '<p> The fixed cost Amazon Redshift charged you for this reserved node. </p>',
        'ReservedNode$UsagePrice' => '<p> The hourly rate Amazon Redshift charge you for this reserved node. </p>',
        'ReservedNodeOffering$FixedPrice' => '<p> The upfront fixed charge you will pay to purchase the specific reserved node offering. </p>',
        'ReservedNodeOffering$UsagePrice' => '<p> The rate you are charged for each hour the cluster that is using the offering is running. </p>',
        'RestoreStatus$CurrentRestoreRateInMegaBytesPerSecond' => '<p> The number of megabytes per second being transferred from the backup storage. Returns the average rate for a completed backup. </p>',
        'Snapshot$TotalBackupSizeInMegaBytes' => '<p> The size of the complete set of backup data that would be used to restore the cluster. </p>',
        'Snapshot$ActualIncrementalBackupSizeInMegaBytes' => '<p> The size of the incremental backup. </p>',
        'Snapshot$BackupProgressInMegaBytes' => '<p> The number of megabytes that have been transferred to the snapshot backup. </p>',
        'Snapshot$CurrentBackupRateInMegaBytesPerSecond' => '<p> The number of megabytes per second being transferred to the snapshot backup. Returns <code>0</code> for a completed backup. </p>',
      ],
    ],
    'DoubleOptional' => [
      'base' => NULL,
      'refs' => [
        'ResizeProgressMessage$AvgResizeRateInMegaBytesPerSecond' => '<p>The average rate of the resize operation over the last few minutes, measured in megabytes per second. After the resize operation completes, this value shows the average rate of the entire resize operation.</p>',
      ],
    ],
    'EC2SecurityGroup' => [
      'base' => '<p>Describes an Amazon EC2 security group.</p>',
      'refs' => [
        'EC2SecurityGroupList$member' => NULL,
      ],
    ],
    'EC2SecurityGroupList' => [
      'base' => NULL,
      'refs' => [
        'ClusterSecurityGroup$EC2SecurityGroups' => '<p> A list of EC2 security groups that are permitted to access clusters associated with this cluster security group. </p>',
      ],
    ],
    'ElasticIpStatus' => [
      'base' => '<p>Describes the status of the elastic IP (EIP] address.</p>',
      'refs' => [
        'Cluster$ElasticIpStatus' => '<p>Describes the status of the elastic IP (EIP] address.</p>',
      ],
    ],
    'EnableLoggingMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'EnableSnapshotCopyMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'Endpoint' => [
      'base' => '<p>Describes a connection endpoint.</p>',
      'refs' => [
        'Cluster$Endpoint' => '<p> The connection endpoint. </p>',
      ],
    ],
    'Event' => [
      'base' => '<p> Describes an event. </p>',
      'refs' => [
        'EventList$member' => NULL,
      ],
    ],
    'EventCategoriesList' => [
      'base' => NULL,
      'refs' => [
        'CreateEventSubscriptionMessage$EventCategories' => '<p>Specifies the Amazon Redshift event categories to be published by the event notification subscription.</p> <p>Values: Configuration, Management, Monitoring, Security</p>',
        'Event$EventCategories' => '<p> A list of the event categories. </p>',
        'EventInfoMap$EventCategories' => '<p>The category of an Amazon Redshift event.</p>',
        'EventSubscription$EventCategoriesList' => '<p>The list of Amazon Redshift event categories specified in the event notification subscription.</p> <p>Values: Configuration, Management, Monitoring, Security</p>',
        'ModifyEventSubscriptionMessage$EventCategories' => '<p>Specifies the Amazon Redshift event categories to be published by the event notification subscription.</p> <p>Values: Configuration, Management, Monitoring, Security</p>',
      ],
    ],
    'EventCategoriesMap' => [
      'base' => NULL,
      'refs' => [
        'EventCategoriesMapList$member' => NULL,
      ],
    ],
    'EventCategoriesMapList' => [
      'base' => NULL,
      'refs' => [
        'EventCategoriesMessage$EventCategoriesMapList' => '<p> A list of event categories descriptions. </p>',
      ],
    ],
    'EventCategoriesMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'EventInfoMap' => [
      'base' => NULL,
      'refs' => [
        'EventInfoMapList$member' => NULL,
      ],
    ],
    'EventInfoMapList' => [
      'base' => NULL,
      'refs' => [
        'EventCategoriesMap$Events' => '<p>The events in the event category.</p>',
      ],
    ],
    'EventList' => [
      'base' => NULL,
      'refs' => [
        'EventsMessage$Events' => '<p> A list of <a>Event</a> instances. </p>',
      ],
    ],
    'EventSubscription' => [
      'base' => NULL,
      'refs' => [
        'EventSubscriptionsList$member' => NULL,
        'CreateEventSubscriptionResult$EventSubscription' => NULL,
        'ModifyEventSubscriptionResult$EventSubscription' => NULL,
      ],
    ],
    'EventSubscriptionQuotaExceededFault' => [
      'base' => '<p> The request would exceed the allowed number of event subscriptions for this account. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'EventSubscriptionsList' => [
      'base' => NULL,
      'refs' => [
        'EventSubscriptionsMessage$EventSubscriptionsList' => '<p>A list of event subscriptions.</p>',
      ],
    ],
    'EventSubscriptionsMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'EventsMessage' => [
      'base' => '<p> Contains the output from the <a>DescribeEvents</a> action. </p>',
      'refs' => [],
    ],
    'HsmClientCertificate' => [
      'base' => '<p>Returns information about an HSM client certificate. The certificate is stored in a secure Hardware Storage Module (HSM], and used by the Amazon Redshift cluster to encrypt data files.</p>',
      'refs' => [
        'HsmClientCertificateList$member' => NULL,
        'CreateHsmClientCertificateResult$HsmClientCertificate' => NULL,
      ],
    ],
    'HsmClientCertificateAlreadyExistsFault' => [
      'base' => '<p>There is already an existing Amazon Redshift HSM client certificate with the specified identifier.</p>',
      'refs' => [],
    ],
    'HsmClientCertificateList' => [
      'base' => NULL,
      'refs' => [
        'HsmClientCertificateMessage$HsmClientCertificates' => '<p>A list of the identifiers for one or more HSM client certificates used by Amazon Redshift clusters to store and retrieve database encryption keys in an HSM.</p>',
      ],
    ],
    'HsmClientCertificateMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'HsmClientCertificateNotFoundFault' => [
      'base' => '<p>There is no Amazon Redshift HSM client certificate with the specified identifier.</p>',
      'refs' => [],
    ],
    'HsmClientCertificateQuotaExceededFault' => [
      'base' => '<p> The quota for HSM client certificates has been reached. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'HsmConfiguration' => [
      'base' => '<p>Returns information about an HSM configuration, which is an object that describes to Amazon Redshift clusters the information they require to connect to an HSM where they can store database encryption keys.</p>',
      'refs' => [
        'HsmConfigurationList$member' => NULL,
        'CreateHsmConfigurationResult$HsmConfiguration' => NULL,
      ],
    ],
    'HsmConfigurationAlreadyExistsFault' => [
      'base' => '<p>There is already an existing Amazon Redshift HSM configuration with the specified identifier.</p>',
      'refs' => [],
    ],
    'HsmConfigurationList' => [
      'base' => NULL,
      'refs' => [
        'HsmConfigurationMessage$HsmConfigurations' => '<p>A list of Amazon Redshift HSM configurations.</p>',
      ],
    ],
    'HsmConfigurationMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'HsmConfigurationNotFoundFault' => [
      'base' => '<p>There is no Amazon Redshift HSM configuration with the specified identifier.</p>',
      'refs' => [],
    ],
    'HsmConfigurationQuotaExceededFault' => [
      'base' => '<p> The quota for HSM configurations has been reached. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'HsmStatus' => [
      'base' => '<p></p>',
      'refs' => [
        'Cluster$HsmStatus' => '<p>Reports whether the Amazon Redshift cluster has finished applying any HSM settings changes specified in a modify cluster command.</p> <p>Values: active, applying</p>',
      ],
    ],
    'IPRange' => [
      'base' => '<p> Describes an IP range used in a security group. </p>',
      'refs' => [
        'IPRangeList$member' => NULL,
      ],
    ],
    'IPRangeList' => [
      'base' => NULL,
      'refs' => [
        'ClusterSecurityGroup$IPRanges' => '<p> A list of IP ranges (CIDR blocks] that are permitted to access clusters associated with this cluster security group. </p>',
      ],
    ],
    'ImportTablesCompleted' => [
      'base' => NULL,
      'refs' => [
        'ResizeProgressMessage$ImportTablesCompleted' => '<p>The names of tables that have been completely imported .</p> <p>Valid Values: List of table names.</p>',
      ],
    ],
    'ImportTablesInProgress' => [
      'base' => NULL,
      'refs' => [
        'ResizeProgressMessage$ImportTablesInProgress' => '<p>The names of tables that are being currently imported.</p> <p>Valid Values: List of table names.</p>',
      ],
    ],
    'ImportTablesNotStarted' => [
      'base' => NULL,
      'refs' => [
        'ResizeProgressMessage$ImportTablesNotStarted' => '<p>The names of tables that have not been yet imported.</p> <p>Valid Values: List of table names</p>',
      ],
    ],
    'IncompatibleOrderableOptions' => [
      'base' => '<p> The specified options are incompatible. </p>',
      'refs' => [],
    ],
    'InsufficientClusterCapacityFault' => [
      'base' => '<p> The number of nodes specified exceeds the allotted capacity of the cluster. </p>',
      'refs' => [],
    ],
    'InsufficientS3BucketPolicyFault' => [
      'base' => '<p> The cluster does not have read bucket or put object permissions on the S3 bucket specified when enabling logging. </p>',
      'refs' => [],
    ],
    'Integer' => [
      'base' => NULL,
      'refs' => [
        'Cluster$AutomatedSnapshotRetentionPeriod' => '<p> The number of days that automatic cluster snapshots are retained. </p>',
        'Cluster$NumberOfNodes' => '<p> The number of compute nodes in the cluster. </p>',
        'Endpoint$Port' => '<p> The port that the database engine is listening on. </p>',
        'ModifySnapshotCopyRetentionPeriodMessage$RetentionPeriod' => '<p> The number of days to retain automated snapshots in the destination region after they are copied from the source region. </p> <p> If you decrease the retention period for automated snapshots that are copied to a destination region, Amazon Redshift will delete any existing automated snapshots that were copied to the destination region and that fall outside of the new retention period. </p> <p> Constraints: Must be at least 1 and no more than 35. </p>',
        'ReservedNode$Duration' => '<p> The duration of the node reservation in seconds. </p>',
        'ReservedNode$NodeCount' => '<p> The number of reserved compute nodes. </p>',
        'ReservedNodeOffering$Duration' => '<p> The duration, in seconds, for which the offering will reserve the node. </p>',
        'Snapshot$Port' => '<p> The port that the cluster is listening on. </p>',
        'Snapshot$NumberOfNodes' => '<p>The number of nodes in the cluster.</p>',
      ],
    ],
    'IntegerOptional' => [
      'base' => NULL,
      'refs' => [
        'CreateClusterMessage$AutomatedSnapshotRetentionPeriod' => '<p> The number of days that automated snapshots are retained. If the value is 0, automated snapshots are disabled. Even if automated snapshots are disabled, you can still create manual snapshots when you want with <a>CreateClusterSnapshot</a>. </p> <p> Default: <code>1</code> </p> <p>Constraints: Must be a value from 0 to 35.</p>',
        'CreateClusterMessage$Port' => '<p> The port number on which the cluster accepts incoming connections. </p> <p>The cluster is accessible only via the JDBC and ODBC connection strings. Part of the connection string requires the port on which the cluster will listen for incoming connections.</p> <p> Default: <code>5439</code> </p> <p> Valid Values: <code>1150-65535</code> </p>',
        'CreateClusterMessage$NumberOfNodes' => '<p> The number of compute nodes in the cluster. This parameter is required when the <b>ClusterType</b> parameter is specified as <code>multi-node</code>. </p> <p>For information about determining how many nodes you need, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html#how-many-nodes"> Working with Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p> <p>If you don\'t specify this parameter, you get a single-node cluster. When requesting a multi-node cluster, you must specify the number of nodes that you want in the cluster.</p> <p>Default: <code>1</code></p> <p>Constraints: Value must be at least 1 and no more than 100.</p>',
        'DescribeClusterParameterGroupsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeClusterParametersMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeClusterSecurityGroupsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeClusterSnapshotsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeClusterSubnetGroupsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeClusterVersionsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeClustersMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeDefaultClusterParametersMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeEventSubscriptionsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeEventsMessage$Duration' => '<p> The number of minutes prior to the time of the request for which to retrieve events. For example, if the request is sent at 18:00 and you specify a duration of 60, then only events which have occurred after 17:00 will be returned. </p> <p>Default: <code>60</code></p>',
        'DescribeEventsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeHsmClientCertificatesMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeHsmConfigurationsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeOrderableClusterOptionsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeReservedNodeOfferingsMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeReservedNodesMessage$MaxRecords' => '<p> The maximum number of response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned marker value. </p> <p>Default: <code>100</code></p> <p>Constraints: minimum 20, maximum 100.</p>',
        'DescribeTagsMessage$MaxRecords' => '<p> The maximum number or response records to return in each call. If the number of remaining response records exceeds the specified <code>MaxRecords</code> value, a value is returned in a <code>marker</code> field of the response. You can retrieve the next set of records by retrying the command with the returned <code>marker</code> value. </p>',
        'EnableSnapshotCopyMessage$RetentionPeriod' => '<p> The number of days to retain automated snapshots in the destination region after they are copied from the source region. </p> <p> Default: 7. </p> <p> Constraints: Must be at least 1 and no more than 35. </p>',
        'ModifyClusterMessage$NumberOfNodes' => '<p> The new number of nodes of the cluster. If you specify a new number of nodes, you must also specify the node type parameter. </p> <p> When you submit your request to resize a cluster, Amazon Redshift sets access permissions for the cluster to read-only. After Amazon Redshift provisions a new cluster according to your resize requirements, there will be a temporary outage while the old cluster is deleted and your connection is switched to the new cluster. When the new connection is complete, the original access permissions for the cluster are restored. You can use <a>DescribeResize</a> to track the progress of the resize request. </p> <p>Valid Values: Integer greater than <code>0</code>.</p>',
        'ModifyClusterMessage$AutomatedSnapshotRetentionPeriod' => '<p> The number of days that automated snapshots are retained. If the value is 0, automated snapshots are disabled. Even if automated snapshots are disabled, you can still create manual snapshots when you want with <a>CreateClusterSnapshot</a>. </p> <p> If you decrease the automated snapshot retention period from its current value, existing automated snapshots that fall outside of the new retention period will be immediately deleted.</p> <p>Default: Uses existing setting.</p> <p>Constraints: Must be a value from 0 to 35.</p>',
        'PendingModifiedValues$NumberOfNodes' => '<p> The pending or in-progress change of the number of nodes in the cluster. </p>',
        'PendingModifiedValues$AutomatedSnapshotRetentionPeriod' => '<p> The pending or in-progress change of the automated snapshot retention period. </p>',
        'PurchaseReservedNodeOfferingMessage$NodeCount' => '<p>The number of reserved nodes you want to purchase.</p> <p>Default: <code>1</code></p>',
        'ResizeProgressMessage$TargetNumberOfNodes' => '<p>The number of nodes that the cluster will have after the resize operation is complete.</p>',
        'RestoreFromClusterSnapshotMessage$Port' => '<p> The port number on which the cluster accepts connections. </p> <p>Default: The same port as the original cluster.</p> <p>Constraints: Must be between <code>1115</code> and <code>65535</code>.</p>',
        'RestoreFromClusterSnapshotMessage$AutomatedSnapshotRetentionPeriod' => '<p> The number of days that automated snapshots are retained. If the value is 0, automated snapshots are disabled. Even if automated snapshots are disabled, you can still create manual snapshots when you want with <a>CreateClusterSnapshot</a>. </p> <p> Default: The value selected for the cluster from which the snapshot was taken. </p> <p>Constraints: Must be a value from 0 to 35.</p>',
      ],
    ],
    'InvalidClusterParameterGroupStateFault' => [
      'base' => '<p> The cluster parameter group action can not be completed because another task is in progress that involves the parameter group. Wait a few moments and try the operation again. </p>',
      'refs' => [],
    ],
    'InvalidClusterSecurityGroupStateFault' => [
      'base' => '<p> The state of the cluster security group is not <code>available</code>. </p>',
      'refs' => [],
    ],
    'InvalidClusterSnapshotStateFault' => [
      'base' => '<p> The state of the cluster snapshot is not <code>available</code>, or other accounts are authorized to access the snapshot. </p>',
      'refs' => [],
    ],
    'InvalidClusterStateFault' => [
      'base' => '<p> The specified cluster is not in the <code>available</code> state. </p>',
      'refs' => [],
    ],
    'InvalidClusterSubnetGroupStateFault' => [
      'base' => '<p> The cluster subnet group cannot be deleted because it is in use. </p>',
      'refs' => [],
    ],
    'InvalidClusterSubnetStateFault' => [
      'base' => '<p>The state of the subnet is invalid.</p>',
      'refs' => [],
    ],
    'InvalidElasticIpFault' => [
      'base' => '<p>The Elastic IP (EIP] is invalid or cannot be found.</p>',
      'refs' => [],
    ],
    'InvalidHsmClientCertificateStateFault' => [
      'base' => '<p>The specified HSM client certificate is not in the <code>available</code> state, or it is still in use by one or more Amazon Redshift clusters.</p>',
      'refs' => [],
    ],
    'InvalidHsmConfigurationStateFault' => [
      'base' => '<p>The specified HSM configuration is not in the <code>available</code> state, or it is still in use by one or more Amazon Redshift clusters.</p>',
      'refs' => [],
    ],
    'InvalidRestoreFault' => [
      'base' => '<p>The restore is invalid.</p>',
      'refs' => [],
    ],
    'InvalidS3BucketNameFault' => [
      'base' => '<p>The S3 bucket name is invalid. For more information about naming rules, go to <a href="http://docs.aws.amazon.com/AmazonS3/latest/dev/BucketRestrictions.html">Bucket Restrictions and Limitations</a> in the Amazon Simple Storage Service (S3] Developer Guide.</p>',
      'refs' => [],
    ],
    'InvalidS3KeyPrefixFault' => [
      'base' => '<p> The string specified for the logging S3 key prefix does not comply with the documented constraints. </p>',
      'refs' => [],
    ],
    'InvalidSubnet' => [
      'base' => '<p> The requested subnet is not valid, or not all of the subnets are in the same VPC. </p>',
      'refs' => [],
    ],
    'InvalidSubscriptionStateFault' => [
      'base' => '<p> The subscription request is invalid because it is a duplicate request. This subscription request is already in progress. </p>',
      'refs' => [],
    ],
    'InvalidTagFault' => [
      'base' => '<p> The tag is invalid. </p>',
      'refs' => [],
    ],
    'InvalidVPCNetworkStateFault' => [
      'base' => '<p> The cluster subnet group does not cover all Availability Zones. </p>',
      'refs' => [],
    ],
    'LoggingStatus' => [
      'base' => '<p>Describes the status of logging for a cluster.</p>',
      'refs' => [],
    ],
    'Long' => [
      'base' => NULL,
      'refs' => [
        'ClusterSnapshotCopyStatus$RetentionPeriod' => '<p>The number of days that automated snapshots are retained in the destination region after they are copied from a source region.</p>',
        'RestoreStatus$SnapshotSizeInMegaBytes' => '<p> The size of the set of snapshot data used to restore the cluster. </p>',
        'RestoreStatus$ProgressInMegaBytes' => '<p> The number of megabytes that have been transferred from snapshot storage. </p>',
        'RestoreStatus$ElapsedTimeInSeconds' => '<p> The amount of time an in-progress restore has been running, or the amount of time it took a completed restore to finish. </p>',
        'RestoreStatus$EstimatedTimeToCompletionInSeconds' => '<p> The estimate of the time remaining before the restore will complete. Returns 0 for a completed restore. </p>',
        'Snapshot$EstimatedSecondsToCompletion' => '<p> The estimate of the time remaining before the snapshot backup will complete. Returns <code>0</code> for a completed backup. </p>',
        'Snapshot$ElapsedTimeInSeconds' => '<p> The amount of time an in-progress snapshot backup has been running, or the amount of time it took a completed backup to finish. </p>',
      ],
    ],
    'LongOptional' => [
      'base' => NULL,
      'refs' => [
        'ResizeProgressMessage$TotalResizeDataInMegaBytes' => '<p>The estimated total amount of data, in megabytes, on the cluster before the resize operation began.</p>',
        'ResizeProgressMessage$ProgressInMegaBytes' => '<p>While the resize operation is in progress, this value shows the current amount of data, in megabytes, that has been processed so far. When the resize operation is complete, this value shows the total amount of data, in megabytes, on the cluster, which may be more or less than TotalResizeDataInMegaBytes (the estimated total amount of data before resize]. </p>',
        'ResizeProgressMessage$ElapsedTimeInSeconds' => '<p>The amount of seconds that have elapsed since the resize operation began. After the resize operation completes, this value shows the total actual time, in seconds, for the resize operation. </p>',
        'ResizeProgressMessage$EstimatedTimeToCompletionInSeconds' => '<p>The estimated time remaining, in seconds, until the resize operation is complete. This value is calculated based on the average resize rate and the estimated amount of data remaining to be processed. Once the resize operation is complete, this value will be 0. </p>',
      ],
    ],
    'ModifyClusterMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'ModifyClusterParameterGroupMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'ModifyClusterSubnetGroupMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'ModifyEventSubscriptionMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'ModifySnapshotCopyRetentionPeriodMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'NumberOfNodesPerClusterLimitExceededFault' => [
      'base' => '<p>The operation would exceed the number of nodes allowed for a cluster.</p>',
      'refs' => [],
    ],
    'NumberOfNodesQuotaExceededFault' => [
      'base' => '<p>The operation would exceed the number of nodes allotted to the account. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'OrderableClusterOption' => [
      'base' => '<p> Describes an orderable cluster option. </p>',
      'refs' => [
        'OrderableClusterOptionsList$member' => NULL,
      ],
    ],
    'OrderableClusterOptionsList' => [
      'base' => NULL,
      'refs' => [
        'OrderableClusterOptionsMessage$OrderableClusterOptions' => '<p>An <a>OrderableClusterOption</a> structure containing information about orderable options for the Cluster.</p>',
      ],
    ],
    'OrderableClusterOptionsMessage' => [
      'base' => '<p> Contains the output from the <a>DescribeOrderableClusterOptions</a> action. </p>',
      'refs' => [],
    ],
    'Parameter' => [
      'base' => '<p> Describes a parameter in a cluster parameter group. </p>',
      'refs' => [
        'ParametersList$member' => NULL,
      ],
    ],
    'ParameterGroupList' => [
      'base' => NULL,
      'refs' => [
        'ClusterParameterGroupsMessage$ParameterGroups' => '<p> A list of <a>ClusterParameterGroup</a> instances. Each instance describes one cluster parameter group. </p>',
      ],
    ],
    'ParametersList' => [
      'base' => NULL,
      'refs' => [
        'ClusterParameterGroupDetails$Parameters' => '<p> A list of <a>Parameter</a> instances. Each instance lists the parameters of one cluster parameter group. </p>',
        'DefaultClusterParameters$Parameters' => '<p> The list of cluster default parameters. </p>',
        'ModifyClusterParameterGroupMessage$Parameters' => '<p> An array of parameters to be modified. A maximum of 20 parameters can be modified in a single request. </p> <p> For each parameter to be modified, you must supply at least the parameter name and parameter value; other name-value pairs of the parameter are optional. </p> <p> For the workload management (WLM] configuration, you must supply all the name-value pairs in the wlm_json_configuration parameter. </p>',
        'ResetClusterParameterGroupMessage$Parameters' => '<p> An array of names of parameters to be reset. If <i>ResetAllParameters</i> option is not used, then at least one parameter name must be supplied. </p> <p>Constraints: A maximum of 20 parameters can be reset in a single request.</p>',
      ],
    ],
    'PendingModifiedValues' => [
      'base' => '<p> Describes cluster attributes that are in a pending state. A change to one or more the attributes was requested and is in progress or will be applied. </p>',
      'refs' => [
        'Cluster$PendingModifiedValues' => '<p> If present, changes to the cluster are pending. Specific pending changes are identified by subelements. </p>',
      ],
    ],
    'PurchaseReservedNodeOfferingMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'RebootClusterMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'RecurringCharge' => [
      'base' => '<p>Describes a recurring charge.</p>',
      'refs' => [
        'RecurringChargeList$member' => NULL,
      ],
    ],
    'RecurringChargeList' => [
      'base' => NULL,
      'refs' => [
        'ReservedNode$RecurringCharges' => '<p>The recurring charges for the reserved node.</p>',
        'ReservedNodeOffering$RecurringCharges' => '<p>The charge to your account regardless of whether you are creating any clusters using the node offering. Recurring charges are only in effect for heavy-utilization reserved nodes. </p>',
      ],
    ],
    'ReservedNode' => [
      'base' => '<p> Describes a reserved node. </p>',
      'refs' => [
        'ReservedNodeList$member' => NULL,
        'PurchaseReservedNodeOfferingResult$ReservedNode' => NULL,
      ],
    ],
    'ReservedNodeAlreadyExistsFault' => [
      'base' => '<p> User already has a reservation with the given identifier. </p>',
      'refs' => [],
    ],
    'ReservedNodeList' => [
      'base' => NULL,
      'refs' => [
        'ReservedNodesMessage$ReservedNodes' => '<p>The list of reserved nodes.</p>',
      ],
    ],
    'ReservedNodeNotFoundFault' => [
      'base' => '<p> The specified reserved compute node not found. </p>',
      'refs' => [],
    ],
    'ReservedNodeOffering' => [
      'base' => '<p>Describes a reserved node offering.</p>',
      'refs' => [
        'ReservedNodeOfferingList$member' => NULL,
      ],
    ],
    'ReservedNodeOfferingList' => [
      'base' => NULL,
      'refs' => [
        'ReservedNodeOfferingsMessage$ReservedNodeOfferings' => '<p>A list of reserved node offerings.</p>',
      ],
    ],
    'ReservedNodeOfferingNotFoundFault' => [
      'base' => '<p> Specified offering does not exist. </p>',
      'refs' => [],
    ],
    'ReservedNodeOfferingsMessage' => [
      'base' => '<p> Contains the output from the <a>DescribeReservedNodeOfferings</a> action. </p>',
      'refs' => [],
    ],
    'ReservedNodeQuotaExceededFault' => [
      'base' => '<p> Request would exceed the user\'s compute node quota. For information about increasing your quota, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/amazon-redshift-limits.html">Limits in Amazon Redshift</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p>',
      'refs' => [],
    ],
    'ReservedNodesMessage' => [
      'base' => '<p>Contains the output from the <a>DescribeReservedNodes</a> action.</p>',
      'refs' => [],
    ],
    'ResetClusterParameterGroupMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'ResizeNotFoundFault' => [
      'base' => '<p>A resize operation for the specified cluster is not found.</p>',
      'refs' => [],
    ],
    'ResizeProgressMessage' => [
      'base' => '<p>Describes the result of a cluster resize operation.</p>',
      'refs' => [],
    ],
    'ResourceNotFoundFault' => [
      'base' => '<p> The resource could not be found. </p>',
      'refs' => [],
    ],
    'RestoreFromClusterSnapshotMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'RestoreStatus' => [
      'base' => '<p>Describes the status of a cluster restore action. Returns null if the cluster was not created by restoring a snapshot.</p>',
      'refs' => [
        'Cluster$RestoreStatus' => '<p> Describes the status of a cluster restore action. Returns null if the cluster was not created by restoring a snapshot. </p>',
      ],
    ],
    'RevokeClusterSecurityGroupIngressMessage' => [
      'base' => '<p> ??? </p>',
      'refs' => [],
    ],
    'RevokeSnapshotAccessMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'RotateEncryptionKeyMessage' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'SNSInvalidTopicFault' => [
      'base' => '<p>Amazon SNS has responded that there is a problem with the specified Amazon SNS topic.</p>',
      'refs' => [],
    ],
    'SNSNoAuthorizationFault' => [
      'base' => '<p>You do not have permission to publish to the specified Amazon SNS topic.</p>',
      'refs' => [],
    ],
    'SNSTopicArnNotFoundFault' => [
      'base' => '<p>An Amazon SNS topic with the specified Amazon Resource Name (ARN] does not exist.</p>',
      'refs' => [],
    ],
    'Snapshot' => [
      'base' => '<p>Describes a snapshot.</p>',
      'refs' => [
        'SnapshotList$member' => NULL,
        'AuthorizeSnapshotAccessResult$Snapshot' => NULL,
        'CopyClusterSnapshotResult$Snapshot' => NULL,
        'CreateClusterSnapshotResult$Snapshot' => NULL,
        'DeleteClusterSnapshotResult$Snapshot' => NULL,
        'RevokeSnapshotAccessResult$Snapshot' => NULL,
      ],
    ],
    'SnapshotCopyAlreadyDisabledFault' => [
      'base' => '<p> The cluster already has cross-region snapshot copy disabled. </p>',
      'refs' => [],
    ],
    'SnapshotCopyAlreadyEnabledFault' => [
      'base' => '<p> The cluster already has cross-region snapshot copy enabled. </p>',
      'refs' => [],
    ],
    'SnapshotCopyDisabledFault' => [
      'base' => '<p> Cross-region snapshot copy was temporarily disabled. Try your request again. </p>',
      'refs' => [],
    ],
    'SnapshotList' => [
      'base' => NULL,
      'refs' => [
        'SnapshotMessage$Snapshots' => '<p> A list of <a>Snapshot</a> instances. </p>',
      ],
    ],
    'SnapshotMessage' => [
      'base' => '<p> Contains the output from the <a>DescribeClusterSnapshots</a> action. </p>',
      'refs' => [],
    ],
    'SourceIdsList' => [
      'base' => NULL,
      'refs' => [
        'CreateEventSubscriptionMessage$SourceIds' => '<p> A list of one or more identifiers of Amazon Redshift source objects. All of the objects must be of the same type as was specified in the source type parameter. The event subscription will return only events generated by the specified objects. If not specified, then events are returned for all objects within the source type specified. </p> <p>Example: my-cluster-1, my-cluster-2</p> <p>Example: my-snapshot-20131010</p>',
        'EventSubscription$SourceIdsList' => '<p>A list of the sources that publish events to the Amazon Redshift event notification subscription.</p>',
        'ModifyEventSubscriptionMessage$SourceIds' => '<p> A list of one or more identifiers of Amazon Redshift source objects. All of the objects must be of the same type as was specified in the source type parameter. The event subscription will return only events generated by the specified objects. If not specified, then events are returned for all objects within the source type specified. </p> <p>Example: my-cluster-1, my-cluster-2</p> <p>Example: my-snapshot-20131010</p>',
      ],
    ],
    'SourceNotFoundFault' => [
      'base' => '<p>The specified Amazon Redshift event source could not be found.</p>',
      'refs' => [],
    ],
    'SourceType' => [
      'base' => NULL,
      'refs' => [
        'DescribeEventsMessage$SourceType' => '<p> The event source to retrieve events for. If no value is specified, all events are returned. </p> <p>Constraints:</p> <p>If <i>SourceType</i> is supplied, <i>SourceIdentifier</i> must also be provided.</p> <ul> <li>Specify <code>cluster</code> when <i>SourceIdentifier</i> is a cluster identifier.</li> <li>Specify <code>cluster-security-group</code> when <i>SourceIdentifier</i> is a cluster security group name.</li> <li>Specify <code>cluster-parameter-group</code> when <i>SourceIdentifier</i> is a cluster parameter group name.</li> <li>Specify <code>cluster-snapshot</code> when <i>SourceIdentifier</i> is a cluster snapshot identifier.</li> </ul>',
        'Event$SourceType' => '<p> The source type for this event. </p>',
      ],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'AccountWithRestoreAccess$AccountId' => '<p> The identifier of an AWS customer account authorized to restore a snapshot. </p>',
        'AuthorizeClusterSecurityGroupIngressMessage$ClusterSecurityGroupName' => '<p> The name of the security group to which the ingress rule is added. </p>',
        'AuthorizeClusterSecurityGroupIngressMessage$CIDRIP' => '<p> The IP range to be added the Amazon Redshift security group. </p>',
        'AuthorizeClusterSecurityGroupIngressMessage$EC2SecurityGroupName' => '<p> The EC2 security group to be added the Amazon Redshift security group. </p>',
        'AuthorizeClusterSecurityGroupIngressMessage$EC2SecurityGroupOwnerId' => '<p> The AWS account number of the owner of the security group specified by the <i>EC2SecurityGroupName</i> parameter. The AWS Access Key ID is not an acceptable value. </p> <p> Example: <code>111122223333</code> </p>',
        'AuthorizeSnapshotAccessMessage$SnapshotIdentifier' => '<p> The identifier of the snapshot the account is authorized to restore. </p>',
        'AuthorizeSnapshotAccessMessage$SnapshotClusterIdentifier' => '<p> The identifier of the cluster the snapshot was created from. This parameter is required if your IAM user has a policy containing a snapshot resource element that specifies anything other than * for the cluster name. </p>',
        'AuthorizeSnapshotAccessMessage$AccountWithRestoreAccess' => '<p> The identifier of the AWS customer account authorized to restore the specified snapshot. </p>',
        'AvailabilityZone$Name' => '<p> The name of the availability zone. </p>',
        'Cluster$ClusterIdentifier' => '<p> The unique identifier of the cluster. </p>',
        'Cluster$NodeType' => '<p> The node type for the nodes in the cluster. </p>',
        'Cluster$ClusterStatus' => '<p> The current state of this cluster. Possible values include <code>available</code>, <code>creating</code>, <code>deleting</code>, <code>rebooting</code>, <code>renaming</code>, and <code>resizing</code>. </p>',
        'Cluster$ModifyStatus' => '<p>The status of a modify operation, if any, initiated for the cluster.</p>',
        'Cluster$MasterUsername' => '<p> The master user name for the cluster. This name is used to connect to the database that is specified in <b>DBName</b>. </p>',
        'Cluster$DBName' => '<p> The name of the initial database that was created when the cluster was created. This same name is returned for the life of the cluster. If an initial database was not specified, a database named "dev" was created by default. </p>',
        'Cluster$ClusterSubnetGroupName' => '<p> The name of the subnet group that is associated with the cluster. This parameter is valid only when the cluster is in a VPC. </p>',
        'Cluster$VpcId' => '<p>The identifier of the VPC the cluster is in, if the cluster is in a VPC. </p>',
        'Cluster$AvailabilityZone' => '<p> The name of the Availability Zone in which the cluster is located. </p>',
        'Cluster$PreferredMaintenanceWindow' => '<p> The weekly time range (in UTC] during which system maintenance can occur. </p>',
        'Cluster$ClusterVersion' => '<p> The version ID of the Amazon Redshift engine that is running on the cluster. </p>',
        'Cluster$ClusterPublicKey' => '<p>The public key for the cluster.</p>',
        'Cluster$ClusterRevisionNumber' => '<p>The specific revision number of the database in the cluster.</p>',
        'Cluster$KmsKeyId' => '<p>The AWS Key Management Service (KMS] key ID of the encryption key used to encrypt data in the cluster.</p>',
        'ClusterNode$NodeRole' => '<p>Whether the node is a leader node or a compute node.</p>',
        'ClusterNode$PrivateIPAddress' => '<p>The private IP address of a node within a cluster.</p>',
        'ClusterNode$PublicIPAddress' => '<p>The public IP address of a node within a cluster.</p>',
        'ClusterParameterGroup$ParameterGroupName' => '<p> The name of the cluster parameter group. </p>',
        'ClusterParameterGroup$ParameterGroupFamily' => '<p> The name of the cluster parameter group family that this cluster parameter group is compatible with. </p>',
        'ClusterParameterGroup$Description' => '<p> The description of the parameter group. </p>',
        'ClusterParameterGroupDetails$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'ClusterParameterGroupNameMessage$ParameterGroupName' => '<p> The name of the cluster parameter group. </p>',
        'ClusterParameterGroupNameMessage$ParameterGroupStatus' => '<p> The status of the parameter group. For example, if you made a change to a parameter group name-value pair, then the change could be pending a reboot of an associated cluster. </p>',
        'ClusterParameterGroupStatus$ParameterGroupName' => '<p> The name of the cluster parameter group. </p>',
        'ClusterParameterGroupStatus$ParameterApplyStatus' => '<p> The status of parameter updates. </p>',
        'ClusterParameterGroupsMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'ClusterSecurityGroup$ClusterSecurityGroupName' => '<p> The name of the cluster security group to which the operation was applied. </p>',
        'ClusterSecurityGroup$Description' => '<p> A description of the security group. </p>',
        'ClusterSecurityGroupMembership$ClusterSecurityGroupName' => '<p> The name of the cluster security group. </p>',
        'ClusterSecurityGroupMembership$Status' => '<p> The status of the cluster security group. </p>',
        'ClusterSecurityGroupMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'ClusterSecurityGroupNameList$member' => NULL,
        'ClusterSnapshotCopyStatus$DestinationRegion' => '<p>The destination region that snapshots are automatically copied to when cross-region snapshot copy is enabled.</p>',
        'ClusterSubnetGroup$ClusterSubnetGroupName' => '<p> The name of the cluster subnet group. </p>',
        'ClusterSubnetGroup$Description' => '<p> The description of the cluster subnet group. </p>',
        'ClusterSubnetGroup$VpcId' => '<p> The VPC ID of the cluster subnet group. </p>',
        'ClusterSubnetGroup$SubnetGroupStatus' => '<p> The status of the cluster subnet group. Possible values are <code>Complete</code>, <code>Incomplete</code> and <code>Invalid</code>. </p>',
        'ClusterSubnetGroupMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'ClusterVersion$ClusterVersion' => '<p> The version number used by the cluster. </p>',
        'ClusterVersion$ClusterParameterGroupFamily' => '<p> The name of the cluster parameter group family for the cluster. </p>',
        'ClusterVersion$Description' => '<p> The description of the cluster version. </p>',
        'ClusterVersionsMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'ClustersMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'CopyClusterSnapshotMessage$SourceSnapshotIdentifier' => '<p> The identifier for the source snapshot. </p> <p>Constraints:</p> <ul> <li>Must be the identifier for a valid automated snapshot whose state is <code>available</code>.</li> </ul>',
        'CopyClusterSnapshotMessage$SourceSnapshotClusterIdentifier' => '<p> The identifier of the cluster the source snapshot was created from. This parameter is required if your IAM user has a policy containing a snapshot resource element that specifies anything other than * for the cluster name. </p> <p>Constraints:</p> <ul> <li>Must be the identifier for a valid cluster.</li> </ul>',
        'CopyClusterSnapshotMessage$TargetSnapshotIdentifier' => '<p> The identifier given to the new manual snapshot. </p> <p>Constraints:</p> <ul> <li>Cannot be null, empty, or blank.</li> <li>Must contain from 1 to 255 alphanumeric characters or hyphens.</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> <li>Must be unique for the AWS account that is making the request.</li> </ul>',
        'CreateClusterMessage$DBName' => '<p>The name of the first database to be created when the cluster is created. </p> <p>To create additional databases after the cluster is created, connect to the cluster with a SQL client and use SQL commands to create a database. For more information, go to <a href="http://docs.aws.amazon.com/redshift/latest/dg/t_creating_database.html">Create a Database</a> in the Amazon Redshift Database Developer Guide. </p> <p>Default: <code>dev</code></p> <p>Constraints:</p> <ul> <li>Must contain 1 to 64 alphanumeric characters.</li> <li>Must contain only lowercase letters.</li> <li>Cannot be a word that is reserved by the service. A list of reserved words can be found in <a href="http://docs.aws.amazon.com/redshift/latest/dg/r_pg_keywords.html">Reserved Words</a> in the Amazon Redshift Database Developer Guide. </li> </ul>',
        'CreateClusterMessage$ClusterIdentifier' => '<p> A unique identifier for the cluster. You use this identifier to refer to the cluster for any subsequent cluster operations such as deleting or modifying. The identifier also appears in the Amazon Redshift console. </p> <p>Constraints:</p> <ul> <li>Must contain from 1 to 63 alphanumeric characters or hyphens.</li> <li>Alphabetic characters must be lowercase.</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> <li>Must be unique for all clusters within an AWS account.</li> </ul> <p>Example: <code>myexamplecluster</code></p>',
        'CreateClusterMessage$ClusterType' => '<p> The type of the cluster. When cluster type is specified as <ul> <li> <code>single-node</code>, the <b>NumberOfNodes</b> parameter is not required.</li> <li> <code>multi-node</code>, the <b>NumberOfNodes</b> parameter is required.</li> </ul> </p> <p> Valid Values: <code>multi-node</code> | <code>single-node</code> </p> <p>Default: <code>multi-node</code></p>',
        'CreateClusterMessage$NodeType' => '<p> The node type to be provisioned for the cluster. For information about node types, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html#how-many-nodes"> Working with Clusters</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p> <p> Valid Values: <code>dw1.xlarge</code> | <code>dw1.8xlarge</code> | <code>dw2.large</code> | <code>dw2.8xlarge</code>. </p>',
        'CreateClusterMessage$MasterUsername' => '<p> The user name associated with the master user account for the cluster that is being created. </p> <p>Constraints:</p> <ul> <li>Must be 1 - 128 alphanumeric characters.</li> <li>First character must be a letter.</li> <li>Cannot be a reserved word. A list of reserved words can be found in <a href="http://docs.aws.amazon.com/redshift/latest/dg/r_pg_keywords.html">Reserved Words</a> in the Amazon Redshift Database Developer Guide. </li> </ul>',
        'CreateClusterMessage$MasterUserPassword' => '<p> The password associated with the master user account for the cluster that is being created. </p> <p> Constraints: </p> <ul> <li>Must be between 8 and 64 characters in length.</li> <li>Must contain at least one uppercase letter.</li> <li>Must contain at least one lowercase letter.</li> <li>Must contain one number.</li> <li>Can be any printable ASCII character (ASCII code 33 to 126] except \' (single quote], " (double quote], \\, /, @, or space.</li> </ul>',
        'CreateClusterMessage$ClusterSubnetGroupName' => '<p> The name of a cluster subnet group to be associated with this cluster. </p> <p> If this parameter is not provided the resulting cluster will be deployed outside virtual private cloud (VPC]. </p>',
        'CreateClusterMessage$AvailabilityZone' => '<p> The EC2 Availability Zone (AZ] in which you want Amazon Redshift to provision the cluster. For example, if you have several EC2 instances running in a specific Availability Zone, then you might want the cluster to be provisioned in the same zone in order to decrease network latency. </p> <p> Default: A random, system-chosen Availability Zone in the region that is specified by the endpoint. </p> <p> Example: <code>us-east-1d</code> </p> <p> Constraint: The specified Availability Zone must be in the same region as the current endpoint. </p>',
        'CreateClusterMessage$PreferredMaintenanceWindow' => '<p> The weekly time range (in UTC] during which automated cluster maintenance can occur. </p> <p> Format: <code>ddd:hh24:mi-ddd:hh24:mi</code> </p> <p> Default: A 30-minute window selected at random from an 8-hour block of time per region, occurring on a random day of the week. For more information about the time blocks for each region, see <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html#rs-maintenance-windows">Maintenance Windows</a> in Amazon Redshift Cluster Management Guide.</p> <p>Valid Days: Mon | Tue | Wed | Thu | Fri | Sat | Sun</p> <p>Constraints: Minimum 30-minute window.</p>',
        'CreateClusterMessage$ClusterParameterGroupName' => '<p> The name of the parameter group to be associated with this cluster. </p> <p>Default: The default Amazon Redshift cluster parameter group. For information about the default parameter group, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-parameter-groups.html">Working with Amazon Redshift Parameter Groups</a></p> <p> Constraints: </p> <ul> <li>Must be 1 to 255 alphanumeric characters or hyphens.</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> </ul>',
        'CreateClusterMessage$ClusterVersion' => '<p> The version of the Amazon Redshift engine software that you want to deploy on the cluster. </p> <p> The version selected runs on all the nodes in the cluster. </p> <p>Constraints: Only version 1.0 is currently available.</p> <p>Example: <code>1.0</code></p>',
        'CreateClusterMessage$HsmClientCertificateIdentifier' => '<p>Specifies the name of the HSM client certificate the Amazon Redshift cluster uses to retrieve the data encryption keys stored in an HSM.</p>',
        'CreateClusterMessage$HsmConfigurationIdentifier' => '<p>Specifies the name of the HSM configuration that contains the information the Amazon Redshift cluster can use to retrieve and store keys in an HSM.</p>',
        'CreateClusterMessage$ElasticIp' => '<p>The Elastic IP (EIP] address for the cluster.</p> <p>Constraints: The cluster must be provisioned in EC2-VPC and publicly-accessible through an Internet gateway. For more information about provisioning clusters in EC2-VPC, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html#cluster-platforms">Supported Platforms to Launch Your Cluster</a> in the Amazon Redshift Cluster Management Guide.</p>',
        'CreateClusterMessage$KmsKeyId' => '<p>The AWS Key Management Service (KMS] key ID of the encryption key that you want to use to encrypt data in the cluster.</p>',
        'CreateClusterParameterGroupMessage$ParameterGroupName' => '<p> The name of the cluster parameter group. </p> <p> Constraints: </p> <ul> <li>Must be 1 to 255 alphanumeric characters or hyphens</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> <li>Must be unique withing your AWS account.</li> </ul> <note>This value is stored as a lower-case string.</note>',
        'CreateClusterParameterGroupMessage$ParameterGroupFamily' => '<p> The Amazon Redshift engine version to which the cluster parameter group applies. The cluster engine version determines the set of parameters. </p> <p>To get a list of valid parameter group family names, you can call <a>DescribeClusterParameterGroups</a>. By default, Amazon Redshift returns a list of all the parameter groups that are owned by your AWS account, including the default parameter groups for each Amazon Redshift engine version. The parameter group family names associated with the default parameter groups provide you the valid values. For example, a valid family name is "redshift-1.0". </p>',
        'CreateClusterParameterGroupMessage$Description' => '<p> A description of the parameter group. </p>',
        'CreateClusterSecurityGroupMessage$ClusterSecurityGroupName' => '<p> The name for the security group. Amazon Redshift stores the value as a lowercase string. </p> <p>Constraints: </p> <ul> <li>Must contain no more than 255 alphanumeric characters or hyphens.</li> <li>Must not be "Default".</li> <li>Must be unique for all security groups that are created by your AWS account.</li> </ul> <p>Example: <code>examplesecuritygroup</code></p>',
        'CreateClusterSecurityGroupMessage$Description' => '<p> A description for the security group. </p>',
        'CreateClusterSnapshotMessage$SnapshotIdentifier' => '<p> A unique identifier for the snapshot that you are requesting. This identifier must be unique for all snapshots within the AWS account. </p> <p>Constraints:</p> <ul> <li>Cannot be null, empty, or blank</li> <li>Must contain from 1 to 255 alphanumeric characters or hyphens</li> <li>First character must be a letter</li> <li>Cannot end with a hyphen or contain two consecutive hyphens</li> </ul> <p>Example: <code>my-snapshot-id</code></p>',
        'CreateClusterSnapshotMessage$ClusterIdentifier' => '<p> The cluster identifier for which you want a snapshot. </p>',
        'CreateClusterSubnetGroupMessage$ClusterSubnetGroupName' => '<p> The name for the subnet group. Amazon Redshift stores the value as a lowercase string. </p> <p>Constraints: </p> <ul> <li>Must contain no more than 255 alphanumeric characters or hyphens.</li> <li>Must not be "Default".</li> <li>Must be unique for all subnet groups that are created by your AWS account.</li> </ul> <p>Example: <code>examplesubnetgroup</code></p>',
        'CreateClusterSubnetGroupMessage$Description' => '<p>A description for the subnet group.</p>',
        'CreateEventSubscriptionMessage$SubscriptionName' => '<p> The name of the event subscription to be created. </p> <p>Constraints:</p> <ul> <li>Cannot be null, empty, or blank.</li> <li>Must contain from 1 to 255 alphanumeric characters or hyphens.</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> </ul>',
        'CreateEventSubscriptionMessage$SnsTopicArn' => '<p> The Amazon Resource Name (ARN] of the Amazon SNS topic used to transmit the event notifications. The ARN is created by Amazon SNS when you create a topic and subscribe to it. </p>',
        'CreateEventSubscriptionMessage$SourceType' => '<p> The type of source that will be generating the events. For example, if you want to be notified of events generated by a cluster, you would set this parameter to cluster. If this value is not specified, events are returned for all Amazon Redshift objects in your AWS account. You must specify a source type in order to specify source IDs. </p> <p>Valid values: cluster, cluster-parameter-group, cluster-security-group, and cluster-snapshot.</p>',
        'CreateEventSubscriptionMessage$Severity' => '<p>Specifies the Amazon Redshift event severity to be published by the event notification subscription.</p> <p>Values: ERROR, INFO</p>',
        'CreateHsmClientCertificateMessage$HsmClientCertificateIdentifier' => '<p>The identifier to be assigned to the new HSM client certificate that the cluster will use to connect to the HSM to use the database encryption keys.</p>',
        'CreateHsmConfigurationMessage$HsmConfigurationIdentifier' => '<p>The identifier to be assigned to the new Amazon Redshift HSM configuration.</p>',
        'CreateHsmConfigurationMessage$Description' => '<p>A text description of the HSM configuration to be created.</p>',
        'CreateHsmConfigurationMessage$HsmIpAddress' => '<p>The IP address that the Amazon Redshift cluster must use to access the HSM.</p>',
        'CreateHsmConfigurationMessage$HsmPartitionName' => '<p>The name of the partition in the HSM where the Amazon Redshift clusters will store their database encryption keys.</p>',
        'CreateHsmConfigurationMessage$HsmPartitionPassword' => '<p>The password required to access the HSM partition.</p>',
        'CreateHsmConfigurationMessage$HsmServerPublicCertificate' => '<p>The HSMs public certificate file. When using Cloud HSM, the file name is server.pem.</p>',
        'CreateTagsMessage$ResourceName' => '<p> The Amazon Resource Name (ARN] to which you want to add the tag or tags. For example, <code>arn:aws:redshift:us-east-1:123456789:cluster:t1</code>. </p>',
        'DefaultClusterParameters$ParameterGroupFamily' => '<p> The name of the cluster parameter group family to which the engine default parameters apply. </p>',
        'DefaultClusterParameters$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'DeleteClusterMessage$ClusterIdentifier' => '<p> The identifier of the cluster to be deleted. </p> <p>Constraints:</p> <ul> <li>Must contain lowercase characters.</li> <li>Must contain from 1 to 63 alphanumeric characters or hyphens.</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> </ul>',
        'DeleteClusterMessage$FinalClusterSnapshotIdentifier' => '<p> The identifier of the final snapshot that is to be created immediately before deleting the cluster. If this parameter is provided, <i>SkipFinalClusterSnapshot</i> must be <code>false</code>. </p> <p>Constraints:</p> <ul> <li>Must be 1 to 255 alphanumeric characters.</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> </ul>',
        'DeleteClusterParameterGroupMessage$ParameterGroupName' => '<p> The name of the parameter group to be deleted. </p> <p>Constraints:</p> <ul> <li>Must be the name of an existing cluster parameter group.</li> <li>Cannot delete a default cluster parameter group.</li> </ul>',
        'DeleteClusterSecurityGroupMessage$ClusterSecurityGroupName' => '<p> The name of the cluster security group to be deleted. </p>',
        'DeleteClusterSnapshotMessage$SnapshotIdentifier' => '<p> The unique identifier of the manual snapshot to be deleted. </p> <p>Constraints: Must be the name of an existing snapshot that is in the <code>available</code> state.</p>',
        'DeleteClusterSnapshotMessage$SnapshotClusterIdentifier' => '<p> The unique identifier of the cluster the snapshot was created from. This parameter is required if your IAM user has a policy containing a snapshot resource element that specifies anything other than * for the cluster name. </p> <p>Constraints: Must be the name of valid cluster.</p>',
        'DeleteClusterSubnetGroupMessage$ClusterSubnetGroupName' => '<p>The name of the cluster subnet group name to be deleted.</p>',
        'DeleteEventSubscriptionMessage$SubscriptionName' => '<p>The name of the Amazon Redshift event notification subscription to be deleted.</p>',
        'DeleteHsmClientCertificateMessage$HsmClientCertificateIdentifier' => '<p>The identifier of the HSM client certificate to be deleted.</p>',
        'DeleteHsmConfigurationMessage$HsmConfigurationIdentifier' => '<p>The identifier of the Amazon Redshift HSM configuration to be deleted.</p>',
        'DeleteTagsMessage$ResourceName' => '<p> The Amazon Resource Name (ARN] from which you want to remove the tag or tags. For example, <code>arn:aws:redshift:us-east-1:123456789:cluster:t1</code>. </p>',
        'DescribeClusterParameterGroupsMessage$ParameterGroupName' => '<p> The name of a specific parameter group for which to return details. By default, details about all parameter groups and the default parameter group are returned. </p>',
        'DescribeClusterParameterGroupsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeClusterParameterGroups</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeClusterParametersMessage$ParameterGroupName' => '<p> The name of a cluster parameter group for which to return details. </p>',
        'DescribeClusterParametersMessage$Source' => '<p> The parameter types to return. Specify <code>user</code> to show parameters that are different form the default. Similarly, specify <code>engine-default</code> to show parameters that are the same as the default parameter group. </p> <p>Default: All parameter types returned.</p> <p>Valid Values: <code>user</code> | <code>engine-default</code></p>',
        'DescribeClusterParametersMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeClusterParameters</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeClusterSecurityGroupsMessage$ClusterSecurityGroupName' => '<p> The name of a cluster security group for which you are requesting details. You can specify either the <b>Marker</b> parameter or a <b>ClusterSecurityGroupName</b> parameter, but not both. </p> <p> Example: <code>securitygroup1</code> </p>',
        'DescribeClusterSecurityGroupsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeClusterSecurityGroups</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p> <p> Constraints: You can specify either the <b>ClusterSecurityGroupName</b> parameter or the <b>Marker</b> parameter, but not both. </p>',
        'DescribeClusterSnapshotsMessage$ClusterIdentifier' => '<p> The identifier of the cluster for which information about snapshots is requested. </p>',
        'DescribeClusterSnapshotsMessage$SnapshotIdentifier' => '<p> The snapshot identifier of the snapshot about which to return information. </p>',
        'DescribeClusterSnapshotsMessage$SnapshotType' => '<p> The type of snapshots for which you are requesting information. By default, snapshots of all types are returned. </p> <p> Valid Values: <code>automated</code> | <code>manual</code> </p>',
        'DescribeClusterSnapshotsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeClusterSnapshots</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeClusterSnapshotsMessage$OwnerAccount' => '<p> The AWS customer account used to create or copy the snapshot. Use this field to filter the results to snapshots owned by a particular account. To describe snapshots you own, either specify your AWS customer account, or do not specify the parameter. </p>',
        'DescribeClusterSubnetGroupsMessage$ClusterSubnetGroupName' => '<p>The name of the cluster subnet group for which information is requested. </p>',
        'DescribeClusterSubnetGroupsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeClusterSubnetGroups</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeClusterVersionsMessage$ClusterVersion' => '<p> The specific cluster version to return. </p> <p>Example: <code>1.0</code></p>',
        'DescribeClusterVersionsMessage$ClusterParameterGroupFamily' => '<p> The name of a specific cluster parameter group family to return details for. </p> <p>Constraints:</p> <ul> <li>Must be 1 to 255 alphanumeric characters</li> <li>First character must be a letter</li> <li>Cannot end with a hyphen or contain two consecutive hyphens</li> </ul>',
        'DescribeClusterVersionsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeClusterVersions</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeClustersMessage$ClusterIdentifier' => '<p> The unique identifier of a cluster whose properties you are requesting. This parameter is case sensitive. </p> <p>The default is that all clusters defined for an account are returned. </p>',
        'DescribeClustersMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeClusters</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p> <p> Constraints: You can specify either the <b>ClusterIdentifier</b> parameter or the <b>Marker</b> parameter, but not both. </p>',
        'DescribeDefaultClusterParametersMessage$ParameterGroupFamily' => '<p> The name of the cluster parameter group family. </p>',
        'DescribeDefaultClusterParametersMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeDefaultClusterParameters</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeEventCategoriesMessage$SourceType' => '<p> The source type, such as cluster or parameter group, to which the described event categories apply. </p> <p> Valid values: cluster, snapshot, parameter group, and security group. </p>',
        'DescribeEventSubscriptionsMessage$SubscriptionName' => '<p>The name of the Amazon Redshift event notification subscription to be described.</p>',
        'DescribeEventSubscriptionsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeEventSubscriptions</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeEventsMessage$SourceIdentifier' => '<p> The identifier of the event source for which events will be returned. If this parameter is not specified, then all sources are included in the response. </p> <p>Constraints:</p> <p>If <i>SourceIdentifier</i> is supplied, <i>SourceType</i> must also be provided.</p> <ul> <li>Specify a cluster identifier when <i>SourceType</i> is <code>cluster</code>.</li> <li>Specify a cluster security group name when <i>SourceType</i> is <code>cluster-security-group</code>.</li> <li>Specify a cluster parameter group name when <i>SourceType</i> is <code>cluster-parameter-group</code>.</li> <li>Specify a cluster snapshot identifier when <i>SourceType</i> is <code>cluster-snapshot</code>.</li> </ul>',
        'DescribeEventsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeEvents</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeHsmClientCertificatesMessage$HsmClientCertificateIdentifier' => '<p>The identifier of a specific HSM client certificate for which you want information. If no identifier is specified, information is returned for all HSM client certificates owned by your AWS customer account.</p>',
        'DescribeHsmClientCertificatesMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeHsmClientCertificates</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeHsmConfigurationsMessage$HsmConfigurationIdentifier' => '<p>The identifier of a specific Amazon Redshift HSM configuration to be described. If no identifier is specified, information is returned for all HSM configurations owned by your AWS customer account.</p>',
        'DescribeHsmConfigurationsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeHsmConfigurations</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeLoggingStatusMessage$ClusterIdentifier' => '<p> The identifier of the cluster to get the logging status from. </p> <p>Example: <code>examplecluster</code></p>',
        'DescribeOrderableClusterOptionsMessage$ClusterVersion' => '<p> The version filter value. Specify this parameter to show only the available offerings matching the specified version. </p> <p>Default: All versions.</p> <p>Constraints: Must be one of the version returned from <a>DescribeClusterVersions</a>.</p>',
        'DescribeOrderableClusterOptionsMessage$NodeType' => '<p> The node type filter value. Specify this parameter to show only the available offerings matching the specified node type. </p>',
        'DescribeOrderableClusterOptionsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeOrderableClusterOptions</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeReservedNodeOfferingsMessage$ReservedNodeOfferingId' => '<p>The unique identifier for the offering.</p>',
        'DescribeReservedNodeOfferingsMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeReservedNodeOfferings</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeReservedNodesMessage$ReservedNodeId' => '<p>Identifier for the node reservation.</p>',
        'DescribeReservedNodesMessage$Marker' => '<p> An optional parameter that specifies the starting point to return a set of response records. When the results of a <a>DescribeReservedNodes</a> request exceed the value specified in <code>MaxRecords</code>, AWS returns a value in the <code>Marker</code> field of the response. You can retrieve the next set of response records by providing the returned marker value in the <code>Marker</code> parameter and retrying the request. </p>',
        'DescribeResizeMessage$ClusterIdentifier' => '<p> The unique identifier of a cluster whose resize progress you are requesting. This parameter is case-sensitive. </p> <p>By default, resize operations for all clusters defined for an AWS account are returned. </p>',
        'DescribeTagsMessage$ResourceName' => '<p> The Amazon Resource Name (ARN] for which you want to describe the tag or tags. For example, <code>arn:aws:redshift:us-east-1:123456789:cluster:t1</code>. </p>',
        'DescribeTagsMessage$ResourceType' => '<p> The type of resource with which you want to view tags. Valid resource types are: <ul> <li>Cluster</li> <li>CIDR/IP</li> <li>EC2 security group</li> <li>Snapshot</li> <li>Cluster security group</li> <li>Subnet group</li> <li>HSM connection</li> <li>HSM certificate</li> <li>Parameter group</li> </ul> </p> <p> For more information about Amazon Redshift resource types and constructing ARNs, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/constructing-redshift-arn.html">Constructing an Amazon Redshift Amazon Resource Name (ARN]</a> in the Amazon Redshift Cluster Management Guide. </p>',
        'DescribeTagsMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>marker</code> parameter and retrying the command. If the <code>marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'DisableLoggingMessage$ClusterIdentifier' => '<p> The identifier of the cluster on which logging is to be stopped. </p> <p>Example: <code>examplecluster</code></p>',
        'DisableSnapshotCopyMessage$ClusterIdentifier' => '<p> The unique identifier of the source cluster that you want to disable copying of snapshots to a destination region. </p> <p> Constraints: Must be the valid name of an existing cluster that has cross-region snapshot copy enabled. </p>',
        'EC2SecurityGroup$Status' => '<p> The status of the EC2 security group. </p>',
        'EC2SecurityGroup$EC2SecurityGroupName' => '<p> The name of the EC2 Security Group. </p>',
        'EC2SecurityGroup$EC2SecurityGroupOwnerId' => '<p> The AWS ID of the owner of the EC2 security group specified in the <code>EC2SecurityGroupName</code> field. </p>',
        'ElasticIpStatus$ElasticIp' => '<p>The elastic IP (EIP] address for the cluster.</p>',
        'ElasticIpStatus$Status' => '<p>Describes the status of the elastic IP (EIP] address.</p>',
        'EnableLoggingMessage$ClusterIdentifier' => '<p> The identifier of the cluster on which logging is to be started. </p> <p>Example: <code>examplecluster</code></p>',
        'EnableLoggingMessage$BucketName' => '<p> The name of an existing S3 bucket where the log files are to be stored. </p> <p>Constraints:</p> <ul> <li>Must be in the same region as the cluster</li> <li>The cluster must have read bucket and put object permissions</li> </ul>',
        'EnableLoggingMessage$S3KeyPrefix' => '<p> The prefix applied to the log file names. </p> <p>Constraints:</p> <ul> <li>Cannot exceed 512 characters</li> <li>Cannot contain spaces( ], double quotes ("], single quotes (\'], a backslash (\\], or control characters. The hexadecimal codes for invalid characters are: <ul> <li>x00 to x20</li> <li>x22</li> <li>x27</li> <li>x5c</li> <li>x7f or larger</li> </ul> </li> </ul>',
        'EnableSnapshotCopyMessage$ClusterIdentifier' => '<p> The unique identifier of the source cluster to copy snapshots from. </p> <p> Constraints: Must be the valid name of an existing cluster that does not already have cross-region snapshot copy enabled. </p>',
        'EnableSnapshotCopyMessage$DestinationRegion' => '<p> The destination region that you want to copy snapshots to. </p> <p> Constraints: Must be the name of a valid region. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/rande.html#redshift_region">Regions and Endpoints</a> in the Amazon Web Services General Reference. </p>',
        'Endpoint$Address' => '<p> The DNS address of the Cluster. </p>',
        'Event$SourceIdentifier' => '<p> The identifier for the source of the event. </p>',
        'Event$Message' => '<p> The text of this event. </p>',
        'Event$Severity' => '<p>The severity of the event.</p> <p>Values: ERROR, INFO</p>',
        'Event$EventId' => '<p> The identifier of the event. </p>',
        'EventCategoriesList$member' => NULL,
        'EventCategoriesMap$SourceType' => '<p>The Amazon Redshift source type, such as cluster or cluster-snapshot, that the returned categories belong to.</p>',
        'EventInfoMap$EventId' => '<p>The identifier of an Amazon Redshift event.</p>',
        'EventInfoMap$EventDescription' => '<p>The description of an Amazon Redshift event.</p>',
        'EventInfoMap$Severity' => '<p>The severity of the event.</p> <p>Values: ERROR, INFO</p>',
        'EventSubscription$CustomerAwsId' => '<p>The AWS customer account associated with the Amazon Redshift event notification subscription.</p>',
        'EventSubscription$CustSubscriptionId' => '<p>The name of the Amazon Redshift event notification subscription.</p>',
        'EventSubscription$SnsTopicArn' => '<p>The Amazon Resource Name (ARN] of the Amazon SNS topic used by the event notification subscription.</p>',
        'EventSubscription$Status' => '<p>The status of the Amazon Redshift event notification subscription.</p> <p>Constraints:</p> <ul> <li>Can be one of the following: active | no-permission | topic-not-exist</li> <li>The status "no-permission" indicates that Amazon Redshift no longer has permission to post to the Amazon SNS topic. The status "topic-not-exist" indicates that the topic was deleted after the subscription was created.</li> </ul>',
        'EventSubscription$SourceType' => '<p>The source type of the events returned the Amazon Redshift event notification, such as cluster, or cluster-snapshot.</p>',
        'EventSubscription$Severity' => '<p>The event severity specified in the Amazon Redshift event notification subscription.</p> <p>Values: ERROR, INFO</p>',
        'EventSubscriptionsMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'EventsMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'HsmClientCertificate$HsmClientCertificateIdentifier' => '<p>The identifier of the HSM client certificate.</p>',
        'HsmClientCertificate$HsmClientCertificatePublicKey' => '<p>The public key that the Amazon Redshift cluster will use to connect to the HSM. You must register the public key in the HSM.</p>',
        'HsmClientCertificateMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'HsmConfiguration$HsmConfigurationIdentifier' => '<p>The name of the Amazon Redshift HSM configuration.</p>',
        'HsmConfiguration$Description' => '<p>A text description of the HSM configuration.</p>',
        'HsmConfiguration$HsmIpAddress' => '<p>The IP address that the Amazon Redshift cluster must use to access the HSM.</p>',
        'HsmConfiguration$HsmPartitionName' => '<p>The name of the partition in the HSM where the Amazon Redshift clusters will store their database encryption keys.</p>',
        'HsmConfigurationMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'HsmStatus$HsmClientCertificateIdentifier' => '<p>Specifies the name of the HSM client certificate the Amazon Redshift cluster uses to retrieve the data encryption keys stored in an HSM.</p>',
        'HsmStatus$HsmConfigurationIdentifier' => '<p>Specifies the name of the HSM configuration that contains the information the Amazon Redshift cluster can use to retrieve and store keys in an HSM.</p>',
        'HsmStatus$Status' => '<p>Reports whether the Amazon Redshift cluster has finished applying any HSM settings changes specified in a modify cluster command.</p> <p>Values: active, applying</p>',
        'IPRange$Status' => '<p> The status of the IP range, for example, "authorized". </p>',
        'IPRange$CIDRIP' => '<p> The IP range in Classless Inter-Domain Routing (CIDR] notation. </p>',
        'ImportTablesCompleted$member' => NULL,
        'ImportTablesInProgress$member' => NULL,
        'ImportTablesNotStarted$member' => NULL,
        'LoggingStatus$BucketName' => '<p>The name of the S3 bucket where the log files are stored.</p>',
        'LoggingStatus$S3KeyPrefix' => '<p>The prefix applied to the log file names.</p>',
        'LoggingStatus$LastFailureMessage' => '<p> The message indicating that logs failed to be delivered. </p>',
        'ModifyClusterMessage$ClusterIdentifier' => '<p> The unique identifier of the cluster to be modified. </p> <p>Example: <code>examplecluster</code></p>',
        'ModifyClusterMessage$ClusterType' => '<p> The new cluster type. </p> <p> When you submit your cluster resize request, your existing cluster goes into a read-only mode. After Amazon Redshift provisions a new cluster based on your resize requirements, there will be outage for a period while the old cluster is deleted and your connection is switched to the new cluster. You can use <a>DescribeResize</a> to track the progress of the resize request. </p> <p>Valid Values: <code> multi-node | single-node </code></p>',
        'ModifyClusterMessage$NodeType' => '<p> The new node type of the cluster. If you specify a new node type, you must also specify the number of nodes parameter. </p> <p> When you submit your request to resize a cluster, Amazon Redshift sets access permissions for the cluster to read-only. After Amazon Redshift provisions a new cluster according to your resize requirements, there will be a temporary outage while the old cluster is deleted and your connection is switched to the new cluster. When the new connection is complete, the original access permissions for the cluster are restored. You can use <a>DescribeResize</a> to track the progress of the resize request. </p> <p>Valid Values: <code> dw1.xlarge</code> | <code>dw1.8xlarge</code> | <code>dw2.large</code> | <code>dw2.8xlarge</code>.</p>',
        'ModifyClusterMessage$MasterUserPassword' => '<p> The new password for the cluster master user. This change is asynchronously applied as soon as possible. Between the time of the request and the completion of the request, the <code>MasterUserPassword</code> element exists in the <code>PendingModifiedValues</code> element of the operation response. <note> Operations never return the password, so this operation provides a way to regain access to the master user account for a cluster if the password is lost. </note> </p> <p>Default: Uses existing setting.</p> <p> Constraints: </p> <ul> <li>Must be between 8 and 64 characters in length.</li> <li>Must contain at least one uppercase letter.</li> <li>Must contain at least one lowercase letter.</li> <li>Must contain one number.</li> <li>Can be any printable ASCII character (ASCII code 33 to 126] except \' (single quote], " (double quote], \\, /, @, or space.</li> </ul>',
        'ModifyClusterMessage$ClusterParameterGroupName' => '<p> The name of the cluster parameter group to apply to this cluster. This change is applied only after the cluster is rebooted. To reboot a cluster use <a>RebootCluster</a>. </p> <p>Default: Uses existing setting.</p> <p>Constraints: The cluster parameter group must be in the same parameter group family that matches the cluster version.</p>',
        'ModifyClusterMessage$PreferredMaintenanceWindow' => '<p> The weekly time range (in UTC] during which system maintenance can occur, if necessary. If system maintenance is necessary during the window, it may result in an outage. </p> <p> This maintenance window change is made immediately. If the new maintenance window indicates the current time, there must be at least 120 minutes between the current time and end of the window in order to ensure that pending changes are applied. </p> <p>Default: Uses existing setting.</p> <p>Format: ddd:hh24:mi-ddd:hh24:mi, for example <code>wed:07:30-wed:08:00</code>.</p> <p>Valid Days: Mon | Tue | Wed | Thu | Fri | Sat | Sun</p> <p>Constraints: Must be at least 30 minutes.</p>',
        'ModifyClusterMessage$ClusterVersion' => '<p> The new version number of the Amazon Redshift engine to upgrade to. </p> <p> For major version upgrades, if a non-default cluster parameter group is currently in use, a new cluster parameter group in the cluster parameter group family for the new version must be specified. The new cluster parameter group can be the default for that cluster parameter group family. For more information about managing parameter groups, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-parameter-groups.html">Amazon Redshift Parameter Groups</a> in the <i>Amazon Redshift Cluster Management Guide</i>. </p> <p>Example: <code>1.0</code></p>',
        'ModifyClusterMessage$HsmClientCertificateIdentifier' => '<p>Specifies the name of the HSM client certificate the Amazon Redshift cluster uses to retrieve the data encryption keys stored in an HSM.</p>',
        'ModifyClusterMessage$HsmConfigurationIdentifier' => '<p>Specifies the name of the HSM configuration that contains the information the Amazon Redshift cluster can use to retrieve and store keys in an HSM.</p>',
        'ModifyClusterMessage$NewClusterIdentifier' => '<p>The new identifier for the cluster.</p> <p>Constraints:</p> <ul> <li>Must contain from 1 to 63 alphanumeric characters or hyphens.</li> <li>Alphabetic characters must be lowercase.</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> <li>Must be unique for all clusters within an AWS account.</li> </ul> <p>Example: <code>examplecluster</code></p>',
        'ModifyClusterParameterGroupMessage$ParameterGroupName' => '<p> The name of the parameter group to be modified. </p>',
        'ModifyClusterSubnetGroupMessage$ClusterSubnetGroupName' => '<p>The name of the subnet group to be modified.</p>',
        'ModifyClusterSubnetGroupMessage$Description' => '<p>A text description of the subnet group to be modified.</p>',
        'ModifyEventSubscriptionMessage$SubscriptionName' => '<p> The name of the modified Amazon Redshift event notification subscription. </p>',
        'ModifyEventSubscriptionMessage$SnsTopicArn' => '<p> The Amazon Resource Name (ARN] of the SNS topic to be used by the event notification subscription. </p>',
        'ModifyEventSubscriptionMessage$SourceType' => '<p> The type of source that will be generating the events. For example, if you want to be notified of events generated by a cluster, you would set this parameter to cluster. If this value is not specified, events are returned for all Amazon Redshift objects in your AWS account. You must specify a source type in order to specify source IDs. </p> <p>Valid values: cluster, cluster-parameter-group, cluster-security-group, and cluster-snapshot.</p>',
        'ModifyEventSubscriptionMessage$Severity' => '<p>Specifies the Amazon Redshift event severity to be published by the event notification subscription.</p> <p>Values: ERROR, INFO</p>',
        'ModifySnapshotCopyRetentionPeriodMessage$ClusterIdentifier' => '<p> The unique identifier of the cluster for which you want to change the retention period for automated snapshots that are copied to a destination region. </p> <p> Constraints: Must be the valid name of an existing cluster that has cross-region snapshot copy enabled. </p>',
        'OrderableClusterOption$ClusterVersion' => '<p> The version of the orderable cluster. </p>',
        'OrderableClusterOption$ClusterType' => '<p> The cluster type, for example <code>multi-node</code>. </p>',
        'OrderableClusterOption$NodeType' => '<p> The node type for the orderable cluster. </p>',
        'OrderableClusterOptionsMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'Parameter$ParameterName' => '<p> The name of the parameter. </p>',
        'Parameter$ParameterValue' => '<p> The value of the parameter. </p>',
        'Parameter$Description' => '<p> A description of the parameter. </p>',
        'Parameter$Source' => '<p> The source of the parameter value, such as "engine-default" or "user". </p>',
        'Parameter$DataType' => '<p> The data type of the parameter. </p>',
        'Parameter$AllowedValues' => '<p> The valid range of values for the parameter. </p>',
        'Parameter$MinimumEngineVersion' => '<p> The earliest engine version to which the parameter can apply. </p>',
        'PendingModifiedValues$MasterUserPassword' => '<p> The pending or in-progress change of the master user password for the cluster. </p>',
        'PendingModifiedValues$NodeType' => '<p> The pending or in-progress change of the cluster\'s node type. </p>',
        'PendingModifiedValues$ClusterType' => '<p> The pending or in-progress change of the cluster type. </p>',
        'PendingModifiedValues$ClusterVersion' => '<p> The pending or in-progress change of the service version. </p>',
        'PendingModifiedValues$ClusterIdentifier' => '<p>The pending or in-progress change of the new identifier for the cluster.</p>',
        'PurchaseReservedNodeOfferingMessage$ReservedNodeOfferingId' => '<p>The unique identifier of the reserved node offering you want to purchase.</p>',
        'RebootClusterMessage$ClusterIdentifier' => '<p> The cluster identifier. </p>',
        'RecurringCharge$RecurringChargeFrequency' => '<p>The frequency at which the recurring charge amount is applied.</p>',
        'ReservedNode$ReservedNodeId' => '<p> The unique identifier for the reservation. </p>',
        'ReservedNode$ReservedNodeOfferingId' => '<p> The identifier for the reserved node offering. </p>',
        'ReservedNode$NodeType' => '<p> The node type of the reserved node. </p>',
        'ReservedNode$CurrencyCode' => '<p>The currency code for the reserved cluster.</p>',
        'ReservedNode$State' => '<p> The state of the reserved compute node. </p> <p>Possible Values:</p> <ul> <li>pending-payment-This reserved node has recently been purchased, and the sale has been approved, but payment has not yet been confirmed.</li> <li>active-This reserved node is owned by the caller and is available for use.</li> <li>payment-failed-Payment failed for the purchase attempt.</li> </ul>',
        'ReservedNode$OfferingType' => '<p>The anticipated utilization of the reserved node, as defined in the reserved node offering.</p>',
        'ReservedNodeOffering$ReservedNodeOfferingId' => '<p> The offering identifier. </p>',
        'ReservedNodeOffering$NodeType' => '<p> The node type offered by the reserved node offering. </p>',
        'ReservedNodeOffering$CurrencyCode' => '<p> The currency code for the compute nodes offering. </p>',
        'ReservedNodeOffering$OfferingType' => '<p>The anticipated utilization of the reserved node, as defined in the reserved node offering.</p>',
        'ReservedNodeOfferingsMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'ReservedNodesMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'ResetClusterParameterGroupMessage$ParameterGroupName' => '<p> The name of the cluster parameter group to be reset. </p>',
        'ResizeProgressMessage$TargetNodeType' => '<p>The node type that the cluster will have after the resize operation is complete.</p>',
        'ResizeProgressMessage$TargetClusterType' => '<p>The cluster type after the resize operation is complete.</p> <p>Valid Values: <code>multi-node</code> | <code>single-node</code></p>',
        'ResizeProgressMessage$Status' => '<p>The status of the resize operation.</p> <p>Valid Values: <code>NONE</code> | <code>IN_PROGRESS</code> | <code>FAILED</code> | <code>SUCCEEDED</code></p>',
        'RestoreFromClusterSnapshotMessage$ClusterIdentifier' => '<p> The identifier of the cluster that will be created from restoring the snapshot. </p> <p> <p>Constraints:</p> <ul> <li>Must contain from 1 to 63 alphanumeric characters or hyphens.</li> <li>Alphabetic characters must be lowercase.</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> <li>Must be unique for all clusters within an AWS account.</li> </ul> </p>',
        'RestoreFromClusterSnapshotMessage$SnapshotIdentifier' => '<p> The name of the snapshot from which to create the new cluster. This parameter isn\'t case sensitive. </p> <p>Example: <code>my-snapshot-id</code></p>',
        'RestoreFromClusterSnapshotMessage$SnapshotClusterIdentifier' => '<p> The name of the cluster the source snapshot was created from. This parameter is required if your IAM user has a policy containing a snapshot resource element that specifies anything other than * for the cluster name. </p>',
        'RestoreFromClusterSnapshotMessage$AvailabilityZone' => '<p> The Amazon EC2 Availability Zone in which to restore the cluster. </p> <p>Default: A random, system-chosen Availability Zone.</p> <p>Example: <code>us-east-1a</code></p>',
        'RestoreFromClusterSnapshotMessage$ClusterSubnetGroupName' => '<p> The name of the subnet group where you want to cluster restored. </p> <p> A snapshot of cluster in VPC can be restored only in VPC. Therefore, you must provide subnet group name where you want the cluster restored. </p>',
        'RestoreFromClusterSnapshotMessage$OwnerAccount' => '<p> The AWS customer account used to create or copy the snapshot. Required if you are restoring a snapshot you do not own, optional if you own the snapshot. </p>',
        'RestoreFromClusterSnapshotMessage$HsmClientCertificateIdentifier' => '<p>Specifies the name of the HSM client certificate the Amazon Redshift cluster uses to retrieve the data encryption keys stored in an HSM.</p>',
        'RestoreFromClusterSnapshotMessage$HsmConfigurationIdentifier' => '<p>Specifies the name of the HSM configuration that contains the information the Amazon Redshift cluster can use to retrieve and store keys in an HSM.</p>',
        'RestoreFromClusterSnapshotMessage$ElasticIp' => '<p>The elastic IP (EIP] address for the cluster.</p>',
        'RestoreFromClusterSnapshotMessage$ClusterParameterGroupName' => '<p> The name of the parameter group to be associated with this cluster. </p> <p>Default: The default Amazon Redshift cluster parameter group. For information about the default parameter group, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-parameter-groups.html">Working with Amazon Redshift Parameter Groups</a>.</p> <p> Constraints: </p> <ul> <li>Must be 1 to 255 alphanumeric characters or hyphens.</li> <li>First character must be a letter.</li> <li>Cannot end with a hyphen or contain two consecutive hyphens.</li> </ul>',
        'RestoreFromClusterSnapshotMessage$PreferredMaintenanceWindow' => '<p> The weekly time range (in UTC] during which automated cluster maintenance can occur. </p> <p> Format: <code>ddd:hh24:mi-ddd:hh24:mi</code> </p> <p> Default: The value selected for the cluster from which the snapshot was taken. For more information about the time blocks for each region, see <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/working-with-clusters.html#rs-maintenance-windows">Maintenance Windows</a> in Amazon Redshift Cluster Management Guide. </p> <p>Valid Days: Mon | Tue | Wed | Thu | Fri | Sat | Sun</p> <p>Constraints: Minimum 30-minute window.</p>',
        'RestoreFromClusterSnapshotMessage$KmsKeyId' => '<p>The AWS Key Management Service (KMS] key ID of the encryption key that you want to use to encrypt data in the cluster that you restore from a shared snapshot.</p>',
        'RestoreStatus$Status' => '<p> The status of the restore action. Returns starting, restoring, completed, or failed. </p>',
        'RevokeClusterSecurityGroupIngressMessage$ClusterSecurityGroupName' => '<p> The name of the security Group from which to revoke the ingress rule. </p>',
        'RevokeClusterSecurityGroupIngressMessage$CIDRIP' => '<p> The IP range for which to revoke access. This range must be a valid Classless Inter-Domain Routing (CIDR] block of IP addresses. If <code>CIDRIP</code> is specified, <code>EC2SecurityGroupName</code> and <code>EC2SecurityGroupOwnerId</code> cannot be provided. </p>',
        'RevokeClusterSecurityGroupIngressMessage$EC2SecurityGroupName' => '<p> The name of the EC2 Security Group whose access is to be revoked. If <code>EC2SecurityGroupName</code> is specified, <code>EC2SecurityGroupOwnerId</code> must also be provided and <code>CIDRIP</code> cannot be provided. </p>',
        'RevokeClusterSecurityGroupIngressMessage$EC2SecurityGroupOwnerId' => '<p> The AWS account number of the owner of the security group specified in the <code>EC2SecurityGroupName</code> parameter. The AWS access key ID is not an acceptable value. If <code>EC2SecurityGroupOwnerId</code> is specified, <code>EC2SecurityGroupName</code> must also be provided. and <code>CIDRIP</code> cannot be provided. </p> <p>Example: <code>111122223333</code></p>',
        'RevokeSnapshotAccessMessage$SnapshotIdentifier' => '<p> The identifier of the snapshot that the account can no longer access. </p>',
        'RevokeSnapshotAccessMessage$SnapshotClusterIdentifier' => '<p> The identifier of the cluster the snapshot was created from. This parameter is required if your IAM user has a policy containing a snapshot resource element that specifies anything other than * for the cluster name. </p>',
        'RevokeSnapshotAccessMessage$AccountWithRestoreAccess' => '<p> The identifier of the AWS customer account that can no longer restore the specified snapshot. </p>',
        'RotateEncryptionKeyMessage$ClusterIdentifier' => '<p> The unique identifier of the cluster that you want to rotate the encryption keys for. </p> <p> Constraints: Must be the name of valid cluster that has encryption enabled. </p>',
        'Snapshot$SnapshotIdentifier' => '<p> The snapshot identifier that is provided in the request. </p>',
        'Snapshot$ClusterIdentifier' => '<p> The identifier of the cluster for which the snapshot was taken. </p>',
        'Snapshot$Status' => '<p> The snapshot status. The value of the status depends on the API operation used. <ul> <li> <a>CreateClusterSnapshot</a> and <a>CopyClusterSnapshot</a> returns status as "creating". </li> <li> <a>DescribeClusterSnapshots</a> returns status as "creating", "available", "final snapshot", or "failed".</li> <li> <a>DeleteClusterSnapshot</a> returns status as "deleted".</li> </ul> </p>',
        'Snapshot$AvailabilityZone' => '<p> The Availability Zone in which the cluster was created. </p>',
        'Snapshot$MasterUsername' => '<p> The master user name for the cluster. </p>',
        'Snapshot$ClusterVersion' => '<p> The version ID of the Amazon Redshift engine that is running on the cluster. </p>',
        'Snapshot$SnapshotType' => '<p> The snapshot type. Snapshots created using <a>CreateClusterSnapshot</a> and <a>CopyClusterSnapshot</a> will be of type "manual". </p>',
        'Snapshot$NodeType' => '<p>The node type of the nodes in the cluster.</p>',
        'Snapshot$DBName' => '<p>The name of the database that was created when the cluster was created. </p>',
        'Snapshot$VpcId' => '<p>The VPC identifier of the cluster if the snapshot is from a cluster in a VPC. Otherwise, this field is not in the output.</p>',
        'Snapshot$KmsKeyId' => '<p>The AWS Key Management Service (KMS] key ID of the encryption key that was used to encrypt data in the cluster from which the snapshot was taken.</p>',
        'Snapshot$OwnerAccount' => '<p> For manual snapshots, the AWS customer account used to create or copy the snapshot. For automatic snapshots, the owner of the cluster. The owner can perform all snapshot actions, such as sharing a manual snapshot. </p>',
        'Snapshot$SourceRegion' => '<p> The source region from which the snapshot was copied. </p>',
        'SnapshotMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'SourceIdsList$member' => NULL,
        'Subnet$SubnetIdentifier' => '<p> The identifier of the subnet. </p>',
        'Subnet$SubnetStatus' => '<p> The status of the subnet. </p>',
        'SubnetIdentifierList$member' => NULL,
        'Tag$Key' => '<p>The key, or name, for the resource tag.</p>',
        'Tag$Value' => '<p>The value for the resource tag.</p>',
        'TagKeyList$member' => NULL,
        'TagValueList$member' => NULL,
        'TaggedResource$ResourceName' => '<p>The Amazon Resource Name (ARN] with which the tag is associated. For example, <code>arn:aws:redshift:us-east-1:123456789:cluster:t1</code>.</p>',
        'TaggedResource$ResourceType' => '<p> The type of resource with which the tag is associated. Valid resource types are: <ul> <li>Cluster</li> <li>CIDR/IP</li> <li>EC2 security group</li> <li>Snapshot</li> <li>Cluster security group</li> <li>Subnet group</li> <li>HSM connection</li> <li>HSM certificate</li> <li>Parameter group</li> </ul> </p> <p> For more information about Amazon Redshift resource types and constructing ARNs, go to <a href="http://docs.aws.amazon.com/redshift/latest/mgmt/constructing-redshift-arn.html">Constructing an Amazon Redshift Amazon Resource Name (ARN]</a> in the Amazon Redshift Cluster Management Guide. </p>',
        'TaggedResourceListMessage$Marker' => '<p> A value that indicates the starting point for the next set of response records in a subsequent request. If a value is returned in a response, you can retrieve the next set of records by providing this returned marker value in the <code>Marker</code> parameter and retrying the command. If the <code>Marker</code> field is empty, all response records have been retrieved for the request. </p>',
        'VpcSecurityGroupIdList$member' => NULL,
        'VpcSecurityGroupMembership$VpcSecurityGroupId' => NULL,
        'VpcSecurityGroupMembership$Status' => NULL,
      ],
    ],
    'Subnet' => [
      'base' => '<p> Describes a subnet. </p>',
      'refs' => [
        'SubnetList$member' => NULL,
      ],
    ],
    'SubnetAlreadyInUse' => [
      'base' => '<p> A specified subnet is already in use by another cluster. </p>',
      'refs' => [],
    ],
    'SubnetIdentifierList' => [
      'base' => NULL,
      'refs' => [
        'CreateClusterSubnetGroupMessage$SubnetIds' => '<p> An array of VPC subnet IDs. A maximum of 20 subnets can be modified in a single request. </p>',
        'ModifyClusterSubnetGroupMessage$SubnetIds' => '<p> An array of VPC subnet IDs. A maximum of 20 subnets can be modified in a single request. </p>',
      ],
    ],
    'SubnetList' => [
      'base' => NULL,
      'refs' => [
        'ClusterSubnetGroup$Subnets' => '<p> A list of the VPC <a>Subnet</a> elements. </p>',
      ],
    ],
    'SubscriptionAlreadyExistFault' => [
      'base' => '<p>There is already an existing event notification subscription with the specified name.</p>',
      'refs' => [],
    ],
    'SubscriptionCategoryNotFoundFault' => [
      'base' => '<p>The value specified for the event category was not one of the allowed values, or it specified a category that does not apply to the specified source type. The allowed values are Configuration, Management, Monitoring, and Security.</p>',
      'refs' => [],
    ],
    'SubscriptionEventIdNotFoundFault' => [
      'base' => '<p>An Amazon Redshift event with the specified event ID does not exist.</p>',
      'refs' => [],
    ],
    'SubscriptionNotFoundFault' => [
      'base' => '<p>An Amazon Redshift event notification subscription with the specified name does not exist.</p>',
      'refs' => [],
    ],
    'SubscriptionSeverityNotFoundFault' => [
      'base' => '<p>The value specified for the event severity was not one of the allowed values, or it specified a severity that does not apply to the specified source type. The allowed values are ERROR and INFO.</p>',
      'refs' => [],
    ],
    'TStamp' => [
      'base' => NULL,
      'refs' => [
        'Cluster$ClusterCreateTime' => '<p> The date and time that the cluster was created. </p>',
        'DescribeClusterSnapshotsMessage$StartTime' => '<p> A value that requests only snapshots created at or after the specified time. The time value is specified in ISO 8601 format. For more information about ISO 8601, go to the <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO8601 Wikipedia page.</a> </p> <p>Example: <code>2012-07-16T18:00:00Z</code></p>',
        'DescribeClusterSnapshotsMessage$EndTime' => '<p> A time value that requests only snapshots created at or before the specified time. The time value is specified in ISO 8601 format. For more information about ISO 8601, go to the <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO8601 Wikipedia page.</a> </p> <p>Example: <code>2012-07-16T18:00:00Z</code></p>',
        'DescribeEventsMessage$StartTime' => '<p> The beginning of the time interval to retrieve events for, specified in ISO 8601 format. For more information about ISO 8601, go to the <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO8601 Wikipedia page.</a> </p> <p>Example: <code>2009-07-08T18:00Z</code></p>',
        'DescribeEventsMessage$EndTime' => '<p> The end of the time interval for which to retrieve events, specified in ISO 8601 format. For more information about ISO 8601, go to the <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO8601 Wikipedia page.</a> </p> <p>Example: <code>2009-07-08T18:00Z</code></p>',
        'Event$Date' => '<p> The date and time of the event. </p>',
        'EventSubscription$SubscriptionCreationTime' => '<p>The date and time the Amazon Redshift event notification subscription was created.</p>',
        'LoggingStatus$LastSuccessfulDeliveryTime' => '<p> The last time when logs were delivered. </p>',
        'LoggingStatus$LastFailureTime' => '<p> The last time when logs failed to be delivered. </p>',
        'ReservedNode$StartTime' => '<p> The time the reservation started. You purchase a reserved node offering for a duration. This is the start time of that duration. </p>',
        'Snapshot$SnapshotCreateTime' => '<p> The time (UTC] when Amazon Redshift began the snapshot. A snapshot contains a copy of the cluster data as of this exact time. </p>',
        'Snapshot$ClusterCreateTime' => '<p> The time (UTC] when the cluster was originally created. </p>',
      ],
    ],
    'Tag' => [
      'base' => '<p>A tag consisting of a name/value pair for a resource.</p>',
      'refs' => [
        'TagList$member' => NULL,
        'TaggedResource$Tag' => '<p>The tag for the resource. </p>',
      ],
    ],
    'TagKeyList' => [
      'base' => NULL,
      'refs' => [
        'DeleteTagsMessage$TagKeys' => '<p>The tag key that you want to delete.</p>',
        'DescribeClusterParameterGroupsMessage$TagKeys' => '<p>A tag key or keys for which you want to return all matching cluster parameter groups that are associated with the specified key or keys. For example, suppose that you have parameter groups that are tagged with keys called <code>owner</code> and <code>environment</code>. If you specify both of these tag keys in the request, Amazon Redshift returns a response with the parameter groups that have either or both of these tag keys associated with them.</p>',
        'DescribeClusterSecurityGroupsMessage$TagKeys' => '<p>A tag key or keys for which you want to return all matching cluster security groups that are associated with the specified key or keys. For example, suppose that you have security groups that are tagged with keys called <code>owner</code> and <code>environment</code>. If you specify both of these tag keys in the request, Amazon Redshift returns a response with the security groups that have either or both of these tag keys associated with them.</p>',
        'DescribeClusterSnapshotsMessage$TagKeys' => '<p>A tag key or keys for which you want to return all matching cluster snapshots that are associated with the specified key or keys. For example, suppose that you have snapshots that are tagged with keys called <code>owner</code> and <code>environment</code>. If you specify both of these tag keys in the request, Amazon Redshift returns a response with the snapshots that have either or both of these tag keys associated with them.</p>',
        'DescribeClusterSubnetGroupsMessage$TagKeys' => '<p>A tag key or keys for which you want to return all matching cluster subnet groups that are associated with the specified key or keys. For example, suppose that you have subnet groups that are tagged with keys called <code>owner</code> and <code>environment</code>. If you specify both of these tag keys in the request, Amazon Redshift returns a response with the subnet groups that have either or both of these tag keys associated with them.</p>',
        'DescribeClustersMessage$TagKeys' => '<p>A tag key or keys for which you want to return all matching clusters that are associated with the specified key or keys. For example, suppose that you have clusters that are tagged with keys called <code>owner</code> and <code>environment</code>. If you specify both of these tag keys in the request, Amazon Redshift returns a response with the clusters that have either or both of these tag keys associated with them.</p>',
        'DescribeHsmClientCertificatesMessage$TagKeys' => '<p>A tag key or keys for which you want to return all matching HSM client certificates that are associated with the specified key or keys. For example, suppose that you have HSM client certificates that are tagged with keys called <code>owner</code> and <code>environment</code>. If you specify both of these tag keys in the request, Amazon Redshift returns a response with the HSM client certificates that have either or both of these tag keys associated with them.</p>',
        'DescribeHsmConfigurationsMessage$TagKeys' => '<p>A tag key or keys for which you want to return all matching HSM configurations that are associated with the specified key or keys. For example, suppose that you have HSM configurations that are tagged with keys called <code>owner</code> and <code>environment</code>. If you specify both of these tag keys in the request, Amazon Redshift returns a response with the HSM configurations that have either or both of these tag keys associated with them.</p>',
        'DescribeTagsMessage$TagKeys' => '<p>A tag key or keys for which you want to return all matching resources that are associated with the specified key or keys. For example, suppose that you have resources tagged with keys called <code>owner</code> and <code>environment</code>. If you specify both of these tag keys in the request, Amazon Redshift returns a response with all resources that have either or both of these tag keys associated with them.</p>',
      ],
    ],
    'TagLimitExceededFault' => [
      'base' => '<p> The request exceeds the limit of 10 tags for the resource. </p>',
      'refs' => [],
    ],
    'TagList' => [
      'base' => NULL,
      'refs' => [
        'Cluster$Tags' => '<p>The list of tags for the cluster.</p>',
        'ClusterParameterGroup$Tags' => '<p>The list of tags for the cluster parameter group.</p>',
        'ClusterSecurityGroup$Tags' => '<p>The list of tags for the cluster security group.</p>',
        'ClusterSubnetGroup$Tags' => '<p>The list of tags for the cluster subnet group.</p>',
        'CreateClusterMessage$Tags' => '<p>A list of tag instances.</p>',
        'CreateClusterParameterGroupMessage$Tags' => '<p>A list of tag instances.</p>',
        'CreateClusterSecurityGroupMessage$Tags' => '<p>A list of tag instances.</p>',
        'CreateClusterSnapshotMessage$Tags' => '<p>A list of tag instances.</p>',
        'CreateClusterSubnetGroupMessage$Tags' => '<p>A list of tag instances.</p>',
        'CreateEventSubscriptionMessage$Tags' => '<p>A list of tag instances.</p>',
        'CreateHsmClientCertificateMessage$Tags' => '<p>A list of tag instances.</p>',
        'CreateHsmConfigurationMessage$Tags' => '<p>A list of tag instances.</p>',
        'CreateTagsMessage$Tags' => '<p> One or more name/value pairs to add as tags to the specified resource. Each tag name is passed in with the parameter <code>tag-key</code> and the corresponding value is passed in with the parameter <code>tag-value</code>. The <code>tag-key</code> and <code>tag-value</code> parameters are separated by a colon (:]. Separate multiple tags with a space. For example, <code>--tags "tag-key"="owner":"tag-value"="admin" "tag-key"="environment":"tag-value"="test" "tag-key"="version":"tag-value"="1.0"</code>. </p>',
        'EC2SecurityGroup$Tags' => '<p>The list of tags for the EC2 security group.</p>',
        'EventSubscription$Tags' => '<p>The list of tags for the event subscription.</p>',
        'HsmClientCertificate$Tags' => '<p>The list of tags for the HSM client certificate.</p>',
        'HsmConfiguration$Tags' => '<p>The list of tags for the HSM configuration.</p>',
        'IPRange$Tags' => '<p>The list of tags for the IP range.</p>',
        'Snapshot$Tags' => '<p>The list of tags for the cluster snapshot.</p>',
      ],
    ],
    'TagValueList' => [
      'base' => NULL,
      'refs' => [
        'DescribeClusterParameterGroupsMessage$TagValues' => '<p>A tag value or values for which you want to return all matching cluster parameter groups that are associated with the specified tag value or values. For example, suppose that you have parameter groups that are tagged with values called <code>admin</code> and <code>test</code>. If you specify both of these tag values in the request, Amazon Redshift returns a response with the parameter groups that have either or both of these tag values associated with them.</p>',
        'DescribeClusterSecurityGroupsMessage$TagValues' => '<p>A tag value or values for which you want to return all matching cluster security groups that are associated with the specified tag value or values. For example, suppose that you have security groups that are tagged with values called <code>admin</code> and <code>test</code>. If you specify both of these tag values in the request, Amazon Redshift returns a response with the security groups that have either or both of these tag values associated with them.</p>',
        'DescribeClusterSnapshotsMessage$TagValues' => '<p>A tag value or values for which you want to return all matching cluster snapshots that are associated with the specified tag value or values. For example, suppose that you have snapshots that are tagged with values called <code>admin</code> and <code>test</code>. If you specify both of these tag values in the request, Amazon Redshift returns a response with the snapshots that have either or both of these tag values associated with them.</p>',
        'DescribeClusterSubnetGroupsMessage$TagValues' => '<p>A tag value or values for which you want to return all matching cluster subnet groups that are associated with the specified tag value or values. For example, suppose that you have subnet groups that are tagged with values called <code>admin</code> and <code>test</code>. If you specify both of these tag values in the request, Amazon Redshift returns a response with the subnet groups that have either or both of these tag values associated with them.</p>',
        'DescribeClustersMessage$TagValues' => '<p>A tag value or values for which you want to return all matching clusters that are associated with the specified tag value or values. For example, suppose that you have clusters that are tagged with values called <code>admin</code> and <code>test</code>. If you specify both of these tag values in the request, Amazon Redshift returns a response with the clusters that have either or both of these tag values associated with them.</p>',
        'DescribeHsmClientCertificatesMessage$TagValues' => '<p>A tag value or values for which you want to return all matching HSM client certificates that are associated with the specified tag value or values. For example, suppose that you have HSM client certificates that are tagged with values called <code>admin</code> and <code>test</code>. If you specify both of these tag values in the request, Amazon Redshift returns a response with the HSM client certificates that have either or both of these tag values associated with them.</p>',
        'DescribeHsmConfigurationsMessage$TagValues' => '<p>A tag value or values for which you want to return all matching HSM configurations that are associated with the specified tag value or values. For example, suppose that you have HSM configurations that are tagged with values called <code>admin</code> and <code>test</code>. If you specify both of these tag values in the request, Amazon Redshift returns a response with the HSM configurations that have either or both of these tag values associated with them.</p>',
        'DescribeTagsMessage$TagValues' => '<p>A tag value or values for which you want to return all matching resources that are associated with the specified value or values. For example, suppose that you have resources tagged with values called <code>admin</code> and <code>test</code>. If you specify both of these tag values in the request, Amazon Redshift returns a response with all resources that have either or both of these tag values associated with them.</p>',
      ],
    ],
    'TaggedResource' => [
      'base' => '<p>A tag and its associated resource. </p>',
      'refs' => [
        'TaggedResourceList$member' => NULL,
      ],
    ],
    'TaggedResourceList' => [
      'base' => NULL,
      'refs' => [
        'TaggedResourceListMessage$TaggedResources' => '<p> A list of tags with their associated resources. </p>',
      ],
    ],
    'TaggedResourceListMessage' => [
      'base' => '<p> Contains the output from the <code>DescribeTags</code> action. </p>',
      'refs' => [],
    ],
    'UnauthorizedOperation' => [
      'base' => '<p> Your account is not authorized to perform the requested operation. </p>',
      'refs' => [],
    ],
    'UnknownSnapshotCopyRegionFault' => [
      'base' => '<p> The specified region is incorrect or does not exist. </p>',
      'refs' => [],
    ],
    'UnsupportedOptionFault' => [
      'base' => '<p> A request option was specified that is not supported. </p>',
      'refs' => [],
    ],
    'VpcSecurityGroupIdList' => [
      'base' => NULL,
      'refs' => [
        'CreateClusterMessage$VpcSecurityGroupIds' => '<p>A list of Virtual Private Cloud (VPC] security groups to be associated with the cluster.</p> <p>Default: The default VPC security group is associated with the cluster.</p>',
        'ModifyClusterMessage$VpcSecurityGroupIds' => '<p> A list of virtual private cloud (VPC] security groups to be associated with the cluster. </p>',
        'RestoreFromClusterSnapshotMessage$VpcSecurityGroupIds' => '<p> A list of Virtual Private Cloud (VPC] security groups to be associated with the cluster. </p> <p> Default: The default VPC security group is associated with the cluster. </p> <p> VPC security groups only apply to clusters in VPCs. </p>',
      ],
    ],
    'VpcSecurityGroupMembership' => [
      'base' => '<p>Describes the members of a VPC security group.</p>',
      'refs' => [
        'VpcSecurityGroupMembershipList$member' => NULL,
      ],
    ],
    'VpcSecurityGroupMembershipList' => [
      'base' => NULL,
      'refs' => [
        'Cluster$VpcSecurityGroups' => '<p> A list of Virtual Private Cloud (VPC] security groups that are associated with the cluster. This parameter is returned only if the cluster is in a VPC. </p>',
      ],
    ],
    'AuthorizeClusterSecurityGroupIngressResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AuthorizeSnapshotAccessResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CopyClusterSnapshotResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateClusterResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateClusterParameterGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateClusterSecurityGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateClusterSnapshotResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateClusterSubnetGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateEventSubscriptionResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateHsmClientCertificateResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateHsmConfigurationResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteClusterResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteClusterSnapshotResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeDefaultClusterParametersResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DisableSnapshotCopyResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EnableSnapshotCopyResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyClusterResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyClusterSubnetGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyEventSubscriptionResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifySnapshotCopyRetentionPeriodResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PurchaseReservedNodeOfferingResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RebootClusterResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RestoreFromClusterSnapshotResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RevokeClusterSecurityGroupIngressResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RevokeSnapshotAccessResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RotateEncryptionKeyResult' => [
      'base' => NULL,
      'refs' => [],
    ],
  ],
];
