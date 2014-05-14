<?php

class Magestore_Themeswitcher_Model_Observer {

    public function controller_action_predispatch($observer) {
        $detector = new Magestore_Themeswitcher_Model_Detector();
        
        $theme = Mage::getModel('themeswitcher/theme')
                ->loadByBrowserAndStore($detector->getBrowser(), $detector->getPlatform(),Mage::app()->getStore()->getStoreId());
        $design = Mage::getDesign();
        $_helper = Mage::helper('themeswitcher');

        if ($theme->getId()) {
            if ($theme->getTemplate()) {
                $package = $_helper->getPackage($theme->getTemplate());
                $templatetheme = $_helper->getTheme($theme->getTemplate());
                if ($package) {
                    $design->setPackageName($package);
                }
                if ($templatetheme) {
                    $design->setTheme('template', $templatetheme);
                }
            }
            if ($theme->getLayout()) {
                $layouttheme = $_helper->getTheme($theme->getLayout());
                if ($templatetheme) {
                    $design->setTheme('layout', $layouttheme);
                }
            }
            if ($theme->getSkin()) {
                $skintheme = $_helper->getTheme($theme->getSkin());
                if ($skintheme) {
                    $design->setTheme('skin', $skintheme);
                }
            }
        }
    }

}