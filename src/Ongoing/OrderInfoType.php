<?php

namespace Ongoing;

class OrderInfoType
{

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var string $ProfitCenter
     */
    protected $ProfitCenter = null;

    /**
     * @var string $GoodsOwnerName
     */
    protected $GoodsOwnerName = null;

    /**
     * @var string $Communication
     */
    protected $Communication = null;

    /**
     * @var string $GoodsOwnerEdiCode
     */
    protected $GoodsOwnerEdiCode = null;

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @var string $GoodsOwnerOrderId
     */
    protected $GoodsOwnerOrderId = null;

    /**
     * @var string $TransporterOrderNumber
     */
    protected $TransporterOrderNumber = null;

    /**
     * @var string $ConsigneeOrderNumber
     */
    protected $ConsigneeOrderNumber = null;

    /**
     * @var string $ExternalOrderCode
     */
    protected $ExternalOrderCode = null;

    /**
     * @var string $SalesCode
     */
    protected $SalesCode = null;

    /**
     * @var string $OrderRemark
     */
    protected $OrderRemark = null;

    /**
     * @var string $DeliveryInstruction
     */
    protected $DeliveryInstruction = null;

    /**
     * @var string $WayOfDelivery
     */
    protected $WayOfDelivery = null;

    /**
     * @var string $WayOfDeliveryTypeCode
     */
    protected $WayOfDeliveryTypeCode = null;

    /**
     * @var string $WayOfDeliveryTypeName
     */
    protected $WayOfDeliveryTypeName = null;

    /**
     * @var string $TermsOfDelivery
     */
    protected $TermsOfDelivery = null;

    /**
     * @var string $TermsOfPayment
     */
    protected $TermsOfPayment = null;

    /**
     * @var string $OrderTypeCode
     */
    protected $OrderTypeCode = null;

    /**
     * @var string $OrderTypeName
     */
    protected $OrderTypeName = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

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
     * @var string $ProductionCode
     */
    protected $ProductionCode = null;

    /**
     * @var \DateTime $PickUpDate
     */
    protected $PickUpDate = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var \DateTime $ShippedTime
     */
    protected $ShippedTime = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $ArrivalDateFrom
     */
    protected $ArrivalDateFrom = null;

    /**
     * @var \DateTime $PrintedTime
     */
    protected $PrintedTime = null;

    /**
     * @var string $WayBill
     */
    protected $WayBill = null;

    /**
     * @var float $CustomerPrice
     */
    protected $CustomerPrice = null;

    /**
     * @var float $FreightPrice
     */
    protected $FreightPrice = null;

    /**
     * @var int $OrderStatusNumber
     */
    protected $OrderStatusNumber = null;

    /**
     * @var string $OrderStatusText
     */
    protected $OrderStatusText = null;

    /**
     * @var int $TransporterServicePointId
     */
    protected $TransporterServicePointId = null;

    /**
     * @var string $TransporterServicePointCode
     */
    protected $TransporterServicePointCode = null;

    /**
     * @var string $OrderServicePointCode
     */
    protected $OrderServicePointCode = null;

    /**
     * @var float $PickedNumberOfItems
     */
    protected $PickedNumberOfItems = null;

    /**
     * @var float $OrderedNumberOfItems
     */
    protected $OrderedNumberOfItems = null;

    /**
     * @var NotifyClass $EmailNotification
     */
    protected $EmailNotification = null;

    /**
     * @var NotifyClass $TelephoneNotification
     */
    protected $TelephoneNotification = null;

    /**
     * @var NotifyClass $SMSNotification
     */
    protected $SMSNotification = null;

    /**
     * @var int $PickingPriority
     */
    protected $PickingPriority = null;

    /**
     * @var int $BackOrderForOrderId
     */
    protected $BackOrderForOrderId = null;

    /**
     * @var string $FinancialArticleCode
     */
    protected $FinancialArticleCode = null;

