<?php

namespace Ongoing;

class PerWarehouseStockLine
{

    /**
     * @var int $WarehouseId
     */
    protected $WarehouseId = null;

    /**
     * @var string $WarehouseCode
     */
    protected $WarehouseCode = null;

    /**
     * @var float $NumberOfLockedItems
     */
    protected $NumberOfLockedItems = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $NumberOfBookedItems
     */
    protected $NumberOfBookedItems = null;

    /**
     * @param int $WarehouseId
     * @param float $NumberOfLockedItems
     * @param float $NumberOfItems
     * @param float $NumberOfBookedItems
     */
    public function __construct($WarehouseId, $NumberOfLockedItems, $NumberOfItems, $NumberOfBookedItems)
    {
      $this->WarehouseId = $WarehouseId;
      $this->NumberOfLockedItems = $NumberOfLockedItems;
      $this->NumberOfItems = $NumberOfItems;
      $this->NumberOfBookedItems = $NumberOfBookedItems;
    }

    /**
     * @return int
     */
    public function getWarehouseId()
    {
      return $this->WarehouseId;
    }

    /**
     * @param int $WarehouseId
     * @return \Ongoing\PerWarehouseStockLine
     */
    public function setWarehouseId($WarehouseId)
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseCode()
    {
      return $this->WarehouseCode;
    }

    /**
     * @param string $WarehouseCode
     * @return \Ongoing\PerWarehouseStockLine
     */
    public function setWarehouseCode($WarehouseCode)
    {
      $this->WarehouseCode = $WarehouseCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfLockedItems()
    {
      return $this->NumberOfLockedItems;
    }

    /**
     * @param float $NumberOfLockedItems
     * @return \Ongoing\PerWarehouseStockLine
     */
    public function setNumberOfLockedItems($NumberOfLockedItems)
    {
      $this->NumberOfLockedItems = $NumberOfLockedItems;
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
     * @return \Ongoing\PerWarehouseStockLine
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfBookedItems()
    {
      return $this->NumberOfBookedItems;
    }

    /**
     * @param float $NumberOfBookedItems
     * @return \Ongoing\PerWarehouseStockLine
     */
    public function setNumberOfBookedItems($NumberOfBookedItems)
    {
      $this->NumberOfBookedItems = $NumberOfBookedItems;
      return $this;
    }

}
