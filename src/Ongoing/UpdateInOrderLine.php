<?php

namespace Ongoing;

class UpdateInOrderLine
{

    /**
     * @var UpdateInOrderLineIdentification $UpdateInOrderLineIdentification
     */
    protected $UpdateInOrderLineIdentification = null;

    /**
     * @var UpdateInOrderLineReportedNumberOfItems $UpdateReportedNumberOfItems
     */
    protected $UpdateReportedNumberOfItems = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpdateInOrderLineIdentification
     */
    public function getUpdateInOrderLineIdentification()
    {
      return $this->UpdateInOrderLineIdentification;
    }

    /**
     * @param UpdateInOrderLineIdentification $UpdateInOrderLineIdentification
     * @return \Ongoing\UpdateInOrderLine
     */
    public function setUpdateInOrderLineIdentification($UpdateInOrderLineIdentification)
    {
      $this->UpdateInOrderLineIdentification = $UpdateInOrderLineIdentification;
      return $this;
    }

    /**
     * @return UpdateInOrderLineReportedNumberOfItems
     */
    public function getUpdateReportedNumberOfItems()
    {
      return $this->UpdateReportedNumberOfItems;
    }

    /**
     * @param UpdateInOrderLineReportedNumberOfItems $UpdateReportedNumberOfItems
     * @return \Ongoing\UpdateInOrderLine
     */
    public function setUpdateReportedNumberOfItems($UpdateReportedNumberOfItems)
    {
      $this->UpdateReportedNumberOfItems = $UpdateReportedNumberOfItems;
      return $this;
    }

}
