<?php

namespace Ongoing;

class ProductionOrderHeaderInfo
{

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var \DateTime $ProductionDate
     */
    protected $ProductionDate = null;

    /**
     * @var float $OrderedNumberOfItems
     */
    protected $OrderedNumberOfItems = null;

    /**
     * @var float $ProducedNumberOfItems
     */
    protected $ProducedNumberOfItems = null;

    /**
     * @var \DateTime $StartProductionTime
     */
    protected $StartProductionTime = null;

    /**
     * @var \DateTime $EndProductionTime
     */
    protected $EndProductionTime = null;

    /**
     * @param int $GoodsOwnerId
     * @param float $OrderedNumberOfItems
     * @param float $ProducedNumberOfItems
     */
    public function __construct($GoodsOwnerId, $OrderedNumberOfItems, $ProducedNumberOfItems)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
      $this->ProducedNumberOfItems = $ProducedNumberOfItems;
    }

    /**
     * @return int
     */
    public function getGoodsOwnerId()
    {
      return $this->GoodsOwnerId;
    }

    /**
     * @param int $GoodsOwnerId
     * @return \Ongoing\ProductionOrderHeaderInfo
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
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
     * @return \Ongoing\ProductionOrderHeaderInfo
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
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
     * @return \Ongoing\ProductionOrderHeaderInfo
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getProductionDate()
    {
      if ($this->ProductionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ProductionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ProductionDate
     * @return \Ongoing\ProductionOrderHeaderInfo
     */
    public function setProductionDate(\DateTime $ProductionDate = null)
    {
      if ($ProductionDate == null) {
       $this->ProductionDate = null;
      } else {
        $this->ProductionDate = $ProductionDate->format(\DateTime::ATOM);
      }
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
     * @return \Ongoing\ProductionOrderHeaderInfo
     */
    public function setOrderedNumberOfItems($OrderedNumberOfItems)
    {
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getProducedNumberOfItems()
    {
      return $this->ProducedNumberOfItems;
    }

    /**
     * @param float $ProducedNumberOfItems
     * @return \Ongoing\ProductionOrderHeaderInfo
     */
    public function setProducedNumberOfItems($ProducedNumberOfItems)
    {
      $this->ProducedNumberOfItems = $ProducedNumberOfItems;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartProductionTime()
    {
      if ($this->StartProductionTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartProductionTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartProductionTime
     * @return \Ongoing\ProductionOrderHeaderInfo
     */
    public function setStartProductionTime(\DateTime $StartProductionTime = null)
    {
      if ($StartProductionTime == null) {
       $this->StartProductionTime = null;
      } else {
        $this->StartProductionTime = $StartProductionTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndProductionTime()
    {
      if ($this->EndProductionTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndProductionTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndProductionTime
     * @return \Ongoing\ProductionOrderHeaderInfo
     */
    public function setEndProductionTime(\DateTime $EndProductionTime = null)
    {
      if ($EndProductionTime == null) {
       $this->EndProductionTime = null;
      } else {
        $this->EndProductionTime = $EndProductionTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
