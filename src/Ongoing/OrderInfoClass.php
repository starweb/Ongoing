<?php

namespace Ongoing;

class OrderInfoClass
{

    /**
     * @var OrderIdentificationType $OrderIdentification
     */
    protected $OrderIdentification = null;

    /**
     * @var OrderOperation $OrderOperation
     */
    protected $OrderOperation = null;

    /**
     * @var string $Communication
     */
    protected $Communication = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @var string $GoodsOwnerOrderId
     */
    protected $GoodsOwnerOrderId = null;

    /**
     * @var string $SalesCode
     */
    protected $SalesCode = null;

    /**
     * @var string $OrderRemark
     */
    protected $OrderRemark = null;

    /**
     * @var string $ConsigneeOrderNumber
     */
    protected $ConsigneeOrderNumber = null;

    /**
     * @var string $WayOfDelivery
     */
    protected $WayOfDelivery = null;

    /**
     * @var string $TermsOfDelivery
     */
    protected $TermsOfDelivery = null;

    /**
     * @var string $TermsOfPayment
     */
    protected $TermsOfPayment = null;

    /**
     * @var string $ProfitCenter
     */
    protected $ProfitCenter = null;

    /**
     * @var string $DeliveryInstruction
     */
    protected $DeliveryInstruction = null;

    /**
     * @var string $TransporterOrderNumber
     */
    protected $TransporterOrderNumber = null;

    /**
     * @var float $FreightPrice
     */
    protected $FreightPrice = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var \DateTime $ArrivalDateFrom
     */
    protected $ArrivalDateFrom = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var string $WayBill
     */
    protected $WayBill = null;

    /**
     * @var float $CustomerPrice
     */
    protected $CustomerPrice = null;

    /**
     * @var int $OrderStatusCreated
     */
    protected $OrderStatusCreated = null;

    /**
     * @var int $OrderStatusUpdated
     */
    protected $OrderStatusUpdated = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var OrderType $OrderType
     */
    protected $OrderType = null;

    /**
     * @var WayOfDeliveryType $WayOfDeliveryType
     */
    protected $WayOfDeliveryType = null;

    /**
     * @var TypeClass $TermsOfDeliveryType
     */
    protected $TermsOfDeliveryType = null;

    /**
     * @var OrderNotification $OrderNotification
     */
    protected $OrderNotification = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $InvoiceTypeCode
     */
    protected $InvoiceTypeCode = null;

    /**
     * @var string $InvoiceUrl
     */
    protected $InvoiceUrl = null;

    /**
     * @var OutboundWarehouse $OutboundWarehouse
     */
    protected $OutboundWarehouse = null;

    /**
     * @var string $ProductionCode
     */
    protected $ProductionCode = null;

    /**
     * @var int $PickingPriority
     */
    protected $PickingPriority = null;

    /**
     * @var string $OrderServicePointCode
     */
    protected $OrderServicePointCode = null;

    /**
     * @param OrderIdentificationType $OrderIdentification
     * @param OrderOperation $OrderOperation
     * @param int $OrderId
     * @param \DateTime $DeliveryDate
     */
    public function __construct($OrderIdentification, $OrderOperation, $OrderId, \DateTime $DeliveryDate)
    {
      $this->OrderIdentification = $OrderIdentification;
      $this->OrderOperation = $OrderOperation;
      $this->OrderId = $OrderId;
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
    }

    /**
     * @return OrderIdentificationType
     */
    public function getOrderIdentification()
    {
      return $this->OrderIdentification;
    }

    /**
     * @param OrderIdentificationType $OrderIdentification
     * @return \Ongoing\OrderInfoClass
     */
    public function setOrderIdentification($OrderIdentification)
    {
      $this->OrderIdentification = $OrderIdentification;
      return $this;
    }

    /**
     * @return OrderOperation
     */
    public function getOrderOperation()
    {
      return $this->OrderOperation;
    }

