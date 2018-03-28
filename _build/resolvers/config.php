<?php
if (!$object->xpdo) return false;
/** @var modX $modx */
$modx =& $object->xpdo;
$modx->log(modX::LOG_LEVEL_ERROR, 'Resolver got called');

//find our checkout page
$cp_id = "";
$checkoutPageQuery = $modx->getCollection('modResource', array('alias'=>'products'));
foreach($checkoutPageQuery as $cp) {
    $cp_id = $cp->get('id');
}
if($cp_id){$modx->log(modX::LOG_LEVEL_ERROR,'checkout id: ' . $cp_id);}

/*set checkout ID system setting
$checkoutSetting = $modx->getObject('modSystemSetting', array('key' => 'flatorder.checkout_id'));
if ($checkoutSetting) {
    $checkoutSetting->set('value','99');
    $checkoutSetting->save();
}
*/

return true;
