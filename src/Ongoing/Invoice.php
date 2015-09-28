<?php

namespace Ongoing;

class Invoice
{

    /**
     * @var GoodsOwner $GoodsOwner
     */
    protected $GoodsOwner = null;

    /**
     * @var ArrayOfInvoiceRow $InvoiceRows
     */
    protected $InvoiceRows = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var int $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var \DateTime $InvoicePeriodStart
     */
    protected $InvoicePeriodStart = null;

    /**
     * @var \DateTime $InvoicePeriodEnd
     */
    protected $InvoicePeriodEnd = null;

    /**
     * @var float $InvoiceAmount
     */
    protected $InvoiceAmount = null;

    /**
     * @var boolean $IsExported
     */
    protected $IsExported = null;

    /**
     * @var int $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var string $InvoiceYourOrderNumber
     */
    protected $InvoiceYourOrderNumber = null;

    /**
     * @var string $InvoiceYourReference
     */
    protected $InvoiceYourReference = null;

    /**
     * @var int $PayerOrganisationId
     */
    protected $PayerOrganisationId = null;

    /**
     * @param int $InvoiceId
     * @param \DateTime $InvoiceDate
     * @param float $InvoiceAmount
     * @param boolean $IsExported
     */
    public function __construct($InvoiceId, \DateTime $InvoiceDate, $InvoiceAmount, $IsExported)
    {
      $this->InvoiceId = $InvoiceId;
      $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      $this->InvoiceAmount = $InvoiceAmount;
      $this->IsExported = $IsExported;
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
     * @return \Ongoing\Invoice
     */
    public function setGoodsOwner($GoodsOwner)
    {
      $this->GoodsOwner = $GoodsOwner;
      return $this;
    }

    /**
     * @return ArrayOfInvoiceRow
     */
    public function getInvoiceRows()
    {
      return $this->InvoiceRows;
    }

    /**
     * @param ArrayOfInvoiceRow $InvoiceRows
     * @return \Ongoing\Invoice
     */
    public function setInvoiceRows($InvoiceRows)
    {
      $this->InvoiceRows = $InvoiceRows;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \Ongoing\Invoice
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param int $InvoiceId
     * @return \Ongoing\Invoice
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \Ongoing\Invoice
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
      if ($this->InvoiceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDate
     * @return \Ongoing\Invoice
     */
    public function setInvoiceDate(\DateTime $InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoicePeriodStart()
    {
      if ($this->InvoicePeriodStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoicePeriodStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoicePeriodStart
     * @return \Ongoing\Invoice
     */
    public function setInvoicePeriodStart(\DateTime $InvoicePeriodStart = null)
    {
      if ($InvoicePeriodStart == null) {
       $this->InvoicePeriodStart = null;
      } else {
        $this->InvoicePeriodStart = $InvoicePeriodStart->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoicePeriodEnd()
    {
      if ($this->InvoicePeriodEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoicePeriodEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoicePeriodEnd
     * @return \Ongoing\Invoice
     */
    public function setInvoicePeriodEnd(\DateTime $InvoicePeriodEnd = null)
    {
      if ($InvoicePeriodEnd == null) {
       $this->InvoicePeriodEnd = null;
      } else {
        $this->InvoicePeriodEnd = $InvoicePeriodEnd->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getInvoiceAmount()
    {
      return $this->InvoiceAmount;
    }

    /**
     * @param float $InvoiceAmount
     * @return \Ongoing\Invoice
     */
    public function setInvoiceAmount($InvoiceAmount)
    {
      $this->InvoiceAmount = $InvoiceAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExported()
    {
      return $this->IsExported;
    }

    /**
     * @param boolean $IsExported
     * @return \Ongoing\Invoice
     */
    public function setIsExported($IsExported)
    {
      $this->IsExported = $IsExported;
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
     * @return \Ongoing\Invoice
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceYourOrderNumber()
    {
      return $this->InvoiceYourOrderNumber;
    }

    /**
     * @param string $InvoiceYourOrderNumber
     * @return \Ongoing\Invoice
     */
    public function setInvoiceYourOrderNumber($InvoiceYourOrderNumber)
    {
      $this->InvoiceYourOrderNumber = $InvoiceYourOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceYourReference()
    {
      return $this->InvoiceYourReference;
    }

    /**
     * @param string $InvoiceYourReference
     * @return \Ongoing\Invoice
     */
    public function setInvoiceYourReference($InvoiceYourReference)
    {
      $this->InvoiceYourReference = $InvoiceYourReference;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayerOrganisationId()
    {
      return $this->PayerOrganisationId;
    }

    /**
     * @param int $PayerOrganisationId
     * @return \Ongoing\Invoice
     */
    public function setPayerOrganisationId($PayerOrganisationId)
    {
      $this->PayerOrganisationId = $PayerOrganisationId;
      return $this;
    }

}
