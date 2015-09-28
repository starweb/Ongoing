<?php

namespace Ongoing;

class ArrayOfGoodsOwnerInvoiceRow
{

    /**
     * @var GoodsOwnerInvoiceRow[] $GoodsOwnerInvoiceRow
     */
    protected $GoodsOwnerInvoiceRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GoodsOwnerInvoiceRow[]
     */
    public function getGoodsOwnerInvoiceRow()
    {
      return $this->GoodsOwnerInvoiceRow;
    }

    /**
     * @param GoodsOwnerInvoiceRow[] $GoodsOwnerInvoiceRow
     * @return \Ongoing\ArrayOfGoodsOwnerInvoiceRow
     */
    public function setGoodsOwnerInvoiceRow(array $GoodsOwnerInvoiceRow = null)
    {
      $this->GoodsOwnerInvoiceRow = $GoodsOwnerInvoiceRow;
      return $this;
    }

}
