<?php

namespace Ongoing;

class ArrayOfTransporterService
{

    /**
     * @var TransporterService[] $TransporterService
     */
    protected $TransporterService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TransporterService[]
     */
    public function getTransporterService()
    {
      return $this->TransporterService;
    }

    /**
     * @param TransporterService[] $TransporterService
     * @return \Ongoing\ArrayOfTransporterService
     */
    public function setTransporterService(array $TransporterService = null)
    {
      $this->TransporterService = $TransporterService;
      return $this;
    }

}
