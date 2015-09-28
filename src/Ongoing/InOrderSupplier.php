<?php

namespace Ongoing;

class InOrderSupplier
{

    /**
     * @var InOrderSupplierIdentificationType $InOrderSupplierIdentificationType
     */
    protected $InOrderSupplierIdentificationType = null;

    /**
     * @var InOrderSupplierOperation $InOrderSupplierOperation
     */
    protected $InOrderSupplierOperation = null;

    /**
     * @var string $SupplierNumber
     */
    protected $SupplierNumber = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var AddressClass $Address
     */
    protected $Address = null;

    /**
     * @param InOrderSupplierIdentificationType $InOrderSupplierIdentificationType
     * @param InOrderSupplierOperation $InOrderSupplierOperation
     */
    public function __construct($InOrderSupplierIdentificationType, $InOrderSupplierOperation)
    {
      $this->InOrderSupplierIdentificationType = $InOrderSupplierIdentificationType;
      $this->InOrderSupplierOperation = $InOrderSupplierOperation;
    }

    /**
     * @return InOrderSupplierIdentificationType
     */
    public function getInOrderSupplierIdentificationType()
    {
      return $this->InOrderSupplierIdentificationType;
    }

    /**
     * @param InOrderSupplierIdentificationType $InOrderSupplierIdentificationType
     * @return \Ongoing\InOrderSupplier
     */
    public function setInOrderSupplierIdentificationType($InOrderSupplierIdentificationType)
    {
      $this->InOrderSupplierIdentificationType = $InOrderSupplierIdentificationType;
      return $this;
    }

    /**
     * @return InOrderSupplierOperation
     */
    public function getInOrderSupplierOperation()
    {
      return $this->InOrderSupplierOperation;
    }

    /**
     * @param InOrderSupplierOperation $InOrderSupplierOperation
     * @return \Ongoing\InOrderSupplier
     */
    public function setInOrderSupplierOperation($InOrderSupplierOperation)
    {
      $this->InOrderSupplierOperation = $InOrderSupplierOperation;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierNumber()
    {
      return $this->SupplierNumber;
    }

    /**
     * @param string $SupplierNumber
     * @return \Ongoing\InOrderSupplier
     */
    public function setSupplierNumber($SupplierNumber)
    {
      $this->SupplierNumber = $SupplierNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierName()
    {
      return $this->SupplierName;
    }

    /**
     * @param string $SupplierName
     * @return \Ongoing\InOrderSupplier
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

    /**
     * @return AddressClass
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AddressClass $Address
     * @return \Ongoing\InOrderSupplier
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
