<?php

namespace Ongoing;

class GetProductionOrdersByQueryResponse
{

    /**
     * @var GetProductionOrdersResult $GetProductionOrdersByQueryResult
     */
    protected $GetProductionOrdersByQueryResult = null;

    /**
     * @param GetProductionOrdersResult $GetProductionOrdersByQueryResult
     */
    public function __construct($GetProductionOrdersByQueryResult)
    {
      $this->GetProductionOrdersByQueryResult = $GetProductionOrdersByQueryResult;
    }

    /**
     * @return GetProductionOrdersResult
     */
    public function getGetProductionOrdersByQueryResult()
    {
      return $this->GetProductionOrdersByQueryResult;
    }

    /**
     * @param GetProductionOrdersResult $GetProductionOrdersByQueryResult
     * @return \Ongoing\GetProductionOrdersByQueryResponse
     */
    public function setGetProductionOrdersByQueryResult($GetProductionOrdersByQueryResult)
    {
      $this->GetProductionOrdersByQueryResult = $GetProductionOrdersByQueryResult;
      return $this;
    }

}
