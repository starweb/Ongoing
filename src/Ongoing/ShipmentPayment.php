<?php

namespace Ongoing;

class ShipmentPayment
{

    /**
     * @var ShipmentContractIdentification $ShipmentContractIdentification
     */
    protected $ShipmentContractIdentification = null;

    /**
     * @var ShipmentPaymentType $ShipmentPaymentType
     */
    protected $ShipmentPaymentType = null;

    /**
     * @var string $TransporterCode
     */
    protected $TransporterCode = null;

    /**
     * @var string $TransporterServiceCode
     */
    protected $TransporterServiceCode = null;

    /**
     * @var string $TransporterContractComment
     */
    protected $TransporterContractComment = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @param ShipmentContractIdentification $ShipmentContractIdentification
     * @param ShipmentPaymentType $ShipmentPaymentType
     */
    public function __construct($ShipmentContractIdentification, $ShipmentPaymentType)
    {
      $this->ShipmentContractIdentification = $ShipmentContractIdentification;
      $this->ShipmentPaymentType = $ShipmentPaymentType;
    }

    /**
     * @return ShipmentContractIdentification
     */
    public function getShipmentContractIdentification()
    {
      return $this->ShipmentContractIdentification;
    }

    /**
     * @param ShipmentContractIdentification $ShipmentContractIdentification
     * @return \Ongoing\ShipmentPayment
     */
    public function setShipmentContractIdentification($ShipmentContractIdentification)
    {
      $this->ShipmentContractIdentification = $ShipmentContractIdentification;
      return $this;
    }

    /**
     * @return ShipmentPaymentType
     */
    public function getShipmentPaymentType()
    {
      return $this->ShipmentPaymentType;
    }

    /**
     * @param ShipmentPaymentType $ShipmentPaymentType
     * @return \Ongoing\ShipmentPayment
     */
    public function setShipmentPaymentType($ShipmentPaymentType)
    {
      $this->ShipmentPaymentType = $ShipmentPaymentType;
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
     * @return \Ongoing\ShipmentPayment
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
     * @return \Ongoing\ShipmentPayment
     */
    public function setTransporterServiceCode($TransporterServiceCode)
    {
      $this->TransporterServiceCode = $TransporterServiceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransporterContractComment()
    {
      return $this->TransporterContractComment;
    }

    /**
     * @param string $TransporterContractComment
     * @return \Ongoing\ShipmentPayment
     */
    public function setTransporterContractComment($TransporterContractComment)
    {
      $this->TransporterContractComment = $TransporterContractComment;
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
     * @return \Ongoing\ShipmentPayment
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

}
