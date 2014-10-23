<?php return [
  'pagination' => [
    'ListDomains' => [
      'input_token' => 'NextToken',
      'output_token' => 'NextToken',
      'limit_key' => 'MaxNumberOfDomains',
      'result_key' => 'DomainNames',
    ],
    'Select' => [
      'input_token' => 'NextToken',
      'output_token' => 'NextToken',
      'result_key' => 'Items',
    ],
  ],
];
