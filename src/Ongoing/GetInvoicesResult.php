<?php

namespace Ongoing;

class GetInvoicesResult
{

    /**
     * @var ArrayOfInvoice $Invoices
     */
    protected $Invoices = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfInvoice
     */
    public function getInvoices()
    {
      return $this->Invoices;
    }

    /**
     * @param ArrayOfInvoice $Invoices
     * @return \Ongoing\GetInvoicesResult
     */
    public function setInvoices($Invoices)
    {
      $this->Invoices = $Invoices;
      return $this;
    }

}
