<?php

namespace Ongoing;

class Supplier
{

    /**
     * @var SupplierIdentificationType $SupplierIdentificationType
     */
    protected $SupplierIdentificationType = null;

    /**
     * @var SupplierOperation $SupplierOperation
     */
    protected $SupplierOperation = null;

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
     * @param SupplierIdentificationType $SupplierIdentificationType
     * @param SupplierOperation $SupplierOperation
     */
    public function __construct($SupplierIdentificationType, $SupplierOperation)
    {
      $this->SupplierIdentificationType = $SupplierIdentificationType;
      $this->SupplierOperation = $SupplierOperation;
    }

    /**
     * @return SupplierIdentificationType
     */
    public function getSupplierIdentificationType()
    {
      return $this->SupplierIdentificationType;
    }

    /**
     * @param SupplierIdentificationType $SupplierIdentificationType
     * @return \Ongoing\Supplier
     */
    public function setSupplierIdentificationType($SupplierIdentificationType)
    {
      $this->SupplierIdentificationType = $SupplierIdentificationType;
      return $this;
    }

    /**
     * @return SupplierOperation
     */
    public function getSupplierOperation()
    {
      return $this->SupplierOperation;
    }

    /**
     * @param SupplierOperation $SupplierOperation
     * @return \Ongoing\Supplier
     */
    public function setSupplierOperation($SupplierOperation)
    {
      $this->SupplierOperation = $SupplierOperation;
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
     * @return \Ongoing\Supplier
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
     * @return \Ongoing\Supplier
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
     * @return \Ongoing\Supplier
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
