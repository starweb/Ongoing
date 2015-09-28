<?php

namespace Ongoing;

class GoodsStatusInventoryLine
{

    /**
     * @var ArticleClass $Article
     */
    protected $Article = null;

    /**
     * @var float $NumberOfBookedItems
     */
    protected $NumberOfBookedItems = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $LockedNumberOfItems
     */
    protected $LockedNumberOfItems = null;

    /**
     * @var float $WarehouseNumberOfItems
     */
    protected $WarehouseNumberOfItems = null;

    /**
     * @var float $LockedWarehouseNumberOfItems
     */
    protected $LockedWarehouseNumberOfItems = null;

    /**
     * @var ArrayOfGoodsStatusInventoryRow $GoodsStatusInventoryRows
     */
    protected $GoodsStatusInventoryRows = null;

    /**
     * @param float $NumberOfBookedItems
     * @param float $NumberOfItems
     * @param float $LockedNumberOfItems
     * @param float $WarehouseNumberOfItems
     * @param float $LockedWarehouseNumberOfItems
     */
    public function __construct($NumberOfBookedItems, $NumberOfItems, $LockedNumberOfItems, $WarehouseNumberOfItems, $LockedWarehouseNumberOfItems)
    {
      $this->NumberOfBookedItems = $NumberOfBookedItems;
      $this->NumberOfItems = $NumberOfItems;
      $this->LockedNumberOfItems = $LockedNumberOfItems;
      $this->WarehouseNumberOfItems = $WarehouseNumberOfItems;
      $this->LockedWarehouseNumberOfItems = $LockedWarehouseNumberOfItems;
    }

    /**
     * @return ArticleClass
     */
    public function getArticle()
    {
      return $this->Article;
    }

    /**
     * @param ArticleClass $Article
     * @return \Ongoing\GoodsStatusInventoryLine
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfBookedItems()
    {
      return $this->NumberOfBookedItems;
    }

    /**
     * @param float $NumberOfBookedItems
     * @return \Ongoing\GoodsStatusInventoryLine
     */
    public function setNumberOfBookedItems($NumberOfBookedItems)
    {
      $this->NumberOfBookedItems = $NumberOfBookedItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfItems()
    {
      return $this->NumberOfItems;
    }

    /**
     * @param float $NumberOfItems
     * @return \Ongoing\GoodsStatusInventoryLine
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getLockedNumberOfItems()
    {
      return $this->LockedNumberOfItems;
    }

    /**
     * @param float $LockedNumberOfItems
     * @return \Ongoing\GoodsStatusInventoryLine
     */
    public function setLockedNumberOfItems($LockedNumberOfItems)
    {
      $this->LockedNumberOfItems = $LockedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getWarehouseNumberOfItems()
    {
      return $this->WarehouseNumberOfItems;
    }

    /**
     * @param float $WarehouseNumberOfItems
     * @return \Ongoing\GoodsStatusInventoryLine
     */
    public function setWarehouseNumberOfItems($WarehouseNumberOfItems)
    {
      $this->WarehouseNumberOfItems = $WarehouseNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getLockedWarehouseNumberOfItems()
    {
      return $this->LockedWarehouseNumberOfItems;
    }

    /**
     * @param float $LockedWarehouseNumberOfItems
     * @return \Ongoing\GoodsStatusInventoryLine
     */
    public function setLockedWarehouseNumberOfItems($LockedWarehouseNumberOfItems)
    {
      $this->LockedWarehouseNumberOfItems = $LockedWarehouseNumberOfItems;
      return $this;
    }

    /**
     * @return ArrayOfGoodsStatusInventoryRow
     */
    public function getGoodsStatusInventoryRows()
    {
      return $this->GoodsStatusInventoryRows;
    }

    /**
     * @param ArrayOfGoodsStatusInventoryRow $GoodsStatusInventoryRows
     * @return \Ongoing\GoodsStatusInventoryLine
     */
    public function setGoodsStatusInventoryRows($GoodsStatusInventoryRows)
    {
      $this->GoodsStatusInventoryRows = $GoodsStatusInventoryRows;
      return $this;
    }

}
