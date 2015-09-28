<?php

namespace Ongoing;

class GetFileListResponse
{

    /**
     * @var FileList $GetFileListResult
     */
    protected $GetFileListResult = null;

    /**
     * @param FileList $GetFileListResult
     */
    public function __construct($GetFileListResult)
    {
      $this->GetFileListResult = $GetFileListResult;
    }

    /**
     * @return FileList
     */
    public function getGetFileListResult()
    {
      return $this->GetFileListResult;
    }

    /**
     * @param FileList $GetFileListResult
     * @return \Ongoing\GetFileListResponse
     */
    public function setGetFileListResult($GetFileListResult)
    {
      $this->GetFileListResult = $GetFileListResult;
      return $this;
    }

}
