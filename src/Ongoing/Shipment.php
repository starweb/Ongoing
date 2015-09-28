<?php

namespace Ongoing;

class Shipment
{

    /**
     * @var GoodsOwner $GoodsOwner
     */
    protected $GoodsOwner = null;

    /**
     * @var ShipmentHeader $ShipmentHeader
     */
    protected $ShipmentHeader = null;

    /**
     * @var ArrayOfShipmentContainer $ShipmentContainers
     */
    protected $ShipmentContainers = null;

    /**
     * @var ArrayOfShipmentContainerItem $ShipmentContainerItems
     */
    protected $ShipmentContainerItems = null;

    /**
     * @var ShipmentConsignee $Consignee
     */
    protected $Consignee = null;

    /**
     * @var ShipmentConsignor $Consignor
     */
    protected $Consignor = null;

    /**
     * @var ShipmentDestination $Destination
     */
    protected $Destination = null;

    /**
     * @var ArrayOfShipmentAddress $ShipmentAddresses
     */
    protected $ShipmentAddresses = null;

    /**
     * @var Supplier $ShipmentSupplier
     */
    protected $ShipmentSupplier = null;

    /**
     * @var ShipmentPayment $ShipmentPayment
     */
    protected $ShipmentPayment = null;

    
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
     * @return \Ongoing\Shipment
     */
    public function setGoodsOwner($GoodsOwner)
    {
      $this->GoodsOwner = $GoodsOwner;
      return $this;
    }

    /**
     * @return ShipmentHeader
     */
    public function getShipmentHeader()
    {
      return $this->ShipmentHeader;
    }

    /**
     * @param ShipmentHeader $ShipmentHeader
     * @return \Ongoing\Shipment
     */
    public function setShipmentHeader($ShipmentHeader)
    {
      $this->ShipmentHeader = $ShipmentHeader;
      return $this;
    }

    /**
     * @return ArrayOfShipmentContainer
     */
    public function getShipmentContainers()
    {
      return $this->ShipmentContainers;
    }

    /**
     * @param ArrayOfShipmentContainer $ShipmentContainers
     * @return \Ongoing\Shipment
     */
    public function setShipmentContainers($ShipmentContainers)
    {
      $this->ShipmentContainers = $ShipmentContainers;
      return $this;
    }

    /**
     * @return ArrayOfShipmentContainerItem
     */
    public function getShipmentContainerItems()
    {
      return $this->ShipmentContainerItems;
    }

    /**
     * @param ArrayOfShipmentContainerItem $ShipmentContainerItems
     * @return \Ongoing\Shipment
     */
    public function setShipmentContainerItems($ShipmentContainerItems)
    {
      $this->ShipmentContainerItems = $ShipmentContainerItems;
      return $this;
    }

    /**
     * @return ShipmentConsignee
     */
    public function getConsignee()
    {
      return $this->Consignee;
    }

    /**
     * @param ShipmentConsignee $Consignee
     * @return \Ongoing\Shipment
     */
    public function setConsignee($Consignee)
    {
      $this->Consignee = $Consignee;
      return $this;
    }

    /**
     * @return ShipmentConsignor
     */
    public function getConsignor()
    {
      return $this->Consignor;
    }

    /**
     * @param ShipmentConsignor $Consignor
     * @return \Ongoing\Shipment
     */
    public function setConsignor($Consignor)
    {
      $this->Consignor = $Consignor;
      return $this;
    }

    /**
     * @return ShipmentDestination
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param ShipmentDestination $Destination
     * @return \Ongoing\Shipment
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return ArrayOfShipmentAddress
     */
    public function getShipmentAddresses()
    {
      return $this->ShipmentAddresses;
    }

    /**
     * @param ArrayOfShipmentAddress $ShipmentAddresses
     * @return \Ongoing\Shipment
     */
    public function setShipmentAddresses($ShipmentAddresses)
    {
      $this->ShipmentAddresses = $ShipmentAddresses;
      return $this;
    }

    /**
     * @return Supplier
     */
    public function getShipmentSupplier()
    {
      return $this->ShipmentSupplier;
    }

    /**
     * @param Supplier $ShipmentSupplier
     * @return \Ongoing\Shipment
     */
    public function setShipmentSupplier($ShipmentSupplier)
    {
      $this->ShipmentSupplier = $ShipmentSupplier;
      return $this;
    }

    /**
     * @return ShipmentPayment
     */
    public function getShipmentPayment()
    {
      return $this->ShipmentPayment;
    }

    /**
     * @param ShipmentPayment $ShipmentPayment
     * @return \Ongoing\Shipment
     */
    public function setShipmentPayment($ShipmentPayment)
    {
      $this->ShipmentPayment = $ShipmentPayment;
      return $this;
    }

}
