<?php

namespace Magenest\Movie\Model\ResourceModel\MagenestMovie;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'movie_id';
    protected function _construct()
    {
        $this->_init('Magenest\Movie\Model\MagenestMovie', 'Magenest\Movie\Model\ResourceModel\MagenestMovie');
    }

}
