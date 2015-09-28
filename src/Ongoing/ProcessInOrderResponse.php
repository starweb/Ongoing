<?php

namespace Ongoing;

class ProcessInOrderResponse
{

    /**
     * @var FileResultClass $ProcessInOrderResult
     */
    protected $ProcessInOrderResult = null;

    /**
     * @param FileResultClass $ProcessInOrderResult
     */
    public function __construct($ProcessInOrderResult)
    {
      $this->ProcessInOrderResult = $ProcessInOrderResult;
    }

    /**
     * @return FileResultClass
     */
    public function getProcessInOrderResult()
    {
      return $this->ProcessInOrderResult;
    }

    /**
     * @param FileResultClass $ProcessInOrderResult
     * @return \Ongoing\ProcessInOrderResponse
     */
    public function setProcessInOrderResult($ProcessInOrderResult)
    {
      $this->ProcessInOrderResult = $ProcessInOrderResult;
      return $this;
    }

}
