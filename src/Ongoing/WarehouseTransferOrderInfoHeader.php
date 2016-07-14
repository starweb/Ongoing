<?php

namespace Ongoing;

class WarehouseTransferOrderInfoHeader
{

    /**
     * @var string $FromWarehouseCode
     */
    protected $FromWarehouseCode = null;

    /**
     * @var string $ToWarehouseCode
     */
    protected $ToWarehouseCode = null;

    /**
     * @var string $TransitWarehouseCode
     */
    protected $TransitWarehouseCode = null;

    /**
     * @var string $OrderComment
     */
    protected $OrderComment = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFromWarehouseCode()
    {
      return $this->FromWarehouseCode;
    }

    /**
     * @param string $FromWarehouseCode
     * @return \Ongoing\WarehouseTransferOrderInfoHeader
     */
    public function setFromWarehouseCode($FromWarehouseCode)
    {
      $this->FromWarehouseCode = $FromWarehouseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getToWarehouseCode()
    {
      return $this->ToWarehouseCode;
    }

    /**
     * @param string $ToWarehouseCode
     * @return \Ongoing\WarehouseTransferOrderInfoHeader
     */
    public function setToWarehouseCode($ToWarehouseCode)
    {
      $this->ToWarehouseCode = $ToWarehouseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransitWarehouseCode()
    {
      return $this->TransitWarehouseCode;
    }

    /**
     * @param string $TransitWarehouseCode
     * @return \Ongoing\WarehouseTransferOrderInfoHeader
     */
    public function setTransitWarehouseCode($TransitWarehouseCode)
    {
      $this->TransitWarehouseCode = $TransitWarehouseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderComment()
    {
      return $this->OrderComment;
    }

    /**
     * @param string $OrderComment
     * @return \Ongoing\WarehouseTransferOrderInfoHeader
     */
    public function setOrderComment($OrderComment)
    {
      $this->OrderComment = $OrderComment;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return \Ongoing\WarehouseTransferOrderInfoHeader
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

}
