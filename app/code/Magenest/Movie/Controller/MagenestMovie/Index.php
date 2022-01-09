<?php
namespace Magenest\Movie\Controller\MagenestMovie;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;



class Index extends Action{
    protected $magenestMovieFactory;

    public function __construct(Context $context,
                                     PageFactory $resultPageFactory)
    {

        return parent::__construct($context);
        $this->resultFactory = $resultPageFactory;
    }
//    public function getO()
//    {
//        $data = $this->magenestMovieFactory->create()->getCollection();
////        foreach ($data as $value) {
////            echo "<pre>";
////            print_r($value->getData());
////            echo "</pre>";
////        }
//        return $data->getData();
//    }
//    public function execute()
//    {
//        //
//        $resultPage = $this->resultPageFactory->create();
//        return $resultPage;
//    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}
