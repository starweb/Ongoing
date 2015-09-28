<?php

namespace Ongoing;

class InventoryChangesResult
{

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var ArrayOfInventoryChangeLine $InventoryChangeLines
     */
    protected $InventoryChangeLines = null;

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
     * @return \Ongoing\InventoryChangesResult
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return ArrayOfInventoryChangeLine
     */
    public function getInventoryChangeLines()
    {
      return $this->InventoryChangeLines;
    }

    /**
     * @param ArrayOfInventoryChangeLine $InventoryChangeLines
     * @return \Ongoing\InventoryChangesResult
     */
    public function setInventoryChangeLines($InventoryChangeLines)
    {
      $this->InventoryChangeLines = $InventoryChangeLines;
      return $this;
    }

}
