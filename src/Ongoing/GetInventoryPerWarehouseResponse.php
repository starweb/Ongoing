<?php

namespace Ongoing;

class GetInventoryPerWarehouseResponse
{

    /**
     * @var GetInventoryPerWarehouseResult $GetInventoryPerWarehouseResult
     */
    protected $GetInventoryPerWarehouseResult = null;

    /**
     * @param GetInventoryPerWarehouseResult $GetInventoryPerWarehouseResult
     */
    public function __construct($GetInventoryPerWarehouseResult)
    {
      $this->GetInventoryPerWarehouseResult = $GetInventoryPerWarehouseResult;
    }

    /**
     * @return GetInventoryPerWarehouseResult
     */
    public function getGetInventoryPerWarehouseResult()
    {
      return $this->GetInventoryPerWarehouseResult;
    }

    /**
     * @param GetInventoryPerWarehouseResult $GetInventoryPerWarehouseResult
     * @return \Ongoing\GetInventoryPerWarehouseResponse
     */
    public function setGetInventoryPerWarehouseResult($GetInventoryPerWarehouseResult)
    {
      $this->GetInventoryPerWarehouseResult = $GetInventoryPerWarehouseResult;
      return $this;
    }

}
