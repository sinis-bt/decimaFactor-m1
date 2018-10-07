<?php

/**
 * Made_Decimalfactor data helper
 *
 * @category   Made
 * @package    Made_Decimalfactor
 */
class Made_Decimalfactor_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * Get is extension enabled
     *
     * @param   int $store_id
     * @return  null|int
     */
    public function isEnabled($store_id = 0){
        return Mage::getStoreConfig('decimalfactor/parameters/enabled', $store_id);
    }

    /**
     * Get the decimal factor
     *
     * @param   int $store_id
     * @return  null|int
     */
    public function getdecimalFactor($store_id = 0){
        return Mage::getStoreConfig('decimalfactor/parameters/decimal_factor', $store_id);
    }

}