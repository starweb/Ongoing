<?php

namespace Ongoing;

class ShipmentContainer
{

    /**
     * @var string $ContainerTypeCode
     */
    protected $ContainerTypeCode = null;

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
     * @var int $ContainerId
     */
    protected $ContainerId = null;

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
     * @return \Ongoing\ShipmentContainer
     */
    public function setContainerTypeCode($ContainerTypeCode)
    {
      $this->ContainerTypeCode = $ContainerTypeCode;
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
     * @return \Ongoing\ShipmentContainer
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
     * @return \Ongoing\ShipmentContainer
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
     * @return \Ongoing\ShipmentContainer
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
     * @return \Ongoing\ShipmentContainer
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
     * @return \Ongoing\ShipmentContainer
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
     * @return \Ongoing\ShipmentContainer
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
     * @return \Ongoing\ShipmentContainer
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
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
     * @return \Ongoing\ShipmentContainer
     */
    public function setContainerId($ContainerId)
    {
      $this->ContainerId = $ContainerId;
      return $this;
    }

}
