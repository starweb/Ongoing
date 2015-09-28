<?php

namespace Ongoing;

class InOrderLineArticleItemStatus
{

    /**
     * @var InOrderLineArticleItemStatusIdentificationType $InOrderLineArticleItemStatusIdentification
     */
    protected $InOrderLineArticleItemStatusIdentification = null;

    /**
     * @var int $ArticleItemStatusId
     */
    protected $ArticleItemStatusId = null;

    /**
     * @var string $ArticleItemStatusCode
     */
    protected $ArticleItemStatusCode = null;

    /**
     * @param InOrderLineArticleItemStatusIdentificationType $InOrderLineArticleItemStatusIdentification
     */
    public function __construct($InOrderLineArticleItemStatusIdentification)
    {
      $this->InOrderLineArticleItemStatusIdentification = $InOrderLineArticleItemStatusIdentification;
    }

    /**
     * @return InOrderLineArticleItemStatusIdentificationType
     */
    public function getInOrderLineArticleItemStatusIdentification()
    {
      return $this->InOrderLineArticleItemStatusIdentification;
    }

    /**
     * @param InOrderLineArticleItemStatusIdentificationType $InOrderLineArticleItemStatusIdentification
     * @return \Ongoing\InOrderLineArticleItemStatus
     */
    public function setInOrderLineArticleItemStatusIdentification($InOrderLineArticleItemStatusIdentification)
    {
      $this->InOrderLineArticleItemStatusIdentification = $InOrderLineArticleItemStatusIdentification;
      return $this;
    }

    /**
     * @return int
     */
    public function getArticleItemStatusId()
    {
      return $this->ArticleItemStatusId;
    }

    /**
     * @param int $ArticleItemStatusId
     * @return \Ongoing\InOrderLineArticleItemStatus
     */
    public function setArticleItemStatusId($ArticleItemStatusId)
    {
      $this->ArticleItemStatusId = $ArticleItemStatusId;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleItemStatusCode()
    {
      return $this->ArticleItemStatusCode;
    }

    /**
     * @param string $ArticleItemStatusCode
     * @return \Ongoing\InOrderLineArticleItemStatus
     */
    public function setArticleItemStatusCode($ArticleItemStatusCode)
    {
      $this->ArticleItemStatusCode = $ArticleItemStatusCode;
      return $this;
    }

}
