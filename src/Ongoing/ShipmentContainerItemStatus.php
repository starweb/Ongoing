<?php

namespace Ongoing;

class ShipmentContainerItemStatus
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    
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
     * @return \Ongoing\ShipmentContainerItemStatus
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
