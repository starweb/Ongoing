<?php

namespace Ongoing;

class ArrayOfReceivedInOrderLine
{

    /**
     * @var ReceivedInOrderLine[] $ReceivedInOrderLine
     */
    protected $ReceivedInOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivedInOrderLine[]
     */
    public function getReceivedInOrderLine()
    {
      return $this->ReceivedInOrderLine;
    }

    /**
     * @param ReceivedInOrderLine[] $ReceivedInOrderLine
     * @return \Ongoing\ArrayOfReceivedInOrderLine
     */
    public function setReceivedInOrderLine(array $ReceivedInOrderLine = null)
    {
      $this->ReceivedInOrderLine = $ReceivedInOrderLine;
      return $this;
    }

}
