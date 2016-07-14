<?php

namespace Ongoing;

class ArrayOfOrderStatus
{

    /**
     * @var OrderStatus[] $OrderStatus
     */
    protected $OrderStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderStatus[]
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param OrderStatus[] $OrderStatus
     * @return \Ongoing\ArrayOfOrderStatus
     */
    public function setOrderStatus(array $OrderStatus = null)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

}
