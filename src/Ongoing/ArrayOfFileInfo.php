<?php

namespace Ongoing;

class ArrayOfFileInfo
{

    /**
     * @var FileInfo[] $FileInfo
     */
    protected $FileInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FileInfo[]
     */
    public function getFileInfo()
    {
      return $this->FileInfo;
    }

    /**
     * @param FileInfo[] $FileInfo
     * @return \Ongoing\ArrayOfFileInfo
     */
    public function setFileInfo(array $FileInfo = null)
    {
      $this->FileInfo = $FileInfo;
      return $this;
    }

}
