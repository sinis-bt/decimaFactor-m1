<?php

/**
 * Resource Model for Decimalfactor
 *
 * @category    Made
 * @package     Made_Decimalfactor
 */
class Made_Decimalfactor_Model_Resource_Decimalfactor extends Mage_Core_Model_Mysql4_Abstract {

    /**
     * Model initialization
     *
     */
    protected function _construct(){
        $this->_init('decimalfactor/decimalfactor_order', 'entity_id');
    }

    /**
     * Perform actions before object save
     *
     * @param Mage_Core_Model_Abstract $object
     * @return Mage_Core_Model_Resource_Db_Abstract
     */
    protected function _beforeSave(Mage_Core_Model_Abstract $object)
    {
        if (!$object->getEntityId()) {
            $object->setCreatedAt(Mage::getSingleton('core/date')->gmtDate());
        }
        return parent::_beforeSave($object);
    }

}



