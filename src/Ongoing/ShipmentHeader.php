<?php

namespace Ongoing;

class ShipmentHeader
{

    /**
     * @var ShipmentOperation $ShipmentOperation
     */
    protected $ShipmentOperation = null;

    /**
     * @var ShipmentIdentification $ShipmentIdentification
     */
    protected $ShipmentIdentification = null;

    /**
     * @var ShipmentFunctions $ShipmentFunctions
     */
    protected $ShipmentFunctions = null;

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
     * @var string $ConsignorCustomerNumber
     */
    protected $ConsignorCustomerNumber = null;

    /**
     * @var string $ConsigneeCustomerNumber
     */
    protected $ConsigneeCustomerNumber = null;

    /**
     * @var string $OtherCustomerNumber
     */
    protected $OtherCustomerNumber = null;

    /**
     * @var string $TransporterOrderNumber
     */
    protected $TransporterOrderNumber = null;

    /**
     * @var string $ShipmentOrderNumber
     */
    protected $ShipmentOrderNumber = null;

    /**
     * @var string $VesselName
     */
    protected $VesselName = null;

    /**
     * @var string $ShipmentComment
     */
    protected $ShipmentComment = null;

    /**
     * @var string $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @var string $RegistrationNumber
     */
    protected $RegistrationNumber = null;

    /**
     * @var string $Route
     */
    protected $Route = null;

    /**
     * @var string $DeliveryInstruction
     */
    protected $DeliveryInstruction = null;

    /**
     * @var string $WarehouseComment
     */
    protected $WarehouseComment = null;

    /**
     * @var string $DestinationComment
     */
    protected $DestinationComment = null;

    /**
     * @var string $GoodsCategoryCode
     */
    protected $GoodsCategoryCode = null;

    /**
     * @var string $ShipmentTypeCode
     */
    protected $ShipmentTypeCode = null;

    /**
     * @var int $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var int $ShipmentStatusId
     */
    protected $ShipmentStatusId = null;

    /**
     * @var \DateTime $InDate
     */
    protected $InDate = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var int $ArrivalTimeFromSeconds
     */
    protected $ArrivalTimeFromSeconds = null;

    /**
     * @var int $ArrivalTimeToSeconds
     */
    protected $ArrivalTimeToSeconds = null;

    /**
     * @var \DateTime $ShippedTime
     */
    protected $ShippedTime = null;

    /**
     * @var string $ContactPerson
     */
    protected $ContactPerson = null;

    /**
     * @var ShipmentContainerOwner $ShipmentContainerOwner
     */
    protected $ShipmentContainerOwner = null;

    /**
     * @var \DateTime $PickUpDate
     */
    protected $PickUpDate = null;

    /**
     * @var string $PickUpReference
     */
    protected $PickUpReference = null;

    /**
     * @var string $ExportReference
     */
    protected $ExportReference = null;

    /**
     * @var string $TripOrderNumber
     */
    protected $TripOrderNumber = null;

    /**
     * @param ShipmentOperation $ShipmentOperation
     * @param ShipmentIdentification $ShipmentIdentification
     */
    public function __construct($ShipmentOperation, $ShipmentIdentification)
    {
      $this->ShipmentOperation = $ShipmentOperation;
      $this->ShipmentIdentification = $ShipmentIdentification;
    }

    /**
     * @return ShipmentOperation
     */
    public function getShipmentOperation()
    {
      return $this->ShipmentOperation;
    }

    /**
     * @param ShipmentOperation $ShipmentOperation
     * @return \Ongoing\ShipmentHeader
     */
    public function setShipmentOperation($ShipmentOperation)
    {
      $this->ShipmentOperation = $ShipmentOperation;
      return $this;
    }

    /**
     * @return ShipmentIdentification
     */
    public function getShipmentIdentification()
    {
      return $this->ShipmentIdentification;
    }

    /**
     * @param ShipmentIdentification $ShipmentIdentification
     * @return \Ongoing\ShipmentHeader
     */
    public function setShipmentIdentification($ShipmentIdentification)
    {
      $this->ShipmentIdentification = $ShipmentIdentification;
      return $this;
    }

    /**
     * @return ShipmentFunctions
     */
    public function getShipmentFunctions()
    {
      return $this->ShipmentFunctions;
    }

