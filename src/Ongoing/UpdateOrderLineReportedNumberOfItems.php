<?php

namespace Ongoing;

class UpdateOrderLineReportedNumberOfItems
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
     * @return \Ongoing\UpdateOrderLineReportedNumberOfItems
     */
    public function setReportedNumberOfItems($ReportedNumberOfItems)
    {
      $this->ReportedNumberOfItems = $ReportedNumberOfItems;
      return $this;
    }

}
