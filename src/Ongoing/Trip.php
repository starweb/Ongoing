<?php

namespace Ongoing;

class Trip
{

    /**
     * @var GoodsOwner $GoodsOwner
     */
    protected $GoodsOwner = null;

    /**
     * @var TripIdentificationType $TripIdentification
     */
    protected $TripIdentification = null;

    /**
     * @var TripOperationType $TripOperation
     */
    protected $TripOperation = null;

    /**
     * @var TripRoute $TripRoute
     */
    protected $TripRoute = null;

    /**
     * @var string $TripName
     */
    protected $TripName = null;

    /**
     * @var string $TripNumber
     */
    protected $TripNumber = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var ArrayOfTripStop $TripStops
     */
    protected $TripStops = null;

    /**
     * @param TripIdentificationType $TripIdentification
     * @param TripOperationType $TripOperation
     */
    public function __construct($TripIdentification, $TripOperation)
    {
      $this->TripIdentification = $TripIdentification;
      $this->TripOperation = $TripOperation;
    }

    /**
     * @return GoodsOwner
     */
    public function getGoodsOwner()
    {
      return $this->GoodsOwner;
    }

    /**
     * @param GoodsOwner $GoodsOwner
     * @return \Ongoing\Trip
     */
    public function setGoodsOwner($GoodsOwner)
    {
      $this->GoodsOwner = $GoodsOwner;
      return $this;
    }

    /**
     * @return TripIdentificationType
     */
    public function getTripIdentification()
    {
      return $this->TripIdentification;
    }

    /**
     * @param TripIdentificationType $TripIdentification
     * @return \Ongoing\Trip
     */
    public function setTripIdentification($TripIdentification)
    {
      $this->TripIdentification = $TripIdentification;
      return $this;
    }

    /**
     * @return TripOperationType
     */
    public function getTripOperation()
    {
      return $this->TripOperation;
    }

    /**
     * @param TripOperationType $TripOperation
     * @return \Ongoing\Trip
     */
    public function setTripOperation($TripOperation)
    {
      $this->TripOperation = $TripOperation;
      return $this;
    }

    /**
     * @return TripRoute
     */
    public function getTripRoute()
    {
      return $this->TripRoute;
    }

    /**
     * @param TripRoute $TripRoute
     * @return \Ongoing\Trip
     */
    public function setTripRoute($TripRoute)
    {
      $this->TripRoute = $TripRoute;
      return $this;
    }

    /**
     * @return string
     */
    public function getTripName()
    {
      return $this->TripName;
    }

    /**
     * @param string $TripName
     * @return \Ongoing\Trip
     */
    public function setTripName($TripName)
    {
      $this->TripName = $TripName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTripNumber()
    {
      return $this->TripNumber;
    }

    /**
     * @param string $TripNumber
     * @return \Ongoing\Trip
     */
    public function setTripNumber($TripNumber)
    {
      $this->TripNumber = $TripNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \Ongoing\Trip
     */
    public function setStartTime(\DateTime $StartTime = null)
    {
      if ($StartTime == null) {
       $this->StartTime = null;
      } else {
        $this->StartTime = $StartTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfTripStop
     */
    public function getTripStops()
    {
      return $this->TripStops;
    }

    /**
     * @param ArrayOfTripStop $TripStops
     * @return \Ongoing\Trip
     */
    public function setTripStops($TripStops)
    {
      $this->TripStops = $TripStops;
      return $this;
    }

}
