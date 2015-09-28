<?php

namespace Ongoing;

class ProcessReturnOrderResponse
{

    /**
     * @var ProcessReturnOrderResult $ProcessReturnOrderResult
     */
    protected $ProcessReturnOrderResult = null;

    /**
     * @param ProcessReturnOrderResult $ProcessReturnOrderResult
     */
    public function __construct($ProcessReturnOrderResult)
    {
      $this->ProcessReturnOrderResult = $ProcessReturnOrderResult;
    }

    /**
     * @return ProcessReturnOrderResult
     */
    public function getProcessReturnOrderResult()
    {
      return $this->ProcessReturnOrderResult;
    }

    /**
     * @param ProcessReturnOrderResult $ProcessReturnOrderResult
     * @return \Ongoing\ProcessReturnOrderResponse
     */
    public function setProcessReturnOrderResult($ProcessReturnOrderResult)
    {
      $this->ProcessReturnOrderResult = $ProcessReturnOrderResult;
      return $this;
    }

}
