<?php

namespace Ongoing;

class ArrayOfInOrderLineArticleItem
{

    /**
     * @var InOrderLineArticleItem[] $InOrderLineArticleItem
     */
    protected $InOrderLineArticleItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InOrderLineArticleItem[]
     */
    public function getInOrderLineArticleItem()
    {
      return $this->InOrderLineArticleItem;
    }

    /**
     * @param InOrderLineArticleItem[] $InOrderLineArticleItem
     * @return \Ongoing\ArrayOfInOrderLineArticleItem
     */
    public function setInOrderLineArticleItem(array $InOrderLineArticleItem = null)
    {
      $this->InOrderLineArticleItem = $InOrderLineArticleItem;
      return $this;
    }

}
