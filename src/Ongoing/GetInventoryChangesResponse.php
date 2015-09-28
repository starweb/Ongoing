<?php

namespace Ongoing;

class GetInventoryChangesResponse
{

    /**
     * @var InventoryChangesResult $GetInventoryChangesResult
     */
    protected $GetInventoryChangesResult = null;

    /**
     * @param InventoryChangesResult $GetInventoryChangesResult
     */
    public function __construct($GetInventoryChangesResult)
    {
      $this->GetInventoryChangesResult = $GetInventoryChangesResult;
    }

    /**
     * @return InventoryChangesResult
     */
    public function getGetInventoryChangesResult()
    {
      return $this->GetInventoryChangesResult;
    }

    /**
     * @param InventoryChangesResult $GetInventoryChangesResult
     * @return \Ongoing\GetInventoryChangesResponse
     */
    public function setGetInventoryChangesResult($GetInventoryChangesResult)
    {
      $this->GetInventoryChangesResult = $GetInventoryChangesResult;
      return $this;
    }

}
