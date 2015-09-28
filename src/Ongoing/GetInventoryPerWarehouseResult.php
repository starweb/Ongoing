<?php

namespace Ongoing;

class GetInventoryPerWarehouseResult
{

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var ArrayOfPerWarehouseArticleLine $PerWarehouseArticleLines
     */
    protected $PerWarehouseArticleLines = null;

    /**
     * @var ArrayOfGetInventoryPerWarehouseError $GetInventoryPerWarehouseErrors
     */
    protected $GetInventoryPerWarehouseErrors = null;

    /**
     * @param boolean $Success
     */
    public function __construct($Success)
    {
      $this->Success = $Success;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \Ongoing\GetInventoryPerWarehouseResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return ArrayOfPerWarehouseArticleLine
     */
    public function getPerWarehouseArticleLines()
    {
      return $this->PerWarehouseArticleLines;
    }

    /**
     * @param ArrayOfPerWarehouseArticleLine $PerWarehouseArticleLines
     * @return \Ongoing\GetInventoryPerWarehouseResult
     */
    public function setPerWarehouseArticleLines($PerWarehouseArticleLines)
    {
      $this->PerWarehouseArticleLines = $PerWarehouseArticleLines;
      return $this;
    }

    /**
     * @return ArrayOfGetInventoryPerWarehouseError
     */
    public function getGetInventoryPerWarehouseErrors()
    {
      return $this->GetInventoryPerWarehouseErrors;
    }

    /**
     * @param ArrayOfGetInventoryPerWarehouseError $GetInventoryPerWarehouseErrors
     * @return \Ongoing\GetInventoryPerWarehouseResult
     */
    public function setGetInventoryPerWarehouseErrors($GetInventoryPerWarehouseErrors)
    {
      $this->GetInventoryPerWarehouseErrors = $GetInventoryPerWarehouseErrors;
      return $this;
    }

}
