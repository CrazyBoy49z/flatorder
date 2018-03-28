<?php
/* FlatOrder Products Json Feed
*  Wayne Roddy March 2018 ( wayne@modx.com )
*  Render Json Feed to Control a Product Grid
*  Just Supply which Catalog to retrieve
*  [[FlatOrderProductsJson? id=`2`]]
*  [[FlatOrderProductsJson? id=`[[++flatorder.catalog_id]]`]]
*/

$output = "";
$cards = "";

//get Product Container ID
$catalogId = $modx->getOption('id', $scriptProperties);
if(!$catalogId){return false;}

//Get Catalog Products except containers and hidden products
$catalog = $modx->getCollection('modResource', array('published'=>'1','hidemenu'=>'0','isfolder'=>'0','parent'=>$catalogId,'class_key'=>'modDocument'));

foreach($catalog as $product) {
    $image = $product->getTVValue('fo_image');
    if(!$image){continue;}

    $id = "FO-".$product->get('id');
    $uniqueId = $product->getTVValue('fo_id');
    if($uniqueId){$id = $uniqueId;}

    $title = $product->get('pagetitle');
    $introtext = $product->get('introtext');
    $published = $product->get('publishedon');
    $vendor = $product->getTVValue('fo_vendor');
    $type = $product->getTVValue('fo_type');

    $tagsTV = explode(",",$product->getTVValue('fo_tags'));
    $tags = [];
    foreach($tagsTV as $t) {
        array_push($tags, $t);
    }

    $variants = $product->getTVValue('fo_variants');
    $variantArray = json_decode($variants);
    $variantCount = count($variantArray);

    //default options
    $options = '[{"name":"Title","position":1,"values":["Default Title"]}]';

    if(intval($variantCount) > 2){

        $optionValues = [];
        foreach($variantArray as $v){
            array_push($optionValues, $v->option1);
        }

        $optionValuesTwo = [];
        foreach($variantArray as $v){
            array_push($optionValuesTwo, $v->option2);
        }

        $optionValues = array_unique($optionValues);
        $optionValuesTwo = array_unique($optionValuesTwo);

        $options = '[
            {"name":"'.$modx->getOption('option1_name', $scriptProperties).'","position":1,"values":'.json_encode($optionValues).'},
            {"name":"'.$modx->getOption('option2_name', $scriptProperties).'","position":2,"values":'.json_encode($optionValuesTwo).'},
        ]';
    }

    $cards .= $modx->parseChunk('fo-product-json-tpl',array(
        'id' => $id,
        'title' => $title,
        'introtext' => htmlspecialchars($introtext),
        'published' => $published,
        'vendor' => $vendor,
        'type' => $type,
        'tags' => json_encode($tags),
        'variants' => $variants,
        'options' => $options,
        'image' => $image
    ));

} // foreach $catalog

$cards = rtrim($cards,",");
$output = '{"products":['.$cards.']}';
return $output;
