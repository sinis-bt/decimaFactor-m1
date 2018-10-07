<?php

/**
 * Decimalfactor observer model
 *
 * @category   Made
 * @package    Made_Decimalfactor
 */
class Made_Decimalfactor_Model_Observer
{
    /**
     * Save the decimal factor
     *
     * @param   Varien_Event_Observer $observer
     * @return  Mage_CatalogRule_Model_Observer
     */
    public function saveDecimalfactor(Varien_Event_Observer $observer)
    {
        $invoice = $observer->getInvoice();
        $order = $invoice->getOrder();
        $helper = Mage::helper( 'decimalfactor' );

        if($helper->isEnabled() && $helper->getdecimalFactor() && $order->getBaseTotalDue() == 0){
            $val = $invoice->getBaseGrandTotal() * $helper->getdecimalFactor();
            $decimalfactor = Mage::getModel('decimalfactor/decimalfactor')
                ->setOrderId($order->getId())
                ->setDecimalFactorSum($val)
                ->save();
        }

        return $this;
    }

}
