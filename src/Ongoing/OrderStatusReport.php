<?php

namespace Ongoing;

class OrderStatusReport
{

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @var \DateTime $PickingTime
     */
    protected $PickingTime = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $GoodsOwnerReferenceNumber
     */
    protected $GoodsOwnerReferenceNumber = null;

    /**
     * @var int $OrderStatusNumber
     */
    protected $OrderStatusNumber = null;

    /**
     * @var string $OrderStatusText
     */
    protected $OrderStatusText = null;

    /**
     * @var boolean $OrderStatusIsPicked
     */
    protected $OrderStatusIsPicked = null;

    /**
     * @var boolean $OrderStatusIsDelivered
     */
    protected $OrderStatusIsDelivered = null;

    /**
     * @var float $OrderedNumberOfItems
     */
    protected $OrderedNumberOfItems = null;

    /**
     * @var float $PickedNumberOfItems
     */
    protected $PickedNumberOfItems = null;

    /**
     * @param int $OrderId
     * @param int $GoodsOwnerId
     * @param \DateTime $DeliveryDate
     * @param int $OrderStatusNumber
     * @param boolean $OrderStatusIsPicked
     * @param boolean $OrderStatusIsDelivered
     * @param float $OrderedNumberOfItems
     * @param float $PickedNumberOfItems
     */
    public function __construct($OrderId, $GoodsOwnerId, \DateTime $DeliveryDate, $OrderStatusNumber, $OrderStatusIsPicked, $OrderStatusIsDelivered, $OrderedNumberOfItems, $PickedNumberOfItems)
    {
      $this->OrderId = $OrderId;
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      $this->OrderStatusNumber = $OrderStatusNumber;
      $this->OrderStatusIsPicked = $OrderStatusIsPicked;
      $this->OrderStatusIsDelivered = $OrderStatusIsDelivered;
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
      $this->PickedNumberOfItems = $PickedNumberOfItems;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return \Ongoing\OrderStatusReport
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getGoodsOwnerId()
    {
      return $this->GoodsOwnerId;
    }

    /**
     * @param int $GoodsOwnerId
     * @return \Ongoing\OrderStatusReport
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderNumber()
    {
      return $this->GoodsOwnerOrderNumber;
    }

    /**
     * @param string $GoodsOwnerOrderNumber
     * @return \Ongoing\OrderStatusReport
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickingTime()
    {
      if ($this->PickingTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PickingTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PickingTime
     * @return \Ongoing\OrderStatusReport
     */
    public function setPickingTime(\DateTime $PickingTime = null)
    {
      if ($PickingTime == null) {
       $this->PickingTime = null;
      } else {
        $this->PickingTime = $PickingTime->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \Ongoing\OrderStatusReport
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerReferenceNumber()
    {
      return $this->GoodsOwnerReferenceNumber;
    }

    /**
     * @param string $GoodsOwnerReferenceNumber
     * @return \Ongoing\OrderStatusReport
     */
    public function setGoodsOwnerReferenceNumber($GoodsOwnerReferenceNumber)
    {
      $this->GoodsOwnerReferenceNumber = $GoodsOwnerReferenceNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatusNumber()
    {
      return $this->OrderStatusNumber;
    }

    /**
     * @param int $OrderStatusNumber
     * @return \Ongoing\OrderStatusReport
     */
    public function setOrderStatusNumber($OrderStatusNumber)
    {
      $this->OrderStatusNumber = $OrderStatusNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatusText()
    {
      return $this->OrderStatusText;
    }

    /**
     * @param string $OrderStatusText
     * @return \Ongoing\OrderStatusReport
     */
    public function setOrderStatusText($OrderStatusText)
    {
      $this->OrderStatusText = $OrderStatusText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOrderStatusIsPicked()
    {
      return $this->OrderStatusIsPicked;
    }

    /**
     * @param boolean $OrderStatusIsPicked
     * @return \Ongoing\OrderStatusReport
     */
    public function setOrderStatusIsPicked($OrderStatusIsPicked)
    {
      $this->OrderStatusIsPicked = $OrderStatusIsPicked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOrderStatusIsDelivered()
    {
      return $this->OrderStatusIsDelivered;
    }

    /**
     * @param boolean $OrderStatusIsDelivered
     * @return \Ongoing\OrderStatusReport
     */
    public function setOrderStatusIsDelivered($OrderStatusIsDelivered)
    {
      $this->OrderStatusIsDelivered = $OrderStatusIsDelivered;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrderedNumberOfItems()
    {
      return $this->OrderedNumberOfItems;
    }

    /**
     * @param float $OrderedNumberOfItems
     * @return \Ongoing\OrderStatusReport
     */
    public function setOrderedNumberOfItems($OrderedNumberOfItems)
    {
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getPickedNumberOfItems()
    {
      return $this->PickedNumberOfItems;
    }

    /**
     * @param float $PickedNumberOfItems
     * @return \Ongoing\OrderStatusReport
     */
    public function setPickedNumberOfItems($PickedNumberOfItems)
    {
      $this->PickedNumberOfItems = $PickedNumberOfItems;
      return $this;
    }

}
