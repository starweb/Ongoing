<?php

namespace Ongoing;

class UpdateOrderLineComment
{

    /**
     * @var string $OrderLineComment
     */
    protected $OrderLineComment = null;

    
    public function __construct()
    {
    
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
     * @return \Ongoing\UpdateOrderLineComment
     */
    public function setOrderLineComment($OrderLineComment)
    {
      $this->OrderLineComment = $OrderLineComment;
      return $this;
    }

}
