<?php

namespace Ongoing;

class UpdateOrderDeliveryDate
{

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @param \DateTime $DeliveryDate
     */
    public function __construct(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return \Ongoing\UpdateOrderDeliveryDate
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

}
