<?php

namespace Ongoing;

class ArrayOfShipmentInfo
{

    /**
     * @var ShipmentInfo[] $ShipmentInfo
     */
    protected $ShipmentInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentInfo[]
     */
    public function getShipmentInfo()
    {
      return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfo[] $ShipmentInfo
     * @return \Ongoing\ArrayOfShipmentInfo
     */
    public function setShipmentInfo(array $ShipmentInfo = null)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      return $this;
    }

}
