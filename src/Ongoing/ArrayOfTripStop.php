<?php

namespace Ongoing;

class ArrayOfTripStop
{

    /**
     * @var TripStop[] $TripStop
     */
    protected $TripStop = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TripStop[]
     */
    public function getTripStop()
    {
      return $this->TripStop;
    }

    /**
     * @param TripStop[] $TripStop
     * @return \Ongoing\ArrayOfTripStop
     */
    public function setTripStop(array $TripStop = null)
    {
      $this->TripStop = $TripStop;
      return $this;
    }

}
