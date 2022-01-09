<?php
namespace Magenest\Movie\Controller\Index;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    /**
     * Index action
     *
     * @return $this
     */
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    /** @var \Magento\Framework\View\Result\PageFactory
     * protected $resultPageFactory;
     */
    public function __construct(
        \Magento\Framework\App\Action\Context      $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}

?>
