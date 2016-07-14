<?php

namespace Ongoing;

class TransferArticleItemInfo
{

    /**
     * @var boolean $IsDelivered
     */
    protected $IsDelivered = null;

    /**
     * @var boolean $IsPicked
     */
    protected $IsPicked = null;

    /**
     * @var boolean $IsTransfer
     */
    protected $IsTransfer = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @var string $BatchNo
     */
    protected $BatchNo = null;

    /**
     * @var string $ArticleItemStatusCode
     */
    protected $ArticleItemStatusCode = null;

    /**
     * @var string $ArticleItemStatusName
     */
    protected $ArticleItemStatusName = null;

    /**
     * @var ArticleItemClassInfo[] $ArticleItemClass
     */
    protected $ArticleItemClass = null;

    /**
     * @param boolean $IsDelivered
     * @param boolean $IsPicked
     * @param boolean $IsTransfer
     * @param float $NumberOfItems
     */
    public function __construct($IsDelivered, $IsPicked, $IsTransfer, $NumberOfItems)
    {
      $this->IsDelivered = $IsDelivered;
      $this->IsPicked = $IsPicked;
      $this->IsTransfer = $IsTransfer;
      $this->NumberOfItems = $NumberOfItems;
    }

    /**
     * @return boolean
     */
    public function getIsDelivered()
    {
      return $this->IsDelivered;
    }

    /**
     * @param boolean $IsDelivered
     * @return \Ongoing\TransferArticleItemInfo
     */
    public function setIsDelivered($IsDelivered)
    {
      $this->IsDelivered = $IsDelivered;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPicked()
    {
      return $this->IsPicked;
    }

    /**
     * @param boolean $IsPicked
     * @return \Ongoing\TransferArticleItemInfo
     */
    public function setIsPicked($IsPicked)
    {
      $this->IsPicked = $IsPicked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTransfer()
    {
      return $this->IsTransfer;
    }

    /**
     * @param boolean $IsTransfer
     * @return \Ongoing\TransferArticleItemInfo
     */
    public function setIsTransfer($IsTransfer)
    {
      $this->IsTransfer = $IsTransfer;
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
     * @return \Ongoing\TransferArticleItemInfo
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
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
     * @return \Ongoing\TransferArticleItemInfo
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
      return $this;
    }

    /**
     * @return string
     */
    public function getBatchNo()
    {
      return $this->BatchNo;
    }

    /**
     * @param string $BatchNo
     * @return \Ongoing\TransferArticleItemInfo
     */
    public function setBatchNo($BatchNo)
    {
      $this->BatchNo = $BatchNo;
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
     * @return \Ongoing\TransferArticleItemInfo
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
     * @return \Ongoing\TransferArticleItemInfo
     */
    public function setArticleItemStatusName($ArticleItemStatusName)
    {
      $this->ArticleItemStatusName = $ArticleItemStatusName;
      return $this;
    }

    /**
     * @return ArticleItemClassInfo[]
     */
    public function getArticleItemClass()
    {
      return $this->ArticleItemClass;
    }

    /**
     * @param ArticleItemClassInfo[] $ArticleItemClass
     * @return \Ongoing\TransferArticleItemInfo
     */
    public function setArticleItemClass(array $ArticleItemClass = null)
    {
      $this->ArticleItemClass = $ArticleItemClass;
      return $this;
    }

}
