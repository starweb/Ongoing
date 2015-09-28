<?php

namespace Ongoing;

class ReceivedArticlItem
{

    /**
     * @var ArticleClass $Article
     */
    protected $Article = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var string $ExternalOrderLineId
     */
    protected $ExternalOrderLineId = null;

    /**
     * @var string $Batch
     */
    protected $Batch = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @var string $GoodsStatusName
     */
    protected $GoodsStatusName = null;

    /**
     * @var string $GoodsStatusCode
     */
    protected $GoodsStatusCode = null;

    /**
     * @var boolean $isLocked
     */
    protected $isLocked = null;

    /**
     * @var \DateTime $InDate
     */
    protected $InDate = null;

    /**
     * @var \DateTime $ExpiryDate
     */
    protected $ExpiryDate = null;

    /**
     * @var int $InOrderLineId
     */
    protected $InOrderLineId = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $SupplierNumberOfItems
     */
    protected $SupplierNumberOfItems = null;

    /**
     * @var boolean $IsDeclared
     */
    protected $IsDeclared = null;

    /**
     * @var float $ItemWeight
     */
    protected $ItemWeight = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @param \DateTime $InDate
     * @param float $NumberOfItems
     */
    public function __construct(\DateTime $InDate, $NumberOfItems)
    {
      $this->InDate = $InDate->format(\DateTime::ATOM);
      $this->NumberOfItems = $NumberOfItems;
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
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
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
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderLineId()
    {
      return $this->ExternalOrderLineId;
    }

    /**
     * @param string $ExternalOrderLineId
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setExternalOrderLineId($ExternalOrderLineId)
    {
      $this->ExternalOrderLineId = $ExternalOrderLineId;
      return $this;
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
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
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
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsStatusName()
    {
      return $this->GoodsStatusName;
    }

    /**
     * @param string $GoodsStatusName
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setGoodsStatusName($GoodsStatusName)
    {
      $this->GoodsStatusName = $GoodsStatusName;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsStatusCode()
    {
      return $this->GoodsStatusCode;
    }

    /**
     * @param string $GoodsStatusCode
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setGoodsStatusCode($GoodsStatusCode)
    {
      $this->GoodsStatusCode = $GoodsStatusCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLocked()
    {
      return $this->isLocked;
    }

    /**
     * @param boolean $isLocked
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setIsLocked($isLocked)
    {
      $this->isLocked = $isLocked;
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
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setInDate(\DateTime $InDate)
    {
      $this->InDate = $InDate->format(\DateTime::ATOM);
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
     * @return \Ongoing\ReceivedArticlItem
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
     * @return int
     */
    public function getInOrderLineId()
    {
      return $this->InOrderLineId;
    }

    /**
     * @param int $InOrderLineId
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setInOrderLineId($InOrderLineId)
    {
      $this->InOrderLineId = $InOrderLineId;
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
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getSupplierNumberOfItems()
    {
      return $this->SupplierNumberOfItems;
    }

    /**
     * @param float $SupplierNumberOfItems
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setSupplierNumberOfItems($SupplierNumberOfItems)
    {
      $this->SupplierNumberOfItems = $SupplierNumberOfItems;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeclared()
    {
      return $this->IsDeclared;
    }

    /**
     * @param boolean $IsDeclared
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setIsDeclared($IsDeclared)
    {
      $this->IsDeclared = $IsDeclared;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemWeight()
    {
      return $this->ItemWeight;
    }

    /**
     * @param float $ItemWeight
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setItemWeight($ItemWeight)
    {
      $this->ItemWeight = $ItemWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
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
     * @return \Ongoing\ReceivedArticlItem
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

}
