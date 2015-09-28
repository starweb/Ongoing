<?php

namespace Ongoing;

class InventoryItemLine
{

    /**
     * @var ArticleClass $Article
     */
    protected $Article = null;

    /**
     * @var ArrayOfInventoryItem $InventoryItems
     */
    protected $InventoryItems = null;

    
    public function __construct()
    {
    
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
     * @return \Ongoing\InventoryItemLine
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
      return $this;
    }

    /**
     * @return ArrayOfInventoryItem
     */
    public function getInventoryItems()
    {
      return $this->InventoryItems;
    }

    /**
     * @param ArrayOfInventoryItem $InventoryItems
     * @return \Ongoing\InventoryItemLine
     */
    public function setInventoryItems($InventoryItems)
    {
      $this->InventoryItems = $InventoryItems;
      return $this;
    }

}
