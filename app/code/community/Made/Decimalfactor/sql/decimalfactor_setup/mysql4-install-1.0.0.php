<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
$decimalfactorTable = $installer->getTable('decimalfactor/decimalfactor_order');

// Create the table made_decimalfactor_order if it does not exists.
if (!$installer->tableExists($decimalfactorTable)) {

    /**
     * Create table 'decimalfactor/decimalfactor_order'
     */
    $table = $installer->getConnection()
        ->newTable($decimalfactorTable)
        ->addColumn('entity_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identity'  => true,
            'unsigned'  => true,
            'nullable'  => false,
            'primary'   => true,
        ), 'Entity Id')
        ->addColumn('order_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'unsigned'  => true,
            'nullable'  => false,
        ), 'Order Id')
        ->addColumn('decimal_factor_sum', Varien_Db_Ddl_Table::TYPE_DECIMAL, '12,4', array(
        ), 'Decimal Factor Sum')
            ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Created At')
        ->addIndex($installer->getIdxName('decimalfactor/decimalfactor_order', array('created_at')),
                array('created_at'))
        ->setComment('Made Decimal Factor');
    $installer->getConnection()->createTable($table);
} else {

    $exception = new Exception('IMPORTANT!: Could not create ' . $table . ' the table already exist. (installing decimalfactor_setup to 1.0.0 was not applied)');
    Mage::log("\n" . $exception->__toString(), Zend_Log::WARN, 'exception.log', true);
    Mage::log("\n" . $exception->__toString(), Zend_Log::WARN, 'decimalfactor_setup.log', true);
}

$installer->endSetup();