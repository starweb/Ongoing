<?php

namespace Ongoing;

class ProcessInOrder
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
     * @var InOrder $co
     */
    protected $co = null;

    /**
     * @param string $GoodsOwnerCode
     * @param string $UserName
     * @param string $Password
     * @param InOrder $co
     */
    public function __construct($GoodsOwnerCode, $UserName, $Password, $co)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->co = $co;
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
     * @return \Ongoing\ProcessInOrder
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
     * @return \Ongoing\ProcessInOrder
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
     * @return \Ongoing\ProcessInOrder
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return InOrder
     */
    public function getCo()
    {
      return $this->co;
    }

    /**
     * @param InOrder $co
     * @return \Ongoing\ProcessInOrder
     */
    public function setCo($co)
    {
      $this->co = $co;
      return $this;
    }

}
