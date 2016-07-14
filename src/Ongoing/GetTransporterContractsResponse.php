<?php

namespace Ongoing;

class GetTransporterContractsResponse
{

    /**
     * @var GetTransporterContractsResult $GetTransporterContractsResult
     */
    protected $GetTransporterContractsResult = null;

    /**
     * @param GetTransporterContractsResult $GetTransporterContractsResult
     */
    public function __construct($GetTransporterContractsResult)
    {
      $this->GetTransporterContractsResult = $GetTransporterContractsResult;
    }

    /**
     * @return GetTransporterContractsResult
     */
    public function getGetTransporterContractsResult()
    {
      return $this->GetTransporterContractsResult;
    }

    /**
     * @param GetTransporterContractsResult $GetTransporterContractsResult
     * @return \Ongoing\GetTransporterContractsResponse
     */
    public function setGetTransporterContractsResult($GetTransporterContractsResult)
    {
      $this->GetTransporterContractsResult = $GetTransporterContractsResult;
      return $this;
    }

}
