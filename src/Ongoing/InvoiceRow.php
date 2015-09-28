<?php

namespace Ongoing;

class InvoiceRow
{

    /**
     * @var int $InvoiceRowId
     */
    protected $InvoiceRowId = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var boolean $IsTentative
     */
    protected $IsTentative = null;

    /**
     * @var boolean $IStatistics
     */
    protected $IStatistics = null;

    /**
     * @var boolean $IsFormula
     */
    protected $IsFormula = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var string $ContainerBatch
     */
    protected $ContainerBatch = null;

    /**
     * @var \DateTime $ActionDate
     */
    protected $ActionDate = null;

    /**
     * @var string $RowReference
     */
    protected $RowReference = null;

    /**
     * @var string $RowComment
     */
    protected $RowComment = null;

    /**
     * @var string $ProiftCenterTitle
     */
    protected $ProiftCenterTitle = null;

    /**
     * @var string $ProiftCenterCode
     */
    protected $ProiftCenterCode = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var string $OrderConsigneeName
     */
    protected $OrderConsigneeName = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var int $OrderConsigneeId
     */
    protected $OrderConsigneeId = null;

    /**
     * @var \DateTime $OrderDeliveryDate
     */
    protected $OrderDeliveryDate = null;

    /**
     * @var string $OrderReferenceNumber
     */
    protected $OrderReferenceNumber = null;

    /**
     * @var string $OrderConsigneeCountryName
     */
    protected $OrderConsigneeCountryName = null;

    /**
     * @var string $OrderConsigneeCountryCode
     */
    protected $OrderConsigneeCountryCode = null;

    /**
     * @var float $TotalOrderCharges
     */
    protected $TotalOrderCharges = null;

    /**
     * @var string $OrderConsigneePostCode
     */
    protected $OrderConsigneePostCode = null;

    /**
     * @var string $OrderRemark
     */
    protected $OrderRemark = null;

    /**
     * @var string $OrderWaybill
     */
    protected $OrderWaybill = null;

    /**
     * @var string $OrderTransporterName
     */
    protected $OrderTransporterName = null;

    /**
     * @var string $ExternalInvoiceRowId
     */
    protected $ExternalInvoiceRowId = null;

    /**
     * @var InvoiceArticle $InvoiceArticle
     */
    protected $InvoiceArticle = null;

    /**
     * @var boolean $IsCalculatedIncome
     */
    protected $IsCalculatedIncome = null;

    /**
     * @param int $InvoiceRowId
     * @param float $Price
     * @param float $UnitPrice
     * @param boolean $IsTentative
     * @param boolean $IStatistics
     * @param boolean $IsFormula
     * @param float $NumberOfItems
     * @param float $TotalOrderCharges
     * @param boolean $IsCalculatedIncome
     */
    public function __construct($InvoiceRowId, $Price, $UnitPrice, $IsTentative, $IStatistics, $IsFormula, $NumberOfItems, $TotalOrderCharges, $IsCalculatedIncome)
    {
      $this->InvoiceRowId = $InvoiceRowId;
      $this->Price = $Price;
      $this->UnitPrice = $UnitPrice;
      $this->IsTentative = $IsTentative;
      $this->IStatistics = $IStatistics;
      $this->IsFormula = $IsFormula;
      $this->NumberOfItems = $NumberOfItems;
      $this->TotalOrderCharges = $TotalOrderCharges;
      $this->IsCalculatedIncome = $IsCalculatedIncome;
    }

    /**
     * @return int
     */
    public function getInvoiceRowId()
    {
      return $this->InvoiceRowId;
    }

