<?php

namespace Ongoing;

class ProductionOrderFilters
{

    /**
     * @var \DateTime $LastProductionTimeFrom
     */
    protected $LastProductionTimeFrom = null;

    /**
     * @var \DateTime $LastProductionTimeTo
     */
    protected $LastProductionTimeTo = null;

    /**
     * @var ArrayOfInt $ProductionOrderIdToGet
     */
    protected $ProductionOrderIdToGet = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getLastProductionTimeFrom()
    {
      if ($this->LastProductionTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastProductionTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastProductionTimeFrom
     * @return \Ongoing\ProductionOrderFilters
     */
    public function setLastProductionTimeFrom(\DateTime $LastProductionTimeFrom = null)
    {
      if ($LastProductionTimeFrom == null) {
       $this->LastProductionTimeFrom = null;
      } else {
        $this->LastProductionTimeFrom = $LastProductionTimeFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastProductionTimeTo()
    {
      if ($this->LastProductionTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastProductionTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastProductionTimeTo
     * @return \Ongoing\ProductionOrderFilters
     */
    public function setLastProductionTimeTo(\DateTime $LastProductionTimeTo = null)
    {
      if ($LastProductionTimeTo == null) {
       $this->LastProductionTimeTo = null;
      } else {
        $this->LastProductionTimeTo = $LastProductionTimeTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getProductionOrderIdToGet()
    {
      return $this->ProductionOrderIdToGet;
    }

    /**
     * @param ArrayOfInt $ProductionOrderIdToGet
     * @return \Ongoing\ProductionOrderFilters
     */
    public function setProductionOrderIdToGet($ProductionOrderIdToGet)
    {
      $this->ProductionOrderIdToGet = $ProductionOrderIdToGet;
      return $this;
    }

}
