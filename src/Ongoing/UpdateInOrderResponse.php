<?php

namespace Ongoing;

class UpdateInOrderResponse
{

    /**
     * @var UpdateInOrderResult $UpdateInOrderResult
     */
    protected $UpdateInOrderResult = null;

    /**
     * @param UpdateInOrderResult $UpdateInOrderResult
     */
    public function __construct($UpdateInOrderResult)
    {
      $this->UpdateInOrderResult = $UpdateInOrderResult;
    }

    /**
     * @return UpdateInOrderResult
     */
    public function getUpdateInOrderResult()
    {
      return $this->UpdateInOrderResult;
    }

    /**
     * @param UpdateInOrderResult $UpdateInOrderResult
     * @return \Ongoing\UpdateInOrderResponse
     */
    public function setUpdateInOrderResult($UpdateInOrderResult)
    {
      $this->UpdateInOrderResult = $UpdateInOrderResult;
      return $this;
    }

}
