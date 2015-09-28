<?php

namespace Ongoing;

class ProcessReturnOrderError
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var ProcessReturnOrderErrorType $ErrorType
     */
    protected $ErrorType = null;

    /**
     * @param ProcessReturnOrderErrorType $ErrorType
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
     * @return \Ongoing\ProcessReturnOrderError
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return ProcessReturnOrderErrorType
     */
    public function getErrorType()
    {
      return $this->ErrorType;
    }

    /**
     * @param ProcessReturnOrderErrorType $ErrorType
     * @return \Ongoing\ProcessReturnOrderError
     */
    public function setErrorType($ErrorType)
    {
      $this->ErrorType = $ErrorType;
      return $this;
    }

}
