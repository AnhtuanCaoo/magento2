<?php

namespace Magenest\Movie\Controller\Index;

use Magento\Framework\App\Action\Action;

class Redirect extends Action
{
    public function execute()
    {
        // TODO: Implement execute() method.
        $this->_redirect('movie');
    }
}
