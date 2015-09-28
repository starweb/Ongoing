<?php

namespace Ongoing;

class ShipmentHeaderInfo
{

    /**
     * @var int $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var int $ExternalSystemId
     */
    protected $ExternalSystemId = null;

    /**
     * @var int $WayBill
     */
    protected $WayBill = null;

    /**
     * @var string $ConsignorReference
     */
    protected $ConsignorReference = null;

    /**
     * @var string $ConsigneeReference
     */
    protected $ConsigneeReference = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $TransporterOrderNumber
     */
    protected $TransporterOrderNumber = null;

    /**
     * @var string $DeliveryInstruction
     */
    protected $DeliveryInstruction = null;

    /**
     * @var string $ContactPerson
     */
    protected $ContactPerson = null;

    /**
     * @var string $ShipmentOrderNumber
     */
    protected $ShipmentOrderNumber = null;

    /**
     * @var string $OtherCustomerNumber
     */
    protected $OtherCustomerNumber = null;

    /**
     * @var string $ShipmentComment
     */
    protected $ShipmentComment = null;

    /**
     * @var string $VesselName
     */
    protected $VesselName = null;

    /**
     * @var string $RegistrationNumber
     */
    protected $RegistrationNumber = null;

    /**
     * @var int $ShipmentStatusId
     */
    protected $ShipmentStatusId = null;

    /**
     * @var string $ShipmentStatusName
     */
    protected $ShipmentStatusName = null;

    /**
     * @var \DateTime $InDate
     */
    protected $InDate = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var \DateTime $ShippedTime
     */
    protected $ShippedTime = null;

    /**
     * @var string $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @var string $Route
     */
    protected $Route = null;

    /**
     * @var string $TripRouteCode
     */
    protected $TripRouteCode = null;

    /**
     * @var int $TripId
     */
    protected $TripId = null;

    /**
     * @var int $ArrivalTimeFromSeconds
     */
    protected $ArrivalTimeFromSeconds = null;

    /**
     * @var int $ArrivalTimeToSeconds
     */
    protected $ArrivalTimeToSeconds = null;

    /**
     * @var ShipmentRouteInfo $ShipmentRoute
     */
    protected $ShipmentRoute = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var string $PickUpReference
     */
    protected $PickUpReference = null;

    /**
     * @var string $ExportReference
     */
    protected $ExportReference = null;

    /**
     * @var string $GoodsCategoryCode
     */
    protected $GoodsCategoryCode = null;

    /**
     * @var float $FreightPrice
     */
    protected $FreightPrice = null;

    /**
     * @var float $DomesticFreightPrice
     */
    protected $DomesticFreightPrice = null;

    /**
     * @var float $AdditionalPrice
     */
    protected $AdditionalPrice = null;

