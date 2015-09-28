<?php

namespace Ongoing;

class ShipmentSupplierInfo
{

    /**
     * @var string $SupplierNumber
     */
    protected $SupplierNumber = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    
    public function __construct()
    {
    
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
     * @return \Ongoing\ShipmentSupplierInfo
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
     * @return \Ongoing\ShipmentSupplierInfo
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \Ongoing\ShipmentSupplierInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Ongoing\ShipmentSupplierInfo
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \Ongoing\ShipmentSupplierInfo
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \Ongoing\ShipmentSupplierInfo
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
