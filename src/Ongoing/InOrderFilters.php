<?php

namespace Ongoing;

class InOrderFilters
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
     * @var \DateTime $LastReceiveTimeFrom
     */
    protected $LastReceiveTimeFrom = null;

    /**
     * @var \DateTime $LastReceiveTimeTo
     */
    protected $LastReceiveTimeTo = null;

    /**
     * @var int $InOrderStatusFrom
     */
    protected $InOrderStatusFrom = null;

    /**
     * @var int $InOrderStatusTo
     */
    protected $InOrderStatusTo = null;

    /**
     * @var boolean $IsReturnType
     */
    protected $IsReturnType = null;

    /**
     * @var ArrayOfString $InOrderNumbersToGet
     */
    protected $InOrderNumbersToGet = null;

    /**
     * @var InOrderSpecialFilters $InOrderSpecialFilters
     */
    protected $InOrderSpecialFilters = null;

    /**
     * @var \DateTime $LastUpdatedFrom
     */
    protected $LastUpdatedFrom = null;

    /**
     * @var \DateTime $LastUpdatedTo
     */
    protected $LastUpdatedTo = null;

    
    public function __construct()
    {
    
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
     * @return \Ongoing\InOrderFilters
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
     * @return \Ongoing\InOrderFilters
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
    public function getLastReceiveTimeFrom()
    {
      if ($this->LastReceiveTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastReceiveTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastReceiveTimeFrom
     * @return \Ongoing\InOrderFilters
     */
    public function setLastReceiveTimeFrom(\DateTime $LastReceiveTimeFrom = null)
    {
      if ($LastReceiveTimeFrom == null) {
       $this->LastReceiveTimeFrom = null;
      } else {
        $this->LastReceiveTimeFrom = $LastReceiveTimeFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastReceiveTimeTo()
    {
      if ($this->LastReceiveTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastReceiveTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastReceiveTimeTo
     * @return \Ongoing\InOrderFilters
     */
    public function setLastReceiveTimeTo(\DateTime $LastReceiveTimeTo = null)
    {
      if ($LastReceiveTimeTo == null) {
       $this->LastReceiveTimeTo = null;
      } else {
        $this->LastReceiveTimeTo = $LastReceiveTimeTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderStatusFrom()
    {
      return $this->InOrderStatusFrom;
    }

    /**
     * @param int $InOrderStatusFrom
     * @return \Ongoing\InOrderFilters
     */
    public function setInOrderStatusFrom($InOrderStatusFrom)
    {
      $this->InOrderStatusFrom = $InOrderStatusFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderStatusTo()
    {
      return $this->InOrderStatusTo;
    }

    /**
     * @param int $InOrderStatusTo
     * @return \Ongoing\InOrderFilters
     */
    public function setInOrderStatusTo($InOrderStatusTo)
    {
      $this->InOrderStatusTo = $InOrderStatusTo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReturnType()
    {
      return $this->IsReturnType;
    }

    /**
     * @param boolean $IsReturnType
     * @return \Ongoing\InOrderFilters
     */
    public function setIsReturnType($IsReturnType)
    {
      $this->IsReturnType = $IsReturnType;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInOrderNumbersToGet()
    {
      return $this->InOrderNumbersToGet;
    }

    /**
     * @param ArrayOfString $InOrderNumbersToGet
     * @return \Ongoing\InOrderFilters
     */
    public function setInOrderNumbersToGet($InOrderNumbersToGet)
    {
      $this->InOrderNumbersToGet = $InOrderNumbersToGet;
      return $this;
    }

    /**
     * @return InOrderSpecialFilters
     */
    public function getInOrderSpecialFilters()
    {
      return $this->InOrderSpecialFilters;
    }

    /**
     * @param InOrderSpecialFilters $InOrderSpecialFilters
     * @return \Ongoing\InOrderFilters
     */
    public function setInOrderSpecialFilters($InOrderSpecialFilters)
    {
      $this->InOrderSpecialFilters = $InOrderSpecialFilters;
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
     * @return \Ongoing\InOrderFilters
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
     * @return \Ongoing\InOrderFilters
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

}
