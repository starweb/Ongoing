<?php

namespace Ongoing;

class ArrayOfReturnOrderLineInfo
{

    /**
     * @var ReturnOrderLineInfo[] $ReturnOrderLineInfo
     */
    protected $ReturnOrderLineInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnOrderLineInfo[]
     */
    public function getReturnOrderLineInfo()
    {
      return $this->ReturnOrderLineInfo;
    }

    /**
     * @param ReturnOrderLineInfo[] $ReturnOrderLineInfo
     * @return \Ongoing\ArrayOfReturnOrderLineInfo
     */
    public function setReturnOrderLineInfo(array $ReturnOrderLineInfo = null)
    {
      $this->ReturnOrderLineInfo = $ReturnOrderLineInfo;
      return $this;
    }

}
