<?php

namespace Ongoing;

class ShipmentInfo
{

    /**
     * @var GoodsOwner $GoodsOwner
     */
    protected $GoodsOwner = null;

    /**
     * @var ShipmentHeaderInfo $ShipmentHeader
     */
    protected $ShipmentHeader = null;

    /**
     * @var ArrayOfShipmentContainerInfo $ShipmentContainers
     */
    protected $ShipmentContainers = null;

    /**
     * @var ArrayOfShipmentContainerItemInfo $ShipmentContainerItems
     */
    protected $ShipmentContainerItems = null;

    /**
     * @var ShipmentConsigneeInfo $Consignee
     */
    protected $Consignee = null;

    /**
     * @var ShipmentConsignorInfo $Consignor
     */
    protected $Consignor = null;

    /**
     * @var ShipmentSupplierInfo $Supplier
     */
    protected $Supplier = null;

    /**
     * @var ShipmentPaymentInfo $ShipmentPayment
     */
    protected $ShipmentPayment = null;

    /**
     * @var ArrayOfReceivedInOrder $InOrders
     */
    protected $InOrders = null;

    /**
     * @var ArrayOfOrder $Orders
     */
    protected $Orders = null;

    /**
     * @var WsiSystem $WsiSystem
     */
    protected $WsiSystem = null;

    
    public function __construct()
    {
    
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
     * @return \Ongoing\ShipmentInfo
     */
    public function setGoodsOwner($GoodsOwner)
    {
      $this->GoodsOwner = $GoodsOwner;
      return $this;
    }

    /**
     * @return ShipmentHeaderInfo
     */
    public function getShipmentHeader()
    {
      return $this->ShipmentHeader;
    }

    /**
     * @param ShipmentHeaderInfo $ShipmentHeader
     * @return \Ongoing\ShipmentInfo
     */
    public function setShipmentHeader($ShipmentHeader)
    {
      $this->ShipmentHeader = $ShipmentHeader;
      return $this;
    }

    /**
     * @return ArrayOfShipmentContainerInfo
     */
    public function getShipmentContainers()
    {
      return $this->ShipmentContainers;
    }

    /**
     * @param ArrayOfShipmentContainerInfo $ShipmentContainers
     * @return \Ongoing\ShipmentInfo
     */
    public function setShipmentContainers($ShipmentContainers)
    {
      $this->ShipmentContainers = $ShipmentContainers;
      return $this;
    }

    /**
     * @return ArrayOfShipmentContainerItemInfo
     */
    public function getShipmentContainerItems()
    {
      return $this->ShipmentContainerItems;
    }

    /**
     * @param ArrayOfShipmentContainerItemInfo $ShipmentContainerItems
     * @return \Ongoing\ShipmentInfo
     */
    public function setShipmentContainerItems($ShipmentContainerItems)
    {
      $this->ShipmentContainerItems = $ShipmentContainerItems;
      return $this;
    }

    /**
     * @return ShipmentConsigneeInfo
     */
    public function getConsignee()
    {
      return $this->Consignee;
    }

    /**
     * @param ShipmentConsigneeInfo $Consignee
     * @return \Ongoing\ShipmentInfo
     */
    public function setConsignee($Consignee)
    {
      $this->Consignee = $Consignee;
      return $this;
    }

    /**
     * @return ShipmentConsignorInfo
     */
    public function getConsignor()
    {
      return $this->Consignor;
    }

    /**
     * @param ShipmentConsignorInfo $Consignor
     * @return \Ongoing\ShipmentInfo
     */
    public function setConsignor($Consignor)
    {
      $this->Consignor = $Consignor;
      return $this;
    }

    /**
     * @return ShipmentSupplierInfo
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param ShipmentSupplierInfo $Supplier
     * @return \Ongoing\ShipmentInfo
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return ShipmentPaymentInfo
     */
    public function getShipmentPayment()
    {
      return $this->ShipmentPayment;
    }

    /**
     * @param ShipmentPaymentInfo $ShipmentPayment
     * @return \Ongoing\ShipmentInfo
     */
    public function setShipmentPayment($ShipmentPayment)
    {
      $this->ShipmentPayment = $ShipmentPayment;
      return $this;
    }

    /**
     * @return ArrayOfReceivedInOrder
     */
    public function getInOrders()
    {
      return $this->InOrders;
    }

    /**
     * @param ArrayOfReceivedInOrder $InOrders
     * @return \Ongoing\ShipmentInfo
     */
    public function setInOrders($InOrders)
    {
      $this->InOrders = $InOrders;
      return $this;
    }

    /**
     * @return ArrayOfOrder
     */
    public function getOrders()
    {
      return $this->Orders;
    }

    /**
     * @param ArrayOfOrder $Orders
     * @return \Ongoing\ShipmentInfo
     */
    public function setOrders($Orders)
    {
      $this->Orders = $Orders;
      return $this;
    }

    /**
     * @return WsiSystem
     */
    public function getWsiSystem()
    {
      return $this->WsiSystem;
    }

    /**
     * @param WsiSystem $WsiSystem
     * @return \Ongoing\ShipmentInfo
     */
    public function setWsiSystem($WsiSystem)
    {
      $this->WsiSystem = $WsiSystem;
      return $this;
    }

}
