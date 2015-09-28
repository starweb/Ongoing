<?php

namespace Ongoing;

class ArrayOfReturnOrderInfo
{

    /**
     * @var ReturnOrderInfo[] $ReturnOrderInfo
     */
    protected $ReturnOrderInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnOrderInfo[]
     */
    public function getReturnOrderInfo()
    {
      return $this->ReturnOrderInfo;
    }

    /**
     * @param ReturnOrderInfo[] $ReturnOrderInfo
     * @return \Ongoing\ArrayOfReturnOrderInfo
     */
    public function setReturnOrderInfo(array $ReturnOrderInfo = null)
    {
      $this->ReturnOrderInfo = $ReturnOrderInfo;
      return $this;
    }

}
