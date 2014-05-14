<?php
class Magestore_Themeswitcher_Block_Themeswitcher extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getThemeswitcher()     
     { 
        if (!$this->hasData('themeswitcher')) {
            $this->setData('themeswitcher', Mage::registry('themeswitcher'));
        }
        return $this->getData('themeswitcher');
        
    }
}