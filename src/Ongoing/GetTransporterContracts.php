<?php

namespace Ongoing;

class GetTransporterContracts
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $GoodsOwnerCode
     */
    protected $GoodsOwnerCode = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param string $GoodsOwnerCode
     */
    public function __construct($UserName, $Password, $GoodsOwnerCode)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->GoodsOwnerCode = $GoodsOwnerCode;
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
     * @return \Ongoing\GetTransporterContracts
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
     * @return \Ongoing\GetTransporterContracts
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
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
     * @return \Ongoing\GetTransporterContracts
     */
    public function setGoodsOwnerCode($GoodsOwnerCode)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      return $this;
    }

}
