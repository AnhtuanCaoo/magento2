<?php
namespace Magenest\Movie\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class MagenestMovie extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('m2magenest_movie','movie_id');
    }
}
