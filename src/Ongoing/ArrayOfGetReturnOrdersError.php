<?php

namespace Ongoing;

class ArrayOfGetReturnOrdersError
{

    /**
     * @var GetReturnOrdersError[] $GetReturnOrdersError
     */
    protected $GetReturnOrdersError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetReturnOrdersError[]
     */
    public function getGetReturnOrdersError()
    {
      return $this->GetReturnOrdersError;
    }

    /**
     * @param GetReturnOrdersError[] $GetReturnOrdersError
     * @return \Ongoing\ArrayOfGetReturnOrdersError
     */
    public function setGetReturnOrdersError(array $GetReturnOrdersError = null)
    {
      $this->GetReturnOrdersError = $GetReturnOrdersError;
      return $this;
    }

}
