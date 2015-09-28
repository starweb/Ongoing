<?php

namespace Ongoing;

class ArrayOfShipmentAddress
{

    /**
     * @var ShipmentAddress[] $ShipmentAddress
     */
    protected $ShipmentAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentAddress[]
     */
    public function getShipmentAddress()
    {
      return $this->ShipmentAddress;
    }

    /**
     * @param ShipmentAddress[] $ShipmentAddress
     * @return \Ongoing\ArrayOfShipmentAddress
     */
    public function setShipmentAddress(array $ShipmentAddress = null)
    {
      $this->ShipmentAddress = $ShipmentAddress;
      return $this;
    }

}
