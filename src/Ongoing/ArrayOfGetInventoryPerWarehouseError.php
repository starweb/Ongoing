<?php

namespace Ongoing;

class ArrayOfGetInventoryPerWarehouseError
{

    /**
     * @var GetInventoryPerWarehouseError[] $GetInventoryPerWarehouseError
     */
    protected $GetInventoryPerWarehouseError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetInventoryPerWarehouseError[]
     */
    public function getGetInventoryPerWarehouseError()
    {
      return $this->GetInventoryPerWarehouseError;
    }

    /**
     * @param GetInventoryPerWarehouseError[] $GetInventoryPerWarehouseError
     * @return \Ongoing\ArrayOfGetInventoryPerWarehouseError
     */
    public function setGetInventoryPerWarehouseError(array $GetInventoryPerWarehouseError = null)
    {
      $this->GetInventoryPerWarehouseError = $GetInventoryPerWarehouseError;
      return $this;
    }

}