    /**
     * @param int $InvoiceRowId
     * @return \Ongoing\InvoiceRow
     */
    public function setInvoiceRowId($InvoiceRowId)
    {
      $this->InvoiceRowId = $InvoiceRowId;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \Ongoing\InvoiceRow
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     * @return \Ongoing\InvoiceRow
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \Ongoing\InvoiceRow
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTentative()
    {
      return $this->IsTentative;
    }

    /**
     * @param boolean $IsTentative
     * @return \Ongoing\InvoiceRow
     */
    public function setIsTentative($IsTentative)
    {
      $this->IsTentative = $IsTentative;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIStatistics()
    {
      return $this->IStatistics;
    }

    /**
     * @param boolean $IStatistics
     * @return \Ongoing\InvoiceRow
     */
    public function setIStatistics($IStatistics)
    {
      $this->IStatistics = $IStatistics;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFormula()
    {
      return $this->IsFormula;
    }

    /**
     * @param boolean $IsFormula
     * @return \Ongoing\InvoiceRow
     */
    public function setIsFormula($IsFormula)
    {
      $this->IsFormula = $IsFormula;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfItems()
    {
      return $this->NumberOfItems;
    }

    /**
     * @param float $NumberOfItems
     * @return \Ongoing\InvoiceRow
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerBatch()
    {
      return $this->ContainerBatch;
    }

    /**
     * @param string $ContainerBatch
     * @return \Ongoing\InvoiceRow
     */
    public function setContainerBatch($ContainerBatch)
    {
      $this->ContainerBatch = $ContainerBatch;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActionDate()
    {
      if ($this->ActionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ActionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ActionDate
     * @return \Ongoing\InvoiceRow
     */
    public function setActionDate(\DateTime $ActionDate = null)
    {
      if ($ActionDate == null) {
       $this->ActionDate = null;
      } else {
        $this->ActionDate = $ActionDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getRowReference()
    {
      return $this->RowReference;
    }

    /**
     * @param string $RowReference
     * @return \Ongoing\InvoiceRow
     */
    public function setRowReference($RowReference)
    {
      $this->RowReference = $RowReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getRowComment()
    {
      return $this->RowComment;
    }

    /**
     * @param string $RowComment
     * @return \Ongoing\InvoiceRow
     */
    public function setRowComment($RowComment)
    {
      $this->RowComment = $RowComment;
      return $this;
    }

    /**
     * @return string
     */
    public function getProiftCenterTitle()
    {
      return $this->ProiftCenterTitle;
    }

    /**
     * @param string $ProiftCenterTitle
     * @return \Ongoing\InvoiceRow
     */
    public function setProiftCenterTitle($ProiftCenterTitle)
    {
      $this->ProiftCenterTitle = $ProiftCenterTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getProiftCenterCode()
    {
      return $this->ProiftCenterCode;
    }

    /**
     * @param string $ProiftCenterCode
     * @return \Ongoing\InvoiceRow
     */
    public function setProiftCenterCode($ProiftCenterCode)
    {
      $this->ProiftCenterCode = $ProiftCenterCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderConsigneeName()
    {
      return $this->OrderConsigneeName;
    }

    /**
     * @param string $OrderConsigneeName
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderConsigneeName($OrderConsigneeName)
    {
      $this->OrderConsigneeName = $OrderConsigneeName;
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
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderConsigneeId()
    {
      return $this->OrderConsigneeId;
    }

    /**
     * @param int $OrderConsigneeId
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderConsigneeId($OrderConsigneeId)
    {
      $this->OrderConsigneeId = $OrderConsigneeId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDeliveryDate()
    {
      if ($this->OrderDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OrderDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OrderDeliveryDate
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderDeliveryDate(\DateTime $OrderDeliveryDate = null)
    {
      if ($OrderDeliveryDate == null) {
       $this->OrderDeliveryDate = null;
      } else {
        $this->OrderDeliveryDate = $OrderDeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderReferenceNumber()
    {
      return $this->OrderReferenceNumber;
    }

    /**
     * @param string $OrderReferenceNumber
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderReferenceNumber($OrderReferenceNumber)
    {
      $this->OrderReferenceNumber = $OrderReferenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderConsigneeCountryName()
    {
      return $this->OrderConsigneeCountryName;
    }

    /**
     * @param string $OrderConsigneeCountryName
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderConsigneeCountryName($OrderConsigneeCountryName)
    {
      $this->OrderConsigneeCountryName = $OrderConsigneeCountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderConsigneeCountryCode()
    {
      return $this->OrderConsigneeCountryCode;
    }

    /**
     * @param string $OrderConsigneeCountryCode
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderConsigneeCountryCode($OrderConsigneeCountryCode)
    {
      $this->OrderConsigneeCountryCode = $OrderConsigneeCountryCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalOrderCharges()
    {
      return $this->TotalOrderCharges;
    }

    /**
     * @param float $TotalOrderCharges
     * @return \Ongoing\InvoiceRow
     */
    public function setTotalOrderCharges($TotalOrderCharges)
    {
      $this->TotalOrderCharges = $TotalOrderCharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderConsigneePostCode()
    {
      return $this->OrderConsigneePostCode;
    }

    /**
     * @param string $OrderConsigneePostCode
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderConsigneePostCode($OrderConsigneePostCode)
    {
      $this->OrderConsigneePostCode = $OrderConsigneePostCode;
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
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderRemark($OrderRemark)
    {
      $this->OrderRemark = $OrderRemark;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderWaybill()
    {
      return $this->OrderWaybill;
    }

    /**
     * @param string $OrderWaybill
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderWaybill($OrderWaybill)
    {
      $this->OrderWaybill = $OrderWaybill;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderTransporterName()
    {
      return $this->OrderTransporterName;
    }

    /**
     * @param string $OrderTransporterName
     * @return \Ongoing\InvoiceRow
     */
    public function setOrderTransporterName($OrderTransporterName)
    {
      $this->OrderTransporterName = $OrderTransporterName;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalInvoiceRowId()
    {
      return $this->ExternalInvoiceRowId;
    }

    /**
     * @param string $ExternalInvoiceRowId
     * @return \Ongoing\InvoiceRow
     */
    public function setExternalInvoiceRowId($ExternalInvoiceRowId)
    {
      $this->ExternalInvoiceRowId = $ExternalInvoiceRowId;
      return $this;
    }

    /**
     * @return InvoiceArticle
     */
    public function getInvoiceArticle()
    {
      return $this->InvoiceArticle;
    }

    /**
     * @param InvoiceArticle $InvoiceArticle
     * @return \Ongoing\InvoiceRow
     */
    public function setInvoiceArticle($InvoiceArticle)
    {
      $this->InvoiceArticle = $InvoiceArticle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCalculatedIncome()
    {
      return $this->IsCalculatedIncome;
    }

    /**
     * @param boolean $IsCalculatedIncome
     * @return \Ongoing\InvoiceRow
     */
    public function setIsCalculatedIncome($IsCalculatedIncome)
    {
      $this->IsCalculatedIncome = $IsCalculatedIncome;
      return $this;
    }

}
