<?php

namespace Ongoing;

class GoodsItem
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $GoodsItemLabelId
     */
    protected $GoodsItemLabelId = null;

    /**
     * @var string $PackageTypeName
     */
    protected $PackageTypeName = null;

    /**
     * @var string $PackageTypeCode
     */
    protected $PackageTypeCode = null;

    /**
     * @var float $Area
     */
    protected $Area = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $LoadMeters
     */
    protected $LoadMeters = null;

    /**
     * @var int $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var int $NumberOfPackages
     */
    protected $NumberOfPackages = null;

    /**
     * @var int $ApprovedNumberOfPackages
     */
    protected $ApprovedNumberOfPackages = null;

    /**
     * @var string $GoodsComment
     */
    protected $GoodsComment = null;

    /**
     * @var string $GoodsCategory
     */
    protected $GoodsCategory = null;

    /**
     * @param int $Id
     * @param float $Area
     * @param float $Weight
     * @param float $Volume
     * @param float $Height
     * @param float $Length
     * @param float $Width
     * @param float $LoadMeters
     * @param int $NumberOfItems
     * @param int $NumberOfPackages
     */
    public function __construct($Id, $Area, $Weight, $Volume, $Height, $Length, $Width, $LoadMeters, $NumberOfItems, $NumberOfPackages)
    {
      $this->Id = $Id;
      $this->Area = $Area;
      $this->Weight = $Weight;
      $this->Volume = $Volume;
      $this->Height = $Height;
      $this->Length = $Length;
      $this->Width = $Width;
      $this->LoadMeters = $LoadMeters;
      $this->NumberOfItems = $NumberOfItems;
      $this->NumberOfPackages = $NumberOfPackages;
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
     * @return \Ongoing\GoodsItem
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsItemLabelId()
    {
      return $this->GoodsItemLabelId;
    }

    /**
     * @param string $GoodsItemLabelId
     * @return \Ongoing\GoodsItem
     */
    public function setGoodsItemLabelId($GoodsItemLabelId)
    {
      $this->GoodsItemLabelId = $GoodsItemLabelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageTypeName()
    {
      return $this->PackageTypeName;
    }

    /**
     * @param string $PackageTypeName
     * @return \Ongoing\GoodsItem
     */
    public function setPackageTypeName($PackageTypeName)
    {
      $this->PackageTypeName = $PackageTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageTypeCode()
    {
      return $this->PackageTypeCode;
    }

    /**
     * @param string $PackageTypeCode
     * @return \Ongoing\GoodsItem
     */
    public function setPackageTypeCode($PackageTypeCode)
    {
      $this->PackageTypeCode = $PackageTypeCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getArea()
    {
      return $this->Area;
    }

    /**
     * @param float $Area
     * @return \Ongoing\GoodsItem
     */
    public function setArea($Area)
    {
      $this->Area = $Area;
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
     * @return \Ongoing\GoodsItem
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
     * @return \Ongoing\GoodsItem
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
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
     * @return \Ongoing\GoodsItem
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
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
     * @return \Ongoing\GoodsItem
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
     * @return \Ongoing\GoodsItem
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getLoadMeters()
    {
      return $this->LoadMeters;
    }

    /**
     * @param float $LoadMeters
     * @return \Ongoing\GoodsItem
     */
    public function setLoadMeters($LoadMeters)
    {
      $this->LoadMeters = $LoadMeters;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
      return $this->NumberOfItems;
    }

    /**
     * @param int $NumberOfItems
     * @return \Ongoing\GoodsItem
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPackages()
    {
      return $this->NumberOfPackages;
    }

    /**
     * @param int $NumberOfPackages
     * @return \Ongoing\GoodsItem
     */
    public function setNumberOfPackages($NumberOfPackages)
    {
      $this->NumberOfPackages = $NumberOfPackages;
      return $this;
    }

    /**
     * @return int
     */
    public function getApprovedNumberOfPackages()
    {
      return $this->ApprovedNumberOfPackages;
    }

    /**
     * @param int $ApprovedNumberOfPackages
     * @return \Ongoing\GoodsItem
     */
    public function setApprovedNumberOfPackages($ApprovedNumberOfPackages)
    {
      $this->ApprovedNumberOfPackages = $ApprovedNumberOfPackages;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsComment()
    {
      return $this->GoodsComment;
    }

    /**
     * @param string $GoodsComment
     * @return \Ongoing\GoodsItem
     */
    public function setGoodsComment($GoodsComment)
    {
      $this->GoodsComment = $GoodsComment;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsCategory()
    {
      return $this->GoodsCategory;
    }

    /**
     * @param string $GoodsCategory
     * @return \Ongoing\GoodsItem
     */
    public function setGoodsCategory($GoodsCategory)
    {
      $this->GoodsCategory = $GoodsCategory;
      return $this;
    }

}
