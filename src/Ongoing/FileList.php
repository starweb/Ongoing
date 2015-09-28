<?php

namespace Ongoing;

class FileList
{

    /**
     * @var ArrayOfFileInfo $FilesInfoList
     */
    protected $FilesInfoList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfFileInfo
     */
    public function getFilesInfoList()
    {
      return $this->FilesInfoList;
    }

    /**
     * @param ArrayOfFileInfo $FilesInfoList
     * @return \Ongoing\FileList
     */
    public function setFilesInfoList($FilesInfoList)
    {
      $this->FilesInfoList = $FilesInfoList;
      return $this;
    }

}
