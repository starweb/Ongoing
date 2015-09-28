<?php

namespace Ongoing;

class TripRoute
{

    /**
     * @var string $RouteCode
     */
    protected $RouteCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRouteCode()
    {
      return $this->RouteCode;
    }

    /**
     * @param string $RouteCode
     * @return \Ongoing\TripRoute
     */
    public function setRouteCode($RouteCode)
    {
      $this->RouteCode = $RouteCode;
      return $this;
    }

}
