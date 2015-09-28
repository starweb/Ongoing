<?php

namespace Ongoing;

class GetInvoicesQuery
{

    /**
     * @var boolean $GetInvoiceRows
     */
    protected $GetInvoiceRows = null;

    /**
     * @var \DateTime $InvoiceDateFrom
     */
    protected $InvoiceDateFrom = null;

    /**
     * @var \DateTime $InvoiceDateTo
     */
    protected $InvoiceDateTo = null;

    /**
     * @var ArrayOfInt $GetInvoiceId
     */
    protected $GetInvoiceId = null;

    /**
     * @param boolean $GetInvoiceRows
     */
    public function __construct($GetInvoiceRows)
    {
      $this->GetInvoiceRows = $GetInvoiceRows;
    }

    /**
     * @return boolean
     */
    public function getGetInvoiceRows()
    {
      return $this->GetInvoiceRows;
    }

    /**
     * @param boolean $GetInvoiceRows
     * @return \Ongoing\GetInvoicesQuery
     */
    public function setGetInvoiceRows($GetInvoiceRows)
    {
      $this->GetInvoiceRows = $GetInvoiceRows;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDateFrom()
    {
      if ($this->InvoiceDateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDateFrom
     * @return \Ongoing\GetInvoicesQuery
     */
    public function setInvoiceDateFrom(\DateTime $InvoiceDateFrom = null)
    {
      if ($InvoiceDateFrom == null) {
       $this->InvoiceDateFrom = null;
      } else {
        $this->InvoiceDateFrom = $InvoiceDateFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDateTo()
    {
      if ($this->InvoiceDateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDateTo
     * @return \Ongoing\GetInvoicesQuery
     */
    public function setInvoiceDateTo(\DateTime $InvoiceDateTo = null)
    {
      if ($InvoiceDateTo == null) {
       $this->InvoiceDateTo = null;
      } else {
        $this->InvoiceDateTo = $InvoiceDateTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getGetInvoiceId()
    {
      return $this->GetInvoiceId;
    }

    /**
     * @param ArrayOfInt $GetInvoiceId
     * @return \Ongoing\GetInvoicesQuery
     */
    public function setGetInvoiceId($GetInvoiceId)
    {
      $this->GetInvoiceId = $GetInvoiceId;
      return $this;
    }

}
