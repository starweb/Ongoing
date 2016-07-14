<?php

namespace Ongoing;

class OrderSpecialFilters
{

    /**
     * @var boolean $OnlyOrdersWithOrderLinesToReport
     */
    protected $OnlyOrdersWithOrderLinesToReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getOnlyOrdersWithOrderLinesToReport()
    {
      return $this->OnlyOrdersWithOrderLinesToReport;
    }

    /**
     * @param boolean $OnlyOrdersWithOrderLinesToReport
     * @return \Ongoing\OrderSpecialFilters
     */
    public function setOnlyOrdersWithOrderLinesToReport($OnlyOrdersWithOrderLinesToReport)
    {
      $this->OnlyOrdersWithOrderLinesToReport = $OnlyOrdersWithOrderLinesToReport;
      return $this;
    }

}
