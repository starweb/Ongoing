<?php

namespace Ongoing;

class UpdateOrderStatus
{

    /**
     * @var int $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @param int $OrderStatus
     */
    public function __construct($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
    }

    /**
     * @return int
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param int $OrderStatus
     * @return \Ongoing\UpdateOrderStatus
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

}
