<?php

namespace Ongoing;

class GetInventoryPerWarehouse
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
     * @var GetInventoryPerWarehouseQuery $InventoryPerWarehouseQuery
     */
    protected $InventoryPerWarehouseQuery = null;

    /**
     * @param string $GoodsOwnerCode
     * @param string $UserName
     * @param string $Password
     * @param GetInventoryPerWarehouseQuery $InventoryPerWarehouseQuery
     */
    public function __construct($GoodsOwnerCode, $UserName, $Password, $InventoryPerWarehouseQuery)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->InventoryPerWarehouseQuery = $InventoryPerWarehouseQuery;
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
     * @return \Ongoing\GetInventoryPerWarehouse
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
     * @return \Ongoing\GetInventoryPerWarehouse
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
     * @return \Ongoing\GetInventoryPerWarehouse
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return GetInventoryPerWarehouseQuery
     */
    public function getInventoryPerWarehouseQuery()
    {
      return $this->InventoryPerWarehouseQuery;
    }

    /**
     * @param GetInventoryPerWarehouseQuery $InventoryPerWarehouseQuery
     * @return \Ongoing\GetInventoryPerWarehouse
     */
    public function setInventoryPerWarehouseQuery($InventoryPerWarehouseQuery)
    {
      $this->InventoryPerWarehouseQuery = $InventoryPerWarehouseQuery;
      return $this;
    }

}
