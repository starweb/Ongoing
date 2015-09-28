<?php

namespace Ongoing;

class ShipmentContainerItem
{

    /**
     * @var ContainerType $ContainerType
     */
    protected $ContainerType = null;

    /**
     * @var ShipmentContainerItemStatus $ShipmentContainerItemStatus
     */
    protected $ShipmentContainerItemStatus = null;

    /**
     * @var ArrayOfShipmentContainerItem $ShipmentContainerItems
     */
    protected $ShipmentContainerItems = null;

    /**
     * @var int $ShipmentContainerItemId
     */
    protected $ShipmentContainerItemId = null;

    /**
     * @var string $LabelId
     */
    protected $LabelId = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $OwnerCode
     */
    protected $OwnerCode = null;

    /**
     * @var string $GoodsCategoryCode
     */
    protected $GoodsCategoryCode = null;

    /**
     * @var string $ShipmentPalletItemComment
     */
    protected $ShipmentPalletItemComment = null;

    /**
     * @var int $InOrderId
     */
    protected $InOrderId = null;

    /**
     * @var ShipmentContainerOwner $ShipmentContainerOwner
     */
    protected $ShipmentContainerOwner = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $SecondNumberOfItems
     */
    protected $SecondNumberOfItems = null;

    /**
     * @var string $PalletItemSerial
     */
    protected $PalletItemSerial = null;

    /**
     * @var int $PalletIndex
     */
    protected $PalletIndex = null;

    /**
     * @param float $NumberOfItems
     */
    public function __construct($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
    }

    /**
     * @return ContainerType
     */
    public function getContainerType()
    {
      return $this->ContainerType;
    }

    /**
     * @param ContainerType $ContainerType
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setContainerType($ContainerType)
    {
      $this->ContainerType = $ContainerType;
      return $this;
    }

    /**
     * @return ShipmentContainerItemStatus
     */
    public function getShipmentContainerItemStatus()
    {
      return $this->ShipmentContainerItemStatus;
    }

    /**
     * @param ShipmentContainerItemStatus $ShipmentContainerItemStatus
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setShipmentContainerItemStatus($ShipmentContainerItemStatus)
    {
      $this->ShipmentContainerItemStatus = $ShipmentContainerItemStatus;
      return $this;
    }

    /**
     * @return ArrayOfShipmentContainerItem
     */
    public function getShipmentContainerItems()
    {
      return $this->ShipmentContainerItems;
    }

    /**
     * @param ArrayOfShipmentContainerItem $ShipmentContainerItems
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setShipmentContainerItems($ShipmentContainerItems)
    {
      $this->ShipmentContainerItems = $ShipmentContainerItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentContainerItemId()
    {
      return $this->ShipmentContainerItemId;
    }

    /**
     * @param int $ShipmentContainerItemId
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setShipmentContainerItemId($ShipmentContainerItemId)
    {
      $this->ShipmentContainerItemId = $ShipmentContainerItemId;
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
     * @return \Ongoing\ShipmentContainerItem
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
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getOwnerCode()
    {
      return $this->OwnerCode;
    }

    /**
     * @param string $OwnerCode
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setOwnerCode($OwnerCode)
    {
      $this->OwnerCode = $OwnerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsCategoryCode()
    {
      return $this->GoodsCategoryCode;
    }

    /**
     * @param string $GoodsCategoryCode
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setGoodsCategoryCode($GoodsCategoryCode)
    {
      $this->GoodsCategoryCode = $GoodsCategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentPalletItemComment()
    {
      return $this->ShipmentPalletItemComment;
    }

    /**
     * @param string $ShipmentPalletItemComment
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setShipmentPalletItemComment($ShipmentPalletItemComment)
    {
      $this->ShipmentPalletItemComment = $ShipmentPalletItemComment;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderId()
    {
      return $this->InOrderId;
    }

    /**
     * @param int $InOrderId
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setInOrderId($InOrderId)
    {
      $this->InOrderId = $InOrderId;
      return $this;
    }

    /**
     * @return ShipmentContainerOwner
     */
    public function getShipmentContainerOwner()
    {
      return $this->ShipmentContainerOwner;
    }

    /**
     * @param ShipmentContainerOwner $ShipmentContainerOwner
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setShipmentContainerOwner($ShipmentContainerOwner)
    {
      $this->ShipmentContainerOwner = $ShipmentContainerOwner;
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
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
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
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
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
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getSecondNumberOfItems()
    {
      return $this->SecondNumberOfItems;
    }

    /**
     * @param float $SecondNumberOfItems
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setSecondNumberOfItems($SecondNumberOfItems)
    {
      $this->SecondNumberOfItems = $SecondNumberOfItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getPalletItemSerial()
    {
      return $this->PalletItemSerial;
    }

    /**
     * @param string $PalletItemSerial
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setPalletItemSerial($PalletItemSerial)
    {
      $this->PalletItemSerial = $PalletItemSerial;
      return $this;
    }

    /**
     * @return int
     */
    public function getPalletIndex()
    {
      return $this->PalletIndex;
    }

    /**
     * @param int $PalletIndex
     * @return \Ongoing\ShipmentContainerItem
     */
    public function setPalletIndex($PalletIndex)
    {
      $this->PalletIndex = $PalletIndex;
      return $this;
    }

}
