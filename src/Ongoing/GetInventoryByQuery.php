<?php

namespace Ongoing;

class GetInventoryByQuery
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
     * @var GetInventoryQuery $GetInventoryQuery
     */
    protected $GetInventoryQuery = null;

    /**
     * @param string $GoodsOwnerCode
     * @param string $UserName
     * @param string $Password
     * @param GetInventoryQuery $GetInventoryQuery
     */
    public function __construct($GoodsOwnerCode, $UserName, $Password, $GetInventoryQuery)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->GetInventoryQuery = $GetInventoryQuery;
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
     * @return \Ongoing\GetInventoryByQuery
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
     * @return \Ongoing\GetInventoryByQuery
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
     * @return \Ongoing\GetInventoryByQuery
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return GetInventoryQuery
     */
    public function getGetInventoryQuery()
    {
      return $this->GetInventoryQuery;
    }

    /**
     * @param GetInventoryQuery $GetInventoryQuery
     * @return \Ongoing\GetInventoryByQuery
     */
    public function setGetInventoryQuery($GetInventoryQuery)
    {
      $this->GetInventoryQuery = $GetInventoryQuery;
      return $this;
    }

}
