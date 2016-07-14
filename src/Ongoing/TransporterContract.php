<?php

namespace Ongoing;

class TransporterContract
{

    /**
     * @var string $TransporterName
     */
    protected $TransporterName = null;

    /**
     * @var string $TransporterCustomerNumber
     */
    protected $TransporterCustomerNumber = null;

    /**
     * @var string $EDICustomerCode
     */
    protected $EDICustomerCode = null;

    /**
     * @var string $TransporterCode
     */
    protected $TransporterCode = null;

    /**
     * @var string $TransporterServiceCode
     */
    protected $TransporterServiceCode = null;

    /**
     * @var ArrayOfTransporterService $TransporterServices
     */
    protected $TransporterServices = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTransporterName()
    {
      return $this->TransporterName;
    }

    /**
     * @param string $TransporterName
     * @return \Ongoing\TransporterContract
     */
    public function setTransporterName($TransporterName)
    {
      $this->TransporterName = $TransporterName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransporterCustomerNumber()
    {
      return $this->TransporterCustomerNumber;
    }

    /**
     * @param string $TransporterCustomerNumber
     * @return \Ongoing\TransporterContract
     */
    public function setTransporterCustomerNumber($TransporterCustomerNumber)
    {
      $this->TransporterCustomerNumber = $TransporterCustomerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEDICustomerCode()
    {
      return $this->EDICustomerCode;
    }

    /**
     * @param string $EDICustomerCode
     * @return \Ongoing\TransporterContract
     */
    public function setEDICustomerCode($EDICustomerCode)
    {
      $this->EDICustomerCode = $EDICustomerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransporterCode()
    {
      return $this->TransporterCode;
    }

    /**
     * @param string $TransporterCode
     * @return \Ongoing\TransporterContract
     */
    public function setTransporterCode($TransporterCode)
    {
      $this->TransporterCode = $TransporterCode;
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
     * @return \Ongoing\TransporterContract
     */
    public function setTransporterServiceCode($TransporterServiceCode)
    {
      $this->TransporterServiceCode = $TransporterServiceCode;
      return $this;
    }

    /**
     * @return ArrayOfTransporterService
     */
    public function getTransporterServices()
    {
      return $this->TransporterServices;
    }

    /**
     * @param ArrayOfTransporterService $TransporterServices
     * @return \Ongoing\TransporterContract
     */
    public function setTransporterServices($TransporterServices)
    {
      $this->TransporterServices = $TransporterServices;
      return $this;
    }

}