    /**
     * @param int $ShipmentId
     * @param int $ShipmentStatusId
     */
    public function __construct($ShipmentId, $ShipmentStatusId)
    {
      $this->ShipmentId = $ShipmentId;
      $this->ShipmentStatusId = $ShipmentStatusId;
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
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalSystemId()
    {
      return $this->ExternalSystemId;
    }

    /**
     * @param int $ExternalSystemId
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setExternalSystemId($ExternalSystemId)
    {
      $this->ExternalSystemId = $ExternalSystemId;
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
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setWayBill($WayBill)
    {
      $this->WayBill = $WayBill;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignorReference()
    {
      return $this->ConsignorReference;
    }

    /**
     * @param string $ConsignorReference
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setConsignorReference($ConsignorReference)
    {
      $this->ConsignorReference = $ConsignorReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeReference()
    {
      return $this->ConsigneeReference;
    }

    /**
     * @param string $ConsigneeReference
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setConsigneeReference($ConsigneeReference)
    {
      $this->ConsigneeReference = $ConsigneeReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransporterOrderNumber()
    {
      return $this->TransporterOrderNumber;
    }

    /**
     * @param string $TransporterOrderNumber
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setTransporterOrderNumber($TransporterOrderNumber)
    {
      $this->TransporterOrderNumber = $TransporterOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryInstruction()
    {
      return $this->DeliveryInstruction;
    }

    /**
     * @param string $DeliveryInstruction
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setDeliveryInstruction($DeliveryInstruction)
    {
      $this->DeliveryInstruction = $DeliveryInstruction;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
      return $this->ContactPerson;
    }

    /**
     * @param string $ContactPerson
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
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
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setShipmentOrderNumber($ShipmentOrderNumber)
    {
      $this->ShipmentOrderNumber = $ShipmentOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOtherCustomerNumber()
    {
      return $this->OtherCustomerNumber;
    }

    /**
     * @param string $OtherCustomerNumber
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setOtherCustomerNumber($OtherCustomerNumber)
    {
      $this->OtherCustomerNumber = $OtherCustomerNumber;
      return $this;
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
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setShipmentComment($ShipmentComment)
    {
      $this->ShipmentComment = $ShipmentComment;
      return $this;
    }

    /**
     * @return string
     */
    public function getVesselName()
    {
      return $this->VesselName;
    }

    /**
     * @param string $VesselName
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setVesselName($VesselName)
    {
      $this->VesselName = $VesselName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber()
    {
      return $this->RegistrationNumber;
    }

    /**
     * @param string $RegistrationNumber
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setRegistrationNumber($RegistrationNumber)
    {
      $this->RegistrationNumber = $RegistrationNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentStatusId()
    {
      return $this->ShipmentStatusId;
    }

    /**
     * @param int $ShipmentStatusId
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setShipmentStatusId($ShipmentStatusId)
    {
      $this->ShipmentStatusId = $ShipmentStatusId;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentStatusName()
    {
      return $this->ShipmentStatusName;
    }

    /**
     * @param string $ShipmentStatusName
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setShipmentStatusName($ShipmentStatusName)
    {
      $this->ShipmentStatusName = $ShipmentStatusName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInDate()
    {
      if ($this->InDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InDate
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setInDate(\DateTime $InDate = null)
    {
      if ($InDate == null) {
       $this->InDate = null;
      } else {
        $this->InDate = $InDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null)
    {
      if ($DeliveryDate == null) {
       $this->DeliveryDate = null;
      } else {
        $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippedTime()
    {
      if ($this->ShippedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShippedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShippedTime
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setShippedTime(\DateTime $ShippedTime = null)
    {
      if ($ShippedTime == null) {
       $this->ShippedTime = null;
      } else {
        $this->ShippedTime = $ShippedTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param string $ArrivalTime
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param string $Route
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
      return $this;
    }

    /**
     * @return string
     */
    public function getTripRouteCode()
    {
      return $this->TripRouteCode;
    }

    /**
     * @param string $TripRouteCode
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setTripRouteCode($TripRouteCode)
    {
      $this->TripRouteCode = $TripRouteCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getTripId()
    {
      return $this->TripId;
    }

    /**
     * @param int $TripId
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setTripId($TripId)
    {
      $this->TripId = $TripId;
      return $this;
    }

    /**
     * @return int
     */
    public function getArrivalTimeFromSeconds()
    {
      return $this->ArrivalTimeFromSeconds;
    }

    /**
     * @param int $ArrivalTimeFromSeconds
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setArrivalTimeFromSeconds($ArrivalTimeFromSeconds)
    {
      $this->ArrivalTimeFromSeconds = $ArrivalTimeFromSeconds;
      return $this;
    }

    /**
     * @return int
     */
    public function getArrivalTimeToSeconds()
    {
      return $this->ArrivalTimeToSeconds;
    }

    /**
     * @param int $ArrivalTimeToSeconds
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setArrivalTimeToSeconds($ArrivalTimeToSeconds)
    {
      $this->ArrivalTimeToSeconds = $ArrivalTimeToSeconds;
      return $this;
    }

    /**
     * @return ShipmentRouteInfo
     */
    public function getShipmentRoute()
    {
      return $this->ShipmentRoute;
    }

    /**
     * @param ShipmentRouteInfo $ShipmentRoute
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setShipmentRoute($ShipmentRoute)
    {
      $this->ShipmentRoute = $ShipmentRoute;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
      if ($this->ArrivalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setArrivalDate(\DateTime $ArrivalDate = null)
    {
      if ($ArrivalDate == null) {
       $this->ArrivalDate = null;
      } else {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPickUpReference()
    {
      return $this->PickUpReference;
    }

    /**
     * @param string $PickUpReference
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setPickUpReference($PickUpReference)
    {
      $this->PickUpReference = $PickUpReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportReference()
    {
      return $this->ExportReference;
    }

    /**
     * @param string $ExportReference
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setExportReference($ExportReference)
    {
      $this->ExportReference = $ExportReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsCategoryCode()
    {
      return $this->GoodsCategoryCode;
    }

    /**
     * @param string $GoodsCategoryCode
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setGoodsCategoryCode($GoodsCategoryCode)
    {
      $this->GoodsCategoryCode = $GoodsCategoryCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getFreightPrice()
    {
      return $this->FreightPrice;
    }

    /**
     * @param float $FreightPrice
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setFreightPrice($FreightPrice)
    {
      $this->FreightPrice = $FreightPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getDomesticFreightPrice()
    {
      return $this->DomesticFreightPrice;
    }

    /**
     * @param float $DomesticFreightPrice
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setDomesticFreightPrice($DomesticFreightPrice)
    {
      $this->DomesticFreightPrice = $DomesticFreightPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdditionalPrice()
    {
      return $this->AdditionalPrice;
    }

    /**
     * @param float $AdditionalPrice
     * @return \Ongoing\ShipmentHeaderInfo
     */
    public function setAdditionalPrice($AdditionalPrice)
    {
      $this->AdditionalPrice = $AdditionalPrice;
      return $this;
    }

}
