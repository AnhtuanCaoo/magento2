<?php
namespace Magenest\Movie\Block;
use Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use Magenest\Movie\Model\ResourceModel\MagenestMovie\Collection as MagenestMovieCollection;
use Magenest\Movie\Model\ResourceModel\MagenestMovie\CollectionFactory as MagenestMovieCollectionFactory;
use Magenest\Movie\Controller\MagenestMovie;

class MagenestMovies extends Template{
    protected $_magenestMovieCollectionFactory = null;
    public function __construct(
        Context $context,
        MagenestMovieCollectionFactory $magenestMovieCollectionFactory,
        array $data = []
    )
    {
        $this->_magenestMovieCollectionFactory = $magenestMovieCollectionFactory;
        parent::__construct($context, $data);
    }
    public function getMovies(){
        $magenestMovieCollection =  $this->_magenestMovieCollectionFactory->create();
        $magenestMovieCollection->addFieldToSelect('*');
        return $magenestMovieCollection;
    }
}
