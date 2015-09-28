<?php

namespace Ongoing;

class ArrayOfInvoiceRow
{

    /**
     * @var InvoiceRow[] $InvoiceRow
     */
    protected $InvoiceRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoiceRow[]
     */
    public function getInvoiceRow()
    {
      return $this->InvoiceRow;
    }

    /**
     * @param InvoiceRow[] $InvoiceRow
     * @return \Ongoing\ArrayOfInvoiceRow
     */
    public function setInvoiceRow(array $InvoiceRow = null)
    {
      $this->InvoiceRow = $InvoiceRow;
      return $this;
    }

}
