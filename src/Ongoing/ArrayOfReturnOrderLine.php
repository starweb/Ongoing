<?php

namespace Ongoing;

class ArrayOfReturnOrderLine
{

    /**
     * @var ReturnOrderLine[] $ReturnOrderLine
     */
    protected $ReturnOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnOrderLine[]
     */
    public function getReturnOrderLine()
    {
      return $this->ReturnOrderLine;
    }

    /**
     * @param ReturnOrderLine[] $ReturnOrderLine
     * @return \Ongoing\ArrayOfReturnOrderLine
     */
    public function setReturnOrderLine(array $ReturnOrderLine = null)
    {
      $this->ReturnOrderLine = $ReturnOrderLine;
      return $this;
    }

}
