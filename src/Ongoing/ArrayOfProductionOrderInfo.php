<?php

namespace Ongoing;

class ArrayOfProductionOrderInfo
{

    /**
     * @var ProductionOrderInfo[] $ProductionOrderInfo
     */
    protected $ProductionOrderInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductionOrderInfo[]
     */
    public function getProductionOrderInfo()
    {
      return $this->ProductionOrderInfo;
    }

    /**
     * @param ProductionOrderInfo[] $ProductionOrderInfo
     * @return \Ongoing\ArrayOfProductionOrderInfo
     */
    public function setProductionOrderInfo(array $ProductionOrderInfo = null)
    {
      $this->ProductionOrderInfo = $ProductionOrderInfo;
      return $this;
    }

}
