<?php

/**
 *
 * @category    Made
 * @package     Made_Decimalfactor
 */
class Made_Decimalfactor_Block_Adminhtml_Grid extends Mage_Adminhtml_Block_Widget_Grid_Container {

    /**
     * Decimalfactor grid
     */
    public function __construct()
    {
        $this->_blockGroup = 'decimalfactor';
        $this->_controller = 'adminhtml_grid';
        $this->_headerText = $this->__('Grid');
        parent::__construct();
        $this->_removeButton('add');
    }
}
