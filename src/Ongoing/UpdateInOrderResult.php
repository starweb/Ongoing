<?php

namespace Ongoing;

class UpdateInOrderResult
{

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var int $InOrderId
     */
    protected $InOrderId = null;

    /**
     * @param boolean $Success
     */
    public function __construct($Success)
    {
      $this->Success = $Success;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \Ongoing\UpdateInOrderResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
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
     * @return \Ongoing\UpdateInOrderResult
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderId()
    {
      return $this->InOrderId;
    }

    /**
     * @param int $InOrderId
     * @return \Ongoing\UpdateInOrderResult
     */
    public function setInOrderId($InOrderId)
    {
      $this->InOrderId = $InOrderId;
      return $this;
    }

}
