<?php

namespace Ongoing;

class ProcessShipment
{

    /**
     * @var string $GoodsOwnerCode
     */
    protected $GoodsOwnerCode = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var Shipment $Shipment
     */
    protected $Shipment = null;

    /**
     * @param string $GoodsOwnerCode
     * @param string $UserName
     * @param string $Password
     * @param Shipment $Shipment
     */
    public function __construct($GoodsOwnerCode, $UserName, $Password, $Shipment)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->Shipment = $Shipment;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerCode()
    {
      return $this->GoodsOwnerCode;
    }

    /**
     * @param string $GoodsOwnerCode
     * @return \Ongoing\ProcessShipment
     */
    public function setGoodsOwnerCode($GoodsOwnerCode)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \Ongoing\ProcessShipment
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Ongoing\ProcessShipment
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return Shipment
     */
    public function getShipment()
    {
      return $this->Shipment;
    }

    /**
     * @param Shipment $Shipment
     * @return \Ongoing\ProcessShipment
     */
    public function setShipment($Shipment)
    {
      $this->Shipment = $Shipment;
      return $this;
    }

}
