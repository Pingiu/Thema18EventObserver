<?php
namespace Perspective\Thema18EventOrders\Observer;


use Magento\Framework\Event\Observer;
use Magento\Checkout\Model\Cart;
use Magento\Framework\View\LayoutInterface;

class OrderEvents implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(Observer $observer)
    {

        $product = $observer->getEvent()->getProduct();

        if ($product instanceof \Magento\Catalog\Model\Product) {

            $textToAdd = '';


            $product->setCustomTabText($textToAdd);
        }

        return $this;
    }
}