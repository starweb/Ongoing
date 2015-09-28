<?php

namespace Ongoing;

class SubOrderLine
{

    /**
     * @var CustomerOrderLine $CustomerOrderLine
     */
    protected $CustomerOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerOrderLine
     */
    public function getCustomerOrderLine()
    {
      return $this->CustomerOrderLine;
    }

    /**
     * @param CustomerOrderLine $CustomerOrderLine
     * @return \Ongoing\SubOrderLine
     */
    public function setCustomerOrderLine($CustomerOrderLine)
    {
      $this->CustomerOrderLine = $CustomerOrderLine;
      return $this;
    }

}
