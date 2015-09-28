<?php

namespace Ongoing;

class ArrayOfOrder
{

    /**
     * @var Order[] $Order
     */
    protected $Order = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Order[]
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param Order[] $Order
     * @return \Ongoing\ArrayOfOrder
     */
    public function setOrder(array $Order = null)
    {
      $this->Order = $Order;
      return $this;
    }

}
