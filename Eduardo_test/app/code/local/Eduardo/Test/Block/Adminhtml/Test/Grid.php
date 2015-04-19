<?php
/**
 * @author Eduardo Garcia <uker29@gmail.com>
 * @package Eduardo_Test
 */
class Eduardo_Test_Block_Adminhtml_Test_Grid extends Mage_Adminhtml_Block_Report_Grid  {

    /**
     * Set new settings to report
     */
    public function __construct() {
        parent::__construct();
        $this->setId('test');
        $this->setDefaultSort('create_at');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
        $this->setSubReportSize(false);
        $this->setUseAjax(true);
    }
    
    /**
     * Url to ajax action
     * @return type
     */
    public function getGridUrl()
    {
        return $this->getUrl('*/adminhtml_test/testgrid', array('_current'=>true));
    }
 
    /**
     * Set report collection
     * @return \Eduardo_Test_Block_Adminhtml_Test_Grid
     */
    protected function _prepareCollection() {
        parent::_prepareCollection();
        $this->getCollection()->initReport('test/testreport');
        return $this;
    }
    /**
     * Add columns grid
     * @return type
     */
    protected function _prepareColumns() {

        $this->addColumn('id', array(
            'header'    =>Mage::helper('test')->__('Id'),
            'sortable'  =>true,
            'index'     =>'id',
            'type'      => 'number',
        ));
        
        $this->addColumn('name', array(
            'header'    =>Mage::helper('test')->__('Name'),
            'sortable'  =>true,
            'index'     =>'name',
        ));
        $this->addColumn('lastname', array(
            'header'    =>Mage::helper('test')->__('Lastname'),
            'sortable'  =>true,
            'index'     =>'lastname',
        ));
        $this->addColumn('birthday', array(
            'header'    =>Mage::helper('test')->__('Birthday'),
            'sortable'  =>true,
            'index'     =>'birthday',
        ));
        $this->addColumn('email', array(
            'header'    =>Mage::helper('test')->__('Email'),
            'sortable'  =>true,
            'index'     =>'email',
        ));
        
        $this->addExportType('*/*/exportCsv', Mage::helper('test')->__('CSV'));
        $this->addExportType('*/*/exportXml', Mage::helper('test')->__('XML'));
        return parent::_prepareColumns();
    }
 
}