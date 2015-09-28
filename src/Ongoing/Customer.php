<?php

namespace Ongoing;

class Customer
{

    /**
     * @var CustomerOperation $CustomerOperation
     */
    protected $CustomerOperation = null;

    /**
     * @var CustomerIdentificationType $CustomerIdentification
     */
    protected $CustomerIdentification = null;

    /**
     * @var GoodsOwner $GoodsOwner
     */
    protected $GoodsOwner = null;

    /**
     * @var string $ExternalCustomerCode
     */
    protected $ExternalCustomerCode = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var int $DeliveryAddressId
     */
    protected $DeliveryAddressId = null;

    /**
     * @var int $InvoiceAddressId
     */
    protected $InvoiceAddressId = null;

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
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $CountryStateCode
     */
    protected $CountryStateCode = null;

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
     * @var InvoiceAddress $InvoiceAddress
     */
    protected $InvoiceAddress = null;

    /**
     * @var CustomerGroup $CustomerGroup
     */
    protected $CustomerGroup = null;

    /**
     * @param CustomerOperation $CustomerOperation
     * @param CustomerIdentificationType $CustomerIdentification
     * @param boolean $IsVisible
     * @param boolean $NotifyBySMS
     * @param boolean $NotifyByEmail
     * @param boolean $NotifyByTelephone
     */
    public function __construct($CustomerOperation, $CustomerIdentification, $IsVisible, $NotifyBySMS, $NotifyByEmail, $NotifyByTelephone)
    {
      $this->CustomerOperation = $CustomerOperation;
      $this->CustomerIdentification = $CustomerIdentification;
      $this->IsVisible = $IsVisible;
      $this->NotifyBySMS = $NotifyBySMS;
      $this->NotifyByEmail = $NotifyByEmail;
      $this->NotifyByTelephone = $NotifyByTelephone;
    }

    /**
     * @return CustomerOperation
     */
    public function getCustomerOperation()
    {
      return $this->CustomerOperation;
    }

    /**
     * @param CustomerOperation $CustomerOperation
     * @return \Ongoing\Customer
     */
    public function setCustomerOperation($CustomerOperation)
    {
      $this->CustomerOperation = $CustomerOperation;
      return $this;
    }

    /**
     * @return CustomerIdentificationType
     */
    public function getCustomerIdentification()
    {
      return $this->CustomerIdentification;
    }

    /**
     * @param CustomerIdentificationType $CustomerIdentification
     * @return \Ongoing\Customer
     */
    public function setCustomerIdentification($CustomerIdentification)
    {
      $this->CustomerIdentification = $CustomerIdentification;
      return $this;
    }

    /**
     * @return GoodsOwner
     */
    public function getGoodsOwner()
    {
      return $this->GoodsOwner;
    }

    /**
     * @param GoodsOwner $GoodsOwner
     * @return \Ongoing\Customer
     */
    public function setGoodsOwner($GoodsOwner)
    {
      $this->GoodsOwner = $GoodsOwner;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalCustomerCode()
    {
      return $this->ExternalCustomerCode;
    }

    /**
     * @param string $ExternalCustomerCode
     * @return \Ongoing\Customer
     */
    public function setExternalCustomerCode($ExternalCustomerCode)
    {
      $this->ExternalCustomerCode = $ExternalCustomerCode;
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
     * @return \Ongoing\Customer
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param int $CustomerId
     * @return \Ongoing\Customer
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryAddressId()
    {
      return $this->DeliveryAddressId;
    }

    /**
     * @param int $DeliveryAddressId
     * @return \Ongoing\Customer
     */
    public function setDeliveryAddressId($DeliveryAddressId)
    {
      $this->DeliveryAddressId = $DeliveryAddressId;
      return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceAddressId()
    {
      return $this->InvoiceAddressId;
    }

    /**
     * @param int $InvoiceAddressId
     * @return \Ongoing\Customer
     */
    public function setInvoiceAddressId($InvoiceAddressId)
    {
      $this->InvoiceAddressId = $InvoiceAddressId;
      return $this;
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
     */
    public function setMobilePhone($MobilePhone)
    {
      $this->MobilePhone = $MobilePhone;
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
     * @return \Ongoing\Customer
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
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
     * @return \Ongoing\Customer
     */
    public function setCountryStateCode($CountryStateCode)
    {
      $this->CountryStateCode = $CountryStateCode;
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
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
     * @return \Ongoing\Customer
     */
    public function setNotifyByTelephone($NotifyByTelephone)
    {
      $this->NotifyByTelephone = $NotifyByTelephone;
      return $this;
    }

    /**
     * @return InvoiceAddress
     */
    public function getInvoiceAddress()
    {
      return $this->InvoiceAddress;
    }

    /**
     * @param InvoiceAddress $InvoiceAddress
     * @return \Ongoing\Customer
     */
    public function setInvoiceAddress($InvoiceAddress)
    {
      $this->InvoiceAddress = $InvoiceAddress;
      return $this;
    }

    /**
     * @return CustomerGroup
     */
    public function getCustomerGroup()
    {
      return $this->CustomerGroup;
    }

    /**
     * @param CustomerGroup $CustomerGroup
     * @return \Ongoing\Customer
     */
    public function setCustomerGroup($CustomerGroup)
    {
      $this->CustomerGroup = $CustomerGroup;
      return $this;
    }

}
