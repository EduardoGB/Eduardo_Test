<?php
/**
 * @author Eduardo Garcia <uker29@gmail.com>
 * @package Eduardo_Test
 */
class Eduardo_Test_Model_Observer 
{
    /**
     * Add new menu option
     * @param Varien_Event_Observer $observer
     */
    public function addToMenu(Varien_Event_Observer $observer)
    {
        $menu = $observer->getMenu();
        $tree = $menu->getTree();

        $node = new Varien_Data_Tree_Node(array(
            'name'   => 'Users',
            'id'     => 'Test',
            'url'    => Mage::getUrl('test'),
        ), 'id', $tree, $menu);

        $menu->addChild($node);
    }
}