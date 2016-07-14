<?php

namespace Ongoing;

class WarehouseTransferOrderLineInfo
{

    /**
     * @var WarehouseTransferOrderLineArticleInfo $Article
     */
    protected $Article = null;

    /**
     * @var string $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var string $NewArticleItemStatusCode
     */
    protected $NewArticleItemStatusCode = null;

    /**
     * @var string $NewArticleItemStatusName
     */
    protected $NewArticleItemStatusName = null;

    /**
     * @var ArrayOfTransferArticleItemInfo $Items
     */
    protected $Items = null;

    /**
     * @param float $NumberOfItems
     */
    public function __construct($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
    }

    /**
     * @return WarehouseTransferOrderLineArticleInfo
     */
    public function getArticle()
    {
      return $this->Article;
    }

    /**
     * @param WarehouseTransferOrderLineArticleInfo $Article
     * @return \Ongoing\WarehouseTransferOrderLineInfo
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
      return $this;
    }

    /**
     * @return string
     */
    public function getLineNumber()
    {
      return $this->LineNumber;
    }

    /**
     * @param string $LineNumber
     * @return \Ongoing\WarehouseTransferOrderLineInfo
     */
    public function setLineNumber($LineNumber)
    {
      $this->LineNumber = $LineNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \Ongoing\WarehouseTransferOrderLineInfo
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfItems()
    {
      return $this->NumberOfItems;
    }

    /**
     * @param float $NumberOfItems
     * @return \Ongoing\WarehouseTransferOrderLineInfo
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewArticleItemStatusCode()
    {
      return $this->NewArticleItemStatusCode;
    }

    /**
     * @param string $NewArticleItemStatusCode
     * @return \Ongoing\WarehouseTransferOrderLineInfo
     */
    public function setNewArticleItemStatusCode($NewArticleItemStatusCode)
    {
      $this->NewArticleItemStatusCode = $NewArticleItemStatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewArticleItemStatusName()
    {
      return $this->NewArticleItemStatusName;
    }

    /**
     * @param string $NewArticleItemStatusName
     * @return \Ongoing\WarehouseTransferOrderLineInfo
     */
    public function setNewArticleItemStatusName($NewArticleItemStatusName)
    {
      $this->NewArticleItemStatusName = $NewArticleItemStatusName;
      return $this;
    }

    /**
     * @return ArrayOfTransferArticleItemInfo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfTransferArticleItemInfo $Items
     * @return \Ongoing\WarehouseTransferOrderLineInfo
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
