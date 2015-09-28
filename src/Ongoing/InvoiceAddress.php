<?php

namespace Ongoing;

class InvoiceAddress
{

    /**
     * @var Coordinates $Coordinates
     */
    protected $Coordinates = null;

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
     * @var string $TelePhone
     */
    protected $TelePhone = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $MobilePhone
     */
    protected $MobilePhone = null;

    /**
     * @var string $CountryStateCode
     */
    protected $CountryStateCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $DeliveryInstruction
     */
    protected $DeliveryInstruction = null;

    /**
     * @var boolean $IsVisible
     */
    protected $IsVisible = null;

    /**
     * @var boolean $NotifyBySMS
     */
    protected $NotifyBySMS = null;

    /**
     * @var boolean $NotifyByEmail
     */
    protected $NotifyByEmail = null;

    /**
     * @var boolean $NotifyByTelephone
     */
    protected $NotifyByTelephone = null;

    /**
     * @param boolean $IsVisible
     * @param boolean $NotifyBySMS
     * @param boolean $NotifyByEmail
     * @param boolean $NotifyByTelephone
     */
    public function __construct($IsVisible, $NotifyBySMS, $NotifyByEmail, $NotifyByTelephone)
    {
      $this->IsVisible = $IsVisible;
      $this->NotifyBySMS = $NotifyBySMS;
      $this->NotifyByEmail = $NotifyByEmail;
      $this->NotifyByTelephone = $NotifyByTelephone;
    }

    /**
     * @return Coordinates
     */
    public function getCoordinates()
    {
      return $this->Coordinates;
    }

    /**
     * @param Coordinates $Coordinates
     * @return \Ongoing\InvoiceAddress
     */
    public function setCoordinates($Coordinates)
    {
      $this->Coordinates = $Coordinates;
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
     * @return \Ongoing\InvoiceAddress
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
     * @return \Ongoing\InvoiceAddress
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
     * @return \Ongoing\InvoiceAddress
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
     * @return \Ongoing\InvoiceAddress
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
     * @return \Ongoing\InvoiceAddress
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
     * @return \Ongoing\InvoiceAddress
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \Ongoing\InvoiceAddress
     */
    public function setTelePhone($TelePhone)
    {
      $this->TelePhone = $TelePhone;
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
     * @return \Ongoing\InvoiceAddress
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
     * @return \Ongoing\InvoiceAddress
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
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
     * @return \Ongoing\InvoiceAddress
     */
    public function setMobilePhone($MobilePhone)
    {
      $this->MobilePhone = $MobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryStateCode()
    {
      return $this->CountryStateCode;
    }

    /**
     * @param string $CountryStateCode
     * @return \Ongoing\InvoiceAddress
     */
    public function setCountryStateCode($CountryStateCode)
    {
      $this->CountryStateCode = $CountryStateCode;
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
     * @return \Ongoing\InvoiceAddress
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
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
     * @return \Ongoing\InvoiceAddress
     */
    public function setDeliveryInstruction($DeliveryInstruction)
    {
      $this->DeliveryInstruction = $DeliveryInstruction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVisible()
    {
      return $this->IsVisible;
    }

    /**
     * @param boolean $IsVisible
     * @return \Ongoing\InvoiceAddress
     */
    public function setIsVisible($IsVisible)
    {
      $this->IsVisible = $IsVisible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotifyBySMS()
    {
      return $this->NotifyBySMS;
    }

    /**
     * @param boolean $NotifyBySMS
     * @return \Ongoing\InvoiceAddress
     */
    public function setNotifyBySMS($NotifyBySMS)
    {
      $this->NotifyBySMS = $NotifyBySMS;
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
     * @return \Ongoing\InvoiceAddress
     */
    public function setNotifyByEmail($NotifyByEmail)
    {
      $this->NotifyByEmail = $NotifyByEmail;
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
     * @return \Ongoing\InvoiceAddress
     */
    public function setNotifyByTelephone($NotifyByTelephone)
    {
      $this->NotifyByTelephone = $NotifyByTelephone;
      return $this;
    }

}
