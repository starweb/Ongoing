<?php

namespace Ongoing;

class PickedOrderLine
{

    /**
     * @var ArticleClass $Article
     */
    protected $Article = null;

    /**
     * @var int $OrderLineSystemId
     */
    protected $OrderLineSystemId = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var \DateTime $LastPickingTime
     */
    protected $LastPickingTime = null;

    /**
     * @var \DateTime $StartPickingTime
     */
    protected $StartPickingTime = null;

    /**
     * @var string $OrderLineComment
     */
    protected $OrderLineComment = null;

    /**
     * @var float $OrderedNumberOfItems
     */
    protected $OrderedNumberOfItems = null;

    /**
     * @var float $PickedNumberOfItems
     */
    protected $PickedNumberOfItems = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var int $ParentOrderLineId
     */
    protected $ParentOrderLineId = null;

    /**
     * @var boolean $IsParentLine
     */
    protected $IsParentLine = null;

    /**
     * @var boolean $DoPick
     */
    protected $DoPick = null;

    /**
     * @var float $RowPrice
     */
    protected $RowPrice = null;

    /**
     * @var float $LinePrice
     */
    protected $LinePrice = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $CurrencyName
     */
    protected $CurrencyName = null;

    /**
     * @var float $ReportedNumberOfItems
     */
    protected $ReportedNumberOfItems = null;

    /**
     * @var string $Batch
     */
    protected $Batch = null;

    /**
     * @var float $AllocatedNumberOfItems
     */
    protected $AllocatedNumberOfItems = null;

    /**
     * @var float $AcknowledgedNumberOfItems
     */
    protected $AcknowledgedNumberOfItems = null;

    /**
     * @param int $OrderLineSystemId
     * @param float $OrderedNumberOfItems
     * @param float $PickedNumberOfItems
     * @param boolean $IsParentLine
     * @param boolean $DoPick
     * @param float $AllocatedNumberOfItems
     */
    public function __construct($OrderLineSystemId, $OrderedNumberOfItems, $PickedNumberOfItems, $IsParentLine, $DoPick, $AllocatedNumberOfItems)
    {
      $this->OrderLineSystemId = $OrderLineSystemId;
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
      $this->PickedNumberOfItems = $PickedNumberOfItems;
      $this->IsParentLine = $IsParentLine;
      $this->DoPick = $DoPick;
      $this->AllocatedNumberOfItems = $AllocatedNumberOfItems;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
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
     * @return \Ongoing\PickedOrderLine
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
     * @return \Ongoing\PickedOrderLine
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
    public function getLastPickingTime()
    {
      if ($this->LastPickingTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPickingTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPickingTime
     * @return \Ongoing\PickedOrderLine
     */
    public function setLastPickingTime(\DateTime $LastPickingTime = null)
    {
      if ($LastPickingTime == null) {
       $this->LastPickingTime = null;
      } else {
        $this->LastPickingTime = $LastPickingTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartPickingTime()
    {
      if ($this->StartPickingTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartPickingTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartPickingTime
     * @return \Ongoing\PickedOrderLine
     */
    public function setStartPickingTime(\DateTime $StartPickingTime = null)
    {
      if ($StartPickingTime == null) {
       $this->StartPickingTime = null;
      } else {
        $this->StartPickingTime = $StartPickingTime->format(\DateTime::ATOM);
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setOrderLineComment($OrderLineComment)
    {
      $this->OrderLineComment = $OrderLineComment;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setOrderedNumberOfItems($OrderedNumberOfItems)
    {
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setPickedNumberOfItems($PickedNumberOfItems)
    {
      $this->PickedNumberOfItems = $PickedNumberOfItems;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentOrderLineId()
    {
      return $this->ParentOrderLineId;
    }

    /**
     * @param int $ParentOrderLineId
     * @return \Ongoing\PickedOrderLine
     */
    public function setParentOrderLineId($ParentOrderLineId)
    {
      $this->ParentOrderLineId = $ParentOrderLineId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsParentLine()
    {
      return $this->IsParentLine;
    }

    /**
     * @param boolean $IsParentLine
     * @return \Ongoing\PickedOrderLine
     */
    public function setIsParentLine($IsParentLine)
    {
      $this->IsParentLine = $IsParentLine;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setDoPick($DoPick)
    {
      $this->DoPick = $DoPick;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setRowPrice($RowPrice)
    {
      $this->RowPrice = $RowPrice;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setLinePrice($LinePrice)
    {
      $this->LinePrice = $LinePrice;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
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
     * @return \Ongoing\PickedOrderLine
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setCurrencyName($CurrencyName)
    {
      $this->CurrencyName = $CurrencyName;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setReportedNumberOfItems($ReportedNumberOfItems)
    {
      $this->ReportedNumberOfItems = $ReportedNumberOfItems;
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
     * @return \Ongoing\PickedOrderLine
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
      return $this;
    }

    /**
     * @return float
     */
    public function getAllocatedNumberOfItems()
    {
      return $this->AllocatedNumberOfItems;
    }

    /**
     * @param float $AllocatedNumberOfItems
     * @return \Ongoing\PickedOrderLine
     */
    public function setAllocatedNumberOfItems($AllocatedNumberOfItems)
    {
      $this->AllocatedNumberOfItems = $AllocatedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getAcknowledgedNumberOfItems()
    {
      return $this->AcknowledgedNumberOfItems;
    }

    /**
     * @param float $AcknowledgedNumberOfItems
     * @return \Ongoing\PickedOrderLine
     */
    public function setAcknowledgedNumberOfItems($AcknowledgedNumberOfItems)
    {
      $this->AcknowledgedNumberOfItems = $AcknowledgedNumberOfItems;
      return $this;
    }

}
