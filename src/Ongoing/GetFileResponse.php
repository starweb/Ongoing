<?php

namespace Ongoing;

class GetFileResponse
{

    /**
     * @var File $GetFileResult
     */
    protected $GetFileResult = null;

    /**
     * @param File $GetFileResult
     */
    public function __construct($GetFileResult)
    {
      $this->GetFileResult = $GetFileResult;
    }

    /**
     * @return File
     */
    public function getGetFileResult()
    {
      return $this->GetFileResult;
    }

    /**
     * @param File $GetFileResult
     * @return \Ongoing\GetFileResponse
     */
    public function setGetFileResult($GetFileResult)
    {
      $this->GetFileResult = $GetFileResult;
      return $this;
    }

}
