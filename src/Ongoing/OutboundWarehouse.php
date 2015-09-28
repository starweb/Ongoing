<?php

namespace Ongoing;

class OutboundWarehouse
{

    /**
     * @var WarehouseIdentificationType $WarehouseIdentification
     */
    protected $WarehouseIdentification = null;

    /**
     * @var string $WarehouseCode
     */
    protected $WarehouseCode = null;

    /**
     * @var string $WarehouseName
     */
    protected $WarehouseName = null;

    /**
     * @var int $WarehouseId
     */
    protected $WarehouseId = null;

    /**
     * @param WarehouseIdentificationType $WarehouseIdentification
     */
    public function __construct($WarehouseIdentification)
    {
      $this->WarehouseIdentification = $WarehouseIdentification;
    }

    /**
     * @return WarehouseIdentificationType
     */
    public function getWarehouseIdentification()
    {
      return $this->WarehouseIdentification;
    }

    /**
     * @param WarehouseIdentificationType $WarehouseIdentification
     * @return \Ongoing\OutboundWarehouse
     */
    public function setWarehouseIdentification($WarehouseIdentification)
    {
      $this->WarehouseIdentification = $WarehouseIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseCode()
    {
      return $this->WarehouseCode;
    }

    /**
     * @param string $WarehouseCode
     * @return \Ongoing\OutboundWarehouse
     */
    public function setWarehouseCode($WarehouseCode)
    {
      $this->WarehouseCode = $WarehouseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseName()
    {
      return $this->WarehouseName;
    }

    /**
     * @param string $WarehouseName
     * @return \Ongoing\OutboundWarehouse
     */
    public function setWarehouseName($WarehouseName)
    {
      $this->WarehouseName = $WarehouseName;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseId()
    {
      return $this->WarehouseId;
    }

    /**
     * @param int $WarehouseId
     * @return \Ongoing\OutboundWarehouse
     */
    public function setWarehouseId($WarehouseId)
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
