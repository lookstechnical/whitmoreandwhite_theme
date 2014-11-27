<?php


$installer = new Mage_Sales_Model_Mysql4_Setup('whitmoreandwhite_setup');

$pages_Array = array(
	
	array(
		'title'=>'Terms and Conditions',
		'identifier'=>'terms-and-conditions',
		'is_active'=> 1,
		'stores' => array(1),
		'content' => 'add me',
		'root_template' => 'onecolumn',
	),
	array(
		'title'=>'About Us',
		'identifier'=>'about-us',
		'is_active'=> 1,
		'stores' => array(1),
		'content' => 'add me',
		'root_template' => 'onecolumn',
	),
	array(
		'title'=>'Delivery',
		'identifier'=>'deliver',
		'is_active'=> 1,
		'stores' => array(1),
		'content' => 'add me',
		'root_template' => 'onecolumn',
	),
	array(
		'title'=>'Returns Policy',
		'identifier'=>'returns-policy',
		'is_active'=> 1,
		'stores' => array(1),
		'content' => 'add me',
		'root_template' => 'onecolumn',
	),
	array(
		'title'=>'Trade',
		'identifier'=>'trade',
		'is_active'=> 1,
		'stores' => array(1),
		'content' => 'add me',
		'root_template' => 'onecolumn',
	),
	array(
		'title'=>'Recipied',
		'identifier'=>'recipies',
		'is_active'=> 1,
		'stores' => array(1),
		'content' => 'add me',
		'root_template' => 'onecolumn',
	),
	array(
		'title'=>'Events',
		'identifier'=>'events',
		'is_active'=> 1,
		'stores' => array(1),
		'content' => 'add me',
		'root_template' => 'onecolumn',
	),
	array(
		'title'=>'Privacy Policy',
		'identifier'=>'privacy-policy',
		'is_active'=> 1,
		'stores' => array(1),
		'content' => 'add me',
		'root_template' => 'onecolumn',
	)
);

foreach($pages_Array as $cmsPage){
	Mage::getModel('cms/page')->setData($cmsPage)->save();
}


