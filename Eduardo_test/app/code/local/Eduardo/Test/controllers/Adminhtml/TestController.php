<?php
 /**
 * @author Eduardo Garcia <uker29@gmail.com>
 * @package Eduardo_Test
 */
class Eduardo_Test_Adminhtml_TestController extends Mage_Adminhtml_Controller_Report_Abstract 
{
    /**
     * Add new breadcrumb
     * @return \Eduardo_Test_Adminhtml_TestController
     */
    public function _initAction()
    {
        parent::_initAction();
        $this->_addBreadcrumb(Mage::helper('test')->__('users'), Mage::helper('test')->__('users'));
        return $this;
    }
 
    /**
     * Action to users report
     */
    public function indexAction() {
        $this->_title($this->__('Reports'))
             ->_title($this->__('Eduardo'));

        $this->_initAction()
            ->_addContent($this->getLayout()->createBlock('test/adminhtml_testreport'))
            ->renderLayout();
    }
    
    /**
     * Action to ajax grid
     */
    public function testgridAction()
    { 
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('test/adminhtml_test_grid')->toHtml()
        );
    }
 
    /**
     * exports users to csv file 
     */
    public function exportCsvAction() {
        $fileName = 'customerspaynet.csv';
        $content = $this->getLayout()->createBlock('test/adminhtml_test_grid');
        $this->_prepareDownloadResponse($fileName, $content->getCsv());
    }

    
}
