<?php

namespace Ongoing;

class GetWarehouseTransferOrdersResult
{

    /**
     * @var ArrayOfWarehouseTransferOrderInfo $Orders
     */
    protected $Orders = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfWarehouseTransferOrderInfo
     */
    public function getOrders()
    {
      return $this->Orders;
    }

    /**
     * @param ArrayOfWarehouseTransferOrderInfo $Orders
     * @return \Ongoing\GetWarehouseTransferOrdersResult
     */
    public function setOrders($Orders)
    {
      $this->Orders = $Orders;
      return $this;
    }

}
