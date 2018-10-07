<?php

/**
 *
 * @category    Made
 * @package     Made_Decimalfactor
 */
class Made_Decimalfactor_Adminhtml_GridController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Decimalfactor grid
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->_title($this->__("Decimal Factor Grid"));
        $this->_setActiveMenu('sales/sales');
        $this->renderLayout();
    }
}


