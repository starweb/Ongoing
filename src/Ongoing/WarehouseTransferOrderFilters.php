<?php

namespace Ongoing;

class WarehouseTransferOrderFilters
{

    /**
     * @var boolean $IsDelivered
     */
    protected $IsDelivered = null;

    /**
     * @var int $FromWarehouseId
     */
    protected $FromWarehouseId = null;

    /**
     * @var int $ToWarehouseId
     */
    protected $ToWarehouseId = null;

    /**
     * @var int $OrderStatusFrom
     */
    protected $OrderStatusFrom = null;

    /**
     * @var int $OrderStatusTo
     */
    protected $OrderStatusTo = null;

    /**
     * @var \DateTime $LastUpdatedFrom
     */
    protected $LastUpdatedFrom = null;

    /**
     * @var \DateTime $LastUpdatedTo
     */
    protected $LastUpdatedTo = null;

    /**
     * @var ArrayOfString $WarehouseTransferOrderNumbersToGet
     */
    protected $WarehouseTransferOrderNumbersToGet = null;

    /**
     * @var ArrayOfInt $WarehouseTransferOrderIdsToGet
     */
    protected $WarehouseTransferOrderIdsToGet = null;

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getIsDelivered()
    {
      return $this->IsDelivered;
    }

    /**
     * @param boolean $IsDelivered
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setIsDelivered($IsDelivered)
    {
      $this->IsDelivered = $IsDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getFromWarehouseId()
    {
      return $this->FromWarehouseId;
    }

    /**
     * @param int $FromWarehouseId
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setFromWarehouseId($FromWarehouseId)
    {
      $this->FromWarehouseId = $FromWarehouseId;
      return $this;
    }

    /**
     * @return int
     */
    public function getToWarehouseId()
    {
      return $this->ToWarehouseId;
    }

    /**
     * @param int $ToWarehouseId
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setToWarehouseId($ToWarehouseId)
    {
      $this->ToWarehouseId = $ToWarehouseId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatusFrom()
    {
      return $this->OrderStatusFrom;
    }

    /**
     * @param int $OrderStatusFrom
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setOrderStatusFrom($OrderStatusFrom)
    {
      $this->OrderStatusFrom = $OrderStatusFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatusTo()
    {
      return $this->OrderStatusTo;
    }

    /**
     * @param int $OrderStatusTo
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setOrderStatusTo($OrderStatusTo)
    {
      $this->OrderStatusTo = $OrderStatusTo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdatedFrom()
    {
      if ($this->LastUpdatedFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastUpdatedFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastUpdatedFrom
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setLastUpdatedFrom(\DateTime $LastUpdatedFrom = null)
    {
      if ($LastUpdatedFrom == null) {
       $this->LastUpdatedFrom = null;
      } else {
        $this->LastUpdatedFrom = $LastUpdatedFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdatedTo()
    {
      if ($this->LastUpdatedTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastUpdatedTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastUpdatedTo
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setLastUpdatedTo(\DateTime $LastUpdatedTo = null)
    {
      if ($LastUpdatedTo == null) {
       $this->LastUpdatedTo = null;
      } else {
        $this->LastUpdatedTo = $LastUpdatedTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getWarehouseTransferOrderNumbersToGet()
    {
      return $this->WarehouseTransferOrderNumbersToGet;
    }

    /**
     * @param ArrayOfString $WarehouseTransferOrderNumbersToGet
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setWarehouseTransferOrderNumbersToGet($WarehouseTransferOrderNumbersToGet)
    {
      $this->WarehouseTransferOrderNumbersToGet = $WarehouseTransferOrderNumbersToGet;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getWarehouseTransferOrderIdsToGet()
    {
      return $this->WarehouseTransferOrderIdsToGet;
    }

    /**
     * @param ArrayOfInt $WarehouseTransferOrderIdsToGet
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setWarehouseTransferOrderIdsToGet($WarehouseTransferOrderIdsToGet)
    {
      $this->WarehouseTransferOrderIdsToGet = $WarehouseTransferOrderIdsToGet;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
      return $this->ReferenceNumber;
    }

    /**
     * @param string $ReferenceNumber
     * @return \Ongoing\WarehouseTransferOrderFilters
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
      return $this;
    }

}
