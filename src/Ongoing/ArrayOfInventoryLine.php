<?php

namespace Ongoing;

class ArrayOfInventoryLine
{

    /**
     * @var InventoryLine[] $InventoryLine
     */
    protected $InventoryLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryLine[]
     */
    public function getInventoryLine()
    {
      return $this->InventoryLine;
    }

    /**
     * @param InventoryLine[] $InventoryLine
     * @return \Ongoing\ArrayOfInventoryLine
     */
    public function setInventoryLine(array $InventoryLine = null)
    {
      $this->InventoryLine = $InventoryLine;
      return $this;
    }

}
