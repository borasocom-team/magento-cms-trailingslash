<?php

class Boraso_CmsTrailingslash_Model_Observer
{
    public function cmsPageCheckTrailingslash(Varien_Event_Observer $observer)
    {
        $action = $observer->getControllerAction();
        Mage::helper('boraso_cmstrailingslash')->redirectToTrailingslash($action);
    }
}
