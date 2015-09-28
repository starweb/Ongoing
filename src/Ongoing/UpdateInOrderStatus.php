<?php

namespace Ongoing;

class UpdateInOrderStatus
{

    /**
     * @var int $InOrderStatus
     */
    protected $InOrderStatus = null;

    /**
     * @param int $InOrderStatus
     */
    public function __construct($InOrderStatus)
    {
      $this->InOrderStatus = $InOrderStatus;
    }

    /**
     * @return int
     */
    public function getInOrderStatus()
    {
      return $this->InOrderStatus;
    }

    /**
     * @param int $InOrderStatus
     * @return \Ongoing\UpdateInOrderStatus
     */
    public function setInOrderStatus($InOrderStatus)
    {
      $this->InOrderStatus = $InOrderStatus;
      return $this;
    }

}
