<?php 
namespace Lof\HelloMagento2\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
 
class Posts extends Template implements BlockInterface {

    protected $_template = "widget/posts.phtml";
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
		return $this->helperData->getGeneralConfig('display_text');
	}
	// public function hello(){
	// 	echo "hello";
	// 	exit();
	// }

}