    /**
     * @param ShipmentFunctions $ShipmentFunctions
     * @return \Ongoing\ShipmentHeader
     */
    public function setShipmentFunctions($ShipmentFunctions)
    {
      $this->ShipmentFunctions = $ShipmentFunctions;
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
     * @return \Ongoing\ShipmentHeader
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
     * @return \Ongoing\ShipmentHeader
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setConsigneeReference($ConsigneeReference)
    {
      $this->ConsigneeReference = $ConsigneeReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignorCustomerNumber()
    {
      return $this->ConsignorCustomerNumber;
    }

    /**
     * @param string $ConsignorCustomerNumber
     * @return \Ongoing\ShipmentHeader
     */
    public function setConsignorCustomerNumber($ConsignorCustomerNumber)
    {
      $this->ConsignorCustomerNumber = $ConsignorCustomerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeCustomerNumber()
    {
      return $this->ConsigneeCustomerNumber;
    }

    /**
     * @param string $ConsigneeCustomerNumber
     * @return \Ongoing\ShipmentHeader
     */
    public function setConsigneeCustomerNumber($ConsigneeCustomerNumber)
    {
      $this->ConsigneeCustomerNumber = $ConsigneeCustomerNumber;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setOtherCustomerNumber($OtherCustomerNumber)
    {
      $this->OtherCustomerNumber = $OtherCustomerNumber;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setTransporterOrderNumber($TransporterOrderNumber)
    {
      $this->TransporterOrderNumber = $TransporterOrderNumber;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setShipmentOrderNumber($ShipmentOrderNumber)
    {
      $this->ShipmentOrderNumber = $ShipmentOrderNumber;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setVesselName($VesselName)
    {
      $this->VesselName = $VesselName;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setShipmentComment($ShipmentComment)
    {
      $this->ShipmentComment = $ShipmentComment;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setRegistrationNumber($RegistrationNumber)
    {
      $this->RegistrationNumber = $RegistrationNumber;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setDeliveryInstruction($DeliveryInstruction)
    {
      $this->DeliveryInstruction = $DeliveryInstruction;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseComment()
    {
      return $this->WarehouseComment;
    }

    /**
     * @param string $WarehouseComment
     * @return \Ongoing\ShipmentHeader
     */
    public function setWarehouseComment($WarehouseComment)
    {
      $this->WarehouseComment = $WarehouseComment;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationComment()
    {
      return $this->DestinationComment;
    }

    /**
     * @param string $DestinationComment
     * @return \Ongoing\ShipmentHeader
     */
    public function setDestinationComment($DestinationComment)
    {
      $this->DestinationComment = $DestinationComment;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setGoodsCategoryCode($GoodsCategoryCode)
    {
      $this->GoodsCategoryCode = $GoodsCategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentTypeCode()
    {
      return $this->ShipmentTypeCode;
    }

    /**
     * @param string $ShipmentTypeCode
     * @return \Ongoing\ShipmentHeader
     */
    public function setShipmentTypeCode($ShipmentTypeCode)
    {
      $this->ShipmentTypeCode = $ShipmentTypeCode;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setShipmentStatusId($ShipmentStatusId)
    {
      $this->ShipmentStatusId = $ShipmentStatusId;
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
     * @return \Ongoing\ShipmentHeader
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
     * @return \Ongoing\ShipmentHeader
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
     * @return \Ongoing\ShipmentHeader
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
     * @return int
     */
    public function getArrivalTimeFromSeconds()
    {
      return $this->ArrivalTimeFromSeconds;
    }

    /**
     * @param int $ArrivalTimeFromSeconds
     * @return \Ongoing\ShipmentHeader
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setArrivalTimeToSeconds($ArrivalTimeToSeconds)
    {
      $this->ArrivalTimeToSeconds = $ArrivalTimeToSeconds;
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
     * @return \Ongoing\ShipmentHeader
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
    public function getContactPerson()
    {
      return $this->ContactPerson;
    }

    /**
     * @param string $ContactPerson
     * @return \Ongoing\ShipmentHeader
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
      return $this;
    }

    /**
     * @return ShipmentContainerOwner
     */
    public function getShipmentContainerOwner()
    {
      return $this->ShipmentContainerOwner;
    }

    /**
     * @param ShipmentContainerOwner $ShipmentContainerOwner
     * @return \Ongoing\ShipmentHeader
     */
    public function setShipmentContainerOwner($ShipmentContainerOwner)
    {
      $this->ShipmentContainerOwner = $ShipmentContainerOwner;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickUpDate()
    {
      if ($this->PickUpDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PickUpDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PickUpDate
     * @return \Ongoing\ShipmentHeader
     */
    public function setPickUpDate(\DateTime $PickUpDate = null)
    {
      if ($PickUpDate == null) {
       $this->PickUpDate = null;
      } else {
        $this->PickUpDate = $PickUpDate->format(\DateTime::ATOM);
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
     * @return \Ongoing\ShipmentHeader
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
     * @return \Ongoing\ShipmentHeader
     */
    public function setExportReference($ExportReference)
    {
      $this->ExportReference = $ExportReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getTripOrderNumber()
    {
      return $this->TripOrderNumber;
    }

    /**
     * @param string $TripOrderNumber
     * @return \Ongoing\ShipmentHeader
     */
    public function setTripOrderNumber($TripOrderNumber)
    {
      $this->TripOrderNumber = $TripOrderNumber;
      return $this;
    }

}
