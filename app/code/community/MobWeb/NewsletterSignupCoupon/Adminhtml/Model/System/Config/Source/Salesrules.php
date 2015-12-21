<?php
class MobWeb_NewsletterSignupCoupon_Adminhtml_Model_System_Config_Source_Salesrules
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        // Get the shopping cart price rules
        $sales_rules = Mage::getModel('salesrule/rule')->getCollection();
        $options = array(array('value'=>'', 'label'=>''));

        foreach($sales_rules AS $sales_rule) {
            $options[] = array('value' => $sales_rule->rule_id, 'label' => $sales_rule->name);
        }

        return $options;
    }
}