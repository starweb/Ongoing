<?php

namespace Ongoing;

class GetProductionOrdersResult
{

    /**
     * @var ArrayOfProductionOrderInfo $ProductionOrders
     */
    protected $ProductionOrders = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfProductionOrderInfo
     */
    public function getProductionOrders()
    {
      return $this->ProductionOrders;
    }

    /**
     * @param ArrayOfProductionOrderInfo $ProductionOrders
     * @return \Ongoing\GetProductionOrdersResult
     */
    public function setProductionOrders($ProductionOrders)
    {
      $this->ProductionOrders = $ProductionOrders;
      return $this;
    }

}
