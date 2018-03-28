<?php
if (!$object->xpdo) return false;
/** @var modX $modx */
$modx =& $object->xpdo;
$modx->log(modX::LOG_LEVEL_ERROR, 'Hold On. MODX is getting creative...');

//find our checkout page
$cp_id = "";
$checkoutPageQuery = $modx->getCollection('modResource', array('alias'=>'flatorder-checkout'));
foreach($checkoutPageQuery as $cp) {$cp_id = $cp->get('id');}

if($cp_id){
  $modx->log(modX::LOG_LEVEL_ERROR,'checkout page located');

  //set checkout ID system setting
  $checkoutSetting = $modx->getObject('modSystemSetting', array('key' => 'flatorder.checkout_id'));
  if ($checkoutSetting) {
      $checkoutSetting->set('value',$cp_id);
      $checkoutSetting->save();
  }
}

//find our confirmation page
$conf_id = "";
$confirmPageQuery = $modx->getCollection('modResource', array('alias'=>'flatorder-confirmation'));
foreach($confirmPageQuery as $cf) {$conf_id = $cf->get('id');}

if($conf_id){
  $modx->log(modX::LOG_LEVEL_ERROR,'confirmation page located');

  //set checkout ID system setting
  $confirmSetting = $modx->getObject('modSystemSetting', array('key' => 'flatorder.confirmation_id'));
  if ($confirmSetting) {
      $confirmSetting->set('value',$conf_id);
      $confirmSetting->save();
  }
}

//find our sending page
$send_id = "";
$sendPageQuery = $modx->getCollection('modResource', array('alias'=>'flatorder-send'));
foreach($sendPageQuery as $cf) {$send_id = $cf->get('id');}

if($send_id){
  $modx->log(modX::LOG_LEVEL_ERROR,'sending script located');

  //set checkout ID system setting
  $sendSetting = $modx->getObject('modSystemSetting', array('key' => 'flatorder.sending_id'));
  if ($sendSetting) {
      $sendSetting->set('value',$send_id);
      $sendSetting->save();
  }
}

$modx->log(modX::LOG_LEVEL_ERROR,'DONE creating settings for you. Your Welcome.');
$modx->log(modX::LOG_LEVEL_ERROR,'Your Welcome.');

return true;
