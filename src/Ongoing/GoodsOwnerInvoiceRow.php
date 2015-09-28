<?php

namespace Ongoing;

class GoodsOwnerInvoiceRow
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
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var string $ContainerBatch
     */
    protected $ContainerBatch = null;

    /**
     * @var string $RowComment
     */
    protected $RowComment = null;

    /**
     * @var \DateTime $ActionDate
     */
    protected $ActionDate = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var GoodsOwnerInvoiceArticle $InvoiceArticle
     */
    protected $InvoiceArticle = null;

    /**
     * @param int $InvoiceRowId
     * @param float $Price
     * @param float $NumberOfItems
     */
    public function __construct($InvoiceRowId, $Price, $NumberOfItems)
    {
      $this->InvoiceRowId = $InvoiceRowId;
      $this->Price = $Price;
      $this->NumberOfItems = $NumberOfItems;
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
     * @return \Ongoing\GoodsOwnerInvoiceRow
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
     * @return \Ongoing\GoodsOwnerInvoiceRow
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
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
     * @return \Ongoing\GoodsOwnerInvoiceRow
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
     * @return \Ongoing\GoodsOwnerInvoiceRow
     */
    public function setContainerBatch($ContainerBatch)
    {
      $this->ContainerBatch = $ContainerBatch;
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
     * @return \Ongoing\GoodsOwnerInvoiceRow
     */
    public function setRowComment($RowComment)
    {
      $this->RowComment = $RowComment;
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
     * @return \Ongoing\GoodsOwnerInvoiceRow
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
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return \Ongoing\GoodsOwnerInvoiceRow
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return GoodsOwnerInvoiceArticle
     */
    public function getInvoiceArticle()
    {
      return $this->InvoiceArticle;
    }

    /**
     * @param GoodsOwnerInvoiceArticle $InvoiceArticle
     * @return \Ongoing\GoodsOwnerInvoiceRow
     */
    public function setInvoiceArticle($InvoiceArticle)
    {
      $this->InvoiceArticle = $InvoiceArticle;
      return $this;
    }

}
