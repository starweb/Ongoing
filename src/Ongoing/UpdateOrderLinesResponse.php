<?php

namespace Ongoing;

class UpdateOrderLinesResponse
{

    /**
     * @var UpdateOrderLinesResult $UpdateOrderLinesResult
     */
    protected $UpdateOrderLinesResult = null;

    /**
     * @param UpdateOrderLinesResult $UpdateOrderLinesResult
     */
    public function __construct($UpdateOrderLinesResult)
    {
      $this->UpdateOrderLinesResult = $UpdateOrderLinesResult;
    }

    /**
     * @return UpdateOrderLinesResult
     */
    public function getUpdateOrderLinesResult()
    {
      return $this->UpdateOrderLinesResult;
    }

    /**
     * @param UpdateOrderLinesResult $UpdateOrderLinesResult
     * @return \Ongoing\UpdateOrderLinesResponse
     */
    public function setUpdateOrderLinesResult($UpdateOrderLinesResult)
    {
      $this->UpdateOrderLinesResult = $UpdateOrderLinesResult;
      return $this;
    }

}
