<?php

namespace Ongoing;

class OrderPalletItemInfo
{

    /**
     * @var TrackingClass $Tracking
     */
    public $Tracking = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $TypeId
     */
    protected $TypeId = null;

    /**
     * @var string $LabelId
     */
    protected $LabelId = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @var string $PalletTypeCode
     */
    protected $PalletTypeCode = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var string $GoodsCategoryTypeName
     */
    protected $GoodsCategoryTypeName = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @param int $Id
     * @param float $NumberOfItems
     */
    public function __construct($Id, $NumberOfItems)
    {
        $this->Id = $Id;
        $this->NumberOfItems = $NumberOfItems;
    }

    /**
     * @return \Ongoing\TrackingClass
     */
    public function getTracking()
    {
        return $this->Tracking;
    }

    /**
     * @param TrackingClass $tracking
     * @return \Ongoing\PickedOrderLine
     */
    public function setTracking($tracking)
    {
        $this->trackingUrl = $tracking;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
        return $this->TypeId;
    }

    /**
     * @param int $TypeId
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setTypeId($TypeId)
    {
        $this->TypeId = $TypeId;
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
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setLabelId($LabelId)
    {
        $this->LabelId = $LabelId;
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
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setSerial($Serial)
    {
        $this->Serial = $Serial;
        return $this;
    }

    /**
     * @return string
     */
    public function getPalletTypeCode()
    {
        return $this->PalletTypeCode;
    }

    /**
     * @param string $PalletTypeCode
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setPalletTypeCode($PalletTypeCode)
    {
        $this->PalletTypeCode = $PalletTypeCode;
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
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setNumberOfItems($NumberOfItems)
    {
        $this->NumberOfItems = $NumberOfItems;
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
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setGoodsCategoryTypeName($GoodsCategoryTypeName)
    {
        $this->GoodsCategoryTypeName = $GoodsCategoryTypeName;
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
     * @return \Ongoing\OrderPalletItemInfo
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
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setVolume($Volume)
    {
        $this->Volume = $Volume;
        return $this;
    }

}
