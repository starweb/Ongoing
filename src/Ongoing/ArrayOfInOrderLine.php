<?php

namespace Ongoing;

class ArrayOfInOrderLine
{

    /**
     * @var InOrderLine[] $InOrderLine
     */
    protected $InOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InOrderLine[]
     */
    public function getInOrderLine()
    {
      return $this->InOrderLine;
    }

    /**
     * @param InOrderLine[] $InOrderLine
     * @return \Ongoing\ArrayOfInOrderLine
     */
    public function setInOrderLine(array $InOrderLine = null)
    {
      $this->InOrderLine = $InOrderLine;
      return $this;
    }

}
