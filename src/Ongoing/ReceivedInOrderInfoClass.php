<?php

namespace Ongoing;

class ReceivedInOrderInfoClass
{

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
     * @var string $GoodsOwnerReference
     */
    protected $GoodsOwnerReference = null;

    /**
     * @var string $BatchNumber
     */
    protected $BatchNumber = null;

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

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
     * @var \DateTime $ReceivedDate
     */
    protected $ReceivedDate = null;

    /**
     * @var \DateTime $LastReceivedTime
     */
    protected $LastReceivedTime = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $Container
     */
    protected $Container = null;

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
     * @var string $InOrderTypeName
     */
    protected $InOrderTypeName = null;

    /**
     * @var string $InOrderTypeCode
     */
    protected $InOrderTypeCode = null;

    /**
     * @var boolean $InOrderIsReturnType
     */
    protected $InOrderIsReturnType = null;

    /**
     * @var int $InOrderStatusNumber
     */
    protected $InOrderStatusNumber = null;

    /**
     * @var string $InOrderStatusText
     */
    protected $InOrderStatusText = null;

    /**
     * @var float $AdvisedNumberOfItems
     */
    protected $AdvisedNumberOfItems = null;

    /**
     * @var float $ReceivedNumberOfItems
     */
    protected $ReceivedNumberOfItems = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $TermsOfDeliveryTypeCode
     */
    protected $TermsOfDeliveryTypeCode = null;

    /**
     * @var string $TermsOfDeliveryTypeName
     */
    protected $TermsOfDeliveryTypeName = null;

    /**
     * @param int $InOrderId
     * @param boolean $InOrderIsReturnType
     * @param int $InOrderStatusNumber
     * @param float $AdvisedNumberOfItems
     * @param float $ReceivedNumberOfItems
     */
    public function __construct($InOrderId, $InOrderIsReturnType, $InOrderStatusNumber, $AdvisedNumberOfItems, $ReceivedNumberOfItems)
    {
      $this->InOrderId = $InOrderId;
      $this->InOrderIsReturnType = $InOrderIsReturnType;
      $this->InOrderStatusNumber = $InOrderStatusNumber;
      $this->AdvisedNumberOfItems = $AdvisedNumberOfItems;
      $this->ReceivedNumberOfItems = $ReceivedNumberOfItems;
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
     * @return \Ongoing\ReceivedInOrderInfoClass
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
     * @return \Ongoing\ReceivedInOrderInfoClass
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setSupplierOrderNumber($SupplierOrderNumber)
    {
      $this->SupplierOrderNumber = $SupplierOrderNumber;
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setGoodsOwnerReference($GoodsOwnerReference)
    {
      $this->GoodsOwnerReference = $GoodsOwnerReference;
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setBatchNumber($BatchNumber)
    {
      $this->BatchNumber = $BatchNumber;
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
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
     * @return \Ongoing\ReceivedInOrderInfoClass
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setOrderDate(\DateTime $OrderDate = null)
    {
      if ($OrderDate == null) {
       $this->OrderDate = null;
      } else {
        $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
      }
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setBatchDate(\DateTime $BatchDate = null)
    {
      if ($BatchDate == null) {
       $this->BatchDate = null;
      } else {
        $this->BatchDate = $BatchDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDate()
    {
      if ($this->ReceivedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReceivedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReceivedDate
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setReceivedDate(\DateTime $ReceivedDate = null)
    {
      if ($ReceivedDate == null) {
       $this->ReceivedDate = null;
      } else {
        $this->ReceivedDate = $ReceivedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastReceivedTime()
    {
      if ($this->LastReceivedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastReceivedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastReceivedTime
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setLastReceivedTime(\DateTime $LastReceivedTime = null)
    {
      if ($LastReceivedTime == null) {
       $this->LastReceivedTime = null;
      } else {
        $this->LastReceivedTime = $LastReceivedTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setContainer($Container)
    {
      $this->Container = $Container;
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
     * @return \Ongoing\ReceivedInOrderInfoClass
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
     * @return \Ongoing\ReceivedInOrderInfoClass
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setWayOfDeliveryTypeName($WayOfDeliveryTypeName)
    {
      $this->WayOfDeliveryTypeName = $WayOfDeliveryTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrderTypeName()
    {
      return $this->InOrderTypeName;
    }

    /**
     * @param string $InOrderTypeName
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setInOrderTypeName($InOrderTypeName)
    {
      $this->InOrderTypeName = $InOrderTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrderTypeCode()
    {
      return $this->InOrderTypeCode;
    }

    /**
     * @param string $InOrderTypeCode
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setInOrderTypeCode($InOrderTypeCode)
    {
      $this->InOrderTypeCode = $InOrderTypeCode;
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setInOrderIsReturnType($InOrderIsReturnType)
    {
      $this->InOrderIsReturnType = $InOrderIsReturnType;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderStatusNumber()
    {
      return $this->InOrderStatusNumber;
    }

    /**
     * @param int $InOrderStatusNumber
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setInOrderStatusNumber($InOrderStatusNumber)
    {
      $this->InOrderStatusNumber = $InOrderStatusNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrderStatusText()
    {
      return $this->InOrderStatusText;
    }

    /**
     * @param string $InOrderStatusText
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setInOrderStatusText($InOrderStatusText)
    {
      $this->InOrderStatusText = $InOrderStatusText;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdvisedNumberOfItems()
    {
      return $this->AdvisedNumberOfItems;
    }

    /**
     * @param float $AdvisedNumberOfItems
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setAdvisedNumberOfItems($AdvisedNumberOfItems)
    {
      $this->AdvisedNumberOfItems = $AdvisedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceivedNumberOfItems()
    {
      return $this->ReceivedNumberOfItems;
    }

    /**
     * @param float $ReceivedNumberOfItems
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setReceivedNumberOfItems($ReceivedNumberOfItems)
    {
      $this->ReceivedNumberOfItems = $ReceivedNumberOfItems;
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
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfDeliveryTypeCode()
    {
      return $this->TermsOfDeliveryTypeCode;
    }

    /**
     * @param string $TermsOfDeliveryTypeCode
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setTermsOfDeliveryTypeCode($TermsOfDeliveryTypeCode)
    {
      $this->TermsOfDeliveryTypeCode = $TermsOfDeliveryTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfDeliveryTypeName()
    {
      return $this->TermsOfDeliveryTypeName;
    }

    /**
     * @param string $TermsOfDeliveryTypeName
     * @return \Ongoing\ReceivedInOrderInfoClass
     */
    public function setTermsOfDeliveryTypeName($TermsOfDeliveryTypeName)
    {
      $this->TermsOfDeliveryTypeName = $TermsOfDeliveryTypeName;
      return $this;
    }

}
