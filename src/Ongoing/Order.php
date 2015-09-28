<?php

namespace Ongoing;

class Order
{

    /**
     * @var string $MessageId
     */
    protected $MessageId = null;

    /**
     * @var Consignee $Consignee
     */
    protected $Consignee = null;

    /**
     * @var Consignor $Consignor
     */
    protected $Consignor = null;

    /**
     * @var GoodsOwnerInfo $GoodsOwnerInfo
     */
    protected $GoodsOwnerInfo = null;

    /**
     * @var TransportPayer $TransportPayer
     */
    protected $TransportPayer = null;

    /**
     * @var Financial $Financial
     */
    protected $Financial = null;

    /**
     * @var GoodsInfo $GoodsInfo
     */
    protected $GoodsInfo = null;

    /**
     * @var OrderInfoType $OrderInfo
     */
    protected $OrderInfo = null;

    /**
     * @var CommunicationInfo $CommunicationInfo
     */
    protected $CommunicationInfo = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var ArrayOfGoodsItem $GoodsItems
     */
    protected $GoodsItems = null;

    /**
     * @var ArrayOfPickedOrderLine $PickedOrderLines
     */
    protected $PickedOrderLines = null;

    /**
     * @var ArrayOfPickedArticleItem $PickedArticleItems
     */
    protected $PickedArticleItems = null;

    /**
     * @var TransporterClass $Transporter
     */
    protected $Transporter = null;

    /**
     * @var WsiSystem $WsiSystem
     */
    protected $WsiSystem = null;

    /**
     * @var ArrayOfOrderPalletItemInfo $OrderPalletItems
     */
    protected $OrderPalletItems = null;

    /**
     * @var int $ExternalSystemId
     */
    protected $ExternalSystemId = null;

    /**
     * @param boolean $Success
     * @param int $ExternalSystemId
     */
    public function __construct($Success, $ExternalSystemId)
    {
      $this->Success = $Success;
      $this->ExternalSystemId = $ExternalSystemId;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param string $MessageId
     * @return \Ongoing\Order
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return Consignee
     */
    public function getConsignee()
    {
      return $this->Consignee;
    }

    /**
     * @param Consignee $Consignee
     * @return \Ongoing\Order
     */
    public function setConsignee($Consignee)
    {
      $this->Consignee = $Consignee;
      return $this;
    }

    /**
     * @return Consignor
     */
    public function getConsignor()
    {
      return $this->Consignor;
    }

    /**
     * @param Consignor $Consignor
     * @return \Ongoing\Order
     */
    public function setConsignor($Consignor)
    {
      $this->Consignor = $Consignor;
      return $this;
    }

    /**
     * @return GoodsOwnerInfo
     */
    public function getGoodsOwnerInfo()
    {
      return $this->GoodsOwnerInfo;
    }

    /**
     * @param GoodsOwnerInfo $GoodsOwnerInfo
     * @return \Ongoing\Order
     */
    public function setGoodsOwnerInfo($GoodsOwnerInfo)
    {
      $this->GoodsOwnerInfo = $GoodsOwnerInfo;
      return $this;
    }

    /**
     * @return TransportPayer
     */
    public function getTransportPayer()
    {
      return $this->TransportPayer;
    }

    /**
     * @param TransportPayer $TransportPayer
     * @return \Ongoing\Order
     */
    public function setTransportPayer($TransportPayer)
    {
      $this->TransportPayer = $TransportPayer;
      return $this;
    }

    /**
     * @return Financial
     */
    public function getFinancial()
    {
      return $this->Financial;
    }

    /**
     * @param Financial $Financial
     * @return \Ongoing\Order
     */
    public function setFinancial($Financial)
    {
      $this->Financial = $Financial;
      return $this;
    }

    /**
     * @return GoodsInfo
     */
    public function getGoodsInfo()
    {
      return $this->GoodsInfo;
    }

    /**
     * @param GoodsInfo $GoodsInfo
     * @return \Ongoing\Order
     */
    public function setGoodsInfo($GoodsInfo)
    {
      $this->GoodsInfo = $GoodsInfo;
      return $this;
    }

    /**
     * @return OrderInfoType
     */
    public function getOrderInfo()
    {
      return $this->OrderInfo;
    }

    /**
     * @param OrderInfoType $OrderInfo
     * @return \Ongoing\Order
     */
    public function setOrderInfo($OrderInfo)
    {
      $this->OrderInfo = $OrderInfo;
      return $this;
    }

    /**
     * @return CommunicationInfo
     */
    public function getCommunicationInfo()
    {
      return $this->CommunicationInfo;
    }

    /**
     * @param CommunicationInfo $CommunicationInfo
     * @return \Ongoing\Order
     */
    public function setCommunicationInfo($CommunicationInfo)
    {
      $this->CommunicationInfo = $CommunicationInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \Ongoing\Order
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return ArrayOfGoodsItem
     */
    public function getGoodsItems()
    {
      return $this->GoodsItems;
    }

    /**
     * @param ArrayOfGoodsItem $GoodsItems
     * @return \Ongoing\Order
     */
    public function setGoodsItems($GoodsItems)
    {
      $this->GoodsItems = $GoodsItems;
      return $this;
    }

    /**
     * @return ArrayOfPickedOrderLine
     */
    public function getPickedOrderLines()
    {
      return $this->PickedOrderLines;
    }

    /**
     * @param ArrayOfPickedOrderLine $PickedOrderLines
     * @return \Ongoing\Order
     */
    public function setPickedOrderLines($PickedOrderLines)
    {
      $this->PickedOrderLines = $PickedOrderLines;
      return $this;
    }

    /**
     * @return ArrayOfPickedArticleItem
     */
    public function getPickedArticleItems()
    {
      return $this->PickedArticleItems;
    }

    /**
     * @param ArrayOfPickedArticleItem $PickedArticleItems
     * @return \Ongoing\Order
     */
    public function setPickedArticleItems($PickedArticleItems)
    {
      $this->PickedArticleItems = $PickedArticleItems;
      return $this;
    }

    /**
     * @return TransporterClass
     */
    public function getTransporter()
    {
      return $this->Transporter;
    }

    /**
     * @param TransporterClass $Transporter
     * @return \Ongoing\Order
     */
    public function setTransporter($Transporter)
    {
      $this->Transporter = $Transporter;
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
     * @return \Ongoing\Order
     */
    public function setWsiSystem($WsiSystem)
    {
      $this->WsiSystem = $WsiSystem;
      return $this;
    }

    /**
     * @return ArrayOfOrderPalletItemInfo
     */
    public function getOrderPalletItems()
    {
      return $this->OrderPalletItems;
    }

    /**
     * @param ArrayOfOrderPalletItemInfo $OrderPalletItems
     * @return \Ongoing\Order
     */
    public function setOrderPalletItems($OrderPalletItems)
    {
      $this->OrderPalletItems = $OrderPalletItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalSystemId()
    {
      return $this->ExternalSystemId;
    }

    /**
     * @param int $ExternalSystemId
     * @return \Ongoing\Order
     */
    public function setExternalSystemId($ExternalSystemId)
    {
      $this->ExternalSystemId = $ExternalSystemId;
      return $this;
    }

}
