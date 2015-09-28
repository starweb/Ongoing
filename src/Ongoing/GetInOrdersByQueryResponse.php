<?php

namespace Ongoing;

class GetInOrdersByQueryResponse
{

    /**
     * @var GetInOrdersResult $GetInOrdersByQueryResult
     */
    protected $GetInOrdersByQueryResult = null;

    /**
     * @param GetInOrdersResult $GetInOrdersByQueryResult
     */
    public function __construct($GetInOrdersByQueryResult)
    {
      $this->GetInOrdersByQueryResult = $GetInOrdersByQueryResult;
    }

    /**
     * @return GetInOrdersResult
     */
    public function getGetInOrdersByQueryResult()
    {
      return $this->GetInOrdersByQueryResult;
    }

    /**
     * @param GetInOrdersResult $GetInOrdersByQueryResult
     * @return \Ongoing\GetInOrdersByQueryResponse
     */
    public function setGetInOrdersByQueryResult($GetInOrdersByQueryResult)
    {
      $this->GetInOrdersByQueryResult = $GetInOrdersByQueryResult;
      return $this;
    }

}
