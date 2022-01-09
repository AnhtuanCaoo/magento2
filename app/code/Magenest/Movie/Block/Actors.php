<?php
namespace Magenest\Movie\Block;
use Magenest\Movie\Model\ResourceModel\Actor\Collection;
use Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use Magenest\Movie\Model\ResourceModel\MagenestMovie\Collection as ActorCollection;
use Magenest\Movie\Model\ResourceModel\MagenestMovie\CollectionFactory as ActorCollectionFactory;
use Magenest\Movie\Controller\Actor;

class Actors extends Template{
    protected $actors = null;
    public function __construct(
        Context $context,
        ActorCollectionFactory $actorCollectionFactory,
        array $data = []
    )
    {
        $this->_actorCollectionFactory = $actorCollectionFactory;
        parent::__construct($context, $data);
    }
    public function getActors()
    {
        $actorCollectionFactory= $this->_actorCollectionFactory->create();
        $actorCollectionFactory->addFieldToSelect('*');
        return $actorCollectionFactory;
    }
}
