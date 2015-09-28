<?php

namespace Ongoing;

class ArrayOfGoodsStatusInventoryRow
{

    /**
     * @var GoodsStatusInventoryRow[] $GoodsStatusInventoryRow
     */
    protected $GoodsStatusInventoryRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GoodsStatusInventoryRow[]
     */
    public function getGoodsStatusInventoryRow()
    {
      return $this->GoodsStatusInventoryRow;
    }

    /**
     * @param GoodsStatusInventoryRow[] $GoodsStatusInventoryRow
     * @return \Ongoing\ArrayOfGoodsStatusInventoryRow
     */
    public function setGoodsStatusInventoryRow(array $GoodsStatusInventoryRow = null)
    {
      $this->GoodsStatusInventoryRow = $GoodsStatusInventoryRow;
      return $this;
    }

}
