<?php

namespace Ongoing;

class ShipmentUpdateIdentification
{

    /**
     * @var ShipmentUpdateIdentificationType $ShipmentIdentificationType
     */
    protected $ShipmentIdentificationType = null;

    /**
     * @var int $WayBill
     */
    protected $WayBill = null;

    /**
     * @var string $ShipmentOrderNumber
     */
    protected $ShipmentOrderNumber = null;

    /**
     * @var int $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @param ShipmentUpdateIdentificationType $ShipmentIdentificationType
     */
    public function __construct($ShipmentIdentificationType)
    {
      $this->ShipmentIdentificationType = $ShipmentIdentificationType;
    }

    /**
     * @return ShipmentUpdateIdentificationType
     */
    public function getShipmentIdentificationType()
    {
      return $this->ShipmentIdentificationType;
    }

    /**
     * @param ShipmentUpdateIdentificationType $ShipmentIdentificationType
     * @return \Ongoing\ShipmentUpdateIdentification
     */
    public function setShipmentIdentificationType($ShipmentIdentificationType)
    {
      $this->ShipmentIdentificationType = $ShipmentIdentificationType;
      return $this;
    }

    /**
     * @return int
     */
    public function getWayBill()
    {
      return $this->WayBill;
    }

    /**
     * @param int $WayBill
     * @return \Ongoing\ShipmentUpdateIdentification
     */
    public function setWayBill($WayBill)
    {
      $this->WayBill = $WayBill;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentOrderNumber()
    {
      return $this->ShipmentOrderNumber;
    }

    /**
     * @param string $ShipmentOrderNumber
     * @return \Ongoing\ShipmentUpdateIdentification
     */
    public function setShipmentOrderNumber($ShipmentOrderNumber)
    {
      $this->ShipmentOrderNumber = $ShipmentOrderNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentId()
    {
      return $this->ShipmentId;
    }

    /**
     * @param int $ShipmentId
     * @return \Ongoing\ShipmentUpdateIdentification
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

}
