<?php

namespace Ongoing;

class ArrayOfInventoryChangeLine
{

    /**
     * @var InventoryChangeLine[] $InventoryChangeLine
     */
    protected $InventoryChangeLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryChangeLine[]
     */
    public function getInventoryChangeLine()
    {
      return $this->InventoryChangeLine;
    }

    /**
     * @param InventoryChangeLine[] $InventoryChangeLine
     * @return \Ongoing\ArrayOfInventoryChangeLine
     */
    public function setInventoryChangeLine(array $InventoryChangeLine = null)
    {
      $this->InventoryChangeLine = $InventoryChangeLine;
      return $this;
    }

}
