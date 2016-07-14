<?php

namespace Ongoing;

class ArrayOfWarehouseTransferOrderLineInfo
{

    /**
     * @var WarehouseTransferOrderLineInfo[] $WarehouseTransferOrderLineInfo
     */
    protected $WarehouseTransferOrderLineInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WarehouseTransferOrderLineInfo[]
     */
    public function getWarehouseTransferOrderLineInfo()
    {
      return $this->WarehouseTransferOrderLineInfo;
    }

    /**
     * @param WarehouseTransferOrderLineInfo[] $WarehouseTransferOrderLineInfo
     * @return \Ongoing\ArrayOfWarehouseTransferOrderLineInfo
     */
    public function setWarehouseTransferOrderLineInfo(array $WarehouseTransferOrderLineInfo = null)
    {
      $this->WarehouseTransferOrderLineInfo = $WarehouseTransferOrderLineInfo;
      return $this;
    }

}
