<?php

namespace Ongoing;

class InventoryChangeLine
{

    /**
     * @var ArticleClass $Article
     */
    protected $Article = null;

    /**
     * @var float $InventoryChangesNumberOfItems
     */
    protected $InventoryChangesNumberOfItems = null;

    /**
     * @var ArrayOfInventoryTransaction $InventoryTransactions
     */
    protected $InventoryTransactions = null;

    /**
     * @param float $InventoryChangesNumberOfItems
     */
    public function __construct($InventoryChangesNumberOfItems)
    {
      $this->InventoryChangesNumberOfItems = $InventoryChangesNumberOfItems;
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
     * @return \Ongoing\InventoryChangeLine
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
      return $this;
    }

    /**
     * @return float
     */
    public function getInventoryChangesNumberOfItems()
    {
      return $this->InventoryChangesNumberOfItems;
    }

    /**
     * @param float $InventoryChangesNumberOfItems
     * @return \Ongoing\InventoryChangeLine
     */
    public function setInventoryChangesNumberOfItems($InventoryChangesNumberOfItems)
    {
      $this->InventoryChangesNumberOfItems = $InventoryChangesNumberOfItems;
      return $this;
    }

    /**
     * @return ArrayOfInventoryTransaction
     */
    public function getInventoryTransactions()
    {
      return $this->InventoryTransactions;
    }

    /**
     * @param ArrayOfInventoryTransaction $InventoryTransactions
     * @return \Ongoing\InventoryChangeLine
     */
    public function setInventoryTransactions($InventoryTransactions)
    {
      $this->InventoryTransactions = $InventoryTransactions;
      return $this;
    }

}
