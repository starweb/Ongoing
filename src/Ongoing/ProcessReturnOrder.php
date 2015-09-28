<?php

namespace Ongoing;

class ProcessReturnOrder
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
     * @var ReturnOrder $ReturnOrder
     */
    protected $ReturnOrder = null;

    /**
     * @param string $GoodsOwnerCode
     * @param string $UserName
     * @param string $Password
     * @param ReturnOrder $ReturnOrder
     */
    public function __construct($GoodsOwnerCode, $UserName, $Password, $ReturnOrder)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->ReturnOrder = $ReturnOrder;
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
     * @return \Ongoing\ProcessReturnOrder
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
     * @return \Ongoing\ProcessReturnOrder
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
     * @return \Ongoing\ProcessReturnOrder
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ReturnOrder
     */
    public function getReturnOrder()
    {
      return $this->ReturnOrder;
    }

    /**
     * @param ReturnOrder $ReturnOrder
     * @return \Ongoing\ProcessReturnOrder
     */
    public function setReturnOrder($ReturnOrder)
    {
      $this->ReturnOrder = $ReturnOrder;
      return $this;
    }

}
