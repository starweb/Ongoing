<?php

namespace Ongoing;

class ArrayOfCustomerOrderLine
{

    /**
     * @var CustomerOrderLine[] $CustomerOrderLine
     */
    protected $CustomerOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerOrderLine[]
     */
    public function getCustomerOrderLine()
    {
      return $this->CustomerOrderLine;
    }

    /**
     * @param CustomerOrderLine[] $CustomerOrderLine
     * @return \Ongoing\ArrayOfCustomerOrderLine
     */
    public function setCustomerOrderLine(array $CustomerOrderLine = null)
    {
      $this->CustomerOrderLine = $CustomerOrderLine;
      return $this;
    }

}
