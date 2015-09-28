<?php

namespace Ongoing;

class ShipmentConsignorInfo
{

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $CustomerNumberPallets
     */
    protected $CustomerNumberPallets = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $Address3
     */
    protected $Address3 = null;

    /**
     * @var string $PostCode
     */
    protected $PostCode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var boolean $IsEuCountry
     */
    protected $IsEuCountry = null;

    /**
     * @var string $TelePhone
     */
    protected $TelePhone = null;

    /**
     * @var string $MobilePhone
     */
    protected $MobilePhone = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $DeliveryInstruction
     */
    protected $DeliveryInstruction = null;

    /**
     * @var boolean $NotifyByEmail
     */
    protected $NotifyByEmail = null;

    /**
     * @var boolean $NotifyBySms
     */
    protected $NotifyBySms = null;

    /**
     * @var boolean $NotifyByTelephone
     */
    protected $NotifyByTelephone = null;

    /**
     * @param int $Id
     * @param boolean $IsEuCountry
     * @param boolean $NotifyByEmail
     * @param boolean $NotifyBySms
     */
    public function __construct($Id, $IsEuCountry, $NotifyByEmail, $NotifyBySms)
    {
      $this->Id = $Id;
      $this->IsEuCountry = $IsEuCountry;
      $this->NotifyByEmail = $NotifyByEmail;
      $this->NotifyBySms = $NotifyBySms;
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
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumberPallets()
    {
      return $this->CustomerNumberPallets;
    }

    /**
     * @param string $CustomerNumberPallets
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setCustomerNumberPallets($CustomerNumberPallets)
    {
      $this->CustomerNumberPallets = $CustomerNumberPallets;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
      return $this->Address3;
    }

    /**
     * @param string $Address3
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setAddress3($Address3)
    {
      $this->Address3 = $Address3;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->PostCode;
    }

    /**
     * @param string $PostCode
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setPostCode($PostCode)
    {
      $this->PostCode = $PostCode;
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
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEuCountry()
    {
      return $this->IsEuCountry;
    }

    /**
     * @param boolean $IsEuCountry
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setIsEuCountry($IsEuCountry)
    {
      $this->IsEuCountry = $IsEuCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelePhone()
    {
      return $this->TelePhone;
    }

    /**
     * @param string $TelePhone
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setTelePhone($TelePhone)
    {
      $this->TelePhone = $TelePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
      return $this->MobilePhone;
    }

    /**
     * @param string $MobilePhone
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setMobilePhone($MobilePhone)
    {
      $this->MobilePhone = $MobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryInstruction()
    {
      return $this->DeliveryInstruction;
    }

    /**
     * @param string $DeliveryInstruction
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setDeliveryInstruction($DeliveryInstruction)
    {
      $this->DeliveryInstruction = $DeliveryInstruction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotifyByEmail()
    {
      return $this->NotifyByEmail;
    }

    /**
     * @param boolean $NotifyByEmail
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setNotifyByEmail($NotifyByEmail)
    {
      $this->NotifyByEmail = $NotifyByEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotifyBySms()
    {
      return $this->NotifyBySms;
    }

    /**
     * @param boolean $NotifyBySms
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setNotifyBySms($NotifyBySms)
    {
      $this->NotifyBySms = $NotifyBySms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotifyByTelephone()
    {
      return $this->NotifyByTelephone;
    }

    /**
     * @param boolean $NotifyByTelephone
     * @return \Ongoing\ShipmentConsignorInfo
     */
    public function setNotifyByTelephone($NotifyByTelephone)
    {
      $this->NotifyByTelephone = $NotifyByTelephone;
      return $this;
    }

}
