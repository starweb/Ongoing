<?php

namespace Ongoing;

class ArrayOfUNTunnelCode
{

    /**
     * @var UNTunnelCode[] $UNTunnelCode
     */
    protected $UNTunnelCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UNTunnelCode[]
     */
    public function getUNTunnelCode()
    {
      return $this->UNTunnelCode;
    }

    /**
     * @param UNTunnelCode[] $UNTunnelCode
     * @return \Ongoing\ArrayOfUNTunnelCode
     */
    public function setUNTunnelCode(array $UNTunnelCode = null)
    {
      $this->UNTunnelCode = $UNTunnelCode;
      return $this;
    }

}
