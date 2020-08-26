<?php
namespace Renato\IPModule\Block;
 
class Meuip extends \Magento\Framework\View\Element\Template
{
    // Métodos públicos ficam disponíveis dentro do phtml na variável $block
    public function getHello()
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}