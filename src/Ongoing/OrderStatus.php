<?php

namespace Ongoing;

class OrderStatus
{

    /**
     * @var int $OrderStatusId
     */
    protected $OrderStatusId = null;

    /**
     * @var string $OrderStatusName
     */
    protected $OrderStatusName = null;

    /**
     * @param int $OrderStatusId
     */
    public function __construct($OrderStatusId)
    {
      $this->OrderStatusId = $OrderStatusId;
    }

    /**
     * @return int
     */
    public function getOrderStatusId()
    {
      return $this->OrderStatusId;
    }

    /**
     * @param int $OrderStatusId
     * @return \Ongoing\OrderStatus
     */
    public function setOrderStatusId($OrderStatusId)
    {
      $this->OrderStatusId = $OrderStatusId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatusName()
    {
      return $this->OrderStatusName;
    }

    /**
     * @param string $OrderStatusName
     * @return \Ongoing\OrderStatus
     */
    public function setOrderStatusName($OrderStatusName)
    {
      $this->OrderStatusName = $OrderStatusName;
      return $this;
    }

}
