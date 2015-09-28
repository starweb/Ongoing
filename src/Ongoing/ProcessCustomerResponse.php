<?php

namespace Ongoing;

class ProcessCustomerResponse
{

    /**
     * @var FileResultClass $ProcessCustomerResult
     */
    protected $ProcessCustomerResult = null;

    /**
     * @param FileResultClass $ProcessCustomerResult
     */
    public function __construct($ProcessCustomerResult)
    {
      $this->ProcessCustomerResult = $ProcessCustomerResult;
    }

    /**
     * @return FileResultClass
     */
    public function getProcessCustomerResult()
    {
      return $this->ProcessCustomerResult;
    }

    /**
     * @param FileResultClass $ProcessCustomerResult
     * @return \Ongoing\ProcessCustomerResponse
     */
    public function setProcessCustomerResult($ProcessCustomerResult)
    {
      $this->ProcessCustomerResult = $ProcessCustomerResult;
      return $this;
    }

}
