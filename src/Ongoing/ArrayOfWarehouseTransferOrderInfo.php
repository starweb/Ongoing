<?php

namespace Ongoing;

class ArrayOfWarehouseTransferOrderInfo
{

    /**
     * @var WarehouseTransferOrderInfo[] $WarehouseTransferOrderInfo
     */
    protected $WarehouseTransferOrderInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WarehouseTransferOrderInfo[]
     */
    public function getWarehouseTransferOrderInfo()
    {
      return $this->WarehouseTransferOrderInfo;
    }

    /**
     * @param WarehouseTransferOrderInfo[] $WarehouseTransferOrderInfo
     * @return \Ongoing\ArrayOfWarehouseTransferOrderInfo
     */
    public function setWarehouseTransferOrderInfo(array $WarehouseTransferOrderInfo = null)
    {
      $this->WarehouseTransferOrderInfo = $WarehouseTransferOrderInfo;
      return $this;
    }

}
