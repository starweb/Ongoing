<?php

namespace Ongoing;

class ProcessOrderResponse
{

    /**
     * @var FileResultClass $ProcessOrderResult
     */
    protected $ProcessOrderResult = null;

    /**
     * @param FileResultClass $ProcessOrderResult
     */
    public function __construct($ProcessOrderResult)
    {
      $this->ProcessOrderResult = $ProcessOrderResult;
    }

    /**
     * @return FileResultClass
     */
    public function getProcessOrderResult()
    {
      return $this->ProcessOrderResult;
    }

    /**
     * @param FileResultClass $ProcessOrderResult
     * @return \Ongoing\ProcessOrderResponse
     */
    public function setProcessOrderResult($ProcessOrderResult)
    {
      $this->ProcessOrderResult = $ProcessOrderResult;
      return $this;
    }

}
