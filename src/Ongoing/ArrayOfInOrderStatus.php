<?php

namespace Ongoing;

class ArrayOfInOrderStatus
{

    /**
     * @var InOrderStatus[] $InOrderStatus
     */
    protected $InOrderStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InOrderStatus[]
     */
    public function getInOrderStatus()
    {
      return $this->InOrderStatus;
    }

    /**
     * @param InOrderStatus[] $InOrderStatus
     * @return \Ongoing\ArrayOfInOrderStatus
     */
    public function setInOrderStatus(array $InOrderStatus = null)
    {
      $this->InOrderStatus = $InOrderStatus;
      return $this;
    }

}
