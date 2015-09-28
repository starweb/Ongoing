<?php

namespace Ongoing;

class ReceivedInOrderSupplier
{

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var string $SupplierNumber
     */
    protected $SupplierNumber = null;

    /**
     * @var AddressClass $Address
     */
    protected $Address = null;

    
    public function __construct()
    {
    
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
     * @return \Ongoing\ReceivedInOrderSupplier
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
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
     * @return \Ongoing\ReceivedInOrderSupplier
     */
    public function setSupplierNumber($SupplierNumber)
    {
      $this->SupplierNumber = $SupplierNumber;
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
     * @return \Ongoing\ReceivedInOrderSupplier
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
