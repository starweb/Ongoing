<?php

namespace Ongoing;

class InOrderSpecialFilters
{

    /**
     * @var boolean $OnlyGetUnDeclaredInOrders
     */
    protected $OnlyGetUnDeclaredInOrders = null;

    /**
     * @var boolean $OnlyWithInOrderLinesWithDiffingReceviedToReported
     */
    protected $OnlyWithInOrderLinesWithDiffingReceviedToReported = null;

    /**
     * @param boolean $OnlyGetUnDeclaredInOrders
     * @param boolean $OnlyWithInOrderLinesWithDiffingReceviedToReported
     */
    public function __construct($OnlyGetUnDeclaredInOrders, $OnlyWithInOrderLinesWithDiffingReceviedToReported)
    {
      $this->OnlyGetUnDeclaredInOrders = $OnlyGetUnDeclaredInOrders;
      $this->OnlyWithInOrderLinesWithDiffingReceviedToReported = $OnlyWithInOrderLinesWithDiffingReceviedToReported;
    }

    /**
     * @return boolean
     */
    public function getOnlyGetUnDeclaredInOrders()
    {
      return $this->OnlyGetUnDeclaredInOrders;
    }

    /**
     * @param boolean $OnlyGetUnDeclaredInOrders
     * @return \Ongoing\InOrderSpecialFilters
     */
    public function setOnlyGetUnDeclaredInOrders($OnlyGetUnDeclaredInOrders)
    {
      $this->OnlyGetUnDeclaredInOrders = $OnlyGetUnDeclaredInOrders;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyWithInOrderLinesWithDiffingReceviedToReported()
    {
      return $this->OnlyWithInOrderLinesWithDiffingReceviedToReported;
    }

    /**
     * @param boolean $OnlyWithInOrderLinesWithDiffingReceviedToReported
     * @return \Ongoing\InOrderSpecialFilters
     */
    public function setOnlyWithInOrderLinesWithDiffingReceviedToReported($OnlyWithInOrderLinesWithDiffingReceviedToReported)
    {
      $this->OnlyWithInOrderLinesWithDiffingReceviedToReported = $OnlyWithInOrderLinesWithDiffingReceviedToReported;
      return $this;
    }

}
