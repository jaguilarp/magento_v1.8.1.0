<?php

class Magestore_Themeswitcher_Block_Adminhtml_Themeswitcher_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('themeswitcher_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('themeswitcher')->__('Theme Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('themeswitcher')->__('Theme Information'),
          'title'     => Mage::helper('themeswitcher')->__('Theme Information'),
          'content'   => $this->getLayout()->createBlock('themeswitcher/adminhtml_themeswitcher_edit_tab_form')->toHtml(),
      ));
	  
      $this->addTab('browser_section', array(
          'label'     => Mage::helper('themeswitcher')->__('Browser Information'),
          'title'     => Mage::helper('themeswitcher')->__('Browser Information'),
          'content'   => $this->getLayout()->createBlock('themeswitcher/adminhtml_themeswitcher_edit_tab_browsers')->toHtml(),
      ));

      $this->addTab('platform_section', array(
          'label'     => Mage::helper('themeswitcher')->__('Platform Information'),
          'title'     => Mage::helper('themeswitcher')->__('Platform Information'),
          'content'   => $this->getLayout()->createBlock('themeswitcher/adminhtml_themeswitcher_edit_tab_platforms')->toHtml(),
      ));	  
     
      return parent::_beforeToHtml();
  }
}