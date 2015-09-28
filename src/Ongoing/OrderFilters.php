<?php

namespace Ongoing;

class OrderFilters
{

    /**
     * @var \DateTime $DeliveryDateFrom
     */
    protected $DeliveryDateFrom = null;

    /**
     * @var \DateTime $DeliveryDateTo
     */
    protected $DeliveryDateTo = null;

    /**
     * @var \DateTime $ShippedTimeFrom
     */
    protected $ShippedTimeFrom = null;

    /**
     * @var \DateTime $ShippedTimeTo
     */
    protected $ShippedTimeTo = null;

    /**
     * @var \DateTime $LastPickingTimeFrom
     */
    protected $LastPickingTimeFrom = null;

    /**
     * @var \DateTime $LastPickingTimeTo
     */
    protected $LastPickingTimeTo = null;

    /**
     * @var \DateTime $LastReturnedFrom
     */
    protected $LastReturnedFrom = null;

    /**
     * @var \DateTime $LastPrintedTimeFrom
     */
    protected $LastPrintedTimeFrom = null;

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
     * @var ArrayOfString $OrderNumbersToGet
     */
    protected $OrderNumbersToGet = null;

    /**
     * @var ArrayOfInt $OrderIdsToGet
     */
    protected $OrderIdsToGet = null;

    /**
     * @var ArrayOfString $GoodsOwnerOrderIdToGet
     */
    protected $GoodsOwnerOrderIdToGet = null;

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var int $PickOrderIdFrom
     */
    protected $PickOrderIdFrom = null;

    /**
     * @var int $PickOrderIdTo
     */
    protected $PickOrderIdTo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDateFrom()
    {
      if ($this->DeliveryDateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDateFrom
     * @return \Ongoing\OrderFilters
     */
    public function setDeliveryDateFrom(\DateTime $DeliveryDateFrom = null)
    {
      if ($DeliveryDateFrom == null) {
       $this->DeliveryDateFrom = null;
      } else {
        $this->DeliveryDateFrom = $DeliveryDateFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDateTo()
    {
      if ($this->DeliveryDateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDateTo
     * @return \Ongoing\OrderFilters
     */
    public function setDeliveryDateTo(\DateTime $DeliveryDateTo = null)
    {
      if ($DeliveryDateTo == null) {
       $this->DeliveryDateTo = null;
      } else {
        $this->DeliveryDateTo = $DeliveryDateTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippedTimeFrom()
    {
      if ($this->ShippedTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShippedTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShippedTimeFrom
     * @return \Ongoing\OrderFilters
     */
    public function setShippedTimeFrom(\DateTime $ShippedTimeFrom = null)
    {
      if ($ShippedTimeFrom == null) {
       $this->ShippedTimeFrom = null;
      } else {
        $this->ShippedTimeFrom = $ShippedTimeFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippedTimeTo()
    {
      if ($this->ShippedTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShippedTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShippedTimeTo
     * @return \Ongoing\OrderFilters
     */
    public function setShippedTimeTo(\DateTime $ShippedTimeTo = null)
    {
      if ($ShippedTimeTo == null) {
       $this->ShippedTimeTo = null;
      } else {
        $this->ShippedTimeTo = $ShippedTimeTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPickingTimeFrom()
    {
      if ($this->LastPickingTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPickingTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPickingTimeFrom
     * @return \Ongoing\OrderFilters
     */
    public function setLastPickingTimeFrom(\DateTime $LastPickingTimeFrom = null)
    {
      if ($LastPickingTimeFrom == null) {
       $this->LastPickingTimeFrom = null;
      } else {
        $this->LastPickingTimeFrom = $LastPickingTimeFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPickingTimeTo()
    {
      if ($this->LastPickingTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPickingTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPickingTimeTo
     * @return \Ongoing\OrderFilters
     */
    public function setLastPickingTimeTo(\DateTime $LastPickingTimeTo = null)
    {
      if ($LastPickingTimeTo == null) {
       $this->LastPickingTimeTo = null;
      } else {
        $this->LastPickingTimeTo = $LastPickingTimeTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastReturnedFrom()
    {
      if ($this->LastReturnedFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastReturnedFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastReturnedFrom
     * @return \Ongoing\OrderFilters
     */
    public function setLastReturnedFrom(\DateTime $LastReturnedFrom = null)
    {
      if ($LastReturnedFrom == null) {
       $this->LastReturnedFrom = null;
      } else {
        $this->LastReturnedFrom = $LastReturnedFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPrintedTimeFrom()
    {
      if ($this->LastPrintedTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPrintedTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPrintedTimeFrom
     * @return \Ongoing\OrderFilters
     */
    public function setLastPrintedTimeFrom(\DateTime $LastPrintedTimeFrom = null)
    {
      if ($LastPrintedTimeFrom == null) {
       $this->LastPrintedTimeFrom = null;
      } else {
        $this->LastPrintedTimeFrom = $LastPrintedTimeFrom->format(\DateTime::ATOM);
      }
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
     * @return \Ongoing\OrderFilters
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
     * @return \Ongoing\OrderFilters
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
     * @return \Ongoing\OrderFilters
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
     * @return \Ongoing\OrderFilters
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
    public function getOrderNumbersToGet()
    {
      return $this->OrderNumbersToGet;
    }

    /**
     * @param ArrayOfString $OrderNumbersToGet
     * @return \Ongoing\OrderFilters
     */
    public function setOrderNumbersToGet($OrderNumbersToGet)
    {
      $this->OrderNumbersToGet = $OrderNumbersToGet;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getOrderIdsToGet()
    {
      return $this->OrderIdsToGet;
    }

    /**
     * @param ArrayOfInt $OrderIdsToGet
     * @return \Ongoing\OrderFilters
     */
    public function setOrderIdsToGet($OrderIdsToGet)
    {
      $this->OrderIdsToGet = $OrderIdsToGet;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getGoodsOwnerOrderIdToGet()
    {
      return $this->GoodsOwnerOrderIdToGet;
    }

    /**
     * @param ArrayOfString $GoodsOwnerOrderIdToGet
     * @return \Ongoing\OrderFilters
     */
    public function setGoodsOwnerOrderIdToGet($GoodsOwnerOrderIdToGet)
    {
      $this->GoodsOwnerOrderIdToGet = $GoodsOwnerOrderIdToGet;
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
     * @return \Ongoing\OrderFilters
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickOrderIdFrom()
    {
      return $this->PickOrderIdFrom;
    }

    /**
     * @param int $PickOrderIdFrom
     * @return \Ongoing\OrderFilters
     */
    public function setPickOrderIdFrom($PickOrderIdFrom)
    {
      $this->PickOrderIdFrom = $PickOrderIdFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickOrderIdTo()
    {
      return $this->PickOrderIdTo;
    }

    /**
     * @param int $PickOrderIdTo
     * @return \Ongoing\OrderFilters
     */
    public function setPickOrderIdTo($PickOrderIdTo)
    {
      $this->PickOrderIdTo = $PickOrderIdTo;
      return $this;
    }

}
