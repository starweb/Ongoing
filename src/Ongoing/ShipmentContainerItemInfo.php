<?php

namespace Ongoing;

class ShipmentContainerItemInfo
{

    /**
     * @var string $ContainerTypeCode
     */
    protected $ContainerTypeCode = null;

    /**
     * @var string $ContainerTypeName
     */
    protected $ContainerTypeName = null;

    /**
     * @var int $GoodsCategoryTypeId
     */
    protected $GoodsCategoryTypeId = null;

    /**
     * @var string $GoodsCategoryTypeName
     */
    protected $GoodsCategoryTypeName = null;

    /**
     * @var string $GoodsCategoryTypeCode
     */
    protected $GoodsCategoryTypeCode = null;

    /**
     * @var boolean $IsConsolidated
     */
    protected $IsConsolidated = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $SecondNumberOfItems
     */
    protected $SecondNumberOfItems = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var int $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var string $LabelId
     */
    protected $LabelId = null;

    /**
     * @var int $PalletIndex
     */
    protected $PalletIndex = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @var string $ShipmentPalletItemComment
     */
    protected $ShipmentPalletItemComment = null;

    /**
     * @var string $PalletOwnerCode
     */
    protected $PalletOwnerCode = null;

    /**
     * @var string $PalletOwnerName
     */
    protected $PalletOwnerName = null;

    /**
     * @var string $PalletOwnerComment
     */
    protected $PalletOwnerComment = null;

    /**
     * @var ArrayOfShipmentContainerItemInfo $ShipmentContainerItems
     */
    protected $ShipmentContainerItems = null;

    /**
     * @var string $InboundShipmentOrderNumber
     */
    protected $InboundShipmentOrderNumber = null;

    /**
     * @var string $InboundShipmentCustomerNumber
     */
    protected $InboundShipmentCustomerNumber = null;

    /**
     * @var int $InboundShipmentId
     */
    protected $InboundShipmentId = null;

    /**
     * @var string $PalletItemOwnerCode
     */
    protected $PalletItemOwnerCode = null;

    /**
     * @param boolean $IsConsolidated
     * @param float $NumberOfItems
     * @param int $ShipmentId
     */
    public function __construct($IsConsolidated, $NumberOfItems, $ShipmentId)
    {
      $this->IsConsolidated = $IsConsolidated;
      $this->NumberOfItems = $NumberOfItems;
      $this->ShipmentId = $ShipmentId;
    }

    /**
     * @return string
     */
    public function getContainerTypeCode()
    {
      return $this->ContainerTypeCode;
    }

    /**
     * @param string $ContainerTypeCode
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setContainerTypeCode($ContainerTypeCode)
    {
      $this->ContainerTypeCode = $ContainerTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerTypeName()
    {
      return $this->ContainerTypeName;
    }

    /**
     * @param string $ContainerTypeName
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setContainerTypeName($ContainerTypeName)
    {
      $this->ContainerTypeName = $ContainerTypeName;
      return $this;
    }

    /**
     * @return int
     */
    public function getGoodsCategoryTypeId()
    {
      return $this->GoodsCategoryTypeId;
    }

    /**
     * @param int $GoodsCategoryTypeId
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setGoodsCategoryTypeId($GoodsCategoryTypeId)
    {
      $this->GoodsCategoryTypeId = $GoodsCategoryTypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsCategoryTypeName()
    {
      return $this->GoodsCategoryTypeName;
    }

    /**
     * @param string $GoodsCategoryTypeName
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setGoodsCategoryTypeName($GoodsCategoryTypeName)
    {
      $this->GoodsCategoryTypeName = $GoodsCategoryTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsCategoryTypeCode()
    {
      return $this->GoodsCategoryTypeCode;
    }

    /**
     * @param string $GoodsCategoryTypeCode
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setGoodsCategoryTypeCode($GoodsCategoryTypeCode)
    {
      $this->GoodsCategoryTypeCode = $GoodsCategoryTypeCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsConsolidated()
    {
      return $this->IsConsolidated;
    }

    /**
     * @param boolean $IsConsolidated
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setIsConsolidated($IsConsolidated)
    {
      $this->IsConsolidated = $IsConsolidated;
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
     * @return \Ongoing\ShipmentContainerItemInfo
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
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setSecondNumberOfItems($SecondNumberOfItems)
    {
      $this->SecondNumberOfItems = $SecondNumberOfItems;
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
     * @return \Ongoing\ShipmentContainerItemInfo
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
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
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
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
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
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setLabelId($LabelId)
    {
      $this->LabelId = $LabelId;
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
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setPalletIndex($PalletIndex)
    {
      $this->PalletIndex = $PalletIndex;
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
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
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
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
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
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setShipmentPalletItemComment($ShipmentPalletItemComment)
    {
      $this->ShipmentPalletItemComment = $ShipmentPalletItemComment;
      return $this;
    }

    /**
     * @return string
     */
    public function getPalletOwnerCode()
    {
      return $this->PalletOwnerCode;
    }

    /**
     * @param string $PalletOwnerCode
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setPalletOwnerCode($PalletOwnerCode)
    {
      $this->PalletOwnerCode = $PalletOwnerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPalletOwnerName()
    {
      return $this->PalletOwnerName;
    }

    /**
     * @param string $PalletOwnerName
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setPalletOwnerName($PalletOwnerName)
    {
      $this->PalletOwnerName = $PalletOwnerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPalletOwnerComment()
    {
      return $this->PalletOwnerComment;
    }

    /**
     * @param string $PalletOwnerComment
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setPalletOwnerComment($PalletOwnerComment)
    {
      $this->PalletOwnerComment = $PalletOwnerComment;
      return $this;
    }

    /**
     * @return ArrayOfShipmentContainerItemInfo
     */
    public function getShipmentContainerItems()
    {
      return $this->ShipmentContainerItems;
    }

    /**
     * @param ArrayOfShipmentContainerItemInfo $ShipmentContainerItems
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setShipmentContainerItems($ShipmentContainerItems)
    {
      $this->ShipmentContainerItems = $ShipmentContainerItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getInboundShipmentOrderNumber()
    {
      return $this->InboundShipmentOrderNumber;
    }

    /**
     * @param string $InboundShipmentOrderNumber
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setInboundShipmentOrderNumber($InboundShipmentOrderNumber)
    {
      $this->InboundShipmentOrderNumber = $InboundShipmentOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInboundShipmentCustomerNumber()
    {
      return $this->InboundShipmentCustomerNumber;
    }

    /**
     * @param string $InboundShipmentCustomerNumber
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setInboundShipmentCustomerNumber($InboundShipmentCustomerNumber)
    {
      $this->InboundShipmentCustomerNumber = $InboundShipmentCustomerNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getInboundShipmentId()
    {
      return $this->InboundShipmentId;
    }

    /**
     * @param int $InboundShipmentId
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setInboundShipmentId($InboundShipmentId)
    {
      $this->InboundShipmentId = $InboundShipmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPalletItemOwnerCode()
    {
      return $this->PalletItemOwnerCode;
    }

    /**
     * @param string $PalletItemOwnerCode
     * @return \Ongoing\ShipmentContainerItemInfo
     */
    public function setPalletItemOwnerCode($PalletItemOwnerCode)
    {
      $this->PalletItemOwnerCode = $PalletItemOwnerCode;
      return $this;
    }

}
