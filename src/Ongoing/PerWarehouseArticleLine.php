<?php

namespace Ongoing;

class PerWarehouseArticleLine
{

    /**
     * @var ArticleClass $Article
     */
    protected $Article = null;

    /**
     * @var float $NumberOfLockedItems
     */
    protected $NumberOfLockedItems = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $NumberOfBookedItems
     */
    protected $NumberOfBookedItems = null;

    /**
     * @var ArrayOfPerWarehouseStockLine $PerWarehouseStockLines
     */
    protected $PerWarehouseStockLines = null;

    /**
     * @param float $NumberOfLockedItems
     * @param float $NumberOfItems
     * @param float $NumberOfBookedItems
     */
    public function __construct($NumberOfLockedItems, $NumberOfItems, $NumberOfBookedItems)
    {
      $this->NumberOfLockedItems = $NumberOfLockedItems;
      $this->NumberOfItems = $NumberOfItems;
      $this->NumberOfBookedItems = $NumberOfBookedItems;
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
     * @return \Ongoing\PerWarehouseArticleLine
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfLockedItems()
    {
      return $this->NumberOfLockedItems;
    }

    /**
     * @param float $NumberOfLockedItems
     * @return \Ongoing\PerWarehouseArticleLine
     */
    public function setNumberOfLockedItems($NumberOfLockedItems)
    {
      $this->NumberOfLockedItems = $NumberOfLockedItems;
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
     * @return \Ongoing\PerWarehouseArticleLine
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
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
     * @return \Ongoing\PerWarehouseArticleLine
     */
    public function setNumberOfBookedItems($NumberOfBookedItems)
    {
      $this->NumberOfBookedItems = $NumberOfBookedItems;
      return $this;
    }

    /**
     * @return ArrayOfPerWarehouseStockLine
     */
    public function getPerWarehouseStockLines()
    {
      return $this->PerWarehouseStockLines;
    }

    /**
     * @param ArrayOfPerWarehouseStockLine $PerWarehouseStockLines
     * @return \Ongoing\PerWarehouseArticleLine
     */
    public function setPerWarehouseStockLines($PerWarehouseStockLines)
    {
      $this->PerWarehouseStockLines = $PerWarehouseStockLines;
      return $this;
    }

}
