<?php

namespace Ongoing;

class ArticleGroup
{

    /**
     * @var ArticleGroupOperation $ArticleGroupOperation
     */
    protected $ArticleGroupOperation = null;

    /**
     * @var ArticleGroupIdentification $ArticleGroupIdentification
     */
    protected $ArticleGroupIdentification = null;

    /**
     * @var string $ArticleGroupCode
     */
    protected $ArticleGroupCode = null;

    /**
     * @var string $ArticleGroupName
     */
    protected $ArticleGroupName = null;

    /**
     * @param ArticleGroupOperation $ArticleGroupOperation
     * @param ArticleGroupIdentification $ArticleGroupIdentification
     */
    public function __construct($ArticleGroupOperation, $ArticleGroupIdentification)
    {
      $this->ArticleGroupOperation = $ArticleGroupOperation;
      $this->ArticleGroupIdentification = $ArticleGroupIdentification;
    }

    /**
     * @return ArticleGroupOperation
     */
    public function getArticleGroupOperation()
    {
      return $this->ArticleGroupOperation;
    }

    /**
     * @param ArticleGroupOperation $ArticleGroupOperation
     * @return \Ongoing\ArticleGroup
     */
    public function setArticleGroupOperation($ArticleGroupOperation)
    {
      $this->ArticleGroupOperation = $ArticleGroupOperation;
      return $this;
    }

    /**
     * @return ArticleGroupIdentification
     */
    public function getArticleGroupIdentification()
    {
      return $this->ArticleGroupIdentification;
    }

    /**
     * @param ArticleGroupIdentification $ArticleGroupIdentification
     * @return \Ongoing\ArticleGroup
     */
    public function setArticleGroupIdentification($ArticleGroupIdentification)
    {
      $this->ArticleGroupIdentification = $ArticleGroupIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleGroupCode()
    {
      return $this->ArticleGroupCode;
    }

    /**
     * @param string $ArticleGroupCode
     * @return \Ongoing\ArticleGroup
     */
    public function setArticleGroupCode($ArticleGroupCode)
    {
      $this->ArticleGroupCode = $ArticleGroupCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleGroupName()
    {
      return $this->ArticleGroupName;
    }

    /**
     * @param string $ArticleGroupName
     * @return \Ongoing\ArticleGroup
     */
    public function setArticleGroupName($ArticleGroupName)
    {
      $this->ArticleGroupName = $ArticleGroupName;
      return $this;
    }

}
