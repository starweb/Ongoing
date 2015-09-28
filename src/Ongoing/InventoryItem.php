<?php

namespace Ongoing;

class InventoryItem
{

    /**
     * @var string $Batch
     */
    protected $Batch = null;

    /**
     * @var \DateTime $ExpiryDate
     */
    protected $ExpiryDate = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var string $ArticleItemStatusCode
     */
    protected $ArticleItemStatusCode = null;

    /**
     * @var string $ArticleItemStatusName
     */
    protected $ArticleItemStatusName = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @var string $ArticleItemComment
     */
    protected $ArticleItemComment = null;

    /**
     * @param float $NumberOfItems
     */
    public function __construct($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
      return $this->Batch;
    }

    /**
     * @param string $Batch
     * @return \Ongoing\InventoryItem
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
      if ($this->ExpiryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpiryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpiryDate
     * @return \Ongoing\InventoryItem
     */
    public function setExpiryDate(\DateTime $ExpiryDate = null)
    {
      if ($ExpiryDate == null) {
       $this->ExpiryDate = null;
      } else {
        $this->ExpiryDate = $ExpiryDate->format(\DateTime::ATOM);
      }
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
     * @return \Ongoing\InventoryItem
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
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
     * @return \Ongoing\InventoryItem
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
     * @return \Ongoing\InventoryItem
     */
    public function setArticleItemStatusName($ArticleItemStatusName)
    {
      $this->ArticleItemStatusName = $ArticleItemStatusName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerial()
    {
      return $this->Serial;
    }

    /**
     * @param string $Serial
     * @return \Ongoing\InventoryItem
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleItemComment()
    {
      return $this->ArticleItemComment;
    }

    /**
     * @param string $ArticleItemComment
     * @return \Ongoing\InventoryItem
     */
    public function setArticleItemComment($ArticleItemComment)
    {
      $this->ArticleItemComment = $ArticleItemComment;
      return $this;
    }

}
