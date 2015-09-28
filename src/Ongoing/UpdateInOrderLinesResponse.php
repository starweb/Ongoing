<?php

namespace Ongoing;

class UpdateInOrderLinesResponse
{

    /**
     * @var UpdateInOrderLinesResult $UpdateInOrderLinesResult
     */
    protected $UpdateInOrderLinesResult = null;

    /**
     * @param UpdateInOrderLinesResult $UpdateInOrderLinesResult
     */
    public function __construct($UpdateInOrderLinesResult)
    {
      $this->UpdateInOrderLinesResult = $UpdateInOrderLinesResult;
    }

    /**
     * @return UpdateInOrderLinesResult
     */
    public function getUpdateInOrderLinesResult()
    {
      return $this->UpdateInOrderLinesResult;
    }

    /**
     * @param UpdateInOrderLinesResult $UpdateInOrderLinesResult
     * @return \Ongoing\UpdateInOrderLinesResponse
     */
    public function setUpdateInOrderLinesResult($UpdateInOrderLinesResult)
    {
      $this->UpdateInOrderLinesResult = $UpdateInOrderLinesResult;
      return $this;
    }

}
