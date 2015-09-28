<?php

namespace Ongoing;

class TripStop
{

    /**
     * @var TripStopOperation $TripStopOperation
     */
    protected $TripStopOperation = null;

    /**
     * @var int $Sequence
     */
    protected $Sequence = null;

    /**
     * @var int $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

    /**
     * @var string $LocationInfo
     */
    protected $LocationInfo = null;

    /**
     * @var int $TravellingSeconds
     */
    protected $TravellingSeconds = null;

    /**
     * @var int $StopSeconds
     */
    protected $StopSeconds = null;

    /**
     * @var float $TravellingDistance
     */
    protected $TravellingDistance = null;

    /**
     * @var float $FreightWeight
     */
    protected $FreightWeight = null;

    /**
     * @param TripStopOperation $TripStopOperation
     */
    public function __construct($TripStopOperation)
    {
      $this->TripStopOperation = $TripStopOperation;
    }

    /**
     * @return TripStopOperation
     */
    public function getTripStopOperation()
    {
      return $this->TripStopOperation;
    }

    /**
     * @param TripStopOperation $TripStopOperation
     * @return \Ongoing\TripStop
     */
    public function setTripStopOperation($TripStopOperation)
    {
      $this->TripStopOperation = $TripStopOperation;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequence()
    {
      return $this->Sequence;
    }

    /**
     * @param int $Sequence
     * @return \Ongoing\TripStop
     */
    public function setSequence($Sequence)
    {
      $this->Sequence = $Sequence;
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
     * @return \Ongoing\TripStop
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAddressId()
    {
      return $this->AddressId;
    }

    /**
     * @param int $AddressId
     * @return \Ongoing\TripStop
     */
    public function setAddressId($AddressId)
    {
      $this->AddressId = $AddressId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationInfo()
    {
      return $this->LocationInfo;
    }

    /**
     * @param string $LocationInfo
     * @return \Ongoing\TripStop
     */
    public function setLocationInfo($LocationInfo)
    {
      $this->LocationInfo = $LocationInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravellingSeconds()
    {
      return $this->TravellingSeconds;
    }

    /**
     * @param int $TravellingSeconds
     * @return \Ongoing\TripStop
     */
    public function setTravellingSeconds($TravellingSeconds)
    {
      $this->TravellingSeconds = $TravellingSeconds;
      return $this;
    }

    /**
     * @return int
     */
    public function getStopSeconds()
    {
      return $this->StopSeconds;
    }

    /**
     * @param int $StopSeconds
     * @return \Ongoing\TripStop
     */
    public function setStopSeconds($StopSeconds)
    {
      $this->StopSeconds = $StopSeconds;
      return $this;
    }

    /**
     * @return float
     */
    public function getTravellingDistance()
    {
      return $this->TravellingDistance;
    }

    /**
     * @param float $TravellingDistance
     * @return \Ongoing\TripStop
     */
    public function setTravellingDistance($TravellingDistance)
    {
      $this->TravellingDistance = $TravellingDistance;
      return $this;
    }

    /**
     * @return float
     */
    public function getFreightWeight()
    {
      return $this->FreightWeight;
    }

    /**
     * @param float $FreightWeight
     * @return \Ongoing\TripStop
     */
    public function setFreightWeight($FreightWeight)
    {
      $this->FreightWeight = $FreightWeight;
      return $this;
    }

}
