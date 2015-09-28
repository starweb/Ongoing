<?php

namespace Ongoing;

class CustomerOrderTextLine
{

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var string $OrderLineComment
     */
    protected $OrderLineComment = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getExternalOrderLineCode()
    {
      return $this->ExternalOrderLineCode;
    }

    /**
     * @param string $ExternalOrderLineCode
     * @return \Ongoing\CustomerOrderTextLine
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineComment()
    {
      return $this->OrderLineComment;
    }

    /**
     * @param string $OrderLineComment
     * @return \Ongoing\CustomerOrderTextLine
     */
    public function setOrderLineComment($OrderLineComment)
    {
      $this->OrderLineComment = $OrderLineComment;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfItems()
    {
      return $this->NumberOfItems;
    }

    /**
     * @param float $NumberOfItems
     * @return \Ongoing\CustomerOrderTextLine
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

}
