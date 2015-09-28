<?php

namespace Ongoing;

class InOrderInfoClass
{

    /**
     * @var InOrderIdentificationType $InOrderIdentification
     */
    protected $InOrderIdentification = null;

    /**
     * @var InOrderOperation $InOrderOperation
     */
    protected $InOrderOperation = null;

    /**
     * @var int $InOrderId
     */
    protected $InOrderId = null;

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @var string $SupplierOrderNumber
     */
    protected $SupplierOrderNumber = null;

    /**
     * @var string $BatchNumber
     */
    protected $BatchNumber = null;

    /**
     * @var string $GoodsOwnerReference
     */
    protected $GoodsOwnerReference = null;

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var string $WayOfDelivery
     */
    protected $WayOfDelivery = null;

    /**
     * @var string $OrderRemark
     */
    protected $OrderRemark = null;

    /**
     * @var \DateTime $InDate
     */
    protected $InDate = null;

    /**
     * @var \DateTime $OrderDate
     */
    protected $OrderDate = null;

    /**
     * @var \DateTime $BatchDate
     */
    protected $BatchDate = null;

    /**
     * @var string $Container
     */
    protected $Container = null;

    /**
     * @var int $OrderStatusCreated
     */
    protected $OrderStatusCreated = null;

    /**
     * @var int $OrderStatusUpdated
     */
    protected $OrderStatusUpdated = null;

    /**
     * @var WayOfDeliveryType $WayOfDeliveryType
     */
    protected $WayOfDeliveryType = null;

    /**
     * @var InOrderType $InOrderType
     */
    protected $InOrderType = null;

    /**
     * @var boolean $InOrderIsReturnType
     */
    protected $InOrderIsReturnType = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var TermsOfDeliveryType $TermsOfDeliveryType
     */
    protected $TermsOfDeliveryType = null;

    /**
     * @param InOrderIdentificationType $InOrderIdentification
     * @param InOrderOperation $InOrderOperation
     * @param int $InOrderId
     * @param \DateTime $InDate
     * @param \DateTime $OrderDate
     * @param \DateTime $BatchDate
     */
    public function __construct($InOrderIdentification, $InOrderOperation, $InOrderId, \DateTime $InDate, \DateTime $OrderDate, \DateTime $BatchDate)
    {
      $this->InOrderIdentification = $InOrderIdentification;
      $this->InOrderOperation = $InOrderOperation;
      $this->InOrderId = $InOrderId;
      $this->InDate = $InDate->format(\DateTime::ATOM);
      $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
      $this->BatchDate = $BatchDate->format(\DateTime::ATOM);
    }

    /**
     * @return InOrderIdentificationType
     */
    public function getInOrderIdentification()
    {
      return $this->InOrderIdentification;
    }

    /**
     * @param InOrderIdentificationType $InOrderIdentification
     * @return \Ongoing\InOrderInfoClass
     */
    public function setInOrderIdentification($InOrderIdentification)
    {
      $this->InOrderIdentification = $InOrderIdentification;
      return $this;
    }

    /**
     * @return InOrderOperation
     */
    public function getInOrderOperation()
    {
      return $this->InOrderOperation;
    }

    /**
     * @param InOrderOperation $InOrderOperation
     * @return \Ongoing\InOrderInfoClass
     */
    public function setInOrderOperation($InOrderOperation)
    {
      $this->InOrderOperation = $InOrderOperation;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderId()
    {
      return $this->InOrderId;
    }

    /**
     * @param int $InOrderId
     * @return \Ongoing\InOrderInfoClass
     */
    public function setInOrderId($InOrderId)
    {
      $this->InOrderId = $InOrderId;
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
     * @return \Ongoing\InOrderInfoClass
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierOrderNumber()
    {
      return $this->SupplierOrderNumber;
    }

    /**
     * @param string $SupplierOrderNumber
     * @return \Ongoing\InOrderInfoClass
     */
    public function setSupplierOrderNumber($SupplierOrderNumber)
    {
      $this->SupplierOrderNumber = $SupplierOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBatchNumber()
    {
      return $this->BatchNumber;
    }

    /**
     * @param string $BatchNumber
     * @return \Ongoing\InOrderInfoClass
     */
    public function setBatchNumber($BatchNumber)
    {
      $this->BatchNumber = $BatchNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerReference()
    {
      return $this->GoodsOwnerReference;
    }

    /**
     * @param string $GoodsOwnerReference
     * @return \Ongoing\InOrderInfoClass
     */
    public function setGoodsOwnerReference($GoodsOwnerReference)
    {
      $this->GoodsOwnerReference = $GoodsOwnerReference;
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
     * @return \Ongoing\InOrderInfoClass
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
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
     * @return \Ongoing\InOrderInfoClass
     */
    public function setWayOfDelivery($WayOfDelivery)
    {
      $this->WayOfDelivery = $WayOfDelivery;
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
     * @return \Ongoing\InOrderInfoClass
     */
    public function setOrderRemark($OrderRemark)
    {
      $this->OrderRemark = $OrderRemark;
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
     * @return \Ongoing\InOrderInfoClass
     */
    public function setInDate(\DateTime $InDate)
    {
      $this->InDate = $InDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
      if ($this->OrderDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OrderDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OrderDate
     * @return \Ongoing\InOrderInfoClass
     */
    public function setOrderDate(\DateTime $OrderDate)
    {
      $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBatchDate()
    {
      if ($this->BatchDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BatchDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BatchDate
     * @return \Ongoing\InOrderInfoClass
     */
    public function setBatchDate(\DateTime $BatchDate)
    {
      $this->BatchDate = $BatchDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getContainer()
    {
      return $this->Container;
    }

    /**
     * @param string $Container
     * @return \Ongoing\InOrderInfoClass
     */
    public function setContainer($Container)
    {
      $this->Container = $Container;
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
     * @return \Ongoing\InOrderInfoClass
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
     * @return \Ongoing\InOrderInfoClass
     */
    public function setOrderStatusUpdated($OrderStatusUpdated)
    {
      $this->OrderStatusUpdated = $OrderStatusUpdated;
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
     * @return \Ongoing\InOrderInfoClass
     */
    public function setWayOfDeliveryType($WayOfDeliveryType)
    {
      $this->WayOfDeliveryType = $WayOfDeliveryType;
      return $this;
    }

    /**
     * @return InOrderType
     */
    public function getInOrderType()
    {
      return $this->InOrderType;
    }

    /**
     * @param InOrderType $InOrderType
     * @return \Ongoing\InOrderInfoClass
     */
    public function setInOrderType($InOrderType)
    {
      $this->InOrderType = $InOrderType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInOrderIsReturnType()
    {
      return $this->InOrderIsReturnType;
    }

    /**
     * @param boolean $InOrderIsReturnType
     * @return \Ongoing\InOrderInfoClass
     */
    public function setInOrderIsReturnType($InOrderIsReturnType)
    {
      $this->InOrderIsReturnType = $InOrderIsReturnType;
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
     * @return \Ongoing\InOrderInfoClass
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return TermsOfDeliveryType
     */
    public function getTermsOfDeliveryType()
    {
      return $this->TermsOfDeliveryType;
    }

    /**
     * @param TermsOfDeliveryType $TermsOfDeliveryType
     * @return \Ongoing\InOrderInfoClass
     */
    public function setTermsOfDeliveryType($TermsOfDeliveryType)
    {
      $this->TermsOfDeliveryType = $TermsOfDeliveryType;
      return $this;
    }

}
