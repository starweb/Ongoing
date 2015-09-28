<?php

namespace Ongoing;

class GetReturnOrdersError
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var GetReturnOrderErrorTypes $ErrorType
     */
    protected $ErrorType = null;

    /**
     * @param GetReturnOrderErrorTypes $ErrorType
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
     * @return \Ongoing\GetReturnOrdersError
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return GetReturnOrderErrorTypes
     */
    public function getErrorType()
    {
      return $this->ErrorType;
    }

    /**
     * @param GetReturnOrderErrorTypes $ErrorType
     * @return \Ongoing\GetReturnOrdersError
     */
    public function setErrorType($ErrorType)
    {
      $this->ErrorType = $ErrorType;
      return $this;
    }

}
