<?php

namespace Ongoing;

class GetTransporterContractsResult
{

    /**
     * @var ArrayOfTransporterContract $TransporterContracts
     */
    protected $TransporterContracts = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfTransporterContract
     */
    public function getTransporterContracts()
    {
      return $this->TransporterContracts;
    }

    /**
     * @param ArrayOfTransporterContract $TransporterContracts
     * @return \Ongoing\GetTransporterContractsResult
     */
    public function setTransporterContracts($TransporterContracts)
    {
      $this->TransporterContracts = $TransporterContracts;
      return $this;
    }

}
