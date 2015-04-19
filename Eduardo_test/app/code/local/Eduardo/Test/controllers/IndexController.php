<?php
/**
 * @author Eduardo Garcia <uker29@gmail.com>
 * @package Eduardo_Test
 */
class Eduardo_Test_IndexController extends Mage_Core_Controller_Front_Action 
{
    /**
    *
    * @access public
    */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
    *
    * @access public
    */
    public function saveAction(){
        $response = array();
        $data = $this->getRequest()->getPost();
        if($data){
            try{
                $data['create_at'] = date("Y/m/d");
                Mage::log($data['create_at']);
                $model = Mage::getModel('test/users');
                $model->setData($data);
                $model->save();
                $response['message'] = Mage::helper('test')->__('Information saved successfully');
            }  catch (Exception $e){
                $response['message'] = Mage::helper('test')->__('There was an error saving information');
            
                Mage::log($e->getMessage());
            }
        }else{
            $response['message'] = Mage::helper('test')->__('There was an error saving information');
        }
        $this->getResponse()->setHeader('Content-type', 'application/json');
        $this->getResponse()->setBody(json_encode($response));
    }
}