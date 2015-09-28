<?php

namespace Ongoing;

class InOrderStatusReportsResult
{

    /**
     * @var ArrayOfInOrderStatusReport $InOrderStatusReports
     */
    protected $InOrderStatusReports = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfInOrderStatusReport
     */
    public function getInOrderStatusReports()
    {
      return $this->InOrderStatusReports;
    }

    /**
     * @param ArrayOfInOrderStatusReport $InOrderStatusReports
     * @return \Ongoing\InOrderStatusReportsResult
     */
    public function setInOrderStatusReports($InOrderStatusReports)
    {
      $this->InOrderStatusReports = $InOrderStatusReports;
      return $this;
    }

}
