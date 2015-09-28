<?php

namespace Ongoing;

class GoodsStatusInventoryRow
{

    /**
     * @var string $GoodsStatusName
     */
    protected $GoodsStatusName = null;

    /**
     * @var string $GoodsStatusCode
     */
    protected $GoodsStatusCode = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $LockedNumberOfItems
     */
    protected $LockedNumberOfItems = null;

    /**
     * @param float $NumberOfItems
     * @param float $LockedNumberOfItems
     */
    public function __construct($NumberOfItems, $LockedNumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      $this->LockedNumberOfItems = $LockedNumberOfItems;
    }

    /**
     * @return string
     */
    public function getGoodsStatusName()
    {
      return $this->GoodsStatusName;
    }

    /**
     * @param string $GoodsStatusName
     * @return \Ongoing\GoodsStatusInventoryRow
     */
    public function setGoodsStatusName($GoodsStatusName)
    {
      $this->GoodsStatusName = $GoodsStatusName;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsStatusCode()
    {
      return $this->GoodsStatusCode;
    }

    /**
     * @param string $GoodsStatusCode
     * @return \Ongoing\GoodsStatusInventoryRow
     */
    public function setGoodsStatusCode($GoodsStatusCode)
    {
      $this->GoodsStatusCode = $GoodsStatusCode;
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
     * @return \Ongoing\GoodsStatusInventoryRow
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getLockedNumberOfItems()
    {
      return $this->LockedNumberOfItems;
    }

    /**
     * @param float $LockedNumberOfItems
     * @return \Ongoing\GoodsStatusInventoryRow
     */
    public function setLockedNumberOfItems($LockedNumberOfItems)
    {
      $this->LockedNumberOfItems = $LockedNumberOfItems;
      return $this;
    }

}
