<?php
/**
 * @author Eduardo Garcia <uker29@gmail.com>
 * @package Eduardo_Test
 */
class Eduardo_Test_Model_Users extends Mage_Core_Model_Abstract 
{
    public function _construct(){
        parent::_construct();
        $this->_init('test/users');
    }
}