<?php

namespace Ongoing;

class TransporterContractClass
{

    /**
     * @var TransporterContractIdentificationType $TransporterContractIdentification
     */
    protected $TransporterContractIdentification = null;

    /**
     * @var TransporterContractOperation $TransporterContractOperation
     */
    protected $TransporterContractOperation = null;

    /**
     * @var TransportPaymentType $TransportPayment
     */
    protected $TransportPayment = null;

    /**
     * @var string $TransporterCode
     */
    protected $TransporterCode = null;

    /**
     * @var string $TransporterServiceCode
     */
    protected $TransporterServiceCode = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $ConsigneePalletCustomerNumber
     */
    protected $ConsigneePalletCustomerNumber = null;

    /**
     * @param TransporterContractIdentificationType $TransporterContractIdentification
     * @param TransporterContractOperation $TransporterContractOperation
     * @param TransportPaymentType $TransportPayment
     */
    public function __construct($TransporterContractIdentification, $TransporterContractOperation, $TransportPayment)
    {
      $this->TransporterContractIdentification = $TransporterContractIdentification;
      $this->TransporterContractOperation = $TransporterContractOperation;
      $this->TransportPayment = $TransportPayment;
    }

    /**
     * @return TransporterContractIdentificationType
     */
    public function getTransporterContractIdentification()
    {
      return $this->TransporterContractIdentification;
    }

    /**
     * @param TransporterContractIdentificationType $TransporterContractIdentification
     * @return \Ongoing\TransporterContractClass
     */
    public function setTransporterContractIdentification($TransporterContractIdentification)
    {
      $this->TransporterContractIdentification = $TransporterContractIdentification;
      return $this;
    }

    /**
     * @return TransporterContractOperation
     */
    public function getTransporterContractOperation()
    {
      return $this->TransporterContractOperation;
    }

    /**
     * @param TransporterContractOperation $TransporterContractOperation
     * @return \Ongoing\TransporterContractClass
     */
    public function setTransporterContractOperation($TransporterContractOperation)
    {
      $this->TransporterContractOperation = $TransporterContractOperation;
      return $this;
    }

    /**
     * @return TransportPaymentType
     */
    public function getTransportPayment()
    {
      return $this->TransportPayment;
    }

    /**
     * @param TransportPaymentType $TransportPayment
     * @return \Ongoing\TransporterContractClass
     */
    public function setTransportPayment($TransportPayment)
    {
      $this->TransportPayment = $TransportPayment;
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
     * @return \Ongoing\TransporterContractClass
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
     * @return \Ongoing\TransporterContractClass
     */
    public function setTransporterServiceCode($TransporterServiceCode)
    {
      $this->TransporterServiceCode = $TransporterServiceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \Ongoing\TransporterContractClass
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneePalletCustomerNumber()
    {
      return $this->ConsigneePalletCustomerNumber;
    }

    /**
     * @param string $ConsigneePalletCustomerNumber
     * @return \Ongoing\TransporterContractClass
     */
    public function setConsigneePalletCustomerNumber($ConsigneePalletCustomerNumber)
    {
      $this->ConsigneePalletCustomerNumber = $ConsigneePalletCustomerNumber;
      return $this;
    }

}
