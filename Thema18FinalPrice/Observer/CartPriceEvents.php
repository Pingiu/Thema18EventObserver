<?php
namespace Perspective\Thema18FinalPrice\Observer;

class CartPriceEvents implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
      
        $products = $observer->getCollection();
        $products = $observer->getCollection();
        foreach( $products as $product )
        {
            $originalprice = $product->getPrice();
            $customprice = $originalprice * 1.20;
            $product->setPrice($customprice);
            $product->setCustomPrice($customprice);
            $product->setOriginalCustomPrice($customprice);
        }
        
    }
}