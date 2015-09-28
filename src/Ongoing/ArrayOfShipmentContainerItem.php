<?php

namespace Ongoing;

class ArrayOfShipmentContainerItem
{

    /**
     * @var ShipmentContainerItem[] $ShipmentContainerItem
     */
    protected $ShipmentContainerItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentContainerItem[]
     */
    public function getShipmentContainerItem()
    {
      return $this->ShipmentContainerItem;
    }

    /**
     * @param ShipmentContainerItem[] $ShipmentContainerItem
     * @return \Ongoing\ArrayOfShipmentContainerItem
     */
    public function setShipmentContainerItem(array $ShipmentContainerItem = null)
    {
      $this->ShipmentContainerItem = $ShipmentContainerItem;
      return $this;
    }

}