    /**
     * @param OrderOperation $OrderOperation
     * @return \Ongoing\OrderInfoClass
     */
    public function setOrderOperation($OrderOperation)
    {
      $this->OrderOperation = $OrderOperation;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommunication()
    {
      return $this->Communication;
    }

    /**
     * @param string $Communication
     * @return \Ongoing\OrderInfoClass
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return \Ongoing\OrderInfoClass
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
      return $this->ReferenceNumber;
    }

    /**
     * @param string $ReferenceNumber
     * @return \Ongoing\OrderInfoClass
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderNumber()
    {
      return $this->GoodsOwnerOrderNumber;
    }

    /**
     * @param string $GoodsOwnerOrderNumber
     * @return \Ongoing\OrderInfoClass
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderId()
    {
      return $this->GoodsOwnerOrderId;
    }

    /**
     * @param string $GoodsOwnerOrderId
     * @return \Ongoing\OrderInfoClass
     */
    public function setGoodsOwnerOrderId($GoodsOwnerOrderId)
    {
      $this->GoodsOwnerOrderId = $GoodsOwnerOrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesCode()
    {
      return $this->SalesCode;
    }

    /**
     * @param string $SalesCode
     * @return \Ongoing\OrderInfoClass
     */
    public function setSalesCode($SalesCode)
    {
      $this->SalesCode = $SalesCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderRemark()
    {
      return $this->OrderRemark;
    }

    /**
     * @param string $OrderRemark
     * @return \Ongoing\OrderInfoClass
     */
    public function setOrderRemark($OrderRemark)
    {
      $this->OrderRemark = $OrderRemark;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeOrderNumber()
    {
      return $this->ConsigneeOrderNumber;
    }

    /**
     * @param string $ConsigneeOrderNumber
     * @return \Ongoing\OrderInfoClass
     */
    public function setConsigneeOrderNumber($ConsigneeOrderNumber)
    {
      $this->ConsigneeOrderNumber = $ConsigneeOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getWayOfDelivery()
    {
      return $this->WayOfDelivery;
    }

    /**
     * @param string $WayOfDelivery
     * @return \Ongoing\OrderInfoClass
     */
    public function setWayOfDelivery($WayOfDelivery)
    {
      $this->WayOfDelivery = $WayOfDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfDelivery()
    {
      return $this->TermsOfDelivery;
    }

    /**
     * @param string $TermsOfDelivery
     * @return \Ongoing\OrderInfoClass
     */
    public function setTermsOfDelivery($TermsOfDelivery)
    {
      $this->TermsOfDelivery = $TermsOfDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfPayment()
    {
      return $this->TermsOfPayment;
    }

    /**
     * @param string $TermsOfPayment
     * @return \Ongoing\OrderInfoClass
     */
    public function setTermsOfPayment($TermsOfPayment)
    {
      $this->TermsOfPayment = $TermsOfPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfitCenter()
    {
      return $this->ProfitCenter;
    }

    /**
     * @param string $ProfitCenter
     * @return \Ongoing\OrderInfoClass
     */
    public function setProfitCenter($ProfitCenter)
    {
      $this->ProfitCenter = $ProfitCenter;
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
     * @return \Ongoing\OrderInfoClass
     */
    public function setDeliveryInstruction($DeliveryInstruction)
    {
      $this->DeliveryInstruction = $DeliveryInstruction;
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
     * @return \Ongoing\OrderInfoClass
     */
    public function setTransporterOrderNumber($TransporterOrderNumber)
    {
      $this->TransporterOrderNumber = $TransporterOrderNumber;
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
     * @return \Ongoing\OrderInfoClass
     */
    public function setFreightPrice($FreightPrice)
    {
      $this->FreightPrice = $FreightPrice;
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
     * @return \Ongoing\OrderInfoClass
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDateFrom()
    {
      if ($this->ArrivalDateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalDateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalDateFrom
     * @return \Ongoing\OrderInfoClass
     */
    public function setArrivalDateFrom(\DateTime $ArrivalDateFrom = null)
    {
      if ($ArrivalDateFrom == null) {
       $this->ArrivalDateFrom = null;
      } else {
        $this->ArrivalDateFrom = $ArrivalDateFrom->format(\DateTime::ATOM);
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
     * @return \Ongoing\OrderInfoClass
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
    public function getWayBill()
    {
      return $this->WayBill;
    }

    /**
     * @param string $WayBill
     * @return \Ongoing\OrderInfoClass
     */
    public function setWayBill($WayBill)
    {
      $this->WayBill = $WayBill;
      return $this;
    }

    /**
     * @return float
     */
    public function getCustomerPrice()
    {
      return $this->CustomerPrice;
    }

    /**
     * @param float $CustomerPrice
     * @return \Ongoing\OrderInfoClass
     */
    public function setCustomerPrice($CustomerPrice)
    {
      $this->CustomerPrice = $CustomerPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatusCreated()
    {
      return $this->OrderStatusCreated;
    }

    /**
     * @param int $OrderStatusCreated
     * @return \Ongoing\OrderInfoClass
     */
    public function setOrderStatusCreated($OrderStatusCreated)
    {
      $this->OrderStatusCreated = $OrderStatusCreated;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatusUpdated()
    {
      return $this->OrderStatusUpdated;
    }

    /**
     * @param int $OrderStatusUpdated
     * @return \Ongoing\OrderInfoClass
     */
    public function setOrderStatusUpdated($OrderStatusUpdated)
    {
      $this->OrderStatusUpdated = $OrderStatusUpdated;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \Ongoing\OrderInfoClass
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return OrderType
     */
    public function getOrderType()
    {
      return $this->OrderType;
    }

    /**
     * @param OrderType $OrderType
     * @return \Ongoing\OrderInfoClass
     */
    public function setOrderType($OrderType)
    {
      $this->OrderType = $OrderType;
      return $this;
    }

    /**
     * @return WayOfDeliveryType
     */
    public function getWayOfDeliveryType()
    {
      return $this->WayOfDeliveryType;
    }

    /**
     * @param WayOfDeliveryType $WayOfDeliveryType
     * @return \Ongoing\OrderInfoClass
     */
    public function setWayOfDeliveryType($WayOfDeliveryType)
    {
      $this->WayOfDeliveryType = $WayOfDeliveryType;
      return $this;
    }

    /**
     * @return TypeClass
     */
    public function getTermsOfDeliveryType()
    {
      return $this->TermsOfDeliveryType;
    }

    /**
     * @param TypeClass $TermsOfDeliveryType
     * @return \Ongoing\OrderInfoClass
     */
    public function setTermsOfDeliveryType($TermsOfDeliveryType)
    {
      $this->TermsOfDeliveryType = $TermsOfDeliveryType;
      return $this;
    }

    /**
     * @return OrderNotification
     */
    public function getOrderNotification()
    {
      return $this->OrderNotification;
    }

    /**
     * @param OrderNotification $OrderNotification
     * @return \Ongoing\OrderInfoClass
     */
    public function setOrderNotification($OrderNotification)
    {
      $this->OrderNotification = $OrderNotification;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \Ongoing\OrderInfoClass
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceTypeCode()
    {
      return $this->InvoiceTypeCode;
    }

    /**
     * @param string $InvoiceTypeCode
     * @return \Ongoing\OrderInfoClass
     */
    public function setInvoiceTypeCode($InvoiceTypeCode)
    {
      $this->InvoiceTypeCode = $InvoiceTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceUrl()
    {
      return $this->InvoiceUrl;
    }

    /**
     * @param string $InvoiceUrl
     * @return \Ongoing\OrderInfoClass
     */
    public function setInvoiceUrl($InvoiceUrl)
    {
      $this->InvoiceUrl = $InvoiceUrl;
      return $this;
    }

    /**
     * @return OutboundWarehouse
     */
    public function getOutboundWarehouse()
    {
      return $this->OutboundWarehouse;
    }

    /**
     * @param OutboundWarehouse $OutboundWarehouse
     * @return \Ongoing\OrderInfoClass
     */
    public function setOutboundWarehouse($OutboundWarehouse)
    {
      $this->OutboundWarehouse = $OutboundWarehouse;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductionCode()
    {
      return $this->ProductionCode;
    }

    /**
     * @param string $ProductionCode
     * @return \Ongoing\OrderInfoClass
     */
    public function setProductionCode($ProductionCode)
    {
      $this->ProductionCode = $ProductionCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickingPriority()
    {
      return $this->PickingPriority;
    }

    /**
     * @param int $PickingPriority
     * @return \Ongoing\OrderInfoClass
     */
    public function setPickingPriority($PickingPriority)
    {
      $this->PickingPriority = $PickingPriority;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderServicePointCode()
    {
      return $this->OrderServicePointCode;
    }

    /**
     * @param string $OrderServicePointCode
     * @return \Ongoing\OrderInfoClass
     */
    public function setOrderServicePointCode($OrderServicePointCode)
    {
      $this->OrderServicePointCode = $OrderServicePointCode;
      return $this;
    }

}
