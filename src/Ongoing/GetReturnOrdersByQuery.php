<?php

namespace Ongoing;

class GetReturnOrdersByQuery
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
     * @var GetReturnOrdersQuery $ReturnOrdersQuery
     */
    protected $ReturnOrdersQuery = null;

    /**
     * @param string $GoodsOwnerCode
     * @param string $UserName
     * @param string $Password
     * @param GetReturnOrdersQuery $ReturnOrdersQuery
     */
    public function __construct($GoodsOwnerCode, $UserName, $Password, $ReturnOrdersQuery)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->ReturnOrdersQuery = $ReturnOrdersQuery;
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
     * @return \Ongoing\GetReturnOrdersByQuery
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
     * @return \Ongoing\GetReturnOrdersByQuery
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
     * @return \Ongoing\GetReturnOrdersByQuery
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return GetReturnOrdersQuery
     */
    public function getReturnOrdersQuery()
    {
      return $this->ReturnOrdersQuery;
    }

    /**
     * @param GetReturnOrdersQuery $ReturnOrdersQuery
     * @return \Ongoing\GetReturnOrdersByQuery
     */
    public function setReturnOrdersQuery($ReturnOrdersQuery)
    {
      $this->ReturnOrdersQuery = $ReturnOrdersQuery;
      return $this;
    }

}
