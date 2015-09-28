<?php

namespace Ongoing;

class ArrayOfSubOrderLine
{

    /**
     * @var SubOrderLine[] $SubOrderLine
     */
    protected $SubOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubOrderLine[]
     */
    public function getSubOrderLine()
    {
      return $this->SubOrderLine;
    }

    /**
     * @param SubOrderLine[] $SubOrderLine
     * @return \Ongoing\ArrayOfSubOrderLine
     */
    public function setSubOrderLine(array $SubOrderLine = null)
    {
      $this->SubOrderLine = $SubOrderLine;
      return $this;
    }

}
