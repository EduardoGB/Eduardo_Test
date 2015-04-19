<?php
/**
 * @author Eduardo Garcia <uker29@gmail.com>
 * @package Eduardo_Test
 */
class Eduardo_Test_Block_Adminhtml_Testreport extends Mage_Adminhtml_Block_Widget_Grid_Container 
{
    /**
     * call to grid
     */
    public function __construct() {
        $this->_controller = 'adminhtml_test';
        $this->_blockGroup = 'test';
        $this->_headerText = Mage::helper('sales')->__('Users Report');
        parent::__construct();
        $this->_removeButton('add');
    }

}
