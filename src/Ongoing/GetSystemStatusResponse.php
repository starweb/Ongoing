<?php

namespace Ongoing;

class GetSystemStatusResponse
{

    /**
     * @var SystemStatus $GetSystemStatusResult
     */
    protected $GetSystemStatusResult = null;

    /**
     * @param SystemStatus $GetSystemStatusResult
     */
    public function __construct($GetSystemStatusResult)
    {
      $this->GetSystemStatusResult = $GetSystemStatusResult;
    }

    /**
     * @return SystemStatus
     */
    public function getGetSystemStatusResult()
    {
      return $this->GetSystemStatusResult;
    }

    /**
     * @param SystemStatus $GetSystemStatusResult
     * @return \Ongoing\GetSystemStatusResponse
     */
    public function setGetSystemStatusResult($GetSystemStatusResult)
    {
      $this->GetSystemStatusResult = $GetSystemStatusResult;
      return $this;
    }

}
