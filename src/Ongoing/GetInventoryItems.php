<?php

namespace Ongoing;

class GetInventoryItems
{

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var InventoryItemsQuery $InventoryItemsQuery
     */
    protected $InventoryItemsQuery = null;

    /**
     * @param int $GoodsOwnerId
     * @param string $UserName
     * @param string $Password
     * @param InventoryItemsQuery $InventoryItemsQuery
     */
    public function __construct($GoodsOwnerId, $UserName, $Password, $InventoryItemsQuery)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->InventoryItemsQuery = $InventoryItemsQuery;
    }

    /**
     * @return int
     */
    public function getGoodsOwnerId()
    {
      return $this->GoodsOwnerId;
    }

    /**
     * @param int $GoodsOwnerId
     * @return \Ongoing\GetInventoryItems
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
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
     * @return \Ongoing\GetInventoryItems
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
     * @return \Ongoing\GetInventoryItems
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return InventoryItemsQuery
     */
    public function getInventoryItemsQuery()
    {
      return $this->InventoryItemsQuery;
    }

    /**
     * @param InventoryItemsQuery $InventoryItemsQuery
     * @return \Ongoing\GetInventoryItems
     */
    public function setInventoryItemsQuery($InventoryItemsQuery)
    {
      $this->InventoryItemsQuery = $InventoryItemsQuery;
      return $this;
    }

}
