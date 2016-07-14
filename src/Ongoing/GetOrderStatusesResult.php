<?php

namespace Ongoing;

class GetOrderStatusesResult
{

    /**
     * @var ArrayOfOrderStatus $OrderStatuses
     */
    protected $OrderStatuses = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfOrderStatus
     */
    public function getOrderStatuses()
    {
      return $this->OrderStatuses;
    }

    /**
     * @param ArrayOfOrderStatus $OrderStatuses
     * @return \Ongoing\GetOrderStatusesResult
     */
    public function setOrderStatuses($OrderStatuses)
    {
      $this->OrderStatuses = $OrderStatuses;
      return $this;
    }

}
