<?php

namespace Ongoing;

class ArrayOfCustomerOrderTextLine
{

    /**
     * @var CustomerOrderTextLine[] $CustomerOrderTextLine
     */
    protected $CustomerOrderTextLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerOrderTextLine[]
     */
    public function getCustomerOrderTextLine()
    {
      return $this->CustomerOrderTextLine;
    }

    /**
     * @param CustomerOrderTextLine[] $CustomerOrderTextLine
     * @return \Ongoing\ArrayOfCustomerOrderTextLine
     */
    public function setCustomerOrderTextLine(array $CustomerOrderTextLine = null)
    {
      $this->CustomerOrderTextLine = $CustomerOrderTextLine;
      return $this;
    }

}
