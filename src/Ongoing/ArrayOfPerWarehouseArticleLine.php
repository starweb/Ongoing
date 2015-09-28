<?php

namespace Ongoing;

class ArrayOfPerWarehouseArticleLine
{

    /**
     * @var PerWarehouseArticleLine[] $PerWarehouseArticleLine
     */
    protected $PerWarehouseArticleLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PerWarehouseArticleLine[]
     */
    public function getPerWarehouseArticleLine()
    {
      return $this->PerWarehouseArticleLine;
    }

    /**
     * @param PerWarehouseArticleLine[] $PerWarehouseArticleLine
     * @return \Ongoing\ArrayOfPerWarehouseArticleLine
     */
    public function setPerWarehouseArticleLine(array $PerWarehouseArticleLine = null)
    {
      $this->PerWarehouseArticleLine = $PerWarehouseArticleLine;
      return $this;
    }

}
