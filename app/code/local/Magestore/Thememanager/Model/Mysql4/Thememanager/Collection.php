<?php

class Magestore_Thememanager_Model_Mysql4_Thememanager_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('thememanager/thememanager');
    }
}