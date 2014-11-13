<?php


class Webtise_WhitmoreandWhite_Block_Featured_Slider extends Mage_Core_Block_Template
{

	public function getProducts()
	{
		$catId = Mage::getStoreConfig('whitmoreandwhite/home_group/featured_cat_id',Mage::app()->getStore());

		$category = Mage::getModel('catalog/category')->load($catId);

		$products = Mage::getModel('catalog/product')->getCollection();
		Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
		Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products); 
		
		$products->addCategoryFilter($category);
		
		return $products;

	}
}