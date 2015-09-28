<?php

namespace Ongoing;

class GetShipmentsByQueryResponse
{

    /**
     * @var GetShipmentsResult $GetShipmentsByQueryResult
     */
    protected $GetShipmentsByQueryResult = null;

    /**
     * @param GetShipmentsResult $GetShipmentsByQueryResult
     */
    public function __construct($GetShipmentsByQueryResult)
    {
      $this->GetShipmentsByQueryResult = $GetShipmentsByQueryResult;
    }

    /**
     * @return GetShipmentsResult
     */
    public function getGetShipmentsByQueryResult()
    {
      return $this->GetShipmentsByQueryResult;
    }

    /**
     * @param GetShipmentsResult $GetShipmentsByQueryResult
     * @return \Ongoing\GetShipmentsByQueryResponse
     */
    public function setGetShipmentsByQueryResult($GetShipmentsByQueryResult)
    {
      $this->GetShipmentsByQueryResult = $GetShipmentsByQueryResult;
      return $this;
    }

}
