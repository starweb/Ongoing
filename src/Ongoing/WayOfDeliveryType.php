<?php

namespace Ongoing;

class WayOfDeliveryType
{

    /**
     * @var WayOfDeliveryTypeOperation $WayOfDeliveryTypeOperation
     */
    protected $WayOfDeliveryTypeOperation = null;

    /**
     * @var WayOfDeliveryTypeIdentification $WayOfDeliveryTypeIdentification
     */
    protected $WayOfDeliveryTypeIdentification = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param WayOfDeliveryTypeOperation $WayOfDeliveryTypeOperation
     * @param WayOfDeliveryTypeIdentification $WayOfDeliveryTypeIdentification
     */
    public function __construct($WayOfDeliveryTypeOperation, $WayOfDeliveryTypeIdentification)
    {
      $this->WayOfDeliveryTypeOperation = $WayOfDeliveryTypeOperation;
      $this->WayOfDeliveryTypeIdentification = $WayOfDeliveryTypeIdentification;
    }

    /**
     * @return WayOfDeliveryTypeOperation
     */
    public function getWayOfDeliveryTypeOperation()
    {
      return $this->WayOfDeliveryTypeOperation;
    }

    /**
     * @param WayOfDeliveryTypeOperation $WayOfDeliveryTypeOperation
     * @return \Ongoing\WayOfDeliveryType
     */
    public function setWayOfDeliveryTypeOperation($WayOfDeliveryTypeOperation)
    {
      $this->WayOfDeliveryTypeOperation = $WayOfDeliveryTypeOperation;
      return $this;
    }

    /**
     * @return WayOfDeliveryTypeIdentification
     */
    public function getWayOfDeliveryTypeIdentification()
    {
      return $this->WayOfDeliveryTypeIdentification;
    }

    /**
     * @param WayOfDeliveryTypeIdentification $WayOfDeliveryTypeIdentification
     * @return \Ongoing\WayOfDeliveryType
     */
    public function setWayOfDeliveryTypeIdentification($WayOfDeliveryTypeIdentification)
    {
      $this->WayOfDeliveryTypeIdentification = $WayOfDeliveryTypeIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Ongoing\WayOfDeliveryType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Ongoing\WayOfDeliveryType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
