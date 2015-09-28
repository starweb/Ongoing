<?php

namespace Ongoing;

class ShipmentFilters
{

    /**
     * @var \DateTime $InDateFrom
     */
    protected $InDateFrom = null;

    /**
     * @var \DateTime $InDateTo
     */
    protected $InDateTo = null;

    /**
     * @var \DateTime $DeliveryDateFrom
     */
    protected $DeliveryDateFrom = null;

    /**
     * @var \DateTime $DeliveryDateTo
     */
    protected $DeliveryDateTo = null;

    /**
     * @var int $ShipmentStatusFrom
     */
    protected $ShipmentStatusFrom = null;

    /**
     * @var int $ShipmentStatusTo
     */
    protected $ShipmentStatusTo = null;

    /**
     * @var boolean $IsCollectType
     */
    protected $IsCollectType = null;

    /**
     * @var boolean $IsDeliveryType
     */
    protected $IsDeliveryType = null;

    /**
     * @var string $ShipmentOrderNumber
     */
    protected $ShipmentOrderNumber = null;

    /**
     * @var boolean $GetInOrders
     */
    protected $GetInOrders = null;

    /**
     * @var boolean $GetOrders
     */
    protected $GetOrders = null;

    /**
     * @var ArrayOfInt $ShipmentIdsToGet
     */
    protected $ShipmentIdsToGet = null;

    /**
     * @param boolean $GetInOrders
     * @param boolean $GetOrders
     */
    public function __construct($GetInOrders, $GetOrders)
    {
      $this->GetInOrders = $GetInOrders;
      $this->GetOrders = $GetOrders;
    }

    /**
     * @return \DateTime
     */
    public function getInDateFrom()
    {
      if ($this->InDateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InDateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InDateFrom
     * @return \Ongoing\ShipmentFilters
     */
    public function setInDateFrom(\DateTime $InDateFrom = null)
    {
      if ($InDateFrom == null) {
       $this->InDateFrom = null;
      } else {
        $this->InDateFrom = $InDateFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInDateTo()
    {
      if ($this->InDateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InDateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InDateTo
     * @return \Ongoing\ShipmentFilters
     */
    public function setInDateTo(\DateTime $InDateTo = null)
    {
      if ($InDateTo == null) {
       $this->InDateTo = null;
      } else {
        $this->InDateTo = $InDateTo->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \Ongoing\ShipmentFilters
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
     * @return \Ongoing\ShipmentFilters
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
     * @return int
     */
    public function getShipmentStatusFrom()
    {
      return $this->ShipmentStatusFrom;
    }

    /**
     * @param int $ShipmentStatusFrom
     * @return \Ongoing\ShipmentFilters
     */
    public function setShipmentStatusFrom($ShipmentStatusFrom)
    {
      $this->ShipmentStatusFrom = $ShipmentStatusFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentStatusTo()
    {
      return $this->ShipmentStatusTo;
    }

    /**
     * @param int $ShipmentStatusTo
     * @return \Ongoing\ShipmentFilters
     */
    public function setShipmentStatusTo($ShipmentStatusTo)
    {
      $this->ShipmentStatusTo = $ShipmentStatusTo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCollectType()
    {
      return $this->IsCollectType;
    }

    /**
     * @param boolean $IsCollectType
     * @return \Ongoing\ShipmentFilters
     */
    public function setIsCollectType($IsCollectType)
    {
      $this->IsCollectType = $IsCollectType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeliveryType()
    {
      return $this->IsDeliveryType;
    }

    /**
     * @param boolean $IsDeliveryType
     * @return \Ongoing\ShipmentFilters
     */
    public function setIsDeliveryType($IsDeliveryType)
    {
      $this->IsDeliveryType = $IsDeliveryType;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentOrderNumber()
    {
      return $this->ShipmentOrderNumber;
    }

    /**
     * @param string $ShipmentOrderNumber
     * @return \Ongoing\ShipmentFilters
     */
    public function setShipmentOrderNumber($ShipmentOrderNumber)
    {
      $this->ShipmentOrderNumber = $ShipmentOrderNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGetInOrders()
    {
      return $this->GetInOrders;
    }

    /**
     * @param boolean $GetInOrders
     * @return \Ongoing\ShipmentFilters
     */
    public function setGetInOrders($GetInOrders)
    {
      $this->GetInOrders = $GetInOrders;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGetOrders()
    {
      return $this->GetOrders;
    }

    /**
     * @param boolean $GetOrders
     * @return \Ongoing\ShipmentFilters
     */
    public function setGetOrders($GetOrders)
    {
      $this->GetOrders = $GetOrders;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getShipmentIdsToGet()
    {
      return $this->ShipmentIdsToGet;
    }

    /**
     * @param ArrayOfInt $ShipmentIdsToGet
     * @return \Ongoing\ShipmentFilters
     */
    public function setShipmentIdsToGet($ShipmentIdsToGet)
    {
      $this->ShipmentIdsToGet = $ShipmentIdsToGet;
      return $this;
    }

}
