<?php

namespace Ongoing;

class ArrayOfInvoice
{

    /**
     * @var Invoice[] $Invoice
     */
    protected $Invoice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Invoice[]
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param Invoice[] $Invoice
     * @return \Ongoing\ArrayOfInvoice
     */
    public function setInvoice(array $Invoice = null)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

}
