<?php

namespace Ongoing;

class GetInOrderStatusReportsResponse
{

    /**
     * @var InOrderStatusReportsResult $GetInOrderStatusReportsResult
     */
    protected $GetInOrderStatusReportsResult = null;

    /**
     * @param InOrderStatusReportsResult $GetInOrderStatusReportsResult
     */
    public function __construct($GetInOrderStatusReportsResult)
    {
      $this->GetInOrderStatusReportsResult = $GetInOrderStatusReportsResult;
    }

    /**
     * @return InOrderStatusReportsResult
     */
    public function getGetInOrderStatusReportsResult()
    {
      return $this->GetInOrderStatusReportsResult;
    }

    /**
     * @param InOrderStatusReportsResult $GetInOrderStatusReportsResult
     * @return \Ongoing\GetInOrderStatusReportsResponse
     */
    public function setGetInOrderStatusReportsResult($GetInOrderStatusReportsResult)
    {
      $this->GetInOrderStatusReportsResult = $GetInOrderStatusReportsResult;
      return $this;
    }

}
