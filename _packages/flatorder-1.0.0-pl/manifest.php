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
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '979069d7160785708b0941cec7b8a798',
      'native_key' => 'flatorder',
      'filename' => 'modNamespace/89eba5e4527507b64b7de82fc065b285.vehicle',
      'namespace' => 'flatorder',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b3aed4713d0a68ac6740026daca0fc43',
      'native_key' => 'flatorder.sending_subject',
      'filename' => 'modSystemSetting/5cac3a98f0efdfeba4efa920b65c90a5.vehicle',
      'namespace' => 'flatorder',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd3f50bc0304a1d62601287e778ade472',
      'native_key' => 'flatorder.sending_name',
      'filename' => 'modSystemSetting/3c085d7e704cb974a16a4ac03fca72dc.vehicle',
      'namespace' => 'flatorder',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c6deca569e013326c3ba8ca9ee2317d7',
      'native_key' => 'flatorder.sending_to',
      'filename' => 'modSystemSetting/0d66536e79c156cb3fa4f132cb7e5543.vehicle',
      'namespace' => 'flatorder',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2e6fa4027038833cd2abccb99c044264',
      'native_key' => 'flatorder.sending_id',
      'filename' => 'modSystemSetting/d4459988cacfc4d1543f210f0c7bdb26.vehicle',
      'namespace' => 'flatorder',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '44033ca21a8de3e72d53b09fc583d895',
      'native_key' => 'flatorder.catalog_id',
      'filename' => 'modSystemSetting/c0b67a15452a62207a63a51bde19df43.vehicle',
      'namespace' => 'flatorder',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '634de6bde8ae55785d0c00021752d6f9',
      'native_key' => 'flatorder.checkout_id',
      'filename' => 'modSystemSetting/f7cd42d82b0662b474ca38ed37db8f88.vehicle',
      'namespace' => 'flatorder',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4fca332a27db5061cb8cb757177b322f',
      'native_key' => 'flatorder.confirmation_id',
      'filename' => 'modSystemSetting/60d5a99d9ca5093d3c44f99de6cbb006.vehicle',
      'namespace' => 'flatorder',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'c391e76c567d87bee120406af3b9006a',
      'native_key' => NULL,
      'filename' => 'modCategory/67ffb87d3389250931c062d1f23a4cdb.vehicle',
      'namespace' => 'flatorder',
    ),
  ),
);