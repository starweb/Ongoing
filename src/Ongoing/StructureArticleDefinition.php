<?php

namespace Ongoing;

class StructureArticleDefinition
{

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var ArticleDefinition $SubArticleDefinition
     */
    protected $SubArticleDefinition = null;

    /**
     * @param float $NumberOfItems
     */
    public function __construct($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
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
     * @return \Ongoing\StructureArticleDefinition
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return ArticleDefinition
     */
    public function getSubArticleDefinition()
    {
      return $this->SubArticleDefinition;
    }

    /**
     * @param ArticleDefinition $SubArticleDefinition
     * @return \Ongoing\StructureArticleDefinition
     */
    public function setSubArticleDefinition($SubArticleDefinition)
    {
      $this->SubArticleDefinition = $SubArticleDefinition;
      return $this;
    }

}
