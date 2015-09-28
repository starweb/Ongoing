<?php

namespace Ongoing;

class ArticleNameClass
{

    /**
     * @var Language $Language
     */
    protected $Language = null;

    /**
     * @var string $ArticleName
     */
    protected $ArticleName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param Language $Language
     * @return \Ongoing\ArticleNameClass
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
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
     * @return \Ongoing\ArticleNameClass
     */
    public function setArticleName($ArticleName)
    {
      $this->ArticleName = $ArticleName;
      return $this;
    }

}
