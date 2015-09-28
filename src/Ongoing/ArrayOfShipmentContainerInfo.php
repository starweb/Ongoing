<?php

namespace Ongoing;

class ArrayOfShipmentContainerInfo
{

    /**
     * @var ShipmentContainerInfo[] $ShipmentContainerInfo
     */
    protected $ShipmentContainerInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentContainerInfo[]
     */
    public function getShipmentContainerInfo()
    {
      return $this->ShipmentContainerInfo;
    }

    /**
     * @param ShipmentContainerInfo[] $ShipmentContainerInfo
     * @return \Ongoing\ArrayOfShipmentContainerInfo
     */
    public function setShipmentContainerInfo(array $ShipmentContainerInfo = null)
    {
      $this->ShipmentContainerInfo = $ShipmentContainerInfo;
      return $this;
    }

}
