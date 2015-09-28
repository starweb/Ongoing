<?php

namespace Ongoing;

class GetReturnOrdersResult
{

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var ArrayOfReturnOrderInfo $ReturnOrders
     */
    protected $ReturnOrders = null;

    /**
     * @var ArrayOfGetReturnOrdersError $GetReturnOrdersErrors
     */
    protected $GetReturnOrdersErrors = null;

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
     * @return \Ongoing\GetReturnOrdersResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return ArrayOfReturnOrderInfo
     */
    public function getReturnOrders()
    {
      return $this->ReturnOrders;
    }

    /**
     * @param ArrayOfReturnOrderInfo $ReturnOrders
     * @return \Ongoing\GetReturnOrdersResult
     */
    public function setReturnOrders($ReturnOrders)
    {
      $this->ReturnOrders = $ReturnOrders;
      return $this;
    }

    /**
     * @return ArrayOfGetReturnOrdersError
     */
    public function getGetReturnOrdersErrors()
    {
      return $this->GetReturnOrdersErrors;
    }

    /**
     * @param ArrayOfGetReturnOrdersError $GetReturnOrdersErrors
     * @return \Ongoing\GetReturnOrdersResult
     */
    public function setGetReturnOrdersErrors($GetReturnOrdersErrors)
    {
      $this->GetReturnOrdersErrors = $GetReturnOrdersErrors;
      return $this;
    }

}
