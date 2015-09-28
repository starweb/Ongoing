<?php

namespace Ongoing;

class GetInOrderByOrderNumberResponse
{

    /**
     * @var ReceivedInOrder $GetInOrderByOrderNumberResult
     */
    protected $GetInOrderByOrderNumberResult = null;

    /**
     * @param ReceivedInOrder $GetInOrderByOrderNumberResult
     */
    public function __construct($GetInOrderByOrderNumberResult)
    {
      $this->GetInOrderByOrderNumberResult = $GetInOrderByOrderNumberResult;
    }

    /**
     * @return ReceivedInOrder
     */
    public function getGetInOrderByOrderNumberResult()
    {
      return $this->GetInOrderByOrderNumberResult;
    }

    /**
     * @param ReceivedInOrder $GetInOrderByOrderNumberResult
     * @return \Ongoing\GetInOrderByOrderNumberResponse
     */
    public function setGetInOrderByOrderNumberResult($GetInOrderByOrderNumberResult)
    {
      $this->GetInOrderByOrderNumberResult = $GetInOrderByOrderNumberResult;
      return $this;
    }

}
