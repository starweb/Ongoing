<?php

namespace Ongoing;

class ArrayOfInOrderStatusReport
{

    /**
     * @var InOrderStatusReport[] $InOrderStatusReport
     */
    protected $InOrderStatusReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InOrderStatusReport[]
     */
    public function getInOrderStatusReport()
    {
      return $this->InOrderStatusReport;
    }

    /**
     * @param InOrderStatusReport[] $InOrderStatusReport
     * @return \Ongoing\ArrayOfInOrderStatusReport
     */
    public function setInOrderStatusReport(array $InOrderStatusReport = null)
    {
      $this->InOrderStatusReport = $InOrderStatusReport;
      return $this;
    }

}
