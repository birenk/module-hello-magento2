<?php 
namespace Magento1994\HelloMagento2\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
 
class HelloPost extends Template implements BlockInterface {

    protected $_template = "widget/hellopost.phtml";
    protected $helperData;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Magento1994\HelloMagento2\Helper\Data $helperData)
	{
		$this->helperData = $helperData;
		parent::__construct($context);
	}

	public function Hello()
	{
		return $this->getData('helloposts');
		//return __(" Magento");
		
	}

}