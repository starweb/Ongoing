<?php

namespace Ongoing;

class ArrayOfReceivedArticlItem
{

    /**
     * @var ReceivedArticlItem[] $ReceivedArticlItem
     */
    protected $ReceivedArticlItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivedArticlItem[]
     */
    public function getReceivedArticlItem()
    {
      return $this->ReceivedArticlItem;
    }

    /**
     * @param ReceivedArticlItem[] $ReceivedArticlItem
     * @return \Ongoing\ArrayOfReceivedArticlItem
     */
    public function setReceivedArticlItem(array $ReceivedArticlItem = null)
    {
      $this->ReceivedArticlItem = $ReceivedArticlItem;
      return $this;
    }

}
