<?php

namespace Ongoing;

class GetInOrderStatusReports
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
     * @var InOrderStatusReportsQuery $query
     */
    protected $query = null;

    /**
     * @param string $GoodsOwnerCode
     * @param string $UserName
     * @param string $Password
     * @param InOrderStatusReportsQuery $query
     */
    public function __construct($GoodsOwnerCode, $UserName, $Password, $query)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->query = $query;
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
     * @return \Ongoing\GetInOrderStatusReports
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
     * @return \Ongoing\GetInOrderStatusReports
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
     * @return \Ongoing\GetInOrderStatusReports
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return InOrderStatusReportsQuery
     */
    public function getQuery()
    {
      return $this->query;
    }

    /**
     * @param InOrderStatusReportsQuery $query
     * @return \Ongoing\GetInOrderStatusReports
     */
    public function setQuery($query)
    {
      $this->query = $query;
      return $this;
    }

}
