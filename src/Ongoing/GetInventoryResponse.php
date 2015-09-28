<?php

namespace Ongoing;

class GetInventoryResponse
{

    /**
     * @var InventoryResult $GetInventoryResult
     */
    protected $GetInventoryResult = null;

    /**
     * @param InventoryResult $GetInventoryResult
     */
    public function __construct($GetInventoryResult)
    {
      $this->GetInventoryResult = $GetInventoryResult;
    }

    /**
     * @return InventoryResult
     */
    public function getGetInventoryResult()
    {
      return $this->GetInventoryResult;
    }

    /**
     * @param InventoryResult $GetInventoryResult
     * @return \Ongoing\GetInventoryResponse
     */
    public function setGetInventoryResult($GetInventoryResult)
    {
      $this->GetInventoryResult = $GetInventoryResult;
      return $this;
    }

}
