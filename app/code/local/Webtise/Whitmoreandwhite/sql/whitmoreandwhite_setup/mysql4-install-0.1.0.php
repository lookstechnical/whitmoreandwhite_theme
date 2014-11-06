<?php


$installer = new Mage_Sales_Model_Mysql4_Setup('whitmoreandwhite_setup');


$installer->run("
UPDATE `core_config_data` SET `value`= 'whitmoreandwhite'
WHERE `path` =  'design/theme/template';

UPDATE `core_config_data` SET `value`= 'whitmoreandwhite'
WHERE `path` =  'design/theme/skin';

UPDATE `core_config_data` SET `value`= 'whitmoreandwhite'
WHERE `path` =  'design/theme/layout';

UPDATE `core_config_data` SET `value`= 'whitmoreandwhite'
WHERE `path` =  'design/theme/default';
");


$installer->endSetup();
