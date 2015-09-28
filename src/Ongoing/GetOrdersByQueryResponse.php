<?php

namespace Ongoing;

class GetOrdersByQueryResponse
{

    /**
     * @var GetOrdersResult $GetOrdersByQueryResult
     */
    protected $GetOrdersByQueryResult = null;

    /**
     * @param GetOrdersResult $GetOrdersByQueryResult
     */
    public function __construct($GetOrdersByQueryResult)
    {
      $this->GetOrdersByQueryResult = $GetOrdersByQueryResult;
    }

    /**
     * @return GetOrdersResult
     */
    public function getGetOrdersByQueryResult()
    {
      return $this->GetOrdersByQueryResult;
    }

    /**
     * @param GetOrdersResult $GetOrdersByQueryResult
     * @return \Ongoing\GetOrdersByQueryResponse
     */
    public function setGetOrdersByQueryResult($GetOrdersByQueryResult)
    {
      $this->GetOrdersByQueryResult = $GetOrdersByQueryResult;
      return $this;
    }

}
