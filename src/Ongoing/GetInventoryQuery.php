<?php

namespace Ongoing;

class GetInventoryQuery
{

    /**
     * @var ArrayOfString $ArticleNumbersToGet
     */
    protected $ArticleNumbersToGet = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getArticleNumbersToGet()
    {
      return $this->ArticleNumbersToGet;
    }

    /**
     * @param ArrayOfString $ArticleNumbersToGet
     * @return \Ongoing\GetInventoryQuery
     */
    public function setArticleNumbersToGet($ArticleNumbersToGet)
    {
      $this->ArticleNumbersToGet = $ArticleNumbersToGet;
      return $this;
    }

}
