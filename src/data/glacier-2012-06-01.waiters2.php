<?php return [
  'version' => 2,
  'waiters' => [
    'VaultExists' => [
      'operation' => 'DescribeVault',
      'delay' => 3,
      'maxAttempts' => 15,
      'acceptors' => [
        [
          'state' => 'success',
          'matcher' => 'status',
          'expected' => 200,
        ],
        [
          'state' => 'retry',
          'matcher' => 'error',
          'expected' => 'ResourceNotFoundException',
        ],
      ],
    ],
    'VaultNotExists' => [
      'operation' => 'DescribeVault',
      'delay' => 3,
      'maxAttempts' => 15,
      'acceptors' => [
        [
          'state' => 'retry',
          'matcher' => 'status',
          'expected' => 200,
        ],
        [
          'state' => 'success',
          'matcher' => 'error',
          'expected' => 'ResourceNotFoundException',
        ],
      ],
    ],
  ],
];
