<?php

namespace Ongoing;

class InOrderLineArticleItem
{

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @var string $ContainerNo
     */
    protected $ContainerNo = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var InOrderLineArticleItemStatus $InOrderLineArticleItemStatus
     */
    protected $InOrderLineArticleItemStatus = null;

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

    
    public function __construct()
    {
    
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
     * @return \Ongoing\InOrderLineArticleItem
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerNo()
    {
      return $this->ContainerNo;
    }

    /**
     * @param string $ContainerNo
     * @return \Ongoing\InOrderLineArticleItem
     */
    public function setContainerNo($ContainerNo)
    {
      $this->ContainerNo = $ContainerNo;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param float $Volume
     * @return \Ongoing\InOrderLineArticleItem
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
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
     * @return \Ongoing\InOrderLineArticleItem
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param float $Length
     * @return \Ongoing\InOrderLineArticleItem
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param float $Width
     * @return \Ongoing\InOrderLineArticleItem
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param float $Height
     * @return \Ongoing\InOrderLineArticleItem
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return InOrderLineArticleItemStatus
     */
    public function getInOrderLineArticleItemStatus()
    {
      return $this->InOrderLineArticleItemStatus;
    }

    /**
     * @param InOrderLineArticleItemStatus $InOrderLineArticleItemStatus
     * @return \Ongoing\InOrderLineArticleItem
     */
    public function setInOrderLineArticleItemStatus($InOrderLineArticleItemStatus)
    {
      $this->InOrderLineArticleItemStatus = $InOrderLineArticleItemStatus;
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
     * @return \Ongoing\InOrderLineArticleItem
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
     * @return \Ongoing\InOrderLineArticleItem
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
     * @return \Ongoing\InOrderLineArticleItem
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

}
