<?php

namespace Ongoing;

class ArrayOfProductionOrderLineInfo
{

    /**
     * @var ProductionOrderLineInfo[] $ProductionOrderLineInfo
     */
    protected $ProductionOrderLineInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductionOrderLineInfo[]
     */
    public function getProductionOrderLineInfo()
    {
      return $this->ProductionOrderLineInfo;
    }

    /**
     * @param ProductionOrderLineInfo[] $ProductionOrderLineInfo
     * @return \Ongoing\ArrayOfProductionOrderLineInfo
     */
    public function setProductionOrderLineInfo(array $ProductionOrderLineInfo = null)
    {
      $this->ProductionOrderLineInfo = $ProductionOrderLineInfo;
      return $this;
    }

}
