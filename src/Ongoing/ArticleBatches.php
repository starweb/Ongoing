<?php

namespace Ongoing;

class ArticleBatches
{

    /**
     * @var ArticleBatch[] $ArticleBatch
     */
    protected $ArticleBatch = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArticleBatch[]
     */
    public function getArticleBatch()
    {
      return $this->ArticleBatch;
    }

    /**
     * @param ArticleBatch[] $ArticleBatch
     * @return \Ongoing\ArticleBatches
     */
    public function setArticleBatch(array $ArticleBatch = null)
    {
      $this->ArticleBatch = $ArticleBatch;
      return $this;
    }

}
