<?php

namespace Ongoing;

class GetInOrderStatusesResult
{

    /**
     * @var ArrayOfInOrderStatus $InOrderStatuses
     */
    protected $InOrderStatuses = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfInOrderStatus
     */
    public function getInOrderStatuses()
    {
      return $this->InOrderStatuses;
    }

    /**
     * @param ArrayOfInOrderStatus $InOrderStatuses
     * @return \Ongoing\GetInOrderStatusesResult
     */
    public function setInOrderStatuses($InOrderStatuses)
    {
      $this->InOrderStatuses = $InOrderStatuses;
      return $this;
    }

}
