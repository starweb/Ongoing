<?php

namespace Ongoing;

class UpdateOrderResponse
{

    /**
     * @var UpdateOrderResult $UpdateOrderResult
     */
    protected $UpdateOrderResult = null;

    /**
     * @param UpdateOrderResult $UpdateOrderResult
     */
    public function __construct($UpdateOrderResult)
    {
      $this->UpdateOrderResult = $UpdateOrderResult;
    }

    /**
     * @return UpdateOrderResult
     */
    public function getUpdateOrderResult()
    {
      return $this->UpdateOrderResult;
    }

    /**
     * @param UpdateOrderResult $UpdateOrderResult
     * @return \Ongoing\UpdateOrderResponse
     */
    public function setUpdateOrderResult($UpdateOrderResult)
    {
      $this->UpdateOrderResult = $UpdateOrderResult;
      return $this;
    }

}
