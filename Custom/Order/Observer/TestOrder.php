<?php

namespace Custom\Order\Model\Observer;

use Magento\Framework\Event\ObserverInterface;

class TestOrder implements ObserverInterface
{
    /**
     * Order Model
     *
     * @var \Magento\Sales\Model\Order $order
     */
    protected $order;

     public function __construct(
        \Magento\Sales\Model\Order $order

    )

    {
        $this->order = $order;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {


       $orderId = $observer->getEvent()->getOrderIds();
        $order = $this->order->load($orderId);

        //get Order All Item
        $itemCollection = $order->getItemsCollection();
        $customer = $order->getCustomerId(); // using this id you can get customer name

       

		return $this;

    }
}