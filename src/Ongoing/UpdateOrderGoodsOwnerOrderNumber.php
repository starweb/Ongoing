<?php

namespace Ongoing;

class UpdateOrderGoodsOwnerOrderNumber
{

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderNumber()
    {
      return $this->GoodsOwnerOrderNumber;
    }

    /**
     * @param string $GoodsOwnerOrderNumber
     * @return \Ongoing\UpdateOrderGoodsOwnerOrderNumber
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
      return $this;
    }

}
