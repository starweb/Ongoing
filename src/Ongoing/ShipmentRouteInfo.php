<?php

namespace Ongoing;

class ShipmentRouteInfo
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
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
     * @return \Ongoing\ShipmentRouteInfo
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
     * @return \Ongoing\ShipmentRouteInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
