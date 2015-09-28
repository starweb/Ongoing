<?php

namespace Ongoing;

class ReceivedInOrderLine
{

    /**
     * @var ArticleClass $Article
     */
    protected $Article = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var string $ExternalOrderLineId
     */
    protected $ExternalOrderLineId = null;

    /**
     * @var \DateTime $InDate
     */
    protected $InDate = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var float $AdvisedNumberOfItems
     */
    protected $AdvisedNumberOfItems = null;

    /**
     * @var float $ReceivedNumberOfItems
     */
    protected $ReceivedNumberOfItems = null;

    /**
     * @var float $CreatedNumberOfItems
     */
    protected $CreatedNumberOfItems = null;

    /**
     * @var float $ShipmentNumberOfItems
     */
    protected $ShipmentNumberOfItems = null;

    /**
     * @var float $SupplierNumberOfItems
     */
    protected $SupplierNumberOfItems = null;

    /**
     * @var float $ReportedNumberOfItems
     */
    protected $ReportedNumberOfItems = null;

    /**
     * @var float $RowPrice
     */
    protected $RowPrice = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $CurrencyName
     */
    protected $CurrencyName = null;

    /**
     * @var int $InOrderLineId
     */
    protected $InOrderLineId = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @param float $AdvisedNumberOfItems
     * @param float $ReceivedNumberOfItems
     * @param float $CreatedNumberOfItems
     * @param int $InOrderLineId
     */
    public function __construct($AdvisedNumberOfItems, $ReceivedNumberOfItems, $CreatedNumberOfItems, $InOrderLineId)
    {
      $this->AdvisedNumberOfItems = $AdvisedNumberOfItems;
      $this->ReceivedNumberOfItems = $ReceivedNumberOfItems;
      $this->CreatedNumberOfItems = $CreatedNumberOfItems;
      $this->InOrderLineId = $InOrderLineId;
    }

    /**
     * @return ArticleClass
     */
    public function getArticle()
    {
      return $this->Article;
    }

    /**
     * @param ArticleClass $Article
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
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
     * @return \Ongoing\ReceivedInOrderLine
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
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setExternalOrderLineId($ExternalOrderLineId)
    {
      $this->ExternalOrderLineId = $ExternalOrderLineId;
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
     * @return \Ongoing\ReceivedInOrderLine
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
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
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
     * @return \Ongoing\ReceivedInOrderLine
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
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setReceivedNumberOfItems($ReceivedNumberOfItems)
    {
      $this->ReceivedNumberOfItems = $ReceivedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getCreatedNumberOfItems()
    {
      return $this->CreatedNumberOfItems;
    }

    /**
     * @param float $CreatedNumberOfItems
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setCreatedNumberOfItems($CreatedNumberOfItems)
    {
      $this->CreatedNumberOfItems = $CreatedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getShipmentNumberOfItems()
    {
      return $this->ShipmentNumberOfItems;
    }

    /**
     * @param float $ShipmentNumberOfItems
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setShipmentNumberOfItems($ShipmentNumberOfItems)
    {
      $this->ShipmentNumberOfItems = $ShipmentNumberOfItems;
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
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setSupplierNumberOfItems($SupplierNumberOfItems)
    {
      $this->SupplierNumberOfItems = $SupplierNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getReportedNumberOfItems()
    {
      return $this->ReportedNumberOfItems;
    }

    /**
     * @param float $ReportedNumberOfItems
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setReportedNumberOfItems($ReportedNumberOfItems)
    {
      $this->ReportedNumberOfItems = $ReportedNumberOfItems;
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
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setRowPrice($RowPrice)
    {
      $this->RowPrice = $RowPrice;
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
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyName()
    {
      return $this->CurrencyName;
    }

    /**
     * @param string $CurrencyName
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setCurrencyName($CurrencyName)
    {
      $this->CurrencyName = $CurrencyName;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderLineId()
    {
      return $this->InOrderLineId;
    }

    /**
     * @param int $InOrderLineId
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setInOrderLineId($InOrderLineId)
    {
      $this->InOrderLineId = $InOrderLineId;
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
     * @return \Ongoing\ReceivedInOrderLine
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

}
