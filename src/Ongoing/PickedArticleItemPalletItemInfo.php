<?php

namespace Ongoing;

class PickedArticleItemPalletItemInfo
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $TypeCode
     */
    protected $TypeCode = null;

    /**
     * @var string $LabelId
     */
    protected $LabelId = null;

    /**
     * @var PickedArticleItemPalletItemInfo $Parent
     */
    protected $Parent = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @var float $TypeLength
     */
    protected $TypeLength = null;

    /**
     * @var float $TypeWidth
     */
    protected $TypeWidth = null;

    /**
     * @var float $TypeHeight
     */
    protected $TypeHeight = null;

    /**
     * @var float $TypeWeight
     */
    protected $TypeWeight = null;

    /**
     * @param int $Id
     */
    public function __construct($Id)
    {
      $this->Id = $Id;
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
     * @return \Ongoing\PickedArticleItemPalletItemInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeCode()
    {
      return $this->TypeCode;
    }

    /**
     * @param string $TypeCode
     * @return \Ongoing\PickedArticleItemPalletItemInfo
     */
    public function setTypeCode($TypeCode)
    {
      $this->TypeCode = $TypeCode;
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
     * @return \Ongoing\PickedArticleItemPalletItemInfo
     */
    public function setLabelId($LabelId)
    {
      $this->LabelId = $LabelId;
      return $this;
    }

    /**
     * @return PickedArticleItemPalletItemInfo
     */
    public function getParent()
    {
      return $this->Parent;
    }

    /**
     * @param PickedArticleItemPalletItemInfo $Parent
     * @return \Ongoing\PickedArticleItemPalletItemInfo
     */
    public function setParent($Parent)
    {
      $this->Parent = $Parent;
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
     * @return \Ongoing\PickedArticleItemPalletItemInfo
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
      return $this;
    }

    /**
     * @return float
     */
    public function getTypeLength()
    {
      return $this->TypeLength;
    }

    /**
     * @param float $TypeLength
     * @return \Ongoing\PickedArticleItemPalletItemInfo
     */
    public function setTypeLength($TypeLength)
    {
      $this->TypeLength = $TypeLength;
      return $this;
    }

    /**
     * @return float
     */
    public function getTypeWidth()
    {
      return $this->TypeWidth;
    }

    /**
     * @param float $TypeWidth
     * @return \Ongoing\PickedArticleItemPalletItemInfo
     */
    public function setTypeWidth($TypeWidth)
    {
      $this->TypeWidth = $TypeWidth;
      return $this;
    }

    /**
     * @return float
     */
    public function getTypeHeight()
    {
      return $this->TypeHeight;
    }

    /**
     * @param float $TypeHeight
     * @return \Ongoing\PickedArticleItemPalletItemInfo
     */
    public function setTypeHeight($TypeHeight)
    {
      $this->TypeHeight = $TypeHeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getTypeWeight()
    {
      return $this->TypeWeight;
    }

    /**
     * @param float $TypeWeight
     * @return \Ongoing\PickedArticleItemPalletItemInfo
     */
    public function setTypeWeight($TypeWeight)
    {
      $this->TypeWeight = $TypeWeight;
      return $this;
    }

}
