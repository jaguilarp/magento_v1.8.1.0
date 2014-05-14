<?php

class Magestore_Thememanager_Model_System_Config_Source_Themeselect extends Mage_Core_Model_Abstract
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'1', 'label'=>Mage::helper('thememanager')->__('Orange and Black')),
            array('value'=>'2', 'label'=>Mage::helper('thememanager')->__('Blue')),
			array('value'=>'3', 'label'=>Mage::helper('thememanager')->__('Dark Red')),
			array('value'=>'4', 'label'=>Mage::helper('thememanager')->__('Green')),
			array('value'=>'5', 'label'=>Mage::helper('thememanager')->__('Orange and Silver')),
        );
    }
}