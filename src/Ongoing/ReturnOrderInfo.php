<?php

namespace Ongoing;

class ReturnOrderInfo
{

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var int $ReturnOrderId
     */
    protected $ReturnOrderId = null;

    /**
     * @var string $ReturnOrderNumber
     */
    protected $ReturnOrderNumber = null;

    /**
     * @var string $ReturnOrderComment
     */
    protected $ReturnOrderComment = null;

    /**
     * @var \DateTime $ReturnInDate
     */
    protected $ReturnInDate = null;

    /**
     * @var string $ReturnCauseCode
     */
    protected $ReturnCauseCode = null;

    /**
     * @var string $ReturnCauseName
     */
    protected $ReturnCauseName = null;

    /**
     * @var int $ReturnCauseId
     */
    protected $ReturnCauseId = null;

    /**
     * @var ArrayOfReturnOrderLineInfo $ReturnOrderLines
     */
    protected $ReturnOrderLines = null;

    /**
     * @param int $OrderId
     * @param int $ReturnOrderId
     */
    public function __construct($OrderId, $ReturnOrderId)
    {
      $this->OrderId = $OrderId;
      $this->ReturnOrderId = $ReturnOrderId;
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
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
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
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setReturnOrderId($ReturnOrderId)
    {
      $this->ReturnOrderId = $ReturnOrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnOrderNumber()
    {
      return $this->ReturnOrderNumber;
    }

    /**
     * @param string $ReturnOrderNumber
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setReturnOrderNumber($ReturnOrderNumber)
    {
      $this->ReturnOrderNumber = $ReturnOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnOrderComment()
    {
      return $this->ReturnOrderComment;
    }

    /**
     * @param string $ReturnOrderComment
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setReturnOrderComment($ReturnOrderComment)
    {
      $this->ReturnOrderComment = $ReturnOrderComment;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReturnInDate()
    {
      if ($this->ReturnInDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReturnInDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReturnInDate
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setReturnInDate(\DateTime $ReturnInDate = null)
    {
      if ($ReturnInDate == null) {
       $this->ReturnInDate = null;
      } else {
        $this->ReturnInDate = $ReturnInDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCauseCode()
    {
      return $this->ReturnCauseCode;
    }

    /**
     * @param string $ReturnCauseCode
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setReturnCauseCode($ReturnCauseCode)
    {
      $this->ReturnCauseCode = $ReturnCauseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCauseName()
    {
      return $this->ReturnCauseName;
    }

    /**
     * @param string $ReturnCauseName
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setReturnCauseName($ReturnCauseName)
    {
      $this->ReturnCauseName = $ReturnCauseName;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnCauseId()
    {
      return $this->ReturnCauseId;
    }

    /**
     * @param int $ReturnCauseId
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setReturnCauseId($ReturnCauseId)
    {
      $this->ReturnCauseId = $ReturnCauseId;
      return $this;
    }

    /**
     * @return ArrayOfReturnOrderLineInfo
     */
    public function getReturnOrderLines()
    {
      return $this->ReturnOrderLines;
    }

    /**
     * @param ArrayOfReturnOrderLineInfo $ReturnOrderLines
     * @return \Ongoing\ReturnOrderInfo
     */
    public function setReturnOrderLines($ReturnOrderLines)
    {
      $this->ReturnOrderLines = $ReturnOrderLines;
      return $this;
    }

}
