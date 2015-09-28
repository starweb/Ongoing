<?php

namespace Ongoing;

class ArticleNames
{

    /**
     * @var ArticleNameClass[] $ArticleName
     */
    protected $ArticleName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArticleNameClass[]
     */
    public function getArticleName()
    {
      return $this->ArticleName;
    }

    /**
     * @param ArticleNameClass[] $ArticleName
     * @return \Ongoing\ArticleNames
     */
    public function setArticleName(array $ArticleName = null)
    {
      $this->ArticleName = $ArticleName;
      return $this;
    }

}
