<?php
/**
 * @author Eduardo Garcia <uker29@gmail.com>
 * @package Eduardo_Test
 */
class Eduardo_Test_Model_Mysql4_Users_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract 
{
    public function _construct(){
        $this->_init('test/users');
    }
}
