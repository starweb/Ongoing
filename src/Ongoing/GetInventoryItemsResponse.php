<?php

namespace Ongoing;

class GetInventoryItemsResponse
{

    /**
     * @var InventoryItemsResult $GetInventoryItemsResult
     */
    protected $GetInventoryItemsResult = null;

    /**
     * @param InventoryItemsResult $GetInventoryItemsResult
     */
    public function __construct($GetInventoryItemsResult)
    {
      $this->GetInventoryItemsResult = $GetInventoryItemsResult;
    }

    /**
     * @return InventoryItemsResult
     */
    public function getGetInventoryItemsResult()
    {
      return $this->GetInventoryItemsResult;
    }

    /**
     * @param InventoryItemsResult $GetInventoryItemsResult
     * @return \Ongoing\GetInventoryItemsResponse
     */
    public function setGetInventoryItemsResult($GetInventoryItemsResult)
    {
      $this->GetInventoryItemsResult = $GetInventoryItemsResult;
      return $this;
    }

}
