<?php

namespace Ongoing;

class GetInOrderStatusesResponse
{

    /**
     * @var GetInOrderStatusesResult $GetInOrderStatusesResult
     */
    protected $GetInOrderStatusesResult = null;

    /**
     * @param GetInOrderStatusesResult $GetInOrderStatusesResult
     */
    public function __construct($GetInOrderStatusesResult)
    {
      $this->GetInOrderStatusesResult = $GetInOrderStatusesResult;
    }

    /**
     * @return GetInOrderStatusesResult
     */
    public function getGetInOrderStatusesResult()
    {
      return $this->GetInOrderStatusesResult;
    }

    /**
     * @param GetInOrderStatusesResult $GetInOrderStatusesResult
     * @return \Ongoing\GetInOrderStatusesResponse
     */
    public function setGetInOrderStatusesResult($GetInOrderStatusesResult)
    {
      $this->GetInOrderStatusesResult = $GetInOrderStatusesResult;
      return $this;
    }

}
