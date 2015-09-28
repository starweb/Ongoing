<?php

namespace Ongoing;

class ArrayOfInventoryItemLine
{

    /**
     * @var InventoryItemLine[] $InventoryItemLine
     */
    protected $InventoryItemLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryItemLine[]
     */
    public function getInventoryItemLine()
    {
      return $this->InventoryItemLine;
    }

    /**
     * @param InventoryItemLine[] $InventoryItemLine
     * @return \Ongoing\ArrayOfInventoryItemLine
     */
    public function setInventoryItemLine(array $InventoryItemLine = null)
    {
      $this->InventoryItemLine = $InventoryItemLine;
      return $this;
    }

}
