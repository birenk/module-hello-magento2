<?php
namespace Lof\HelloMagento2\Controller\Index;
class Test2 extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$page = $this->_pageFactory->create();
		return $page;
	}
}