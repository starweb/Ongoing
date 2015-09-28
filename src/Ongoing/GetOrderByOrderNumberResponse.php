<?php

namespace Ongoing;

class GetOrderByOrderNumberResponse
{

    /**
     * @var Order $GetOrderByOrderNumberResult
     */
    protected $GetOrderByOrderNumberResult = null;

    /**
     * @param Order $GetOrderByOrderNumberResult
     */
    public function __construct($GetOrderByOrderNumberResult)
    {
      $this->GetOrderByOrderNumberResult = $GetOrderByOrderNumberResult;
    }

    /**
     * @return Order
     */
    public function getGetOrderByOrderNumberResult()
    {
      return $this->GetOrderByOrderNumberResult;
    }

    /**
     * @param Order $GetOrderByOrderNumberResult
     * @return \Ongoing\GetOrderByOrderNumberResponse
     */
    public function setGetOrderByOrderNumberResult($GetOrderByOrderNumberResult)
    {
      $this->GetOrderByOrderNumberResult = $GetOrderByOrderNumberResult;
      return $this;
    }

}
