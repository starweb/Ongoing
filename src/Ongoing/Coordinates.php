<?php

namespace Ongoing;

class Coordinates
{

    /**
     * @var float $Longitude
     */
    protected $Longitude = null;

    /**
     * @var float $Latitude
     */
    protected $Latitude = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param float $Longitude
     * @return \Ongoing\Coordinates
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param float $Latitude
     * @return \Ongoing\Coordinates
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

}
