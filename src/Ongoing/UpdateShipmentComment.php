<?php

namespace Ongoing;

class UpdateShipmentComment
{

    /**
     * @var string $ShipmentComment
     */
    protected $ShipmentComment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShipmentComment()
    {
      return $this->ShipmentComment;
    }

    /**
     * @param string $ShipmentComment
     * @return \Ongoing\UpdateShipmentComment
     */
    public function setShipmentComment($ShipmentComment)
    {
      $this->ShipmentComment = $ShipmentComment;
      return $this;
    }

}
