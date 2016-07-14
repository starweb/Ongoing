<?php

namespace Ongoing;

class GoodsOwnerInfo
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $GoodsOwnerReference
     */
    protected $GoodsOwnerReference = null;

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
     * @var int $CountryId
     */
    protected $CountryId = null;

    /**
     * @var string $TelePhone
     */
    protected $TelePhone = null;

    /**
     * @var string $MobilePhone
     */
    protected $MobilePhone = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $GoodsLocationCode
     */
    protected $GoodsLocationCode = null;

    /**
     * @var string $OrganizationNumber
     */
    protected $OrganizationNumber = null;

    /**
     * @var string $OrganizationVATNumber
     */
    protected $OrganizationVATNumber = null;

    /**
     * @param int $Id
     * @param int $CountryId
     */
    public function __construct($Id, $CountryId)
    {
      $this->Id = $Id;
      $this->CountryId = $CountryId;
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
     * @return \Ongoing\GoodsOwnerInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerReference()
    {
      return $this->GoodsOwnerReference;
    }

    /**
     * @param string $GoodsOwnerReference
     * @return \Ongoing\GoodsOwnerInfo
     */
    public function setGoodsOwnerReference($GoodsOwnerReference)
    {
      $this->GoodsOwnerReference = $GoodsOwnerReference;
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
     * @return \Ongoing\GoodsOwnerInfo
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
     * @return \Ongoing\GoodsOwnerInfo
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
     * @return \Ongoing\GoodsOwnerInfo
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
     * @return \Ongoing\GoodsOwnerInfo
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
     * @return \Ongoing\GoodsOwnerInfo
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
     * @return \Ongoing\GoodsOwnerInfo
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->CountryId;
    }

    /**
     * @param int $CountryId
     * @return \Ongoing\GoodsOwnerInfo
     */
    public function setCountryId($CountryId)
    {
      $this->CountryId = $CountryId;
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
     * @return \Ongoing\GoodsOwnerInfo
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
     * @return \Ongoing\GoodsOwnerInfo
     */
    public function setMobilePhone($MobilePhone)
    {
      $this->MobilePhone = $MobilePhone;
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
     * @return \Ongoing\GoodsOwnerInfo
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsLocationCode()
    {
      return $this->GoodsLocationCode;
    }

    /**
     * @param string $GoodsLocationCode
     * @return \Ongoing\GoodsOwnerInfo
     */
    public function setGoodsLocationCode($GoodsLocationCode)
    {
      $this->GoodsLocationCode = $GoodsLocationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationNumber()
    {
      return $this->OrganizationNumber;
    }

    /**
     * @param string $OrganizationNumber
     * @return \Ongoing\GoodsOwnerInfo
     */
    public function setOrganizationNumber($OrganizationNumber)
    {
      $this->OrganizationNumber = $OrganizationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationVATNumber()
    {
      return $this->OrganizationVATNumber;
    }

    /**
     * @param string $OrganizationVATNumber
     * @return \Ongoing\GoodsOwnerInfo
     */
    public function setOrganizationVATNumber($OrganizationVATNumber)
    {
      $this->OrganizationVATNumber = $OrganizationVATNumber;
      return $this;
    }

}
