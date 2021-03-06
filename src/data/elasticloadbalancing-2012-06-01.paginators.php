<?php return [
  'pagination' => [
    'DescribeInstanceHealth' => [
      'result_key' => 'InstanceStates',
    ],
    'DescribeLoadBalancerPolicies' => [
      'result_key' => 'PolicyDescriptions',
    ],
    'DescribeLoadBalancerPolicyTypes' => [
      'result_key' => 'PolicyTypeDescriptions',
    ],
    'DescribeLoadBalancers' => [
      'input_token' => 'Marker',
      'output_token' => 'NextMarker',
      'result_key' => 'LoadBalancerDescriptions',
    ],
  ],
];
