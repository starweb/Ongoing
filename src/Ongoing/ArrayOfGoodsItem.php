<?php

namespace Ongoing;

class ArrayOfGoodsItem
{

    /**
     * @var GoodsItem[] $GoodsItem
     */
    protected $GoodsItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GoodsItem[]
     */
    public function getGoodsItem()
    {
      return $this->GoodsItem;
    }

    /**
     * @param GoodsItem[] $GoodsItem
     * @return \Ongoing\ArrayOfGoodsItem
     */
    public function setGoodsItem(array $GoodsItem = null)
    {
      $this->GoodsItem = $GoodsItem;
      return $this;
    }

}
