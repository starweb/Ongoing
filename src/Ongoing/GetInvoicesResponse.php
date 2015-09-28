<?php

namespace Ongoing;

class GetInvoicesResponse
{

    /**
     * @var GetInvoicesResult $GetInvoicesResult
     */
    protected $GetInvoicesResult = null;

    /**
     * @param GetInvoicesResult $GetInvoicesResult
     */
    public function __construct($GetInvoicesResult)
    {
      $this->GetInvoicesResult = $GetInvoicesResult;
    }

    /**
     * @return GetInvoicesResult
     */
    public function getGetInvoicesResult()
    {
      return $this->GetInvoicesResult;
    }

    /**
     * @param GetInvoicesResult $GetInvoicesResult
     * @return \Ongoing\GetInvoicesResponse
     */
    public function setGetInvoicesResult($GetInvoicesResult)
    {
      $this->GetInvoicesResult = $GetInvoicesResult;
      return $this;
    }

}
