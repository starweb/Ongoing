<?php

namespace Ongoing;

class ReturnCause
{

    /**
     * @var ReturnCauseOperation $ReturnCauseOperation
     */
    protected $ReturnCauseOperation = null;

    /**
     * @var string $ReturnCauseCode
     */
    protected $ReturnCauseCode = null;

    /**
     * @var string $ReturnCauseName
     */
    protected $ReturnCauseName = null;

    /**
     * @param ReturnCauseOperation $ReturnCauseOperation
     */
    public function __construct($ReturnCauseOperation)
    {
      $this->ReturnCauseOperation = $ReturnCauseOperation;
    }

    /**
     * @return ReturnCauseOperation
     */
    public function getReturnCauseOperation()
    {
      return $this->ReturnCauseOperation;
    }

    /**
     * @param ReturnCauseOperation $ReturnCauseOperation
     * @return \Ongoing\ReturnCause
     */
    public function setReturnCauseOperation($ReturnCauseOperation)
    {
      $this->ReturnCauseOperation = $ReturnCauseOperation;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCauseCode()
    {
      return $this->ReturnCauseCode;
    }

    /**
     * @param string $ReturnCauseCode
     * @return \Ongoing\ReturnCause
     */
    public function setReturnCauseCode($ReturnCauseCode)
    {
      $this->ReturnCauseCode = $ReturnCauseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCauseName()
    {
      return $this->ReturnCauseName;
    }

    /**
     * @param string $ReturnCauseName
     * @return \Ongoing\ReturnCause
     */
    public function setReturnCauseName($ReturnCauseName)
    {
      $this->ReturnCauseName = $ReturnCauseName;
      return $this;
    }

}
