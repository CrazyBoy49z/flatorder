<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2015 MODX Systems, LLC (hello@modx.com) 

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.',
    'readme' => '# FlatOrder

A MODX extra to add a Resources Based "Shopping Cart" Table and/or Product Grid to your site.

After Install visit: https://github.com/dubrod/flatorder
',
    'changelog' => '# FlatOrder 1.0.2
- Automatically setting System Settings after resource Install

# FlatOrder 1.0.0
- Basic Options
- 3 Column grid
- "Shopping Cart" Table
- Confirmation screen
- Email Order Submission
',
    'requires' => 
    array (
      'migx' => '>=2.0.0',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '2755ecee29c3c500f27149ef84163385',
      'native_key' => 'flatorder',
      'filename' => 'modNamespace/3ac96eb78560f740763cad05eab6658d.vehicle',
      'namespace' => 'flatorder',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '569a730520254ad31f8eba29500f4b33',
      'native_key' => 'flatorder.variant_one',
      'filename' => 'modSystemSetting/78ea381157af25c6aea85f98ec7a991b.vehicle',
      'namespace' => 'flatorder',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '10560b16f4773ab82f0d5ee94ddc67f9',
      'native_key' => 'flatorder.variant_two',
      'filename' => 'modSystemSetting/2b445531b632ee20da0b591ac4f74423.vehicle',
      'namespace' => 'flatorder',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ef32e69017567b2f736761bb1c3a302d',
      'native_key' => 'flatorder.sending_subject',
      'filename' => 'modSystemSetting/358b6a20c000779851e99bcb1722a685.vehicle',
      'namespace' => 'flatorder',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c1e06e75df09b214e57ffacb38fbe46b',
      'native_key' => 'flatorder.sending_name',
      'filename' => 'modSystemSetting/b19770416e91923285b7b51e95bf099b.vehicle',
      'namespace' => 'flatorder',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7055fb2f4c3b069f1cb37516a60b9385',
      'native_key' => 'flatorder.sending_to',
      'filename' => 'modSystemSetting/47782529bc26462839700ae247c197d3.vehicle',
      'namespace' => 'flatorder',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '71c5d2cbb2d2e55983c01393db9a5d5c',
      'native_key' => 'flatorder.sending_id',
      'filename' => 'modSystemSetting/250ad6f3e9a04e891d3ce190326d8696.vehicle',
      'namespace' => 'flatorder',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a3427fc089efbedcf76a4fb61f41c43a',
      'native_key' => 'flatorder.catalog_id',
      'filename' => 'modSystemSetting/9a90e9b922a213faf3c73eaaf956d72a.vehicle',
      'namespace' => 'flatorder',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0cd665e7cc3599907a5a01389fcf8cc8',
      'native_key' => 'flatorder.checkout_id',
      'filename' => 'modSystemSetting/1a9076346c434267b714bfc3aa77072c.vehicle',
      'namespace' => 'flatorder',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eb1cedb6c033d6098bbcc58530418d3a',
      'native_key' => 'flatorder.confirmation_id',
      'filename' => 'modSystemSetting/2a7828571bbb0944b52bb84f2961f143.vehicle',
      'namespace' => 'flatorder',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '7ef8df158bbbe0ea750cc68860e8efc6',
      'native_key' => NULL,
      'filename' => 'modCategory/2dafbc2cb6601c58638136bba4d446b9.vehicle',
      'namespace' => 'flatorder',
    ),
  ),
);