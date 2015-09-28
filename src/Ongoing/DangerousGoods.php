<?php

namespace Ongoing;

class DangerousGoods
{

    /**
     * @var string $UNNumber
     */
    protected $UNNumber = null;

    /**
     * @var boolean $UNIsMarineHazard
     */
    protected $UNIsMarineHazard = null;

    /**
     * @var boolean $UNIsDangerousGoods
     */
    protected $UNIsDangerousGoods = null;

    /**
     * @var UNPackageType $UNPackageType
     */
    protected $UNPackageType = null;

    /**
     * @var ArrayOfUNTunnelCode $UNTunnelCodes
     */
    protected $UNTunnelCodes = null;

    /**
     * @var string $UNClassNumber
     */
    protected $UNClassNumber = null;

    /**
     * @var ProperShippingName[] $UNProperShippingName
     */
    protected $UNProperShippingName = null;

    /**
     * @var string $UNLabelNumbers
     */
    protected $UNLabelNumbers = null;

    /**
     * @var float $DangerousGoodsCoefficient
     */
    protected $DangerousGoodsCoefficient = null;

    /**
     * @param UNPackageType $UNPackageType
     */
    public function __construct($UNPackageType)
    {
      $this->UNPackageType = $UNPackageType;
    }

    /**
     * @return string
     */
    public function getUNNumber()
    {
      return $this->UNNumber;
    }

    /**
     * @param string $UNNumber
     * @return \Ongoing\DangerousGoods
     */
    public function setUNNumber($UNNumber)
    {
      $this->UNNumber = $UNNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUNIsMarineHazard()
    {
      return $this->UNIsMarineHazard;
    }

    /**
     * @param boolean $UNIsMarineHazard
     * @return \Ongoing\DangerousGoods
     */
    public function setUNIsMarineHazard($UNIsMarineHazard)
    {
      $this->UNIsMarineHazard = $UNIsMarineHazard;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUNIsDangerousGoods()
    {
      return $this->UNIsDangerousGoods;
    }

    /**
     * @param boolean $UNIsDangerousGoods
     * @return \Ongoing\DangerousGoods
     */
    public function setUNIsDangerousGoods($UNIsDangerousGoods)
    {
      $this->UNIsDangerousGoods = $UNIsDangerousGoods;
      return $this;
    }

    /**
     * @return UNPackageType
     */
    public function getUNPackageType()
    {
      return $this->UNPackageType;
    }

    /**
     * @param UNPackageType $UNPackageType
     * @return \Ongoing\DangerousGoods
     */
    public function setUNPackageType($UNPackageType)
    {
      $this->UNPackageType = $UNPackageType;
      return $this;
    }

    /**
     * @return ArrayOfUNTunnelCode
     */
    public function getUNTunnelCodes()
    {
      return $this->UNTunnelCodes;
    }

    /**
     * @param ArrayOfUNTunnelCode $UNTunnelCodes
     * @return \Ongoing\DangerousGoods
     */
    public function setUNTunnelCodes($UNTunnelCodes)
    {
      $this->UNTunnelCodes = $UNTunnelCodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getUNClassNumber()
    {
      return $this->UNClassNumber;
    }

    /**
     * @param string $UNClassNumber
     * @return \Ongoing\DangerousGoods
     */
    public function setUNClassNumber($UNClassNumber)
    {
      $this->UNClassNumber = $UNClassNumber;
      return $this;
    }

    /**
     * @return ProperShippingName[]
     */
    public function getUNProperShippingName()
    {
      return $this->UNProperShippingName;
    }

    /**
     * @param ProperShippingName[] $UNProperShippingName
     * @return \Ongoing\DangerousGoods
     */
    public function setUNProperShippingName(array $UNProperShippingName = null)
    {
      $this->UNProperShippingName = $UNProperShippingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUNLabelNumbers()
    {
      return $this->UNLabelNumbers;
    }

    /**
     * @param string $UNLabelNumbers
     * @return \Ongoing\DangerousGoods
     */
    public function setUNLabelNumbers($UNLabelNumbers)
    {
      $this->UNLabelNumbers = $UNLabelNumbers;
      return $this;
    }

    /**
     * @return float
     */
    public function getDangerousGoodsCoefficient()
    {
      return $this->DangerousGoodsCoefficient;
    }

    /**
     * @param float $DangerousGoodsCoefficient
     * @return \Ongoing\DangerousGoods
     */
    public function setDangerousGoodsCoefficient($DangerousGoodsCoefficient)
    {
      $this->DangerousGoodsCoefficient = $DangerousGoodsCoefficient;
      return $this;
    }

}
