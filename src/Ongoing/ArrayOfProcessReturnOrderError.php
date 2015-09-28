<?php

namespace Ongoing;

class ArrayOfProcessReturnOrderError
{

    /**
     * @var ProcessReturnOrderError[] $ProcessReturnOrderError
     */
    protected $ProcessReturnOrderError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProcessReturnOrderError[]
     */
    public function getProcessReturnOrderError()
    {
      return $this->ProcessReturnOrderError;
    }

    /**
     * @param ProcessReturnOrderError[] $ProcessReturnOrderError
     * @return \Ongoing\ArrayOfProcessReturnOrderError
     */
    public function setProcessReturnOrderError(array $ProcessReturnOrderError = null)
    {
      $this->ProcessReturnOrderError = $ProcessReturnOrderError;
      return $this;
    }

}
