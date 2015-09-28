<?php

namespace Ongoing;

class GetOrderStatusReportsResponse
{

    /**
     * @var OrderStatusReportsResult $GetOrderStatusReportsResult
     */
    protected $GetOrderStatusReportsResult = null;

    /**
     * @param OrderStatusReportsResult $GetOrderStatusReportsResult
     */
    public function __construct($GetOrderStatusReportsResult)
    {
      $this->GetOrderStatusReportsResult = $GetOrderStatusReportsResult;
    }

    /**
     * @return OrderStatusReportsResult
     */
    public function getGetOrderStatusReportsResult()
    {
      return $this->GetOrderStatusReportsResult;
    }

    /**
     * @param OrderStatusReportsResult $GetOrderStatusReportsResult
     * @return \Ongoing\GetOrderStatusReportsResponse
     */
    public function setGetOrderStatusReportsResult($GetOrderStatusReportsResult)
    {
      $this->GetOrderStatusReportsResult = $GetOrderStatusReportsResult;
      return $this;
    }

}
