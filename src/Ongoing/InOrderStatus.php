<?php

namespace Ongoing;

class InOrderStatus
{

    /**
     * @var int $InOrderStatusId
     */
    protected $InOrderStatusId = null;

    /**
     * @var string $InOrderStatusName
     */
    protected $InOrderStatusName = null;

    /**
     * @param int $InOrderStatusId
     */
    public function __construct($InOrderStatusId)
    {
      $this->InOrderStatusId = $InOrderStatusId;
    }

    /**
     * @return int
     */
    public function getInOrderStatusId()
    {
      return $this->InOrderStatusId;
    }

    /**
     * @param int $InOrderStatusId
     * @return \Ongoing\InOrderStatus
     */
    public function setInOrderStatusId($InOrderStatusId)
    {
      $this->InOrderStatusId = $InOrderStatusId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrderStatusName()
    {
      return $this->InOrderStatusName;
    }

    /**
     * @param string $InOrderStatusName
     * @return \Ongoing\InOrderStatus
     */
    public function setInOrderStatusName($InOrderStatusName)
    {
      $this->InOrderStatusName = $InOrderStatusName;
      return $this;
    }

}
