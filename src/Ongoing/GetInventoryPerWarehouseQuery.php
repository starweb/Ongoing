<?php

namespace Ongoing;

class GetInventoryPerWarehouseQuery
{

    /**
     * @var ArrayOfString $ArticleNumbersToGet
     */
    protected $ArticleNumbersToGet = null;

    /**
     * @var ArrayOfString $ArticleGroupCodesToGet
     */
    protected $ArticleGroupCodesToGet = null;

    
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
     * @return \Ongoing\GetInventoryPerWarehouseQuery
     */
    public function setArticleNumbersToGet($ArticleNumbersToGet)
    {
      $this->ArticleNumbersToGet = $ArticleNumbersToGet;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getArticleGroupCodesToGet()
    {
      return $this->ArticleGroupCodesToGet;
    }

    /**
     * @param ArrayOfString $ArticleGroupCodesToGet
     * @return \Ongoing\GetInventoryPerWarehouseQuery
     */
    public function setArticleGroupCodesToGet($ArticleGroupCodesToGet)
    {
      $this->ArticleGroupCodesToGet = $ArticleGroupCodesToGet;
      return $this;
    }

}
