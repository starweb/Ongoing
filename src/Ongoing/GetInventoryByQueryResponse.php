<?php

namespace Ongoing;

class GetInventoryByQueryResponse
{

    /**
     * @var InventoryResult $GetInventoryByQueryResult
     */
    protected $GetInventoryByQueryResult = null;

    /**
     * @param InventoryResult $GetInventoryByQueryResult
     */
    public function __construct($GetInventoryByQueryResult)
    {
      $this->GetInventoryByQueryResult = $GetInventoryByQueryResult;
    }

    /**
     * @return InventoryResult
     */
    public function getGetInventoryByQueryResult()
    {
      return $this->GetInventoryByQueryResult;
    }

    /**
     * @param InventoryResult $GetInventoryByQueryResult
     * @return \Ongoing\GetInventoryByQueryResponse
     */
    public function setGetInventoryByQueryResult($GetInventoryByQueryResult)
    {
      $this->GetInventoryByQueryResult = $GetInventoryByQueryResult;
      return $this;
    }

}
