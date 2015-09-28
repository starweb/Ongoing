<?php

namespace Ongoing;

class OrderStatusReportsResult
{

    /**
     * @var ArrayOfOrderStatusReport $OrderStatusReports
     */
    protected $OrderStatusReports = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfOrderStatusReport
     */
    public function getOrderStatusReports()
    {
      return $this->OrderStatusReports;
    }

    /**
     * @param ArrayOfOrderStatusReport $OrderStatusReports
     * @return \Ongoing\OrderStatusReportsResult
     */
    public function setOrderStatusReports($OrderStatusReports)
    {
      $this->OrderStatusReports = $OrderStatusReports;
      return $this;
    }

}
