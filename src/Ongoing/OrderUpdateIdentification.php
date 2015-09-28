<?php

namespace Ongoing;

class OrderUpdateIdentification
{

    /**
     * @var OrderUpdateIdentificationType $OrderIdentificationType
     */
    protected $OrderIdentificationType = null;

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @var string $GoodsOwnerOrderId
     */
    protected $GoodsOwnerOrderId = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @param OrderUpdateIdentificationType $OrderIdentificationType
     */
    public function __construct($OrderIdentificationType)
    {
      $this->OrderIdentificationType = $OrderIdentificationType;
    }

    /**
     * @return OrderUpdateIdentificationType
     */
    public function getOrderIdentificationType()
    {
      return $this->OrderIdentificationType;
    }

    /**
     * @param OrderUpdateIdentificationType $OrderIdentificationType
     * @return \Ongoing\OrderUpdateIdentification
     */
    public function setOrderIdentificationType($OrderIdentificationType)
    {
      $this->OrderIdentificationType = $OrderIdentificationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderNumber()
    {
      return $this->GoodsOwnerOrderNumber;
    }

    /**
     * @param string $GoodsOwnerOrderNumber
     * @return \Ongoing\OrderUpdateIdentification
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderId()
    {
      return $this->GoodsOwnerOrderId;
    }

    /**
     * @param string $GoodsOwnerOrderId
     * @return \Ongoing\OrderUpdateIdentification
     */
    public function setGoodsOwnerOrderId($GoodsOwnerOrderId)
    {
      $this->GoodsOwnerOrderId = $GoodsOwnerOrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return \Ongoing\OrderUpdateIdentification
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

}
