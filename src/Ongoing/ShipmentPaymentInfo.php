<?php

namespace Ongoing;

class ShipmentPaymentInfo
{

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
     * @var string $GoodsOwnerEdiCode
     */
    protected $GoodsOwnerEdiCode = null;

    /**
     * @var string $TransporterEdiCode
     */
    protected $TransporterEdiCode = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @param ShipmentPaymentType $ShipmentPaymentType
     */
    public function __construct($ShipmentPaymentType)
    {
      $this->ShipmentPaymentType = $ShipmentPaymentType;
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
     * @return \Ongoing\ShipmentPaymentInfo
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
     * @return \Ongoing\ShipmentPaymentInfo
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
     * @return \Ongoing\ShipmentPaymentInfo
     */
    public function setTransporterServiceCode($TransporterServiceCode)
    {
      $this->TransporterServiceCode = $TransporterServiceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerEdiCode()
    {
      return $this->GoodsOwnerEdiCode;
    }

    /**
     * @param string $GoodsOwnerEdiCode
     * @return \Ongoing\ShipmentPaymentInfo
     */
    public function setGoodsOwnerEdiCode($GoodsOwnerEdiCode)
    {
      $this->GoodsOwnerEdiCode = $GoodsOwnerEdiCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransporterEdiCode()
    {
      return $this->TransporterEdiCode;
    }

    /**
     * @param string $TransporterEdiCode
     * @return \Ongoing\ShipmentPaymentInfo
     */
    public function setTransporterEdiCode($TransporterEdiCode)
    {
      $this->TransporterEdiCode = $TransporterEdiCode;
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
     * @return \Ongoing\ShipmentPaymentInfo
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

}
