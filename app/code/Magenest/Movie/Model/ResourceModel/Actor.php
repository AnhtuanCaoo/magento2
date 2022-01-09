<?php
namespace Magenest\Movie\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Actor extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('m2magenest_actor','actor_id');
    }
}
?>
