<?php

namespace Ongoing;

class UpdateShipment
{

    /**
     * @var ShipmentUpdateIdentification $ShipmentUpdateIdentification
     */
    protected $ShipmentUpdateIdentification = null;

    /**
     * @var UpdateShipmentComment $UpdateShipmentComment
     */
    protected $UpdateShipmentComment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentUpdateIdentification
     */
    public function getShipmentUpdateIdentification()
    {
      return $this->ShipmentUpdateIdentification;
    }

    /**
     * @param ShipmentUpdateIdentification $ShipmentUpdateIdentification
     * @return \Ongoing\UpdateShipment
     */
    public function setShipmentUpdateIdentification($ShipmentUpdateIdentification)
    {
      $this->ShipmentUpdateIdentification = $ShipmentUpdateIdentification;
      return $this;
    }

    /**
     * @return UpdateShipmentComment
     */
    public function getUpdateShipmentComment()
    {
      return $this->UpdateShipmentComment;
    }

    /**
     * @param UpdateShipmentComment $UpdateShipmentComment
     * @return \Ongoing\UpdateShipment
     */
    public function setUpdateShipmentComment($UpdateShipmentComment)
    {
      $this->UpdateShipmentComment = $UpdateShipmentComment;
      return $this;
    }

}