$installer->run("INSERT INTO `cms_block` ( `title`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`)
VALUES
	( 'Footer Links Company', 'footer_links_company', '<div class=\"footer_main\"><div class=\"footer_contact\">\r\n<p>17-19 Pensby Road, Heswall, CH60 7RA\r\n<br/>t. 0151 342 7799\r\n<br/>e. <a href=\"mailto:shop@whitmoreandwhite.co.uk\">shop@whitmoreandwhite.co.uk</a></p>\r\n<p>Opening Hours<br/>\r\nMon - Thurs 9am - 6pm, Fri - Sat 9am - 7pm, Sun 11am - 5pm\r\n</div>\r\n<div class=\"footer_links\">\r\n<ul>\r\n<li><a href=\"/hampers\">Hampers</a></li>\r\n<li><a href=\"/gifts\">Gifts</a></li>\r\n<li><a href=\"/food\">Food</a></li>\r\n<li><a href=\"/drink\">Drink</a></li>\r\n<li><a href=\"/food-hall\">Food HAll</a></li>\r\n</ul>\r\n<ul>\r\n<li><a href=\"/about-us\">About Us</a></li>\r\n<li><a href=\"/contact-us\">Contact Us</a></li>\r\n<li><a href=\"/delivery\">Delivery</a></li>\r\n<li><a href=\"/returns-policy\">Returns Policy</a></li>\r\n<li><a href=\"/trade\">trade</a></li>\r\n</ul>\r\n<ul>\r\n<li><a href=\"/blog\">Blog</a></li>\r\n<li><a href=\"/Recipies\">Recipies</a></li>\r\n<li><a href=\"Events\">Events</a></li>\r\n<li><a href=\"/terms-and-conditions\">T&nbsp;&amp; C\'s</a></li>\r\n<li><a href=\"/Privacy-policy\">Privacy Policy</a></li>\r\n</ul>\r\n</div>\r\n</div>', '2013-03-21 07:12:09', '2014-11-11 17:17:26', 1);
	
	
	INSERT INTO `cms_block` (`title`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`)
VALUES
	('CMS Menu', 'cms_menu', '<div class=\"block block-cms-menu\">\r\n    <div class=\"block-title\">\r\n        <strong><span>Company</span></strong>\r\n    </div>\r\n    <div class=\"block-content\">\r\n        <ul>\r\n            <li><a href=\"{{store url=\"about-magento-demo-store\"}}\"><span>About Us</span></a></li>\r\n            <li><a href=\"{{store url=\"contacts\"}}\"><span>Contact us</span></a></li>\r\n            <li><a href=\"{{store url=\"customer-service\"}}\"><span>Customer Service</span></a></li>\r\n            <li><a href=\"{{store url=\"privacy-policy-cookie-restriction-mode\"}}\"><span>Privacy Policy</span></a></li>\r\n        </ul>\r\n    </div>\r\n</div>\r\n\r\n', '2014-02-24 12:11:56', '2014-03-09 13:48:09', 1),
	('Checkout Help', 'checkout-help', '<h3>How can we help?</h3>\r\n<p>Call us on 0151 342 7799 or email us <br /><a href=\"mailto:shop@whitmoreandwhite.co.uk\">shop@whitmoreandwhite.co.uk</a></p>\r\n<h3>Delivery &amp; Returns</h3>\r\n<p>Free Local Delivery <br />delivery information <br />Returns policy</p>', '2014-11-25 13:26:46', '2014-11-25 13:26:46', 1),
	('Card types', 'card-types', 'We accept <img src=\"{{media url=\"wysiwyg/cards.png\"}}\" alt=\"\" />', '2014-11-26 09:57:47', '2014-11-26 09:57:47', 1),
	('Cms Side Menu', 'cms-side-menu', '<div class=\"block block-account\">\r\n<div class=\"block-title\"><strong><span>Information</span></strong></div>\r\n<div class=\"block-content\">\r\n<ul>\r\n<li class=\"current\"><a href=\"/about-us\"><strong>About us</strong></a></li>\r\n<li><a href=\"/contact-us\">Contact Us</a></li>\r\n<li><a href=\"/delivery\">Delivery</a></li>\r\n<li><a href=\"/returns-policy\">Returns Policy</a>&nbsp;</li>\r\n<li><a href=\"/trade\">Trade</a>&nbsp;</li>\r\n<li><a href=\"/blog\">Blog</a>&nbsp;</li>\r\n<li><a href=\"/recipies\">Recipes</a>&nbsp;</li>\r\n<li><a href=\"/events\">Events</a>&nbsp;</li>\r\n<li><a href=\"/terms-and-conditions\">Terms &amp; Conditions</a>&nbsp;</li>\r\n<li><a href=\"/privacy-policy\">Privacy Policy</a></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>', '2014-11-26 14:25:49', '2014-11-26 14:25:49', 1),
	('Dashboard Info Menu', 'dashboard-info-menu', '<div class=\"block block-account\">\r\n<div class=\"block-title\"><strong><span>Information</span></strong></div>\r\n<div class=\"block-content\">\r\n<ul>\r\n<li class=\"current\"><a href=\"/about-us\">About us</a></li>\r\n<li><a href=\"/contact-us\">Contact Us</a></li>\r\n<li><a href=\"/delivery\">Delivery</a></li>\r\n<li><a href=\"/returns-policy\">Returns Policy</a>&nbsp;</li>\r\n<li><a href=\"/trade\">Trade</a>&nbsp;</li>\r\n<li><a href=\"/blog\">Blog</a>&nbsp;</li>\r\n<li><a href=\"/recipies\">Recipes</a>&nbsp;</li>\r\n<li><a href=\"/events\">Events</a>&nbsp;</li>\r\n<li><a href=\"/terms-and-conditions\">Terms &amp; Conditions</a>&nbsp;</li>\r\n<li><a href=\"/privacy-policy\">Privacy Policy</a></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>', '2014-11-26 14:26:33', '2014-11-26 14:26:33', 1);

");

$installer->endSetup();
