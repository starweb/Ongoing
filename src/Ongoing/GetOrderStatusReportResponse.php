<?php

namespace Ongoing;

class GetOrderStatusReportResponse
{

    /**
     * @var OrderStatusReport $GetOrderStatusReportResult
     */
    protected $GetOrderStatusReportResult = null;

    /**
     * @param OrderStatusReport $GetOrderStatusReportResult
     */
    public function __construct($GetOrderStatusReportResult)
    {
      $this->GetOrderStatusReportResult = $GetOrderStatusReportResult;
    }

    /**
     * @return OrderStatusReport
     */
    public function getGetOrderStatusReportResult()
    {
      return $this->GetOrderStatusReportResult;
    }

    /**
     * @param OrderStatusReport $GetOrderStatusReportResult
     * @return \Ongoing\GetOrderStatusReportResponse
     */
    public function setGetOrderStatusReportResult($GetOrderStatusReportResult)
    {
      $this->GetOrderStatusReportResult = $GetOrderStatusReportResult;
      return $this;
    }

}
