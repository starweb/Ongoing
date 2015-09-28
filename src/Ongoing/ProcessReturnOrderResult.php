<?php

namespace Ongoing;

class ProcessReturnOrderResult
{

    /**
     * @var int $ReturnOrderId
     */
    protected $ReturnOrderId = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var ArrayOfProcessReturnOrderError $ProcessReturnOrderErrors
     */
    protected $ProcessReturnOrderErrors = null;

    /**
     * @param boolean $Success
     */
    public function __construct($Success)
    {
      $this->Success = $Success;
    }

    /**
     * @return int
     */
    public function getReturnOrderId()
    {
      return $this->ReturnOrderId;
    }

    /**
     * @param int $ReturnOrderId
     * @return \Ongoing\ProcessReturnOrderResult
     */
    public function setReturnOrderId($ReturnOrderId)
    {
      $this->ReturnOrderId = $ReturnOrderId;
      return $this;
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
     * @return \Ongoing\ProcessReturnOrderResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return ArrayOfProcessReturnOrderError
     */
    public function getProcessReturnOrderErrors()
    {
      return $this->ProcessReturnOrderErrors;
    }

    /**
     * @param ArrayOfProcessReturnOrderError $ProcessReturnOrderErrors
     * @return \Ongoing\ProcessReturnOrderResult
     */
    public function setProcessReturnOrderErrors($ProcessReturnOrderErrors)
    {
      $this->ProcessReturnOrderErrors = $ProcessReturnOrderErrors;
      return $this;
    }

}
