<?php

namespace Ongoing;

class CustomerOrderLine
{

    /**
     * @var OrderLineIdentificationType $OrderLineIdentification
     */
    protected $OrderLineIdentification = null;

    /**
     * @var ArticleIdentificationType $ArticleIdentification
     */
    protected $ArticleIdentification = null;

    /**
     * @var SubOrderLineSpecificationType $SubOrderLineSpecification
     */
    protected $SubOrderLineSpecification = null;

    /**
     * @var int $OrderLineSystemId
     */
    protected $OrderLineSystemId = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var string $OrderLineComment
     */
    protected $OrderLineComment = null;

    /**
     * @var int $ArticleSystemId
     */
    protected $ArticleSystemId = null;

    /**
     * @var string $ArticleNumber
     */
    protected $ArticleNumber = null;

    /**
     * @var string $ArticleName
     */
    protected $ArticleName = null;

    /**
     * @var float $CustomerLinePrice
     */
    protected $CustomerLinePrice = null;

    /**
     * @var float $LinePrice
     */
    protected $LinePrice = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var boolean $DoPick
     */
    protected $DoPick = null;

    /**
     * @var string $Batch
     */
    protected $Batch = null;

    /**
     * @var ArrayOfSubOrderLine $SubOrderLines
     */
    protected $SubOrderLines = null;

    /**
     * @var int $MinDaysToExpiryDate
     */
    protected $MinDaysToExpiryDate = null;

    /**
     * @var int $MaxDaysToExpiryDate
     */
    protected $MaxDaysToExpiryDate = null;

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var string $OrderLineSerial
     */
    protected $OrderLineSerial = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @var VatCodeClass $VatCode
     */
    protected $VatCode = null;

    /**
     * @param OrderLineIdentificationType $OrderLineIdentification
     * @param ArticleIdentificationType $ArticleIdentification
     * @param float $NumberOfItems
     */
    public function __construct($OrderLineIdentification, $ArticleIdentification, $NumberOfItems)
    {
      $this->OrderLineIdentification = $OrderLineIdentification;
      $this->ArticleIdentification = $ArticleIdentification;
      $this->NumberOfItems = $NumberOfItems;
    }

    /**
     * @return OrderLineIdentificationType
     */
    public function getOrderLineIdentification()
    {
      return $this->OrderLineIdentification;
    }

    /**
     * @param OrderLineIdentificationType $OrderLineIdentification
     * @return \Ongoing\CustomerOrderLine
     */
    public function setOrderLineIdentification($OrderLineIdentification)
    {
      $this->OrderLineIdentification = $OrderLineIdentification;
      return $this;
    }

    /**
     * @return ArticleIdentificationType
     */
    public function getArticleIdentification()
    {
      return $this->ArticleIdentification;
    }

    /**
     * @param ArticleIdentificationType $ArticleIdentification
     * @return \Ongoing\CustomerOrderLine
     */
    public function setArticleIdentification($ArticleIdentification)
    {
      $this->ArticleIdentification = $ArticleIdentification;
      return $this;
    }

    /**
     * @return SubOrderLineSpecificationType
     */
    public function getSubOrderLineSpecification()
    {
      return $this->SubOrderLineSpecification;
    }

