<?php

namespace Ongoing;

class ArrayOfInventoryItem
{

    /**
     * @var InventoryItem[] $InventoryItem
     */
    protected $InventoryItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryItem[]
     */
    public function getInventoryItem()
    {
      return $this->InventoryItem;
    }

    /**
     * @param InventoryItem[] $InventoryItem
     * @return \Ongoing\ArrayOfInventoryItem
     */
    public function setInventoryItem(array $InventoryItem = null)
    {
      $this->InventoryItem = $InventoryItem;
      return $this;
    }

}
