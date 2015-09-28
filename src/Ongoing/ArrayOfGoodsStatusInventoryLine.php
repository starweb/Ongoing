<?php

namespace Ongoing;

class ArrayOfGoodsStatusInventoryLine
{

    /**
     * @var GoodsStatusInventoryLine[] $GoodsStatusInventoryLine
     */
    protected $GoodsStatusInventoryLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GoodsStatusInventoryLine[]
     */
    public function getGoodsStatusInventoryLine()
    {
      return $this->GoodsStatusInventoryLine;
    }

    /**
     * @param GoodsStatusInventoryLine[] $GoodsStatusInventoryLine
     * @return \Ongoing\ArrayOfGoodsStatusInventoryLine
     */
    public function setGoodsStatusInventoryLine(array $GoodsStatusInventoryLine = null)
    {
      $this->GoodsStatusInventoryLine = $GoodsStatusInventoryLine;
      return $this;
    }

}
