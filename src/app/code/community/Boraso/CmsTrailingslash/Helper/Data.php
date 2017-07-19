<?php

class Boraso_CmsTrailingslash_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function redirectToTrailingslash($action)
    {
        $requestUri = $action->getRequest()->getRequestUri();
        $lastChar = substr($requestUri, -1);

        if ($lastChar != '/') {

            $redirectTo = $requestUri . "/";
            $action->getResponse()->setRedirect($redirectTo, 301);

            //interrompo generazione pagina
            $action->getRequest()->setDispatched(true);
            $action->setFlag('', Mage_Core_Controller_Front_Action::FLAG_NO_DISPATCH, true);
            return true;

        } else {

            return false;
        }
    }
}
