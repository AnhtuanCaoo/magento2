<?php
namespace Magenest\Movie\Controller\Actor;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;



class Index extends Action{
    protected $actor;

    public function __construct(Context $context,
                                PageFactory $resultPageFactory)
    {

        return parent::__construct($context);
        $this->resultFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}
