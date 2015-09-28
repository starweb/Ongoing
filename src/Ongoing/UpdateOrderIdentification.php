<?php

namespace Ongoing;

class UpdateOrderIdentification
{

    /**
     * @var UpdateOrderIdentificationType $OrderIdentificationType
     */
    protected $OrderIdentificationType = null;

    /**
     * @var string $GoodsOwnerOrderId
     */
    protected $GoodsOwnerOrderId = null;

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @param UpdateOrderIdentificationType $OrderIdentificationType
     * @param int $OrderId
     */
    public function __construct($OrderIdentificationType, $OrderId)
    {
      $this->OrderIdentificationType = $OrderIdentificationType;
      $this->OrderId = $OrderId;
    }

    /**
     * @return UpdateOrderIdentificationType
     */
    public function getOrderIdentificationType()
    {
      return $this->OrderIdentificationType;
    }

    /**
     * @param UpdateOrderIdentificationType $OrderIdentificationType
     * @return \Ongoing\UpdateOrderIdentification
     */
    public function setOrderIdentificationType($OrderIdentificationType)
    {
      $this->OrderIdentificationType = $OrderIdentificationType;
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
     * @return \Ongoing\UpdateOrderIdentification
     */
    public function setGoodsOwnerOrderId($GoodsOwnerOrderId)
    {
      $this->GoodsOwnerOrderId = $GoodsOwnerOrderId;
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
     * @return \Ongoing\UpdateOrderIdentification
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
      return $this->ReferenceNumber;
    }

    /**
     * @param string $ReferenceNumber
     * @return \Ongoing\UpdateOrderIdentification
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
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
     * @return \Ongoing\UpdateOrderIdentification
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

}
