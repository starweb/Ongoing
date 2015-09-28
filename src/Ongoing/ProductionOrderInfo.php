<?php

namespace Ongoing;

class ProductionOrderInfo
{

    /**
     * @var ProductionOrderHeaderInfo $ProductionOrderHeader
     */
    protected $ProductionOrderHeader = null;

    /**
     * @var ArrayOfProductionOrderLineInfo $ProductionOrderLines
     */
    protected $ProductionOrderLines = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductionOrderHeaderInfo
     */
    public function getProductionOrderHeader()
    {
      return $this->ProductionOrderHeader;
    }

    /**
     * @param ProductionOrderHeaderInfo $ProductionOrderHeader
     * @return \Ongoing\ProductionOrderInfo
     */
    public function setProductionOrderHeader($ProductionOrderHeader)
    {
      $this->ProductionOrderHeader = $ProductionOrderHeader;
      return $this;
    }

    /**
     * @return ArrayOfProductionOrderLineInfo
     */
    public function getProductionOrderLines()
    {
      return $this->ProductionOrderLines;
    }

    /**
     * @param ArrayOfProductionOrderLineInfo $ProductionOrderLines
     * @return \Ongoing\ProductionOrderInfo
     */
    public function setProductionOrderLines($ProductionOrderLines)
    {
      $this->ProductionOrderLines = $ProductionOrderLines;
      return $this;
    }

}
