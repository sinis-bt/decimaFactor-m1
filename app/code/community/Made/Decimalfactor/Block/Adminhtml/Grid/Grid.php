<?php

/**
 *
 * @category    Made
 * @package     Made_Decimalfactor
 */
class Made_Decimalfactor_Block_Adminhtml_Grid_Grid extends Mage_Adminhtml_Block_Widget_Grid {


    public function __construct()
    {
        parent::__construct();

        $this->setDefaultSort('entity_id');
        $this->setId('admingrid_decgrid_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);

    }

    /**
     * Retrieve collection class
     *
     * @return string
     */
    protected function _getCollectionClass()
    {
        return 'decimalfactor/decimalfactor_collection';
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $this->addColumn('entity_id',
            array(
                'header'=> $this->__('ID'),
                'align' =>'right',
                'width' => '50px',
                'index' => 'entity_id'
            )
        );

        $this->addColumn('order_id',
            array(
                'header'=> $this->__('Order Id'),
                'index' => 'order_id'
            )
        );

        $this->addColumn('decimal_factor_sum',
            array(
                'header'=> $this->__('Sum'),
                'index' => 'decimal_factor_sum'
            )
        );


        $this->addColumn('created_at',
            array(
                'header'=> $this->__('Created At'),
                'index' => 'created_at',
                'type' => 'datetime'
            )
        );

        return parent::_prepareColumns();
    }
}
