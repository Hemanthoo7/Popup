<?php
namespace Dcw\Popup\Block;

use Magento\Framework\View\Element\Template;

class Popup extends Template
{
    public function getStaticBlockContent($identifier)
    {
        $block = $this->getLayout()->createBlock('Magento\Cms\Block\Block')->setBlockId('shipping-schedule');
        return $block->toHtml();
    }
}
