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

After Install:
',
    'changelog' => '# FlatOrder 1.0.0
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
      'guid' => '77da3376fbac0eb9dd29433c43003ab5',
      'native_key' => 'flatorder',
      'filename' => 'modNamespace/06e77d22d5bb5a9de3cf096c2fd7dfb6.vehicle',
      'namespace' => 'flatorder',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f86ee7f5a53015df0e1860ed320d00c5',
      'native_key' => 'flatorder.sending_subject',
      'filename' => 'modSystemSetting/f4fc52cc1e665f10a2a1a9588f92e0cc.vehicle',
      'namespace' => 'flatorder',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4e60d92d1d31b7904011fde525ebbd7b',
      'native_key' => 'flatorder.sending_name',
      'filename' => 'modSystemSetting/73d2d9f9f9c8a0c33a90b69a23f3053a.vehicle',
      'namespace' => 'flatorder',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '20019de4833387c51ca1b26e12a90900',
      'native_key' => 'flatorder.sending_to',
      'filename' => 'modSystemSetting/fa711f160c08f9b59c559882ea3ede85.vehicle',
      'namespace' => 'flatorder',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9c30512c05382b667efa8657a31ee3a8',
      'native_key' => 'flatorder.sending_id',
      'filename' => 'modSystemSetting/ff34b7d6216ef274940e5ee5e91e7c4d.vehicle',
      'namespace' => 'flatorder',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '811a5bed3924a6e0985ab9789c0fc931',
      'native_key' => 'flatorder.catalog_id',
      'filename' => 'modSystemSetting/33d5c700c924d6b1fe21af00cdc62f6d.vehicle',
      'namespace' => 'flatorder',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a01dd92eada125fac4e6edfbf0522daa',
      'native_key' => 'flatorder.checkout_id',
      'filename' => 'modSystemSetting/106d0481b072b0376fe3128b8b5ca98c.vehicle',
      'namespace' => 'flatorder',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '71de6f5996d3bf1bcb20706c2cf80c3f',
      'native_key' => 'flatorder.confirmation_id',
      'filename' => 'modSystemSetting/82cc4fc3e6ad2d26da062d9cf1c776c6.vehicle',
      'namespace' => 'flatorder',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '51299e7f2490849c0bea6ac6c9ecdf4f',
      'native_key' => NULL,
      'filename' => 'modCategory/10139b114b31721410b7786635572985.vehicle',
      'namespace' => 'flatorder',
    ),
  ),
);