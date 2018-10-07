<?php

/**
 * Resource Model for Decimalfactor Collection
 *
 * @category    Made
 * @package     Made_Decimalfactor
 */
class Made_Decimalfactor_Model_Resource_Decimalfactor_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

    /**
     * Initialize resource
     *
     */
    public function _construct()
    {
        $this->_init('decimalfactor/decimalfactor');
    }

}

