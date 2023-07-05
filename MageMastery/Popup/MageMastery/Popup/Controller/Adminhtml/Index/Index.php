<?php

namespace MageMastery\Popup\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\page;
use Magento\Backend\App\Action;

class Index extends Action
{
    public function __construct(
        Context $context
    ){
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('MageMastery_Popup::');
        $resultPage->addBreadcrumb(__('Popups'), __('Popups'));
        $resultPage->addBreadcrumb(__('Manage Popups'), __('Manage Popups'));
        $resultPage->getConfig()->getTitle()->prepend(__('Popups'));


        return $resultPage;
    }
}