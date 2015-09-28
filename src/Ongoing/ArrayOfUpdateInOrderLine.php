<?php

namespace Ongoing;

class ArrayOfUpdateInOrderLine
{

    /**
     * @var UpdateInOrderLine[] $UpdateInOrderLine
     */
    protected $UpdateInOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpdateInOrderLine[]
     */
    public function getUpdateInOrderLine()
    {
      return $this->UpdateInOrderLine;
    }

    /**
     * @param UpdateInOrderLine[] $UpdateInOrderLine
     * @return \Ongoing\ArrayOfUpdateInOrderLine
     */
    public function setUpdateInOrderLine(array $UpdateInOrderLine = null)
    {
      $this->UpdateInOrderLine = $UpdateInOrderLine;
      return $this;
    }

}
