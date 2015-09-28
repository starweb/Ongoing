<?php

namespace Ongoing;

class GetOrdersResult
{

    /**
     * @var ArrayOfOrder $Orders
     */
    protected $Orders = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfOrder
     */
    public function getOrders()
    {
      return $this->Orders;
    }

    /**
     * @param ArrayOfOrder $Orders
     * @return \Ongoing\GetOrdersResult
     */
    public function setOrders($Orders)
    {
      $this->Orders = $Orders;
      return $this;
    }

}
