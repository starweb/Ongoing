<?php

namespace Ongoing;

class GetInOrdersResult
{

    /**
     * @var ArrayOfReceivedInOrder $InOrders
     */
    protected $InOrders = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfReceivedInOrder
     */
    public function getInOrders()
    {
      return $this->InOrders;
    }

    /**
     * @param ArrayOfReceivedInOrder $InOrders
     * @return \Ongoing\GetInOrdersResult
     */
    public function setInOrders($InOrders)
    {
      $this->InOrders = $InOrders;
      return $this;
    }

}
