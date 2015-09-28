<?php

namespace Ongoing;

class OrderStatusReportsQuery
{

    /**
     * @var ArrayOfString $OrderNumbersToReport
     */
    protected $OrderNumbersToReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getOrderNumbersToReport()
    {
      return $this->OrderNumbersToReport;
    }

    /**
     * @param ArrayOfString $OrderNumbersToReport
     * @return \Ongoing\OrderStatusReportsQuery
     */
    public function setOrderNumbersToReport($OrderNumbersToReport)
    {
      $this->OrderNumbersToReport = $OrderNumbersToReport;
      return $this;
    }

}
