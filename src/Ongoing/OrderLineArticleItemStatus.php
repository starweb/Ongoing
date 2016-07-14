<?php

namespace Ongoing;

class OrderLineArticleItemStatus
{

    /**
     * @var OrderLineArticleItemStatusIdentificationType $Identification
     */
    protected $Identification = null;

    /**
     * @var OrderLineArticleItemStatusIdentificationOperation $Operation
     */
    protected $Operation = null;

    /**
     * @var int $ArticleItemStatusId
     */
    protected $ArticleItemStatusId = null;

    /**
     * @var string $ArticleItemStatusCode
     */
    protected $ArticleItemStatusCode = null;

    /**
     * @var string $ArticleItemStatusName
     */
    protected $ArticleItemStatusName = null;

    /**
     * @var boolean $IsLocked
     */
    protected $IsLocked = null;

    /**
     * @param OrderLineArticleItemStatusIdentificationType $Identification
     * @param OrderLineArticleItemStatusIdentificationOperation $Operation
     * @param boolean $IsLocked
     */
    public function __construct($Identification, $Operation, $IsLocked)
    {
      $this->Identification = $Identification;
      $this->Operation = $Operation;
      $this->IsLocked = $IsLocked;
    }

    /**
     * @return OrderLineArticleItemStatusIdentificationType
     */
    public function getIdentification()
    {
      return $this->Identification;
    }

    /**
     * @param OrderLineArticleItemStatusIdentificationType $Identification
     * @return \Ongoing\OrderLineArticleItemStatus
     */
    public function setIdentification($Identification)
    {
      $this->Identification = $Identification;
      return $this;
    }

    /**
     * @return OrderLineArticleItemStatusIdentificationOperation
     */
    public function getOperation()
    {
      return $this->Operation;
    }

    /**
     * @param OrderLineArticleItemStatusIdentificationOperation $Operation
     * @return \Ongoing\OrderLineArticleItemStatus
     */
    public function setOperation($Operation)
    {
      $this->Operation = $Operation;
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
     * @return \Ongoing\OrderLineArticleItemStatus
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
     * @return \Ongoing\OrderLineArticleItemStatus
     */
    public function setArticleItemStatusCode($ArticleItemStatusCode)
    {
      $this->ArticleItemStatusCode = $ArticleItemStatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleItemStatusName()
    {
      return $this->ArticleItemStatusName;
    }

    /**
     * @param string $ArticleItemStatusName
     * @return \Ongoing\OrderLineArticleItemStatus
     */
    public function setArticleItemStatusName($ArticleItemStatusName)
    {
      $this->ArticleItemStatusName = $ArticleItemStatusName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLocked()
    {
      return $this->IsLocked;
    }

    /**
     * @param boolean $IsLocked
     * @return \Ongoing\OrderLineArticleItemStatus
     */
    public function setIsLocked($IsLocked)
    {
      $this->IsLocked = $IsLocked;
      return $this;
    }

}
