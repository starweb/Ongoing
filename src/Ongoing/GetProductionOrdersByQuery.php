<?php

namespace Ongoing;

class GetProductionOrdersByQuery
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
     * @var ProductionOrderFilters $query
     */
    protected $query = null;

    /**
     * @param string $GoodsOwnerCode
     * @param string $UserName
     * @param string $Password
     * @param ProductionOrderFilters $query
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
     * @return \Ongoing\GetProductionOrdersByQuery
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
     * @return \Ongoing\GetProductionOrdersByQuery
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
     * @return \Ongoing\GetProductionOrdersByQuery
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ProductionOrderFilters
     */
    public function getQuery()
    {
      return $this->query;
    }

    /**
     * @param ProductionOrderFilters $query
     * @return \Ongoing\GetProductionOrdersByQuery
     */
    public function setQuery($query)
    {
      $this->query = $query;
      return $this;
    }

}
