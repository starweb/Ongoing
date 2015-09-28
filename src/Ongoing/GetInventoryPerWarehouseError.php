<?php

namespace Ongoing;

class GetInventoryPerWarehouseError
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var GetInventoryPerWarehouseErrorTypes $ErrorType
     */
    protected $ErrorType = null;

    /**
     * @param GetInventoryPerWarehouseErrorTypes $ErrorType
     */
    public function __construct($ErrorType)
    {
      $this->ErrorType = $ErrorType;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Ongoing\GetInventoryPerWarehouseError
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return GetInventoryPerWarehouseErrorTypes
     */
    public function getErrorType()
    {
      return $this->ErrorType;
    }

    /**
     * @param GetInventoryPerWarehouseErrorTypes $ErrorType
     * @return \Ongoing\GetInventoryPerWarehouseError
     */
    public function setErrorType($ErrorType)
    {
      $this->ErrorType = $ErrorType;
      return $this;
    }

}
