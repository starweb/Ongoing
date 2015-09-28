<?php

namespace Ongoing;

class InOrderLine
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
     * @var int $OrderLineSystemId
     */
    protected $OrderLineSystemId = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var string $ExternalOrderLineId
     */
    protected $ExternalOrderLineId = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var \DateTime $Indate
     */
    protected $Indate = null;

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
     * @var string $ArticleCode
     */
    protected $ArticleCode = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $RowPrice
     */
    protected $RowPrice = null;

    /**
     * @var float $SupplierNumberOfItems
     */
    protected $SupplierNumberOfItems = null;

    /**
     * @var string $RowBatchNo
     */
    protected $RowBatchNo = null;

    /**
     * @var ArrayOfInOrderLineArticleItem $Items
     */
    protected $Items = null;

    /**
     * @param OrderLineIdentificationType $OrderLineIdentification
     * @param ArticleIdentificationType $ArticleIdentification
     * @param int $OrderLineSystemId
     * @param int $ArticleSystemId
     * @param float $NumberOfItems
     */
    public function __construct($OrderLineIdentification, $ArticleIdentification, $OrderLineSystemId, $ArticleSystemId, $NumberOfItems)
    {
      $this->OrderLineIdentification = $OrderLineIdentification;
      $this->ArticleIdentification = $ArticleIdentification;
      $this->OrderLineSystemId = $OrderLineSystemId;
      $this->ArticleSystemId = $ArticleSystemId;
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
     * @return \Ongoing\InOrderLine
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
     * @return \Ongoing\InOrderLine
     */
    public function setArticleIdentification($ArticleIdentification)
    {
      $this->ArticleIdentification = $ArticleIdentification;
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
     * @return \Ongoing\InOrderLine
     */
    public function setOrderLineSystemId($OrderLineSystemId)
    {
      $this->OrderLineSystemId = $OrderLineSystemId;
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
     * @return \Ongoing\InOrderLine
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderLineId()
    {
      return $this->ExternalOrderLineId;
    }

    /**
     * @param string $ExternalOrderLineId
     * @return \Ongoing\InOrderLine
     */
    public function setExternalOrderLineId($ExternalOrderLineId)
    {
      $this->ExternalOrderLineId = $ExternalOrderLineId;
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
     * @return \Ongoing\InOrderLine
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIndate()
    {
      if ($this->Indate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Indate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Indate
     * @return \Ongoing\InOrderLine
     */
    public function setIndate(\DateTime $Indate = null)
    {
      if ($Indate == null) {
       $this->Indate = null;
      } else {
        $this->Indate = $Indate->format(\DateTime::ATOM);
      }
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
     * @return \Ongoing\InOrderLine
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
     * @return \Ongoing\InOrderLine
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
     * @return \Ongoing\InOrderLine
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
     * @return \Ongoing\InOrderLine
     */
    public function setArticleName($ArticleName)
    {
      $this->ArticleName = $ArticleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleCode()
    {
      return $this->ArticleCode;
    }

    /**
     * @param string $ArticleCode
     * @return \Ongoing\InOrderLine
     */
    public function setArticleCode($ArticleCode)
    {
      $this->ArticleCode = $ArticleCode;
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
     * @return \Ongoing\InOrderLine
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
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
     * @return \Ongoing\InOrderLine
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowPrice()
    {
      return $this->RowPrice;
    }

    /**
     * @param float $RowPrice
     * @return \Ongoing\InOrderLine
     */
    public function setRowPrice($RowPrice)
    {
      $this->RowPrice = $RowPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getSupplierNumberOfItems()
    {
      return $this->SupplierNumberOfItems;
    }

    /**
     * @param float $SupplierNumberOfItems
     * @return \Ongoing\InOrderLine
     */
    public function setSupplierNumberOfItems($SupplierNumberOfItems)
    {
      $this->SupplierNumberOfItems = $SupplierNumberOfItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getRowBatchNo()
    {
      return $this->RowBatchNo;
    }

    /**
     * @param string $RowBatchNo
     * @return \Ongoing\InOrderLine
     */
    public function setRowBatchNo($RowBatchNo)
    {
      $this->RowBatchNo = $RowBatchNo;
      return $this;
    }

    /**
     * @return ArrayOfInOrderLineArticleItem
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfInOrderLineArticleItem $Items
     * @return \Ongoing\InOrderLine
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
