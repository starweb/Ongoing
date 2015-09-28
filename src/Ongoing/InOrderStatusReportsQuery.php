<?php

namespace Ongoing;

class InOrderStatusReportsQuery
{

    /**
     * @var ArrayOfString $InOrderNumbersToReport
     */
    protected $InOrderNumbersToReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getInOrderNumbersToReport()
    {
      return $this->InOrderNumbersToReport;
    }

    /**
     * @param ArrayOfString $InOrderNumbersToReport
     * @return \Ongoing\InOrderStatusReportsQuery
     */
    public function setInOrderNumbersToReport($InOrderNumbersToReport)
    {
      $this->InOrderNumbersToReport = $InOrderNumbersToReport;
      return $this;
    }

}
