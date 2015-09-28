<?php

namespace Ongoing;

class Consignee
{

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
     * @var string $CountryStateCode
     */
    protected $CountryStateCode = null;

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
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $CustomerGroupCode
     */
    protected $CustomerGroupCode = null;

    /**
     * @var string $CustomerGroupName
     */
    protected $CustomerGroupName = null;

    /**
     * @var string $CustomerNumberPallets
     */
    protected $CustomerNumberPallets = null;

    /**
     * @var string $TermsOfPaymentTypeName
     */
    protected $TermsOfPaymentTypeName = null;

    /**
     * @var string $TermsOfPaymentTypeCode
     */
    protected $TermsOfPaymentTypeCode = null;

    /**
     * @var ConsigneeInvoiceAddress $InvoiceAddress
     */
    protected $InvoiceAddress = null;

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
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
     */
    public function setCountryStateCode($CountryStateCode)
    {
      $this->CountryStateCode = $CountryStateCode;
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
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
     * @return \Ongoing\Consignee
     */
    public function setNotifyByTelephone($NotifyByTelephone)
    {
      $this->NotifyByTelephone = $NotifyByTelephone;
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
     * @return \Ongoing\Consignee
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerGroupCode()
    {
      return $this->CustomerGroupCode;
    }

    /**
     * @param string $CustomerGroupCode
     * @return \Ongoing\Consignee
     */
    public function setCustomerGroupCode($CustomerGroupCode)
    {
      $this->CustomerGroupCode = $CustomerGroupCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerGroupName()
    {
      return $this->CustomerGroupName;
    }

    /**
     * @param string $CustomerGroupName
     * @return \Ongoing\Consignee
     */
    public function setCustomerGroupName($CustomerGroupName)
    {
      $this->CustomerGroupName = $CustomerGroupName;
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
     * @return \Ongoing\Consignee
     */
    public function setCustomerNumberPallets($CustomerNumberPallets)
    {
      $this->CustomerNumberPallets = $CustomerNumberPallets;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfPaymentTypeName()
    {
      return $this->TermsOfPaymentTypeName;
    }

    /**
     * @param string $TermsOfPaymentTypeName
     * @return \Ongoing\Consignee
     */
    public function setTermsOfPaymentTypeName($TermsOfPaymentTypeName)
    {
      $this->TermsOfPaymentTypeName = $TermsOfPaymentTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfPaymentTypeCode()
    {
      return $this->TermsOfPaymentTypeCode;
    }

    /**
     * @param string $TermsOfPaymentTypeCode
     * @return \Ongoing\Consignee
     */
    public function setTermsOfPaymentTypeCode($TermsOfPaymentTypeCode)
    {
      $this->TermsOfPaymentTypeCode = $TermsOfPaymentTypeCode;
      return $this;
    }

    /**
     * @return ConsigneeInvoiceAddress
     */
    public function getInvoiceAddress()
    {
      return $this->InvoiceAddress;
    }

    /**
     * @param ConsigneeInvoiceAddress $InvoiceAddress
     * @return \Ongoing\Consignee
     */
    public function setInvoiceAddress($InvoiceAddress)
    {
      $this->InvoiceAddress = $InvoiceAddress;
      return $this;
    }

}
