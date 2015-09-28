<?php

namespace Ongoing;

class LogEvent
{

    /**
     * @var \DateTime $Time
     */
    protected $Time = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var string $Header
     */
    protected $Header = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $FileText
     */
    protected $FileText = null;

    /**
     * @var LogEventType $Type
     */
    protected $Type = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var int $InOrderId
     */
    protected $InOrderId = null;

    /**
     * @var int $ParentMessageLogId
     */
    protected $ParentMessageLogId = null;

    /**
     * @var int $UserId
     */
    protected $UserId = null;

    /**
     * @var int $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var int $TripId
     */
    protected $TripId = null;

    /**
     * @var int $InventoryId
     */
    protected $InventoryId = null;

    /**
     * @var int $LogRowId
     */
    protected $LogRowId = null;

    /**
     * @var int $ReturnOrderId
     */
    protected $ReturnOrderId = null;

    /**
     * @var int $ExternalSystemId
     */
    protected $ExternalSystemId = null;

    /**
     * @var boolean $IsSent
     */
    protected $IsSent = null;

    /**
     * @var int $PalletItemId
     */
    protected $PalletItemId = null;

    /**
     * @param \DateTime $Time
     * @param boolean $Success
     * @param LogEventType $Type
     * @param int $UserId
     */
    public function __construct(\DateTime $Time, $Success, $Type, $UserId)
    {
      $this->Time = $Time->format(\DateTime::ATOM);
      $this->Success = $Success;
      $this->Type = $Type;
      $this->UserId = $UserId;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
      if ($this->Time == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Time);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Time
     * @return \Ongoing\LogEvent
     */
    public function setTime(\DateTime $Time)
    {
      $this->Time = $Time->format(\DateTime::ATOM);
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
     * @return \Ongoing\LogEvent
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param string $Header
     * @return \Ongoing\LogEvent
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Ongoing\LogEvent
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileText()
    {
      return $this->FileText;
    }

    /**
     * @param string $FileText
     * @return \Ongoing\LogEvent
     */
    public function setFileText($FileText)
    {
      $this->FileText = $FileText;
      return $this;
    }

    /**
     * @return LogEventType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param LogEventType $Type
     * @return \Ongoing\LogEvent
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
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
     * @return \Ongoing\LogEvent
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderId()
    {
      return $this->InOrderId;
    }

    /**
     * @param int $InOrderId
     * @return \Ongoing\LogEvent
     */
    public function setInOrderId($InOrderId)
    {
      $this->InOrderId = $InOrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentMessageLogId()
    {
      return $this->ParentMessageLogId;
    }

    /**
     * @param int $ParentMessageLogId
     * @return \Ongoing\LogEvent
     */
    public function setParentMessageLogId($ParentMessageLogId)
    {
      $this->ParentMessageLogId = $ParentMessageLogId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->UserId;
    }

    /**
     * @param int $UserId
     * @return \Ongoing\LogEvent
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentId()
    {
      return $this->ShipmentId;
    }

    /**
     * @param int $ShipmentId
     * @return \Ongoing\LogEvent
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTripId()
    {
      return $this->TripId;
    }

    /**
     * @param int $TripId
     * @return \Ongoing\LogEvent
     */
    public function setTripId($TripId)
    {
      $this->TripId = $TripId;
      return $this;
    }

    /**
     * @return int
     */
    public function getInventoryId()
    {
      return $this->InventoryId;
    }

    /**
     * @param int $InventoryId
     * @return \Ongoing\LogEvent
     */
    public function setInventoryId($InventoryId)
    {
      $this->InventoryId = $InventoryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLogRowId()
    {
      return $this->LogRowId;
    }

    /**
     * @param int $LogRowId
     * @return \Ongoing\LogEvent
     */
    public function setLogRowId($LogRowId)
    {
      $this->LogRowId = $LogRowId;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnOrderId()
    {
      return $this->ReturnOrderId;
    }

    /**
     * @param int $ReturnOrderId
     * @return \Ongoing\LogEvent
     */
    public function setReturnOrderId($ReturnOrderId)
    {
      $this->ReturnOrderId = $ReturnOrderId;
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
     * @return \Ongoing\LogEvent
     */
    public function setExternalSystemId($ExternalSystemId)
    {
      $this->ExternalSystemId = $ExternalSystemId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSent()
    {
      return $this->IsSent;
    }

    /**
     * @param boolean $IsSent
     * @return \Ongoing\LogEvent
     */
    public function setIsSent($IsSent)
    {
      $this->IsSent = $IsSent;
      return $this;
    }

    /**
     * @return int
     */
    public function getPalletItemId()
    {
      return $this->PalletItemId;
    }

    /**
     * @param int $PalletItemId
     * @return \Ongoing\LogEvent
     */
    public function setPalletItemId($PalletItemId)
    {
      $this->PalletItemId = $PalletItemId;
      return $this;
    }

}
