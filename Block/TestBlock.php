<?php
namespace Lof\HelloMagento2\Block;
 
class TestBlock extends \Magento\Framework\View\Element\Template
{
	protected $helperData;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Lof\HelloMagento2\Helper\Data $helperData)
	{
		$this->helperData = $helperData;
		parent::__construct($context);
	}

	public function sayHello()
	{
		return $this->helperData->getGeneralConfig('display_text');;
	}
}