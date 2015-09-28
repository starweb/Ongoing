<?php

namespace Ongoing;

class OrderType
{

    /**
     * @var OrderTypeOperation $OrderTypeOperation
     */
    protected $OrderTypeOperation = null;

    /**
     * @var OrderTypeIdentification $OrderTypeIdentification
     */
    protected $OrderTypeIdentification = null;

    /**
     * @var string $OrderTypeCode
     */
    protected $OrderTypeCode = null;

    /**
     * @var string $OrderTypeName
     */
    protected $OrderTypeName = null;

    /**
     * @param OrderTypeOperation $OrderTypeOperation
     * @param OrderTypeIdentification $OrderTypeIdentification
     */
    public function __construct($OrderTypeOperation, $OrderTypeIdentification)
    {
      $this->OrderTypeOperation = $OrderTypeOperation;
      $this->OrderTypeIdentification = $OrderTypeIdentification;
    }

    /**
     * @return OrderTypeOperation
     */
    public function getOrderTypeOperation()
    {
      return $this->OrderTypeOperation;
    }

    /**
     * @param OrderTypeOperation $OrderTypeOperation
     * @return \Ongoing\OrderType
     */
    public function setOrderTypeOperation($OrderTypeOperation)
    {
      $this->OrderTypeOperation = $OrderTypeOperation;
      return $this;
    }

    /**
     * @return OrderTypeIdentification
     */
    public function getOrderTypeIdentification()
    {
      return $this->OrderTypeIdentification;
    }

    /**
     * @param OrderTypeIdentification $OrderTypeIdentification
     * @return \Ongoing\OrderType
     */
    public function setOrderTypeIdentification($OrderTypeIdentification)
    {
      $this->OrderTypeIdentification = $OrderTypeIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderTypeCode()
    {
      return $this->OrderTypeCode;
    }

    /**
     * @param string $OrderTypeCode
     * @return \Ongoing\OrderType
     */
    public function setOrderTypeCode($OrderTypeCode)
    {
      $this->OrderTypeCode = $OrderTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderTypeName()
    {
      return $this->OrderTypeName;
    }

    /**
     * @param string $OrderTypeName
     * @return \Ongoing\OrderType
     */
    public function setOrderTypeName($OrderTypeName)
    {
      $this->OrderTypeName = $OrderTypeName;
      return $this;
    }

}
