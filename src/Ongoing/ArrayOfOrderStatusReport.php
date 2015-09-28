<?php

namespace Ongoing;

class ArrayOfOrderStatusReport
{

    /**
     * @var OrderStatusReport[] $OrderStatusReport
     */
    protected $OrderStatusReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderStatusReport[]
     */
    public function getOrderStatusReport()
    {
      return $this->OrderStatusReport;
    }

    /**
     * @param OrderStatusReport[] $OrderStatusReport
     * @return \Ongoing\ArrayOfOrderStatusReport
     */
    public function setOrderStatusReport(array $OrderStatusReport = null)
    {
      $this->OrderStatusReport = $OrderStatusReport;
      return $this;
    }

}
