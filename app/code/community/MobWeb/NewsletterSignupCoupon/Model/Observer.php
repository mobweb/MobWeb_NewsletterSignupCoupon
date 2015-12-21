<?php
class MobWeb_NewsletterSignupCoupon_Model_Observer
{
    public function newsletterSubscriberSaveCommitAfter(Varien_Event_Observer $observer) 
    {
        $subscriber = $observer->getEvent()->getDataObject();
        $data = $subscriber->getData();

        if ($data['subscriber_status'] == "1" && $subscriber->getIsStatusChanged()) {
            Mage::helper('newslettersignupcoupon')->log('New newsletter subscriber: ' . print_r($data, true));
            Mage::helper('newslettersignupcoupon')->sendCoupon($data['subscriber_email']);
        }

        return $observer;
    }
}
