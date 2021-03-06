<?php return [
  'pagination' => [
    'ListHealthChecks' => [
      'input_token' => 'Marker',
      'output_token' => 'NextMarker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'HealthChecks',
    ],
    'ListHostedZones' => [
      'input_token' => 'Marker',
      'output_token' => 'NextMarker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'HostedZones',
    ],
    'ListResourceRecordSets' => [
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'ResourceRecordSets',
      'input_token' => [
        'StartRecordName',
        'StartRecordType',
        'StartRecordIdentifier',
      ],
      'output_token' => [
        'NextRecordName',
        'NextRecordType',
        'NextRecordIdentifier',
      ],
    ],
  ],
];
