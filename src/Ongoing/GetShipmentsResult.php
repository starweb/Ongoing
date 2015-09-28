<?php

namespace Ongoing;

class GetShipmentsResult
{

    /**
     * @var ArrayOfShipmentInfo $Shipments
     */
    protected $Shipments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfShipmentInfo
     */
    public function getShipments()
    {
      return $this->Shipments;
    }

    /**
     * @param ArrayOfShipmentInfo $Shipments
     * @return \Ongoing\GetShipmentsResult
     */
    public function setShipments($Shipments)
    {
      $this->Shipments = $Shipments;
      return $this;
    }

}
