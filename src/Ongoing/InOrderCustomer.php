<?php

namespace Ongoing;

class InOrderCustomer
{

    /**
     * @var InOrderCustomerIdentificationType $InOrderCustomerIdentification
     */
    protected $InOrderCustomerIdentification = null;

    /**
     * @var InOrderCustomerOperation $InOrderCustomerOperation
     */
    protected $InOrderCustomerOperation = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $AddressName
     */
    protected $AddressName = null;

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
     * @var string $AddressEmail
     */
    protected $AddressEmail = null;

    /**
     * @var string $MobilePhone
     */
    protected $MobilePhone = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param InOrderCustomerIdentificationType $InOrderCustomerIdentification
     * @param InOrderCustomerOperation $InOrderCustomerOperation
     */
    public function __construct($InOrderCustomerIdentification, $InOrderCustomerOperation)
    {
      $this->InOrderCustomerIdentification = $InOrderCustomerIdentification;
      $this->InOrderCustomerOperation = $InOrderCustomerOperation;
    }

    /**
     * @return InOrderCustomerIdentificationType
     */
    public function getInOrderCustomerIdentification()
    {
      return $this->InOrderCustomerIdentification;
    }

    /**
     * @param InOrderCustomerIdentificationType $InOrderCustomerIdentification
     * @return \Ongoing\InOrderCustomer
     */
    public function setInOrderCustomerIdentification($InOrderCustomerIdentification)
    {
      $this->InOrderCustomerIdentification = $InOrderCustomerIdentification;
      return $this;
    }

    /**
     * @return InOrderCustomerOperation
     */
    public function getInOrderCustomerOperation()
    {
      return $this->InOrderCustomerOperation;
    }

    /**
     * @param InOrderCustomerOperation $InOrderCustomerOperation
     * @return \Ongoing\InOrderCustomer
     */
    public function setInOrderCustomerOperation($InOrderCustomerOperation)
    {
      $this->InOrderCustomerOperation = $InOrderCustomerOperation;
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
     * @return \Ongoing\InOrderCustomer
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
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
     * @return \Ongoing\InOrderCustomer
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressName()
    {
      return $this->AddressName;
    }

    /**
     * @param string $AddressName
     * @return \Ongoing\InOrderCustomer
     */
    public function setAddressName($AddressName)
    {
      $this->AddressName = $AddressName;
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
     * @return \Ongoing\InOrderCustomer
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
     * @return \Ongoing\InOrderCustomer
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
     * @return \Ongoing\InOrderCustomer
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
     * @return \Ongoing\InOrderCustomer
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
     * @return \Ongoing\InOrderCustomer
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
     * @return \Ongoing\InOrderCustomer
     */
    public function setTelePhone($TelePhone)
    {
      $this->TelePhone = $TelePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressEmail()
    {
      return $this->AddressEmail;
    }

    /**
     * @param string $AddressEmail
     * @return \Ongoing\InOrderCustomer
     */
    public function setAddressEmail($AddressEmail)
    {
      $this->AddressEmail = $AddressEmail;
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
     * @return \Ongoing\InOrderCustomer
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
     * @return \Ongoing\InOrderCustomer
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
