<?php

namespace Ongoing;

class UpdateOrderLine
{

    /**
     * @var UpdateOrderLineIdentification $UpdateOrderLineIdentification
     */
    protected $UpdateOrderLineIdentification = null;

    /**
     * @var UpdateOrderLineReportedNumberOfItems $UpdateReportedNumberOfItems
     */
    protected $UpdateReportedNumberOfItems = null;

    /**
     * @var UpdateOrderLineComment $UpdateComment
     */
    protected $UpdateComment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpdateOrderLineIdentification
     */
    public function getUpdateOrderLineIdentification()
    {
      return $this->UpdateOrderLineIdentification;
    }

    /**
     * @param UpdateOrderLineIdentification $UpdateOrderLineIdentification
     * @return \Ongoing\UpdateOrderLine
     */
    public function setUpdateOrderLineIdentification($UpdateOrderLineIdentification)
    {
      $this->UpdateOrderLineIdentification = $UpdateOrderLineIdentification;
      return $this;
    }

    /**
     * @return UpdateOrderLineReportedNumberOfItems
     */
    public function getUpdateReportedNumberOfItems()
    {
      return $this->UpdateReportedNumberOfItems;
    }

    /**
     * @param UpdateOrderLineReportedNumberOfItems $UpdateReportedNumberOfItems
     * @return \Ongoing\UpdateOrderLine
     */
    public function setUpdateReportedNumberOfItems($UpdateReportedNumberOfItems)
    {
      $this->UpdateReportedNumberOfItems = $UpdateReportedNumberOfItems;
      return $this;
    }

    /**
     * @return UpdateOrderLineComment
     */
    public function getUpdateComment()
    {
      return $this->UpdateComment;
    }

    /**
     * @param UpdateOrderLineComment $UpdateComment
     * @return \Ongoing\UpdateOrderLine
     */
    public function setUpdateComment($UpdateComment)
    {
      $this->UpdateComment = $UpdateComment;
      return $this;
    }

}
