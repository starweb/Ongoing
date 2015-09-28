<?php

namespace Ongoing;

class GetReturnOrdersQuery
{

    /**
     * @var ArrayOfString $CustomerOrderNumbersToGet
     */
    protected $CustomerOrderNumbersToGet = null;

    /**
     * @var ArrayOfString $ReturnOrderNumbersToGet
     */
    protected $ReturnOrderNumbersToGet = null;

    /**
     * @var \DateTime $GoodsReturnedFromDate
     */
    protected $GoodsReturnedFromDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getCustomerOrderNumbersToGet()
    {
      return $this->CustomerOrderNumbersToGet;
    }

    /**
     * @param ArrayOfString $CustomerOrderNumbersToGet
     * @return \Ongoing\GetReturnOrdersQuery
     */
    public function setCustomerOrderNumbersToGet($CustomerOrderNumbersToGet)
    {
      $this->CustomerOrderNumbersToGet = $CustomerOrderNumbersToGet;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getReturnOrderNumbersToGet()
    {
      return $this->ReturnOrderNumbersToGet;
    }

    /**
     * @param ArrayOfString $ReturnOrderNumbersToGet
     * @return \Ongoing\GetReturnOrdersQuery
     */
    public function setReturnOrderNumbersToGet($ReturnOrderNumbersToGet)
    {
      $this->ReturnOrderNumbersToGet = $ReturnOrderNumbersToGet;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGoodsReturnedFromDate()
    {
      if ($this->GoodsReturnedFromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GoodsReturnedFromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GoodsReturnedFromDate
     * @return \Ongoing\GetReturnOrdersQuery
     */
    public function setGoodsReturnedFromDate(\DateTime $GoodsReturnedFromDate = null)
    {
      if ($GoodsReturnedFromDate == null) {
       $this->GoodsReturnedFromDate = null;
      } else {
        $this->GoodsReturnedFromDate = $GoodsReturnedFromDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
