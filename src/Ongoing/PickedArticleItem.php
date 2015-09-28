<?php

namespace Ongoing;

class PickedArticleItem
{

    /**
     * @var ArticleClass $Article
     */
    protected $Article = null;

    /**
     * @var int $ArticleItemId
     */
    protected $ArticleItemId = null;

    /**
     * @var \DateTime $InDate
     */
    protected $InDate = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @var string $CaseNo
     */
    protected $CaseNo = null;

    /**
     * @var string $BatchNo
     */
    protected $BatchNo = null;

    /**
     * @var string $Container
     */
    protected $Container = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var string $LabelId
     */
    protected $LabelId = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var int $GoodsItemId
     */
    protected $GoodsItemId = null;

    /**
     * @var boolean $IsPicked
     */
    protected $IsPicked = null;

    /**
     * @var boolean $Returned
     */
    protected $Returned = null;

    /**
     * @var int $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var \DateTime $ExpiryDate
     */
    protected $ExpiryDate = null;

    /**
     * @var \DateTime $ReturnDate
     */
    protected $ReturnDate = null;

    /**
     * @var \DateTime $PickedTime
     */
    protected $PickedTime = null;

    /**
     * @var int $OrderLineSystemId
     */
    protected $OrderLineSystemId = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var PickedArticleItemPalletItemInfo $ArticleItemPalletItemInfo
     */
    protected $ArticleItemPalletItemInfo = null;

    /**
     * @var string $ReturnCauseCode
     */
    protected $ReturnCauseCode = null;

    /**
     * @var string $ReturnCauseName
     */
    protected $ReturnCauseName = null;

    /**
     * @param int $ArticleItemId
     * @param \DateTime $InDate
     * @param float $NumberOfItems
     * @param boolean $IsPicked
     * @param boolean $Returned
     * @param int $OrderLineSystemId
     */
    public function __construct($ArticleItemId, \DateTime $InDate, $NumberOfItems, $IsPicked, $Returned, $OrderLineSystemId)
    {
      $this->ArticleItemId = $ArticleItemId;
      $this->InDate = $InDate->format(\DateTime::ATOM);
      $this->NumberOfItems = $NumberOfItems;
      $this->IsPicked = $IsPicked;
      $this->Returned = $Returned;
      $this->OrderLineSystemId = $OrderLineSystemId;
    }

    /**
     * @return ArticleClass
     */
    public function getArticle()
    {
      return $this->Article;
    }

    /**
     * @param ArticleClass $Article
     * @return \Ongoing\PickedArticleItem
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
      return $this;
    }

    /**
     * @return int
     */
    public function getArticleItemId()
    {
      return $this->ArticleItemId;
    }

    /**
     * @param int $ArticleItemId
     * @return \Ongoing\PickedArticleItem
     */
    public function setArticleItemId($ArticleItemId)
    {
      $this->ArticleItemId = $ArticleItemId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInDate()
    {
      if ($this->InDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InDate
     * @return \Ongoing\PickedArticleItem
     */
    public function setInDate(\DateTime $InDate)
    {
      $this->InDate = $InDate->format(\DateTime::ATOM);
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
     * @return \Ongoing\PickedArticleItem
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaseNo()
    {
      return $this->CaseNo;
    }

    /**
     * @param string $CaseNo
     * @return \Ongoing\PickedArticleItem
     */
    public function setCaseNo($CaseNo)
    {
      $this->CaseNo = $CaseNo;
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
     * @return \Ongoing\PickedArticleItem
     */
    public function setBatchNo($BatchNo)
    {
      $this->BatchNo = $BatchNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainer()
    {
      return $this->Container;
    }

    /**
     * @param string $Container
     * @return \Ongoing\PickedArticleItem
     */
    public function setContainer($Container)
    {
      $this->Container = $Container;
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
     * @return \Ongoing\PickedArticleItem
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelId()
    {
      return $this->LabelId;
    }

    /**
     * @param string $LabelId
     * @return \Ongoing\PickedArticleItem
     */
    public function setLabelId($LabelId)
    {
      $this->LabelId = $LabelId;
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
     * @return \Ongoing\PickedArticleItem
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
     * @return \Ongoing\PickedArticleItem
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getGoodsItemId()
    {
      return $this->GoodsItemId;
    }

    /**
     * @param int $GoodsItemId
     * @return \Ongoing\PickedArticleItem
     */
    public function setGoodsItemId($GoodsItemId)
    {
      $this->GoodsItemId = $GoodsItemId;
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
     * @return \Ongoing\PickedArticleItem
     */
    public function setIsPicked($IsPicked)
    {
      $this->IsPicked = $IsPicked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturned()
    {
      return $this->Returned;
    }

    /**
     * @param boolean $Returned
     * @return \Ongoing\PickedArticleItem
     */
    public function setReturned($Returned)
    {
      $this->Returned = $Returned;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentId()
    {
      return $this->ShipmentId;
    }

    /**
     * @param int $ShipmentId
     * @return \Ongoing\PickedArticleItem
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
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
     * @return \Ongoing\PickedArticleItem
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
     * @return \DateTime
     */
    public function getReturnDate()
    {
      if ($this->ReturnDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReturnDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReturnDate
     * @return \Ongoing\PickedArticleItem
     */
    public function setReturnDate(\DateTime $ReturnDate = null)
    {
      if ($ReturnDate == null) {
       $this->ReturnDate = null;
      } else {
        $this->ReturnDate = $ReturnDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickedTime()
    {
      if ($this->PickedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PickedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PickedTime
     * @return \Ongoing\PickedArticleItem
     */
    public function setPickedTime(\DateTime $PickedTime = null)
    {
      if ($PickedTime == null) {
       $this->PickedTime = null;
      } else {
        $this->PickedTime = $PickedTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderLineSystemId()
    {
      return $this->OrderLineSystemId;
    }

    /**
     * @param int $OrderLineSystemId
     * @return \Ongoing\PickedArticleItem
     */
    public function setOrderLineSystemId($OrderLineSystemId)
    {
      $this->OrderLineSystemId = $OrderLineSystemId;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return \Ongoing\PickedArticleItem
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return PickedArticleItemPalletItemInfo
     */
    public function getArticleItemPalletItemInfo()
    {
      return $this->ArticleItemPalletItemInfo;
    }

    /**
     * @param PickedArticleItemPalletItemInfo $ArticleItemPalletItemInfo
     * @return \Ongoing\PickedArticleItem
     */
    public function setArticleItemPalletItemInfo($ArticleItemPalletItemInfo)
    {
      $this->ArticleItemPalletItemInfo = $ArticleItemPalletItemInfo;
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
     * @return \Ongoing\PickedArticleItem
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
     * @return \Ongoing\PickedArticleItem
     */
    public function setReturnCauseName($ReturnCauseName)
    {
      $this->ReturnCauseName = $ReturnCauseName;
      return $this;
    }

}
