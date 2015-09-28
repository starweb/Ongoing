<?php

namespace Ongoing;

class UpdateInOrderLines
{

    /**
     * @var UpdateInOrderIdentification $UpdateInOrderIdentification
     */
    protected $UpdateInOrderIdentification = null;

    /**
     * @var ArrayOfUpdateInOrderLine $InOrderLines
     */
    protected $InOrderLines = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpdateInOrderIdentification
     */
    public function getUpdateInOrderIdentification()
    {
      return $this->UpdateInOrderIdentification;
    }

    /**
     * @param UpdateInOrderIdentification $UpdateInOrderIdentification
     * @return \Ongoing\UpdateInOrderLines
     */
    public function setUpdateInOrderIdentification($UpdateInOrderIdentification)
    {
      $this->UpdateInOrderIdentification = $UpdateInOrderIdentification;
      return $this;
    }

    /**
     * @return ArrayOfUpdateInOrderLine
     */
    public function getInOrderLines()
    {
      return $this->InOrderLines;
    }

    /**
     * @param ArrayOfUpdateInOrderLine $InOrderLines
     * @return \Ongoing\UpdateInOrderLines
     */
    public function setInOrderLines($InOrderLines)
    {
      $this->InOrderLines = $InOrderLines;
      return $this;
    }

}
