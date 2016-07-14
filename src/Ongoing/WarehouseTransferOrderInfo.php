<?php

namespace Ongoing;

class WarehouseTransferOrderInfo
{

    /**
     * @var WarehouseTransferOrderInfoHeader $Header
     */
    protected $Header = null;

    /**
     * @var ArrayOfWarehouseTransferOrderLineInfo $OrderLines
     */
    protected $OrderLines = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WarehouseTransferOrderInfoHeader
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param WarehouseTransferOrderInfoHeader $Header
     * @return \Ongoing\WarehouseTransferOrderInfo
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return ArrayOfWarehouseTransferOrderLineInfo
     */
    public function getOrderLines()
    {
      return $this->OrderLines;
    }

    /**
     * @param ArrayOfWarehouseTransferOrderLineInfo $OrderLines
     * @return \Ongoing\WarehouseTransferOrderInfo
     */
    public function setOrderLines($OrderLines)
    {
      $this->OrderLines = $OrderLines;
      return $this;
    }

}
