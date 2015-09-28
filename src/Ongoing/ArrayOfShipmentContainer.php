<?php

namespace Ongoing;

class ArrayOfShipmentContainer
{

    /**
     * @var ShipmentContainer[] $ShipmentContainer
     */
    protected $ShipmentContainer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentContainer[]
     */
    public function getShipmentContainer()
    {
      return $this->ShipmentContainer;
    }

    /**
     * @param ShipmentContainer[] $ShipmentContainer
     * @return \Ongoing\ArrayOfShipmentContainer
     */
    public function setShipmentContainer(array $ShipmentContainer = null)
    {
      $this->ShipmentContainer = $ShipmentContainer;
      return $this;
    }

}
