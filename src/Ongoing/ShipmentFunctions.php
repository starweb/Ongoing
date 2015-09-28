<?php

namespace Ongoing;

class ShipmentFunctions
{

    /**
     * @var boolean $PickUpRouteFromDeliveryPlan
     */
    protected $PickUpRouteFromDeliveryPlan = null;

    /**
     * @var boolean $PickUpTimeWindowFromDeliveryPlan
     */
    protected $PickUpTimeWindowFromDeliveryPlan = null;

    /**
     * @var boolean $PickUpDeliveryDateFromDeliveryPlan
     */
    protected $PickUpDeliveryDateFromDeliveryPlan = null;

    /**
     * @var boolean $PickUpFromLocationFromDeliveryPlan
     */
    protected $PickUpFromLocationFromDeliveryPlan = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getPickUpRouteFromDeliveryPlan()
    {
      return $this->PickUpRouteFromDeliveryPlan;
    }

    /**
     * @param boolean $PickUpRouteFromDeliveryPlan
     * @return \Ongoing\ShipmentFunctions
     */
    public function setPickUpRouteFromDeliveryPlan($PickUpRouteFromDeliveryPlan)
    {
      $this->PickUpRouteFromDeliveryPlan = $PickUpRouteFromDeliveryPlan;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPickUpTimeWindowFromDeliveryPlan()
    {
      return $this->PickUpTimeWindowFromDeliveryPlan;
    }

    /**
     * @param boolean $PickUpTimeWindowFromDeliveryPlan
     * @return \Ongoing\ShipmentFunctions
     */
    public function setPickUpTimeWindowFromDeliveryPlan($PickUpTimeWindowFromDeliveryPlan)
    {
      $this->PickUpTimeWindowFromDeliveryPlan = $PickUpTimeWindowFromDeliveryPlan;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPickUpDeliveryDateFromDeliveryPlan()
    {
      return $this->PickUpDeliveryDateFromDeliveryPlan;
    }

    /**
     * @param boolean $PickUpDeliveryDateFromDeliveryPlan
     * @return \Ongoing\ShipmentFunctions
     */
    public function setPickUpDeliveryDateFromDeliveryPlan($PickUpDeliveryDateFromDeliveryPlan)
    {
      $this->PickUpDeliveryDateFromDeliveryPlan = $PickUpDeliveryDateFromDeliveryPlan;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPickUpFromLocationFromDeliveryPlan()
    {
      return $this->PickUpFromLocationFromDeliveryPlan;
    }

    /**
     * @param boolean $PickUpFromLocationFromDeliveryPlan
     * @return \Ongoing\ShipmentFunctions
     */
    public function setPickUpFromLocationFromDeliveryPlan($PickUpFromLocationFromDeliveryPlan)
    {
      $this->PickUpFromLocationFromDeliveryPlan = $PickUpFromLocationFromDeliveryPlan;
      return $this;
    }

}
