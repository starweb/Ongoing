<?php

namespace Ongoing;

class ReturnOrderLine
{

    /**
     * @var ReturnOrderLineIdentificationType $ReturnOrderLineIdentification
     */
    protected $ReturnOrderLineIdentification = null;

    /**
     * @var float $ToBeReturnedNumberOfItems
     */
    protected $ToBeReturnedNumberOfItems = null;

    /**
     * @var string $ReturnOrderRowNumber
     */
    protected $ReturnOrderRowNumber = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var string $ArticleNumber
     */
    protected $ArticleNumber = null;

    /**
     * @var ReturnCause $ReturnCause
     */
    protected $ReturnCause = null;

    /**
     * @param ReturnOrderLineIdentificationType $ReturnOrderLineIdentification
     * @param float $ToBeReturnedNumberOfItems
     */
    public function __construct($ReturnOrderLineIdentification, $ToBeReturnedNumberOfItems)
    {
      $this->ReturnOrderLineIdentification = $ReturnOrderLineIdentification;
      $this->ToBeReturnedNumberOfItems = $ToBeReturnedNumberOfItems;
    }

    /**
     * @return ReturnOrderLineIdentificationType
     */
    public function getReturnOrderLineIdentification()
    {
      return $this->ReturnOrderLineIdentification;
    }

    /**
     * @param ReturnOrderLineIdentificationType $ReturnOrderLineIdentification
     * @return \Ongoing\ReturnOrderLine
     */
    public function setReturnOrderLineIdentification($ReturnOrderLineIdentification)
    {
      $this->ReturnOrderLineIdentification = $ReturnOrderLineIdentification;
      return $this;
    }

    /**
     * @return float
     */
    public function getToBeReturnedNumberOfItems()
    {
      return $this->ToBeReturnedNumberOfItems;
    }

    /**
     * @param float $ToBeReturnedNumberOfItems
     * @return \Ongoing\ReturnOrderLine
     */
    public function setToBeReturnedNumberOfItems($ToBeReturnedNumberOfItems)
    {
      $this->ToBeReturnedNumberOfItems = $ToBeReturnedNumberOfItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnOrderRowNumber()
    {
      return $this->ReturnOrderRowNumber;
    }

    /**
     * @param string $ReturnOrderRowNumber
     * @return \Ongoing\ReturnOrderLine
     */
    public function setReturnOrderRowNumber($ReturnOrderRowNumber)
    {
      $this->ReturnOrderRowNumber = $ReturnOrderRowNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderLineCode()
    {
      return $this->ExternalOrderLineCode;
    }

    /**
     * @param string $ExternalOrderLineCode
     * @return \Ongoing\ReturnOrderLine
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleNumber()
    {
      return $this->ArticleNumber;
    }

    /**
     * @param string $ArticleNumber
     * @return \Ongoing\ReturnOrderLine
     */
    public function setArticleNumber($ArticleNumber)
    {
      $this->ArticleNumber = $ArticleNumber;
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
     * @return \Ongoing\ReturnOrderLine
     */
    public function setReturnCause($ReturnCause)
    {
      $this->ReturnCause = $ReturnCause;
      return $this;
    }

}
