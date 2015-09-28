<?php

namespace Ongoing;

class InventoryResult
{

    /**
     * @var ArrayOfInventoryLine $InventoryLines
     */
    protected $InventoryLines = null;

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @param int $GoodsOwnerId
     */
    public function __construct($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
    }

    /**
     * @return ArrayOfInventoryLine
     */
    public function getInventoryLines()
    {
      return $this->InventoryLines;
    }

    /**
     * @param ArrayOfInventoryLine $InventoryLines
     * @return \Ongoing\InventoryResult
     */
    public function setInventoryLines($InventoryLines)
    {
      $this->InventoryLines = $InventoryLines;
      return $this;
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
     * @return \Ongoing\InventoryResult
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

}
