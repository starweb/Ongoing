<?php

namespace Ongoing;

class InventoryChangesQuery
{

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var int $InventoryId
     */
    protected $InventoryId = null;

    /**
     * @var boolean $UnReported
     */
    protected $UnReported = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return \Ongoing\InventoryChangesQuery
     */
    public function setFromDate(\DateTime $FromDate = null)
    {
      if ($FromDate == null) {
       $this->FromDate = null;
      } else {
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return \Ongoing\InventoryChangesQuery
     */
    public function setToDate(\DateTime $ToDate = null)
    {
      if ($ToDate == null) {
       $this->ToDate = null;
      } else {
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getInventoryId()
    {
      return $this->InventoryId;
    }

    /**
     * @param int $InventoryId
     * @return \Ongoing\InventoryChangesQuery
     */
    public function setInventoryId($InventoryId)
    {
      $this->InventoryId = $InventoryId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnReported()
    {
      return $this->UnReported;
    }

    /**
     * @param boolean $UnReported
     * @return \Ongoing\InventoryChangesQuery
     */
    public function setUnReported($UnReported)
    {
      $this->UnReported = $UnReported;
      return $this;
    }

}
