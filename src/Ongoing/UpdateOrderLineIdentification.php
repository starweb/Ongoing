<?php

namespace Ongoing;

class UpdateOrderLineIdentification
{

    /**
     * @var UpdateOrderLineIdentificationType $OrderLineIdentificationType
     */
    protected $OrderLineIdentificationType = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var int $OrderLineId
     */
    protected $OrderLineId = null;

    /**
     * @param UpdateOrderLineIdentificationType $OrderLineIdentificationType
     */
    public function __construct($OrderLineIdentificationType)
    {
      $this->OrderLineIdentificationType = $OrderLineIdentificationType;
    }

    /**
     * @return UpdateOrderLineIdentificationType
     */
    public function getOrderLineIdentificationType()
    {
      return $this->OrderLineIdentificationType;
    }

    /**
     * @param UpdateOrderLineIdentificationType $OrderLineIdentificationType
     * @return \Ongoing\UpdateOrderLineIdentification
     */
    public function setOrderLineIdentificationType($OrderLineIdentificationType)
    {
      $this->OrderLineIdentificationType = $OrderLineIdentificationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderLineCode()
    {
      return $this->ExternalOrderLineCode;
    }

    /**
     * @param string $ExternalOrderLineCode
     * @return \Ongoing\UpdateOrderLineIdentification
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderLineId()
    {
      return $this->OrderLineId;
    }

    /**
     * @param int $OrderLineId
     * @return \Ongoing\UpdateOrderLineIdentification
     */
    public function setOrderLineId($OrderLineId)
    {
      $this->OrderLineId = $OrderLineId;
      return $this;
    }

}
