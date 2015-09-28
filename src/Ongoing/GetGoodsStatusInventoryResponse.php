<?php

namespace Ongoing;

class GetGoodsStatusInventoryResponse
{

    /**
     * @var GoodsStatusInventoryResult $GetGoodsStatusInventoryResult
     */
    protected $GetGoodsStatusInventoryResult = null;

    /**
     * @param GoodsStatusInventoryResult $GetGoodsStatusInventoryResult
     */
    public function __construct($GetGoodsStatusInventoryResult)
    {
      $this->GetGoodsStatusInventoryResult = $GetGoodsStatusInventoryResult;
    }

    /**
     * @return GoodsStatusInventoryResult
     */
    public function getGetGoodsStatusInventoryResult()
    {
      return $this->GetGoodsStatusInventoryResult;
    }

    /**
     * @param GoodsStatusInventoryResult $GetGoodsStatusInventoryResult
     * @return \Ongoing\GetGoodsStatusInventoryResponse
     */
    public function setGetGoodsStatusInventoryResult($GetGoodsStatusInventoryResult)
    {
      $this->GetGoodsStatusInventoryResult = $GetGoodsStatusInventoryResult;
      return $this;
    }

}
