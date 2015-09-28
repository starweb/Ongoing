<?php

namespace Ongoing;

class ProcessInvoiceResponse
{

    /**
     * @var FileResultClass $ProcessInvoiceResult
     */
    protected $ProcessInvoiceResult = null;

    /**
     * @param FileResultClass $ProcessInvoiceResult
     */
    public function __construct($ProcessInvoiceResult)
    {
      $this->ProcessInvoiceResult = $ProcessInvoiceResult;
    }

    /**
     * @return FileResultClass
     */
    public function getProcessInvoiceResult()
    {
      return $this->ProcessInvoiceResult;
    }

    /**
     * @param FileResultClass $ProcessInvoiceResult
     * @return \Ongoing\ProcessInvoiceResponse
     */
    public function setProcessInvoiceResult($ProcessInvoiceResult)
    {
      $this->ProcessInvoiceResult = $ProcessInvoiceResult;
      return $this;
    }

}
