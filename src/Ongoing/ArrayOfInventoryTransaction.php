<?php

namespace Ongoing;

class ArrayOfInventoryTransaction
{

    /**
     * @var InventoryTransaction[] $InventoryTransaction
     */
    protected $InventoryTransaction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryTransaction[]
     */
    public function getInventoryTransaction()
    {
      return $this->InventoryTransaction;
    }

    /**
     * @param InventoryTransaction[] $InventoryTransaction
     * @return \Ongoing\ArrayOfInventoryTransaction
     */
    public function setInventoryTransaction(array $InventoryTransaction = null)
    {
      $this->InventoryTransaction = $InventoryTransaction;
      return $this;
    }

}
