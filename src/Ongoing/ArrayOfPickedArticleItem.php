<?php

namespace Ongoing;

class ArrayOfPickedArticleItem
{

    /**
     * @var PickedArticleItem[] $PickedArticleItem
     */
    protected $PickedArticleItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PickedArticleItem[]
     */
    public function getPickedArticleItem()
    {
      return $this->PickedArticleItem;
    }

    /**
     * @param PickedArticleItem[] $PickedArticleItem
     * @return \Ongoing\ArrayOfPickedArticleItem
     */
    public function setPickedArticleItem(array $PickedArticleItem = null)
    {
      $this->PickedArticleItem = $PickedArticleItem;
      return $this;
    }

}
