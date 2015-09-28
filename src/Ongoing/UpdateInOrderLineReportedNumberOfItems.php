<?php

namespace Ongoing;

class UpdateInOrderLineReportedNumberOfItems
{

    /**
     * @var float $ReportedNumberOfItems
     */
    protected $ReportedNumberOfItems = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getReportedNumberOfItems()
    {
      return $this->ReportedNumberOfItems;
    }

    /**
     * @param float $ReportedNumberOfItems
     * @return \Ongoing\UpdateInOrderLineReportedNumberOfItems
     */
    public function setReportedNumberOfItems($ReportedNumberOfItems)
    {
      $this->ReportedNumberOfItems = $ReportedNumberOfItems;
      return $this;
    }

}
