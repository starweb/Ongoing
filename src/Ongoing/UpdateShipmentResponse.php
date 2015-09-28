<?php

namespace Ongoing;

class UpdateShipmentResponse
{

    /**
     * @var UpdateShipmentResult $UpdateShipmentResult
     */
    protected $UpdateShipmentResult = null;

    /**
     * @param UpdateShipmentResult $UpdateShipmentResult
     */
    public function __construct($UpdateShipmentResult)
    {
      $this->UpdateShipmentResult = $UpdateShipmentResult;
    }

    /**
     * @return UpdateShipmentResult
     */
    public function getUpdateShipmentResult()
    {
      return $this->UpdateShipmentResult;
    }

    /**
     * @param UpdateShipmentResult $UpdateShipmentResult
     * @return \Ongoing\UpdateShipmentResponse
     */
    public function setUpdateShipmentResult($UpdateShipmentResult)
    {
      $this->UpdateShipmentResult = $UpdateShipmentResult;
      return $this;
    }

}
