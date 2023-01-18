<?php

namespace Ongoing;

class ArrayOfOrderTrackingInfo
{

    /**
     * @var OrderTrackingInfo[] $OrderTrackingInfo
     */
    protected $OrderTrackingInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderTrackingInfo[]
     */
    public function getOrderTrackingInfo()
    {
      return $this->OrderTrackingInfo;
    }

    /**
     * @param OrderTrackingInfo[] $OrderTrackingInfo
     * @return \Ongoing\ArrayOfOrderTrackingInfo
     */
    public function setOrderTrackingInfo(array $OrderTrackingInfo)
    {
      $this->OrderTrackingInfo = $OrderTrackingInfo;
      return $this;
    }

}
