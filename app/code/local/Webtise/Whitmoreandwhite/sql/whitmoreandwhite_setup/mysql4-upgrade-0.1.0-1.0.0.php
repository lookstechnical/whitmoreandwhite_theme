<?php

$cats =  Mage::getModel('catalog/category')->getCollection();

foreach($cats as $c){

	$c->setData('is_anchor',true);
	$c->save();
}