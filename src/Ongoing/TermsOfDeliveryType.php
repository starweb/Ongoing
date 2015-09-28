<?php

namespace Ongoing;

class TermsOfDeliveryType
{

    /**
     * @var TermsOfDeliveryTypeOperation $TermsOfDeliveryTypeOperation
     */
    protected $TermsOfDeliveryTypeOperation = null;

    /**
     * @var TermsOfDeliveryTypeIdentification $TermsOfDeliveryTypeIdentification
     */
    protected $TermsOfDeliveryTypeIdentification = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param TermsOfDeliveryTypeOperation $TermsOfDeliveryTypeOperation
     * @param TermsOfDeliveryTypeIdentification $TermsOfDeliveryTypeIdentification
     */
    public function __construct($TermsOfDeliveryTypeOperation, $TermsOfDeliveryTypeIdentification)
    {
      $this->TermsOfDeliveryTypeOperation = $TermsOfDeliveryTypeOperation;
      $this->TermsOfDeliveryTypeIdentification = $TermsOfDeliveryTypeIdentification;
    }

    /**
     * @return TermsOfDeliveryTypeOperation
     */
    public function getTermsOfDeliveryTypeOperation()
    {
      return $this->TermsOfDeliveryTypeOperation;
    }

    /**
     * @param TermsOfDeliveryTypeOperation $TermsOfDeliveryTypeOperation
     * @return \Ongoing\TermsOfDeliveryType
     */
    public function setTermsOfDeliveryTypeOperation($TermsOfDeliveryTypeOperation)
    {
      $this->TermsOfDeliveryTypeOperation = $TermsOfDeliveryTypeOperation;
      return $this;
    }

    /**
     * @return TermsOfDeliveryTypeIdentification
     */
    public function getTermsOfDeliveryTypeIdentification()
    {
      return $this->TermsOfDeliveryTypeIdentification;
    }

    /**
     * @param TermsOfDeliveryTypeIdentification $TermsOfDeliveryTypeIdentification
     * @return \Ongoing\TermsOfDeliveryType
     */
    public function setTermsOfDeliveryTypeIdentification($TermsOfDeliveryTypeIdentification)
    {
      $this->TermsOfDeliveryTypeIdentification = $TermsOfDeliveryTypeIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Ongoing\TermsOfDeliveryType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Ongoing\TermsOfDeliveryType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