    /**
     * @param int $OrderId
     * @param \DateTime $PickUpDate
     * @param \DateTime $DeliveryDate
     * @param \DateTime $CreatedDate
     * @param \DateTime $ShippedTime
     * @param \DateTime $ArrivalDate
     * @param \DateTime $ArrivalDateFrom
     * @param \DateTime $PrintedTime
     * @param int $OrderStatusNumber
     * @param float $PickedNumberOfItems
     * @param float $OrderedNumberOfItems
     */
    public function __construct($OrderId, \DateTime $PickUpDate, \DateTime $DeliveryDate, \DateTime $CreatedDate, \DateTime $ShippedTime, \DateTime $ArrivalDate, \DateTime $ArrivalDateFrom, \DateTime $PrintedTime, $OrderStatusNumber, $PickedNumberOfItems, $OrderedNumberOfItems)
    {
      $this->OrderId = $OrderId;
      $this->PickUpDate = $PickUpDate->format(\DateTime::ATOM);
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      $this->ShippedTime = $ShippedTime->format(\DateTime::ATOM);
      $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      $this->ArrivalDateFrom = $ArrivalDateFrom->format(\DateTime::ATOM);
      $this->PrintedTime = $PrintedTime->format(\DateTime::ATOM);
      $this->OrderStatusNumber = $OrderStatusNumber;
      $this->PickedNumberOfItems = $PickedNumberOfItems;
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
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
     * @return \Ongoing\OrderInfoType
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
     * @return \Ongoing\OrderInfoType
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setProfitCenter($ProfitCenter)
    {
      $this->ProfitCenter = $ProfitCenter;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerName()
    {
      return $this->GoodsOwnerName;
    }

    /**
     * @param string $GoodsOwnerName
     * @return \Ongoing\OrderInfoType
     */
    public function setGoodsOwnerName($GoodsOwnerName)
    {
      $this->GoodsOwnerName = $GoodsOwnerName;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerEdiCode()
    {
      return $this->GoodsOwnerEdiCode;
    }

    /**
     * @param string $GoodsOwnerEdiCode
     * @return \Ongoing\OrderInfoType
     */
    public function setGoodsOwnerEdiCode($GoodsOwnerEdiCode)
    {
      $this->GoodsOwnerEdiCode = $GoodsOwnerEdiCode;
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
     * @return \Ongoing\OrderInfoType
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
     * @return \Ongoing\OrderInfoType
     */
    public function setGoodsOwnerOrderId($GoodsOwnerOrderId)
    {
      $this->GoodsOwnerOrderId = $GoodsOwnerOrderId;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setTransporterOrderNumber($TransporterOrderNumber)
    {
      $this->TransporterOrderNumber = $TransporterOrderNumber;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setConsigneeOrderNumber($ConsigneeOrderNumber)
    {
      $this->ConsigneeOrderNumber = $ConsigneeOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderCode()
    {
      return $this->ExternalOrderCode;
    }

    /**
     * @param string $ExternalOrderCode
     * @return \Ongoing\OrderInfoType
     */
    public function setExternalOrderCode($ExternalOrderCode)
    {
      $this->ExternalOrderCode = $ExternalOrderCode;
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
     * @return \Ongoing\OrderInfoType
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
     * @return \Ongoing\OrderInfoType
     */
    public function setOrderRemark($OrderRemark)
    {
      $this->OrderRemark = $OrderRemark;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setDeliveryInstruction($DeliveryInstruction)
    {
      $this->DeliveryInstruction = $DeliveryInstruction;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setWayOfDelivery($WayOfDelivery)
    {
      $this->WayOfDelivery = $WayOfDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getWayOfDeliveryTypeCode()
    {
      return $this->WayOfDeliveryTypeCode;
    }

    /**
     * @param string $WayOfDeliveryTypeCode
     * @return \Ongoing\OrderInfoType
     */
    public function setWayOfDeliveryTypeCode($WayOfDeliveryTypeCode)
    {
      $this->WayOfDeliveryTypeCode = $WayOfDeliveryTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getWayOfDeliveryTypeName()
    {
      return $this->WayOfDeliveryTypeName;
    }

    /**
     * @param string $WayOfDeliveryTypeName
     * @return \Ongoing\OrderInfoType
     */
    public function setWayOfDeliveryTypeName($WayOfDeliveryTypeName)
    {
      $this->WayOfDeliveryTypeName = $WayOfDeliveryTypeName;
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
     * @return \Ongoing\OrderInfoType
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
     * @return \Ongoing\OrderInfoType
     */
    public function setTermsOfPayment($TermsOfPayment)
    {
      $this->TermsOfPayment = $TermsOfPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderTypeCode()
    {
      return $this->OrderTypeCode;
    }

    /**
     * @param string $OrderTypeCode
     * @return \Ongoing\OrderInfoType
     */
    public function setOrderTypeCode($OrderTypeCode)
    {
      $this->OrderTypeCode = $OrderTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderTypeName()
    {
      return $this->OrderTypeName;
    }

    /**
     * @param string $OrderTypeName
     * @return \Ongoing\OrderInfoType
     */
    public function setOrderTypeName($OrderTypeName)
    {
      $this->OrderTypeName = $OrderTypeName;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
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
     * @return \Ongoing\OrderInfoType
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
     * @return \Ongoing\OrderInfoType
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
     * @return \Ongoing\OrderInfoType
     */
    public function setInvoiceUrl($InvoiceUrl)
    {
      $this->InvoiceUrl = $InvoiceUrl;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setProductionCode($ProductionCode)
    {
      $this->ProductionCode = $ProductionCode;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setPickUpDate(\DateTime $PickUpDate)
    {
      $this->PickUpDate = $PickUpDate->format(\DateTime::ATOM);
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
     * @return \Ongoing\OrderInfoType
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \Ongoing\OrderInfoType
     */
    public function setCreatedDate(\DateTime $CreatedDate)
    {
      $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
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
     * @return \Ongoing\OrderInfoType
     */
    public function setShippedTime(\DateTime $ShippedTime)
    {
      $this->ShippedTime = $ShippedTime->format(\DateTime::ATOM);
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
     * @return \Ongoing\OrderInfoType
     */
    public function setArrivalDate(\DateTime $ArrivalDate)
    {
      $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
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
     * @return \Ongoing\OrderInfoType
     */
    public function setArrivalDateFrom(\DateTime $ArrivalDateFrom)
    {
      $this->ArrivalDateFrom = $ArrivalDateFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPrintedTime()
    {
      if ($this->PrintedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PrintedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PrintedTime
     * @return \Ongoing\OrderInfoType
     */
    public function setPrintedTime(\DateTime $PrintedTime)
    {
      $this->PrintedTime = $PrintedTime->format(\DateTime::ATOM);
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
     * @return \Ongoing\OrderInfoType
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
     * @return \Ongoing\OrderInfoType
     */
    public function setCustomerPrice($CustomerPrice)
    {
      $this->CustomerPrice = $CustomerPrice;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setFreightPrice($FreightPrice)
    {
      $this->FreightPrice = $FreightPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatusNumber()
    {
      return $this->OrderStatusNumber;
    }

    /**
     * @param int $OrderStatusNumber
     * @return \Ongoing\OrderInfoType
     */
    public function setOrderStatusNumber($OrderStatusNumber)
    {
      $this->OrderStatusNumber = $OrderStatusNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatusText()
    {
      return $this->OrderStatusText;
    }

    /**
     * @param string $OrderStatusText
     * @return \Ongoing\OrderInfoType
     */
    public function setOrderStatusText($OrderStatusText)
    {
      $this->OrderStatusText = $OrderStatusText;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransporterServicePointId()
    {
      return $this->TransporterServicePointId;
    }

    /**
     * @param int $TransporterServicePointId
     * @return \Ongoing\OrderInfoType
     */
    public function setTransporterServicePointId($TransporterServicePointId)
    {
      $this->TransporterServicePointId = $TransporterServicePointId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransporterServicePointCode()
    {
      return $this->TransporterServicePointCode;
    }

    /**
     * @param string $TransporterServicePointCode
     * @return \Ongoing\OrderInfoType
     */
    public function setTransporterServicePointCode($TransporterServicePointCode)
    {
      $this->TransporterServicePointCode = $TransporterServicePointCode;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setOrderServicePointCode($OrderServicePointCode)
    {
      $this->OrderServicePointCode = $OrderServicePointCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getPickedNumberOfItems()
    {
      return $this->PickedNumberOfItems;
    }

    /**
     * @param float $PickedNumberOfItems
     * @return \Ongoing\OrderInfoType
     */
    public function setPickedNumberOfItems($PickedNumberOfItems)
    {
      $this->PickedNumberOfItems = $PickedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrderedNumberOfItems()
    {
      return $this->OrderedNumberOfItems;
    }

    /**
     * @param float $OrderedNumberOfItems
     * @return \Ongoing\OrderInfoType
     */
    public function setOrderedNumberOfItems($OrderedNumberOfItems)
    {
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
      return $this;
    }

    /**
     * @return NotifyClass
     */
    public function getEmailNotification()
    {
      return $this->EmailNotification;
    }

    /**
     * @param NotifyClass $EmailNotification
     * @return \Ongoing\OrderInfoType
     */
    public function setEmailNotification($EmailNotification)
    {
      $this->EmailNotification = $EmailNotification;
      return $this;
    }

    /**
     * @return NotifyClass
     */
    public function getTelephoneNotification()
    {
      return $this->TelephoneNotification;
    }

    /**
     * @param NotifyClass $TelephoneNotification
     * @return \Ongoing\OrderInfoType
     */
    public function setTelephoneNotification($TelephoneNotification)
    {
      $this->TelephoneNotification = $TelephoneNotification;
      return $this;
    }

    /**
     * @return NotifyClass
     */
    public function getSMSNotification()
    {
      return $this->SMSNotification;
    }

    /**
     * @param NotifyClass $SMSNotification
     * @return \Ongoing\OrderInfoType
     */
    public function setSMSNotification($SMSNotification)
    {
      $this->SMSNotification = $SMSNotification;
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
     * @return \Ongoing\OrderInfoType
     */
    public function setPickingPriority($PickingPriority)
    {
      $this->PickingPriority = $PickingPriority;
      return $this;
    }

    /**
     * @return int
     */
    public function getBackOrderForOrderId()
    {
      return $this->BackOrderForOrderId;
    }

    /**
     * @param int $BackOrderForOrderId
     * @return \Ongoing\OrderInfoType
     */
    public function setBackOrderForOrderId($BackOrderForOrderId)
    {
      $this->BackOrderForOrderId = $BackOrderForOrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinancialArticleCode()
    {
      return $this->FinancialArticleCode;
    }

    /**
     * @param string $FinancialArticleCode
     * @return \Ongoing\OrderInfoType
     */
    public function setFinancialArticleCode($FinancialArticleCode)
    {
      $this->FinancialArticleCode = $FinancialArticleCode;
      return $this;
    }

}
