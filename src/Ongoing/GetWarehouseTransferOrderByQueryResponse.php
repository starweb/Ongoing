<?php

namespace Ongoing;

class GetWarehouseTransferOrderByQueryResponse
{

    /**
     * @var GetWarehouseTransferOrdersResult $GetWarehouseTransferOrderByQueryResult
     */
    protected $GetWarehouseTransferOrderByQueryResult = null;

    /**
     * @param GetWarehouseTransferOrdersResult $GetWarehouseTransferOrderByQueryResult
     */
    public function __construct($GetWarehouseTransferOrderByQueryResult)
    {
      $this->GetWarehouseTransferOrderByQueryResult = $GetWarehouseTransferOrderByQueryResult;
    }

    /**
     * @return GetWarehouseTransferOrdersResult
     */
    public function getGetWarehouseTransferOrderByQueryResult()
    {
      return $this->GetWarehouseTransferOrderByQueryResult;
    }

    /**
     * @param GetWarehouseTransferOrdersResult $GetWarehouseTransferOrderByQueryResult
     * @return \Ongoing\GetWarehouseTransferOrderByQueryResponse
     */
    public function setGetWarehouseTransferOrderByQueryResult($GetWarehouseTransferOrderByQueryResult)
    {
      $this->GetWarehouseTransferOrderByQueryResult = $GetWarehouseTransferOrderByQueryResult;
      return $this;
    }

}
