<?php
namespace Yireo\ExampleJsComponent\Block;

class Example extends \Magento\Framework\View\Element\Template
{
    public function getMessage()
    {
        return 'Yes, the JS component is loaded!';
    }
}