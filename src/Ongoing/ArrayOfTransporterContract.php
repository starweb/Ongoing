<?php

namespace Ongoing;

class ArrayOfTransporterContract
{

    /**
     * @var TransporterContract[] $TransporterContract
     */
    protected $TransporterContract = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TransporterContract[]
     */
    public function getTransporterContract()
    {
      return $this->TransporterContract;
    }

    /**
     * @param TransporterContract[] $TransporterContract
     * @return \Ongoing\ArrayOfTransporterContract
     */
    public function setTransporterContract(array $TransporterContract = null)
    {
      $this->TransporterContract = $TransporterContract;
      return $this;
    }

}
