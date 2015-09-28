<?php

namespace Ongoing;

class ShipmentContainerInfo
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
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var float $LoadMeters
     */
    protected $LoadMeters = null;

    /**
     * @var int $NumberOfPackages
     */
    protected $NumberOfPackages = null;

    /**
     * @var string $GoodsMark
     */
    protected $GoodsMark = null;

    /**
     * @var string $GoodsCategory
     */
    protected $GoodsCategory = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var int $ContainerId
     */
    protected $ContainerId = null;

    /**
     * @var string $GoodsCategoryName
     */
    protected $GoodsCategoryName = null;

    /**
     * @var string $GoodsCategoryCode
     */
    protected $GoodsCategoryCode = null;

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
     * @param int $NumberOfPackages
     * @param int $ContainerId
     */
    public function __construct($NumberOfPackages, $ContainerId)
    {
      $this->NumberOfPackages = $NumberOfPackages;
      $this->ContainerId = $ContainerId;
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
     * @return \Ongoing\ShipmentContainerInfo
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
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setContainerTypeName($ContainerTypeName)
    {
      $this->ContainerTypeName = $ContainerTypeName;
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
     * @return \Ongoing\ShipmentContainerInfo
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
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
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
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setLoadMeters($LoadMeters)
    {
      $this->LoadMeters = $LoadMeters;
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
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setNumberOfPackages($NumberOfPackages)
    {
      $this->NumberOfPackages = $NumberOfPackages;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsMark()
    {
      return $this->GoodsMark;
    }

    /**
     * @param string $GoodsMark
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setGoodsMark($GoodsMark)
    {
      $this->GoodsMark = $GoodsMark;
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
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setGoodsCategory($GoodsCategory)
    {
      $this->GoodsCategory = $GoodsCategory;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getContainerId()
    {
      return $this->ContainerId;
    }

    /**
     * @param int $ContainerId
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setContainerId($ContainerId)
    {
      $this->ContainerId = $ContainerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsCategoryName()
    {
      return $this->GoodsCategoryName;
    }

    /**
     * @param string $GoodsCategoryName
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setGoodsCategoryName($GoodsCategoryName)
    {
      $this->GoodsCategoryName = $GoodsCategoryName;
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
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setGoodsCategoryCode($GoodsCategoryCode)
    {
      $this->GoodsCategoryCode = $GoodsCategoryCode;
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
     * @return \Ongoing\ShipmentContainerInfo
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
     * @return \Ongoing\ShipmentContainerInfo
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
     * @return \Ongoing\ShipmentContainerInfo
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

}