    /**
     * @param SubOrderLineSpecificationType $SubOrderLineSpecification
     * @return \Ongoing\CustomerOrderLine
     */
    public function setSubOrderLineSpecification($SubOrderLineSpecification)
    {
      $this->SubOrderLineSpecification = $SubOrderLineSpecification;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderLineSystemId()
    {
      return $this->OrderLineSystemId;
    }

    /**
     * @param int $OrderLineSystemId
     * @return \Ongoing\CustomerOrderLine
     */
    public function setOrderLineSystemId($OrderLineSystemId)
    {
      $this->OrderLineSystemId = $OrderLineSystemId;
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
     * @return \Ongoing\CustomerOrderLine
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
     * @return string
     */
    public function getExternalOrderLineCode()
    {
      return $this->ExternalOrderLineCode;
    }

    /**
     * @param string $ExternalOrderLineCode
     * @return \Ongoing\CustomerOrderLine
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineComment()
    {
      return $this->OrderLineComment;
    }

    /**
     * @param string $OrderLineComment
     * @return \Ongoing\CustomerOrderLine
     */
    public function setOrderLineComment($OrderLineComment)
    {
      $this->OrderLineComment = $OrderLineComment;
      return $this;
    }

    /**
     * @return int
     */
    public function getArticleSystemId()
    {
      return $this->ArticleSystemId;
    }

    /**
     * @param int $ArticleSystemId
     * @return \Ongoing\CustomerOrderLine
     */
    public function setArticleSystemId($ArticleSystemId)
    {
      $this->ArticleSystemId = $ArticleSystemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleNumber()
    {
      return $this->ArticleNumber;
    }

    /**
     * @param string $ArticleNumber
     * @return \Ongoing\CustomerOrderLine
     */
    public function setArticleNumber($ArticleNumber)
    {
      $this->ArticleNumber = $ArticleNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleName()
    {
      return $this->ArticleName;
    }

    /**
     * @param string $ArticleName
     * @return \Ongoing\CustomerOrderLine
     */
    public function setArticleName($ArticleName)
    {
      $this->ArticleName = $ArticleName;
      return $this;
    }

    /**
     * @return float
     */
    public function getCustomerLinePrice()
    {
      return $this->CustomerLinePrice;
    }

    /**
     * @param float $CustomerLinePrice
     * @return \Ongoing\CustomerOrderLine
     */
    public function setCustomerLinePrice($CustomerLinePrice)
    {
      $this->CustomerLinePrice = $CustomerLinePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getLinePrice()
    {
      return $this->LinePrice;
    }

    /**
     * @param float $LinePrice
     * @return \Ongoing\CustomerOrderLine
     */
    public function setLinePrice($LinePrice)
    {
      $this->LinePrice = $LinePrice;
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
     * @return \Ongoing\CustomerOrderLine
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \Ongoing\CustomerOrderLine
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param float $Height
     * @return \Ongoing\CustomerOrderLine
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param float $Width
     * @return \Ongoing\CustomerOrderLine
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param float $Length
     * @return \Ongoing\CustomerOrderLine
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoPick()
    {
      return $this->DoPick;
    }

    /**
     * @param boolean $DoPick
     * @return \Ongoing\CustomerOrderLine
     */
    public function setDoPick($DoPick)
    {
      $this->DoPick = $DoPick;
      return $this;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
      return $this->Batch;
    }

    /**
     * @param string $Batch
     * @return \Ongoing\CustomerOrderLine
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
      return $this;
    }

    /**
     * @return ArrayOfSubOrderLine
     */
    public function getSubOrderLines()
    {
      return $this->SubOrderLines;
    }

    /**
     * @param ArrayOfSubOrderLine $SubOrderLines
     * @return \Ongoing\CustomerOrderLine
     */
    public function setSubOrderLines($SubOrderLines)
    {
      $this->SubOrderLines = $SubOrderLines;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinDaysToExpiryDate()
    {
      return $this->MinDaysToExpiryDate;
    }

    /**
     * @param int $MinDaysToExpiryDate
     * @return \Ongoing\CustomerOrderLine
     */
    public function setMinDaysToExpiryDate($MinDaysToExpiryDate)
    {
      $this->MinDaysToExpiryDate = $MinDaysToExpiryDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDaysToExpiryDate()
    {
      return $this->MaxDaysToExpiryDate;
    }

    /**
     * @param int $MaxDaysToExpiryDate
     * @return \Ongoing\CustomerOrderLine
     */
    public function setMaxDaysToExpiryDate($MaxDaysToExpiryDate)
    {
      $this->MaxDaysToExpiryDate = $MaxDaysToExpiryDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return \Ongoing\CustomerOrderLine
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineSerial()
    {
      return $this->OrderLineSerial;
    }

    /**
     * @param string $OrderLineSerial
     * @return \Ongoing\CustomerOrderLine
     */
    public function setOrderLineSerial($OrderLineSerial)
    {
      $this->OrderLineSerial = $OrderLineSerial;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return \Ongoing\CustomerOrderLine
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return VatCodeClass
     */
    public function getVatCode()
    {
      return $this->VatCode;
    }

    /**
     * @param VatCodeClass $VatCode
     * @return \Ongoing\CustomerOrderLine
     */
    public function setVatCode($VatCode)
    {
      $this->VatCode = $VatCode;
      return $this;
    }

}
