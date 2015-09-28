<?php

namespace Ongoing;

class ArrayOfUpdateOrderLine
{

    /**
     * @var UpdateOrderLine[] $UpdateOrderLine
     */
    protected $UpdateOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpdateOrderLine[]
     */
    public function getUpdateOrderLine()
    {
      return $this->UpdateOrderLine;
    }

    /**
     * @param UpdateOrderLine[] $UpdateOrderLine
     * @return \Ongoing\ArrayOfUpdateOrderLine
     */
    public function setUpdateOrderLine(array $UpdateOrderLine = null)
    {
      $this->UpdateOrderLine = $UpdateOrderLine;
      return $this;
    }

}
