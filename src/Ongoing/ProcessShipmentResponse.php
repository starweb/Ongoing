<?php

namespace Ongoing;

class ProcessShipmentResponse
{

    /**
     * @var FileResultClass $ProcessShipmentResult
     */
    protected $ProcessShipmentResult = null;

    /**
     * @param FileResultClass $ProcessShipmentResult
     */
    public function __construct($ProcessShipmentResult)
    {
      $this->ProcessShipmentResult = $ProcessShipmentResult;
    }

    /**
     * @return FileResultClass
     */
    public function getProcessShipmentResult()
    {
      return $this->ProcessShipmentResult;
    }

    /**
     * @param FileResultClass $ProcessShipmentResult
     * @return \Ongoing\ProcessShipmentResponse
     */
    public function setProcessShipmentResult($ProcessShipmentResult)
    {
      $this->ProcessShipmentResult = $ProcessShipmentResult;
      return $this;
    }

}
