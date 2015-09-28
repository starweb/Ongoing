<?php

namespace Ongoing;

class GoodsInfo
{

    /**
     * @var int $NumberOfGoodsItems
     */
    protected $NumberOfGoodsItems = null;

    /**
     * @var int $NumberOfPackages
     */
    protected $NumberOfPackages = null;

    /**
     * @var int $SummedGoodsItemParcels
     */
    protected $SummedGoodsItemParcels = null;

    /**
     * @var float $SummedGoodsItemWeight
     */
    protected $SummedGoodsItemWeight = null;

    /**
     * @var float $SummedGoodsItemVolume
     */
    protected $SummedGoodsItemVolume = null;

    /**
     * @var float $SummedGoodsItemLoadMeters
     */
    protected $SummedGoodsItemLoadMeters = null;

    /**
     * @var float $SummedGoodsItemArea
     */
    protected $SummedGoodsItemArea = null;

    /**
     * @var float $SummedArticleItemWeight
     */
    protected $SummedArticleItemWeight = null;

    /**
     * @var float $SummedArticleItemVolume
     */
    protected $SummedArticleItemVolume = null;

    /**
     * @param int $NumberOfGoodsItems
     * @param int $NumberOfPackages
     * @param int $SummedGoodsItemParcels
     * @param float $SummedGoodsItemWeight
     * @param float $SummedGoodsItemVolume
     * @param float $SummedGoodsItemLoadMeters
     * @param float $SummedGoodsItemArea
     * @param float $SummedArticleItemWeight
     * @param float $SummedArticleItemVolume
     */
    public function __construct($NumberOfGoodsItems, $NumberOfPackages, $SummedGoodsItemParcels, $SummedGoodsItemWeight, $SummedGoodsItemVolume, $SummedGoodsItemLoadMeters, $SummedGoodsItemArea, $SummedArticleItemWeight, $SummedArticleItemVolume)
    {
      $this->NumberOfGoodsItems = $NumberOfGoodsItems;
      $this->NumberOfPackages = $NumberOfPackages;
      $this->SummedGoodsItemParcels = $SummedGoodsItemParcels;
      $this->SummedGoodsItemWeight = $SummedGoodsItemWeight;
      $this->SummedGoodsItemVolume = $SummedGoodsItemVolume;
      $this->SummedGoodsItemLoadMeters = $SummedGoodsItemLoadMeters;
      $this->SummedGoodsItemArea = $SummedGoodsItemArea;
      $this->SummedArticleItemWeight = $SummedArticleItemWeight;
      $this->SummedArticleItemVolume = $SummedArticleItemVolume;
    }

    /**
     * @return int
     */
    public function getNumberOfGoodsItems()
    {
      return $this->NumberOfGoodsItems;
    }

    /**
     * @param int $NumberOfGoodsItems
     * @return \Ongoing\GoodsInfo
     */
    public function setNumberOfGoodsItems($NumberOfGoodsItems)
    {
      $this->NumberOfGoodsItems = $NumberOfGoodsItems;
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
     * @return \Ongoing\GoodsInfo
     */
    public function setNumberOfPackages($NumberOfPackages)
    {
      $this->NumberOfPackages = $NumberOfPackages;
      return $this;
    }

    /**
     * @return int
     */
    public function getSummedGoodsItemParcels()
    {
      return $this->SummedGoodsItemParcels;
    }

    /**
     * @param int $SummedGoodsItemParcels
     * @return \Ongoing\GoodsInfo
     */
    public function setSummedGoodsItemParcels($SummedGoodsItemParcels)
    {
      $this->SummedGoodsItemParcels = $SummedGoodsItemParcels;
      return $this;
    }

    /**
     * @return float
     */
    public function getSummedGoodsItemWeight()
    {
      return $this->SummedGoodsItemWeight;
    }

    /**
     * @param float $SummedGoodsItemWeight
     * @return \Ongoing\GoodsInfo
     */
    public function setSummedGoodsItemWeight($SummedGoodsItemWeight)
    {
      $this->SummedGoodsItemWeight = $SummedGoodsItemWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getSummedGoodsItemVolume()
    {
      return $this->SummedGoodsItemVolume;
    }

    /**
     * @param float $SummedGoodsItemVolume
     * @return \Ongoing\GoodsInfo
     */
    public function setSummedGoodsItemVolume($SummedGoodsItemVolume)
    {
      $this->SummedGoodsItemVolume = $SummedGoodsItemVolume;
      return $this;
    }

    /**
     * @return float
     */
    public function getSummedGoodsItemLoadMeters()
    {
      return $this->SummedGoodsItemLoadMeters;
    }

    /**
     * @param float $SummedGoodsItemLoadMeters
     * @return \Ongoing\GoodsInfo
     */
    public function setSummedGoodsItemLoadMeters($SummedGoodsItemLoadMeters)
    {
      $this->SummedGoodsItemLoadMeters = $SummedGoodsItemLoadMeters;
      return $this;
    }

    /**
     * @return float
     */
    public function getSummedGoodsItemArea()
    {
      return $this->SummedGoodsItemArea;
    }

    /**
     * @param float $SummedGoodsItemArea
     * @return \Ongoing\GoodsInfo
     */
    public function setSummedGoodsItemArea($SummedGoodsItemArea)
    {
      $this->SummedGoodsItemArea = $SummedGoodsItemArea;
      return $this;
    }

    /**
     * @return float
     */
    public function getSummedArticleItemWeight()
    {
      return $this->SummedArticleItemWeight;
    }

    /**
     * @param float $SummedArticleItemWeight
     * @return \Ongoing\GoodsInfo
     */
    public function setSummedArticleItemWeight($SummedArticleItemWeight)
    {
      $this->SummedArticleItemWeight = $SummedArticleItemWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getSummedArticleItemVolume()
    {
      return $this->SummedArticleItemVolume;
    }

    /**
     * @param float $SummedArticleItemVolume
     * @return \Ongoing\GoodsInfo
     */
    public function setSummedArticleItemVolume($SummedArticleItemVolume)
    {
      $this->SummedArticleItemVolume = $SummedArticleItemVolume;
      return $this;
    }

}
