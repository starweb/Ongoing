<?php

namespace Ongoing;

class GoodsOwnerInvoice
{

    /**
     * @var GoodsOwnerInvoiceIdentification $GoodsOwnerInvoiceIdentification
     */
    protected $GoodsOwnerInvoiceIdentification = null;

    /**
     * @var GoodsOwnerInvoiceOperation $GoodsOwnerInvoiceOperation
     */
    protected $GoodsOwnerInvoiceOperation = null;

    /**
     * @var GoodsOwner $GoodsOwner
     */
    protected $GoodsOwner = null;

    /**
     * @var ArrayOfGoodsOwnerInvoiceRow $InvoiceRows
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
     * @var boolean $IsExported
     */
    protected $IsExported = null;

    /**
     * @var string $InvoiceYourOrderNumber
     */
    protected $InvoiceYourOrderNumber = null;

    /**
     * @var string $InvoiceYourReference
     */
    protected $InvoiceYourReference = null;

    /**
     * @param GoodsOwnerInvoiceIdentification $GoodsOwnerInvoiceIdentification
     * @param GoodsOwnerInvoiceOperation $GoodsOwnerInvoiceOperation
     * @param int $InvoiceId
     */
    public function __construct($GoodsOwnerInvoiceIdentification, $GoodsOwnerInvoiceOperation, $InvoiceId)
    {
      $this->GoodsOwnerInvoiceIdentification = $GoodsOwnerInvoiceIdentification;
      $this->GoodsOwnerInvoiceOperation = $GoodsOwnerInvoiceOperation;
      $this->InvoiceId = $InvoiceId;
    }

    /**
     * @return GoodsOwnerInvoiceIdentification
     */
    public function getGoodsOwnerInvoiceIdentification()
    {
      return $this->GoodsOwnerInvoiceIdentification;
    }

    /**
     * @param GoodsOwnerInvoiceIdentification $GoodsOwnerInvoiceIdentification
     * @return \Ongoing\GoodsOwnerInvoice
     */
    public function setGoodsOwnerInvoiceIdentification($GoodsOwnerInvoiceIdentification)
    {
      $this->GoodsOwnerInvoiceIdentification = $GoodsOwnerInvoiceIdentification;
      return $this;
    }

    /**
     * @return GoodsOwnerInvoiceOperation
     */
    public function getGoodsOwnerInvoiceOperation()
    {
      return $this->GoodsOwnerInvoiceOperation;
    }

    /**
     * @param GoodsOwnerInvoiceOperation $GoodsOwnerInvoiceOperation
     * @return \Ongoing\GoodsOwnerInvoice
     */
    public function setGoodsOwnerInvoiceOperation($GoodsOwnerInvoiceOperation)
    {
      $this->GoodsOwnerInvoiceOperation = $GoodsOwnerInvoiceOperation;
      return $this;
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
     * @return \Ongoing\GoodsOwnerInvoice
     */
    public function setGoodsOwner($GoodsOwner)
    {
      $this->GoodsOwner = $GoodsOwner;
      return $this;
    }

    /**
     * @return ArrayOfGoodsOwnerInvoiceRow
     */
    public function getInvoiceRows()
    {
      return $this->InvoiceRows;
    }

    /**
     * @param ArrayOfGoodsOwnerInvoiceRow $InvoiceRows
     * @return \Ongoing\GoodsOwnerInvoice
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
     * @return \Ongoing\GoodsOwnerInvoice
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
     * @return \Ongoing\GoodsOwnerInvoice
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
     * @return \Ongoing\GoodsOwnerInvoice
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
     * @return \Ongoing\GoodsOwnerInvoice
     */
    public function setInvoiceDate(\DateTime $InvoiceDate = null)
    {
      if ($InvoiceDate == null) {
       $this->InvoiceDate = null;
      } else {
        $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      }
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
     * @return \Ongoing\GoodsOwnerInvoice
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
     * @return \Ongoing\GoodsOwnerInvoice
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
     * @return boolean
     */
    public function getIsExported()
    {
      return $this->IsExported;
    }

    /**
     * @param boolean $IsExported
     * @return \Ongoing\GoodsOwnerInvoice
     */
    public function setIsExported($IsExported)
    {
      $this->IsExported = $IsExported;
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
     * @return \Ongoing\GoodsOwnerInvoice
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
     * @return \Ongoing\GoodsOwnerInvoice
     */
    public function setInvoiceYourReference($InvoiceYourReference)
    {
      $this->InvoiceYourReference = $InvoiceYourReference;
      return $this;
    }

}
