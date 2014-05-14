<?php

class Magestore_Thememanager_Model_Mysql4_Thememanager extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the thememanager_id refers to the key field in your database table.
        $this->_init('thememanager/thememanager', 'thememanager_id');
    }
}