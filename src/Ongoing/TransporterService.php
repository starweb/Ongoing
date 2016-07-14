<?php

namespace Ongoing;

class TransporterService
{

    /**
     * @var string $TransporterServiceName
     */
    protected $TransporterServiceName = null;

    /**
     * @var string $TransporterServiceCode
     */
    protected $TransporterServiceCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTransporterServiceName()
    {
      return $this->TransporterServiceName;
    }

    /**
     * @param string $TransporterServiceName
     * @return \Ongoing\TransporterService
     */
    public function setTransporterServiceName($TransporterServiceName)
    {
      $this->TransporterServiceName = $TransporterServiceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransporterServiceCode()
    {
      return $this->TransporterServiceCode;
    }

    /**
     * @param string $TransporterServiceCode
     * @return \Ongoing\TransporterService
     */
    public function setTransporterServiceCode($TransporterServiceCode)
    {
      $this->TransporterServiceCode = $TransporterServiceCode;
      return $this;
    }

}
