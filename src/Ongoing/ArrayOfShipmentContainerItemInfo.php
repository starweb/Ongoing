<?php

namespace Ongoing;

class ArrayOfShipmentContainerItemInfo
{

    /**
     * @var ShipmentContainerItemInfo[] $ShipmentContainerItemInfo
     */
    protected $ShipmentContainerItemInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentContainerItemInfo[]
     */
    public function getShipmentContainerItemInfo()
    {
      return $this->ShipmentContainerItemInfo;
    }

    /**
     * @param ShipmentContainerItemInfo[] $ShipmentContainerItemInfo
     * @return \Ongoing\ArrayOfShipmentContainerItemInfo
     */
    public function setShipmentContainerItemInfo(array $ShipmentContainerItemInfo = null)
    {
      $this->ShipmentContainerItemInfo = $ShipmentContainerItemInfo;
      return $this;
    }

}
