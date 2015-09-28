<?php

namespace Ongoing;

class ReturnOrderLineInfo
{

    /**
     * @var string $ArticleName
     */
    protected $ArticleName = null;

    /**
     * @var string $ArticleNumber
     */
    protected $ArticleNumber = null;

    /**
     * @var int $ReturnOrderLineId
     */
    protected $ReturnOrderLineId = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var float $PickedNumberOfItems
     */
    protected $PickedNumberOfItems = null;

    /**
     * @var float $ToBeReturnedNumberOfItems
     */
    protected $ToBeReturnedNumberOfItems = null;

    /**
     * @var float $ReturnedNumberOfItems
     */
    protected $ReturnedNumberOfItems = null;

    /**
     * @var string $ReturnCauseCode
     */
    protected $ReturnCauseCode = null;

    /**
     * @var string $ReturnCauseName
     */
    protected $ReturnCauseName = null;

    /**
     * @var string $ReturnOrderRowNumber
     */
    protected $ReturnOrderRowNumber = null;

    /**
     * @var int $ReturnCauseId
     */
    protected $ReturnCauseId = null;

    /**
     * @var int $ParentReturnOrderLineId
     */
    protected $ParentReturnOrderLineId = null;

    /**
     * @param int $ReturnOrderLineId
     * @param float $PickedNumberOfItems
     * @param float $ToBeReturnedNumberOfItems
     * @param float $ReturnedNumberOfItems
     */
    public function __construct($ReturnOrderLineId, $PickedNumberOfItems, $ToBeReturnedNumberOfItems, $ReturnedNumberOfItems)
    {
      $this->ReturnOrderLineId = $ReturnOrderLineId;
      $this->PickedNumberOfItems = $PickedNumberOfItems;
      $this->ToBeReturnedNumberOfItems = $ToBeReturnedNumberOfItems;
      $this->ReturnedNumberOfItems = $ReturnedNumberOfItems;
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
     * @return \Ongoing\ReturnOrderLineInfo
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
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setArticleNumber($ArticleNumber)
    {
      $this->ArticleNumber = $ArticleNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnOrderLineId()
    {
      return $this->ReturnOrderLineId;
    }

    /**
     * @param int $ReturnOrderLineId
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setReturnOrderLineId($ReturnOrderLineId)
    {
      $this->ReturnOrderLineId = $ReturnOrderLineId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderLineCode()
    {
      return $this->ExternalOrderLineCode;
    }

    /**
     * @param string $ExternalOrderLineCode
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getPickedNumberOfItems()
    {
      return $this->PickedNumberOfItems;
    }

    /**
     * @param float $PickedNumberOfItems
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setPickedNumberOfItems($PickedNumberOfItems)
    {
      $this->PickedNumberOfItems = $PickedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getToBeReturnedNumberOfItems()
    {
      return $this->ToBeReturnedNumberOfItems;
    }

    /**
     * @param float $ToBeReturnedNumberOfItems
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setToBeReturnedNumberOfItems($ToBeReturnedNumberOfItems)
    {
      $this->ToBeReturnedNumberOfItems = $ToBeReturnedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getReturnedNumberOfItems()
    {
      return $this->ReturnedNumberOfItems;
    }

    /**
     * @param float $ReturnedNumberOfItems
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setReturnedNumberOfItems($ReturnedNumberOfItems)
    {
      $this->ReturnedNumberOfItems = $ReturnedNumberOfItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCauseCode()
    {
      return $this->ReturnCauseCode;
    }

    /**
     * @param string $ReturnCauseCode
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setReturnCauseCode($ReturnCauseCode)
    {
      $this->ReturnCauseCode = $ReturnCauseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCauseName()
    {
      return $this->ReturnCauseName;
    }

    /**
     * @param string $ReturnCauseName
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setReturnCauseName($ReturnCauseName)
    {
      $this->ReturnCauseName = $ReturnCauseName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnOrderRowNumber()
    {
      return $this->ReturnOrderRowNumber;
    }

    /**
     * @param string $ReturnOrderRowNumber
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setReturnOrderRowNumber($ReturnOrderRowNumber)
    {
      $this->ReturnOrderRowNumber = $ReturnOrderRowNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnCauseId()
    {
      return $this->ReturnCauseId;
    }

    /**
     * @param int $ReturnCauseId
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setReturnCauseId($ReturnCauseId)
    {
      $this->ReturnCauseId = $ReturnCauseId;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentReturnOrderLineId()
    {
      return $this->ParentReturnOrderLineId;
    }

    /**
     * @param int $ParentReturnOrderLineId
     * @return \Ongoing\ReturnOrderLineInfo
     */
    public function setParentReturnOrderLineId($ParentReturnOrderLineId)
    {
      $this->ParentReturnOrderLineId = $ParentReturnOrderLineId;
      return $this;
    }

}
