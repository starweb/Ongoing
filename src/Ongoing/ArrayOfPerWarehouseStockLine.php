<?php

namespace Ongoing;

class ArrayOfPerWarehouseStockLine
{

    /**
     * @var PerWarehouseStockLine[] $PerWarehouseStockLine
     */
    protected $PerWarehouseStockLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PerWarehouseStockLine[]
     */
    public function getPerWarehouseStockLine()
    {
      return $this->PerWarehouseStockLine;
    }

    /**
     * @param PerWarehouseStockLine[] $PerWarehouseStockLine
     * @return \Ongoing\ArrayOfPerWarehouseStockLine
     */
    public function setPerWarehouseStockLine(array $PerWarehouseStockLine = null)
    {
      $this->PerWarehouseStockLine = $PerWarehouseStockLine;
      return $this;
    }

}
