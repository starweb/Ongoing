<?php

namespace Ongoing;

class GetReturnOrdersByQueryResponse
{

    /**
     * @var GetReturnOrdersResult $GetReturnOrdersByQueryResult
     */
    protected $GetReturnOrdersByQueryResult = null;

    /**
     * @param GetReturnOrdersResult $GetReturnOrdersByQueryResult
     */
    public function __construct($GetReturnOrdersByQueryResult)
    {
      $this->GetReturnOrdersByQueryResult = $GetReturnOrdersByQueryResult;
    }

    /**
     * @return GetReturnOrdersResult
     */
    public function getGetReturnOrdersByQueryResult()
    {
      return $this->GetReturnOrdersByQueryResult;
    }

    /**
     * @param GetReturnOrdersResult $GetReturnOrdersByQueryResult
     * @return \Ongoing\GetReturnOrdersByQueryResponse
     */
    public function setGetReturnOrdersByQueryResult($GetReturnOrdersByQueryResult)
    {
      $this->GetReturnOrdersByQueryResult = $GetReturnOrdersByQueryResult;
      return $this;
    }

}
