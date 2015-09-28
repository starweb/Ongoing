<?php

namespace Ongoing;

class UpdateOrderLines
{

    /**
     * @var UpdateOrderIdentification $UpdateOrderIdentification
     */
    protected $UpdateOrderIdentification = null;

    /**
     * @var ArrayOfUpdateOrderLine $OrderLines
     */
    protected $OrderLines = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpdateOrderIdentification
     */
    public function getUpdateOrderIdentification()
    {
      return $this->UpdateOrderIdentification;
    }

    /**
     * @param UpdateOrderIdentification $UpdateOrderIdentification
     * @return \Ongoing\UpdateOrderLines
     */
    public function setUpdateOrderIdentification($UpdateOrderIdentification)
    {
      $this->UpdateOrderIdentification = $UpdateOrderIdentification;
      return $this;
    }

    /**
     * @return ArrayOfUpdateOrderLine
     */
    public function getOrderLines()
    {
      return $this->OrderLines;
    }

    /**
     * @param ArrayOfUpdateOrderLine $OrderLines
     * @return \Ongoing\UpdateOrderLines
     */
    public function setOrderLines($OrderLines)
    {
      $this->OrderLines = $OrderLines;
      return $this;
    }

}
