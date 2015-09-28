<?php

namespace Ongoing;

class InventoryLineDetailed extends InventoryLine
{

    /**
     * @var ArticleBatches $ArticleBatches
     */
    protected $ArticleBatches = null;

    /**
     * @var ArticleNames $ArticleNames
     */
    protected $ArticleNames = null;

    /**
     * @param int $NumberOfBookedItems
     * @param int $NumberOfItems
     * @param float $NumberOfLockedItems
     */
    public function __construct($NumberOfBookedItems, $NumberOfItems, $NumberOfLockedItems)
    {
      parent::__construct($NumberOfBookedItems, $NumberOfItems, $NumberOfLockedItems);
    }

    /**
     * @return ArticleBatches
     */
    public function getArticleBatches()
    {
      return $this->ArticleBatches;
    }

    /**
     * @param ArticleBatches $ArticleBatches
     * @return \Ongoing\InventoryLineDetailed
     */
    public function setArticleBatches($ArticleBatches)
    {
      $this->ArticleBatches = $ArticleBatches;
      return $this;
    }

    /**
     * @return ArticleNames
     */
    public function getArticleNames()
    {
      return $this->ArticleNames;
    }

    /**
     * @param ArticleNames $ArticleNames
     * @return \Ongoing\InventoryLineDetailed
     */
    public function setArticleNames($ArticleNames)
    {
      $this->ArticleNames = $ArticleNames;
      return $this;
    }

}
