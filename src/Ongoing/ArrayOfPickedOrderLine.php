<?php

namespace Ongoing;

class ArrayOfPickedOrderLine
{

    /**
     * @var PickedOrderLine[] $PickedOrderLine
     */
    protected $PickedOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PickedOrderLine[]
     */
    public function getPickedOrderLine()
    {
      return $this->PickedOrderLine;
    }

    /**
     * @param PickedOrderLine[] $PickedOrderLine
     * @return \Ongoing\ArrayOfPickedOrderLine
     */
    public function setPickedOrderLine(array $PickedOrderLine = null)
    {
      $this->PickedOrderLine = $PickedOrderLine;
      return $this;
    }

}
