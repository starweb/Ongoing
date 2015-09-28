<?php

namespace Ongoing;

class ArrayOfReceivedInOrder
{

    /**
     * @var ReceivedInOrder[] $ReceivedInOrder
     */
    protected $ReceivedInOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivedInOrder[]
     */
    public function getReceivedInOrder()
    {
      return $this->ReceivedInOrder;
    }

    /**
     * @param ReceivedInOrder[] $ReceivedInOrder
     * @return \Ongoing\ArrayOfReceivedInOrder
     */
    public function setReceivedInOrder(array $ReceivedInOrder = null)
    {
      $this->ReceivedInOrder = $ReceivedInOrder;
      return $this;
    }

}
