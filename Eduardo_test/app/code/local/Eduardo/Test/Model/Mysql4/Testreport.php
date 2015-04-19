<?php
/**
 * @author Eduardo Garcia <uker29@gmail.com>
 * @package Eduardo_Test
 */
class Eduardo_Test_Model_Mysql4_Testreport extends Eduardo_Test_Model_Mysql4_Users_Collection
{
    /**
     * Filter by date
     * @param type $from
     * @param type $to
     * @param type $id
     * @return \Eduardo_Test_Model_Mysql4_Testreport
     */
    public function setDateRange($from, $to , $id = null) 
    {
        $this->_reset();
        $this->addFieldToFilter("main_table.create_at", array(
                'from' => $from,
                'to' => $to,
                'date' => true
                ));
       
        return $this;
    }
    
    /**
     * Sets store id
     * @param type $storeIds
     * @return \Eduardo_Test_Model_Mysql4_Testreport
     */
    public function setStoreIds($storeIds)
    {
        return $this;
    }
}