<?php

namespace Ongoing;

class InventoryItemsResult
{

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var ArrayOfInventoryItemLine $InventoryItemLines
     */
    protected $InventoryItemLines = null;

    /**
     * @param int $GoodsOwnerId
     */
    public function __construct($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
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
     * @return \Ongoing\InventoryItemsResult
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return ArrayOfInventoryItemLine
     */
    public function getInventoryItemLines()
    {
      return $this->InventoryItemLines;
    }

    /**
     * @param ArrayOfInventoryItemLine $InventoryItemLines
     * @return \Ongoing\InventoryItemsResult
     */
    public function setInventoryItemLines($InventoryItemLines)
    {
      $this->InventoryItemLines = $InventoryItemLines;
      return $this;
    }

}
