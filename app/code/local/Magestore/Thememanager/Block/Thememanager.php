<?php
class Magestore_Thememanager_Block_Thememanager extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getThememanager()     
     { 
        if (!$this->hasData('thememanager')) {
            $this->setData('thememanager', Mage::registry('thememanager'));
        }
        return $this->getData('thememanager');
        
    }
}