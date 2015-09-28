<?php

namespace Ongoing;

class UpdateInOrder
{

    /**
     * @var InOrderUpdateIdentification $InOrderUpdateIdentification
     */
    protected $InOrderUpdateIdentification = null;

    /**
     * @var UpdateInOrderStatus $UpdateInOrderStatus
     */
    protected $UpdateInOrderStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InOrderUpdateIdentification
     */
    public function getInOrderUpdateIdentification()
    {
      return $this->InOrderUpdateIdentification;
    }

    /**
     * @param InOrderUpdateIdentification $InOrderUpdateIdentification
     * @return \Ongoing\UpdateInOrder
     */
    public function setInOrderUpdateIdentification($InOrderUpdateIdentification)
    {
      $this->InOrderUpdateIdentification = $InOrderUpdateIdentification;
      return $this;
    }

    /**
     * @return UpdateInOrderStatus
     */
    public function getUpdateInOrderStatus()
    {
      return $this->UpdateInOrderStatus;
    }

    /**
     * @param UpdateInOrderStatus $UpdateInOrderStatus
     * @return \Ongoing\UpdateInOrder
     */
    public function setUpdateInOrderStatus($UpdateInOrderStatus)
    {
      $this->UpdateInOrderStatus = $UpdateInOrderStatus;
      return $this;
    }

}
