<?php

namespace Ongoing;

class VatCodeClass
{

    /**
     * @var VatCodeOperation $VatCodeOperation
     */
    protected $VatCodeOperation = null;

    /**
     * @var VatCodeIdentification $VatCodeIdentification
     */
    protected $VatCodeIdentification = null;

    /**
     * @var string $VatCode
     */
    protected $VatCode = null;

    /**
     * @var float $VatPercent
     */
    protected $VatPercent = null;

    /**
     * @param VatCodeOperation $VatCodeOperation
     * @param VatCodeIdentification $VatCodeIdentification
     */
    public function __construct($VatCodeOperation, $VatCodeIdentification)
    {
      $this->VatCodeOperation = $VatCodeOperation;
      $this->VatCodeIdentification = $VatCodeIdentification;
    }

    /**
     * @return VatCodeOperation
     */
    public function getVatCodeOperation()
    {
      return $this->VatCodeOperation;
    }

    /**
     * @param VatCodeOperation $VatCodeOperation
     * @return \Ongoing\VatCodeClass
     */
    public function setVatCodeOperation($VatCodeOperation)
    {
      $this->VatCodeOperation = $VatCodeOperation;
      return $this;
    }

    /**
     * @return VatCodeIdentification
     */
    public function getVatCodeIdentification()
    {
      return $this->VatCodeIdentification;
    }

    /**
     * @param VatCodeIdentification $VatCodeIdentification
     * @return \Ongoing\VatCodeClass
     */
    public function setVatCodeIdentification($VatCodeIdentification)
    {
      $this->VatCodeIdentification = $VatCodeIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatCode()
    {
      return $this->VatCode;
    }

    /**
     * @param string $VatCode
     * @return \Ongoing\VatCodeClass
     */
    public function setVatCode($VatCode)
    {
      $this->VatCode = $VatCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getVatPercent()
    {
      return $this->VatPercent;
    }

    /**
     * @param float $VatPercent
     * @return \Ongoing\VatCodeClass
     */
    public function setVatPercent($VatPercent)
    {
      $this->VatPercent = $VatPercent;
      return $this;
    }

}
