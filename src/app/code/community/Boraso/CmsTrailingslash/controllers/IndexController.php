<?php
/**
 * Created by PhpStorm.
 * User: zane
 * Date: 18/07/17
 * Time: 17.32
 */

require_once "Mage/Contacts/controllers/IndexController.php";

class Boraso_CmsTrailingslash_IndexController extends Mage_Contacts_IndexController
{
    public function indexAction()
    {
        if(Mage::helper('boraso_cmstrailingslash')->redirectToTrailingslash($this)) {

            return $this;
        }

        parent::indexAction();
    }
}
