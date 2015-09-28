<?php

namespace Ongoing;

class OrderNotification
{

    /**
     * @var string $Telephone
     */
    protected $Telephone = null;

    /**
     * @var string $MobilePhone
     */
    protected $MobilePhone = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

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

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
      return $this->Telephone;
    }

    /**
     * @param string $Telephone
     * @return \Ongoing\OrderNotification
     */
    public function setTelephone($Telephone)
    {
      $this->Telephone = $Telephone;
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
     * @return \Ongoing\OrderNotification
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
     * @return \Ongoing\OrderNotification
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
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
     * @return \Ongoing\OrderNotification
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
     * @return \Ongoing\OrderNotification
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
     * @return \Ongoing\OrderNotification
     */
    public function setNotifyByTelephone($NotifyByTelephone)
    {
      $this->NotifyByTelephone = $NotifyByTelephone;
      return $this;
    }

}
