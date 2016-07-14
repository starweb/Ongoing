<?php

namespace Ongoing;

class WarehouseTransferOrderLineArticleInfo
{

    /**
     * @var string $ArticleName
     */
    protected $ArticleName = null;

    /**
     * @var string $ArticleNumber
     */
    protected $ArticleNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getArticleName()
    {
      return $this->ArticleName;
    }

    /**
     * @param string $ArticleName
     * @return \Ongoing\WarehouseTransferOrderLineArticleInfo
     */
    public function setArticleName($ArticleName)
    {
      $this->ArticleName = $ArticleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleNumber()
    {
      return $this->ArticleNumber;
    }

    /**
     * @param string $ArticleNumber
     * @return \Ongoing\WarehouseTransferOrderLineArticleInfo
     */
    public function setArticleNumber($ArticleNumber)
    {
      $this->ArticleNumber = $ArticleNumber;
      return $this;
    }

}
