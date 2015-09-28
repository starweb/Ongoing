<?php

namespace Ongoing;

class UpdateOrder
{

    /**
     * @var OrderUpdateIdentification $OrderUpdateIdentification
     */
    protected $OrderUpdateIdentification = null;

    /**
     * @var UpdateOrderStatus $UpdateOrderStatus
     */
    protected $UpdateOrderStatus = null;

    /**
     * @var UpdateOrderDeliveryDate $UpdateOrderDeliveryDate
     */
    protected $UpdateOrderDeliveryDate = null;

    /**
     * @var UpdateOrderGoodsOwnerOrderNumber $UpdateOrderGoodsOwnerOrderNumber
     */
    protected $UpdateOrderGoodsOwnerOrderNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderUpdateIdentification
     */
    public function getOrderUpdateIdentification()
    {
      return $this->OrderUpdateIdentification;
    }

    /**
     * @param OrderUpdateIdentification $OrderUpdateIdentification
     * @return \Ongoing\UpdateOrder
     */
    public function setOrderUpdateIdentification($OrderUpdateIdentification)
    {
      $this->OrderUpdateIdentification = $OrderUpdateIdentification;
      return $this;
    }

    /**
     * @return UpdateOrderStatus
     */
    public function getUpdateOrderStatus()
    {
      return $this->UpdateOrderStatus;
    }

    /**
     * @param UpdateOrderStatus $UpdateOrderStatus
     * @return \Ongoing\UpdateOrder
     */
    public function setUpdateOrderStatus($UpdateOrderStatus)
    {
      $this->UpdateOrderStatus = $UpdateOrderStatus;
      return $this;
    }

    /**
     * @return UpdateOrderDeliveryDate
     */
    public function getUpdateOrderDeliveryDate()
    {
      return $this->UpdateOrderDeliveryDate;
    }

    /**
     * @param UpdateOrderDeliveryDate $UpdateOrderDeliveryDate
     * @return \Ongoing\UpdateOrder
     */
    public function setUpdateOrderDeliveryDate($UpdateOrderDeliveryDate)
    {
      $this->UpdateOrderDeliveryDate = $UpdateOrderDeliveryDate;
      return $this;
    }

    /**
     * @return UpdateOrderGoodsOwnerOrderNumber
     */
    public function getUpdateOrderGoodsOwnerOrderNumber()
    {
      return $this->UpdateOrderGoodsOwnerOrderNumber;
    }

    /**
     * @param UpdateOrderGoodsOwnerOrderNumber $UpdateOrderGoodsOwnerOrderNumber
     * @return \Ongoing\UpdateOrder
     */
    public function setUpdateOrderGoodsOwnerOrderNumber($UpdateOrderGoodsOwnerOrderNumber)
    {
      $this->UpdateOrderGoodsOwnerOrderNumber = $UpdateOrderGoodsOwnerOrderNumber;
      return $this;
    }

}
