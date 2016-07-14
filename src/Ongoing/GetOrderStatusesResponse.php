<?php

namespace Ongoing;

class GetOrderStatusesResponse
{

    /**
     * @var GetOrderStatusesResult $GetOrderStatusesResult
     */
    protected $GetOrderStatusesResult = null;

    /**
     * @param GetOrderStatusesResult $GetOrderStatusesResult
     */
    public function __construct($GetOrderStatusesResult)
    {
      $this->GetOrderStatusesResult = $GetOrderStatusesResult;
    }

    /**
     * @return GetOrderStatusesResult
     */
    public function getGetOrderStatusesResult()
    {
      return $this->GetOrderStatusesResult;
    }

    /**
     * @param GetOrderStatusesResult $GetOrderStatusesResult
     * @return \Ongoing\GetOrderStatusesResponse
     */
    public function setGetOrderStatusesResult($GetOrderStatusesResult)
    {
      $this->GetOrderStatusesResult = $GetOrderStatusesResult;
      return $this;
    }

}
