<?php

namespace Magento1994\HelloMagento2\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;
	protected $_resultPageFactory;
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento1994\HelloMagento2\Helper\Data $helperData

	)
	{
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.
		// $resultPage = $this->_resultPageFactory->create();
		// return $resultPage;
		//return $this->_pageFactory->create();

		echo $this->helperData->getGeneralConfig('enable');
		echo $this->helperData->getGeneralConfig('display_text');
		exit();

	}
}