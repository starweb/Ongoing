<?php

namespace Ongoing;

class ProcessTripResponse
{

    /**
     * @var FileResultClass $ProcessTripResult
     */
    protected $ProcessTripResult = null;

    /**
     * @param FileResultClass $ProcessTripResult
     */
    public function __construct($ProcessTripResult)
    {
      $this->ProcessTripResult = $ProcessTripResult;
    }

    /**
     * @return FileResultClass
     */
    public function getProcessTripResult()
    {
      return $this->ProcessTripResult;
    }

    /**
     * @param FileResultClass $ProcessTripResult
     * @return \Ongoing\ProcessTripResponse
     */
    public function setProcessTripResult($ProcessTripResult)
    {
      $this->ProcessTripResult = $ProcessTripResult;
      return $this;
    }

}
