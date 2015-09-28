<?php

namespace Ongoing;

class CustomerGroup
{

    /**
     * @var CustomerGroupOperation $CustomerGroupOperation
     */
    protected $CustomerGroupOperation = null;

    /**
     * @var CustomerGroupIdentification $CustomerGroupIdentification
     */
    protected $CustomerGroupIdentification = null;

    /**
     * @var string $CustomerGroupCode
     */
    protected $CustomerGroupCode = null;

    /**
     * @var string $CustomerGroupName
     */
    protected $CustomerGroupName = null;

    /**
     * @param CustomerGroupOperation $CustomerGroupOperation
     * @param CustomerGroupIdentification $CustomerGroupIdentification
     */
    public function __construct($CustomerGroupOperation, $CustomerGroupIdentification)
    {
      $this->CustomerGroupOperation = $CustomerGroupOperation;
      $this->CustomerGroupIdentification = $CustomerGroupIdentification;
    }

    /**
     * @return CustomerGroupOperation
     */
    public function getCustomerGroupOperation()
    {
      return $this->CustomerGroupOperation;
    }

    /**
     * @param CustomerGroupOperation $CustomerGroupOperation
     * @return \Ongoing\CustomerGroup
     */
    public function setCustomerGroupOperation($CustomerGroupOperation)
    {
      $this->CustomerGroupOperation = $CustomerGroupOperation;
      return $this;
    }

    /**
     * @return CustomerGroupIdentification
     */
    public function getCustomerGroupIdentification()
    {
      return $this->CustomerGroupIdentification;
    }

    /**
     * @param CustomerGroupIdentification $CustomerGroupIdentification
     * @return \Ongoing\CustomerGroup
     */
    public function setCustomerGroupIdentification($CustomerGroupIdentification)
    {
      $this->CustomerGroupIdentification = $CustomerGroupIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerGroupCode()
    {
      return $this->CustomerGroupCode;
    }

    /**
     * @param string $CustomerGroupCode
     * @return \Ongoing\CustomerGroup
     */
    public function setCustomerGroupCode($CustomerGroupCode)
    {
      $this->CustomerGroupCode = $CustomerGroupCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerGroupName()
    {
      return $this->CustomerGroupName;
    }

    /**
     * @param string $CustomerGroupName
     * @return \Ongoing\CustomerGroup
     */
    public function setCustomerGroupName($CustomerGroupName)
    {
      $this->CustomerGroupName = $CustomerGroupName;
      return $this;
    }

}
