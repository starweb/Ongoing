<?php

namespace Ongoing;

class ReturnOrder
{

    /**
     * @var ReturnCustomerOrderIdentificationType $ReturnCustomerOrderIdentification
     */
    protected $ReturnCustomerOrderIdentification = null;

    /**
     * @var ReturnOrderIdentificationType $ReturnOrderIdentification
     */
    protected $ReturnOrderIdentification = null;

    /**
     * @var ReturnCause $ReturnCause
     */
    protected $ReturnCause = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var string $CustomerOrderNumber
     */
    protected $CustomerOrderNumber = null;

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
     * @var ArrayOfReturnOrderLine $ReturnOrderLines
     */
    protected $ReturnOrderLines = null;

    /**
     * @param ReturnCustomerOrderIdentificationType $ReturnCustomerOrderIdentification
     * @param ReturnOrderIdentificationType $ReturnOrderIdentification
     */
    public function __construct($ReturnCustomerOrderIdentification, $ReturnOrderIdentification)
    {
      $this->ReturnCustomerOrderIdentification = $ReturnCustomerOrderIdentification;
      $this->ReturnOrderIdentification = $ReturnOrderIdentification;
    }

    /**
     * @return ReturnCustomerOrderIdentificationType
     */
    public function getReturnCustomerOrderIdentification()
    {
      return $this->ReturnCustomerOrderIdentification;
    }

    /**
     * @param ReturnCustomerOrderIdentificationType $ReturnCustomerOrderIdentification
     * @return \Ongoing\ReturnOrder
     */
    public function setReturnCustomerOrderIdentification($ReturnCustomerOrderIdentification)
    {
      $this->ReturnCustomerOrderIdentification = $ReturnCustomerOrderIdentification;
      return $this;
    }

    /**
     * @return ReturnOrderIdentificationType
     */
    public function getReturnOrderIdentification()
    {
      return $this->ReturnOrderIdentification;
    }

    /**
     * @param ReturnOrderIdentificationType $ReturnOrderIdentification
     * @return \Ongoing\ReturnOrder
     */
    public function setReturnOrderIdentification($ReturnOrderIdentification)
    {
      $this->ReturnOrderIdentification = $ReturnOrderIdentification;
      return $this;
    }

    /**
     * @return ReturnCause
     */
    public function getReturnCause()
    {
      return $this->ReturnCause;
    }

    /**
     * @param ReturnCause $ReturnCause
     * @return \Ongoing\ReturnOrder
     */
    public function setReturnCause($ReturnCause)
    {
      $this->ReturnCause = $ReturnCause;
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
     * @return \Ongoing\ReturnOrder
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerOrderNumber()
    {
      return $this->CustomerOrderNumber;
    }

    /**
     * @param string $CustomerOrderNumber
     * @return \Ongoing\ReturnOrder
     */
    public function setCustomerOrderNumber($CustomerOrderNumber)
    {
      $this->CustomerOrderNumber = $CustomerOrderNumber;
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
     * @return \Ongoing\ReturnOrder
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
     * @return \Ongoing\ReturnOrder
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
     * @return \Ongoing\ReturnOrder
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
     * @return ArrayOfReturnOrderLine
     */
    public function getReturnOrderLines()
    {
      return $this->ReturnOrderLines;
    }

    /**
     * @param ArrayOfReturnOrderLine $ReturnOrderLines
     * @return \Ongoing\ReturnOrder
     */
    public function setReturnOrderLines($ReturnOrderLines)
    {
      $this->ReturnOrderLines = $ReturnOrderLines;
      return $this;
    }

}
