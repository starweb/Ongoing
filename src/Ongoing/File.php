<?php

namespace Ongoing;

class File
{

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var base64Binary $FileBytes
     */
    protected $FileBytes = null;

    /**
     * @var string $MimeType
     */
    protected $MimeType = null;

    /**
     * @var int $FileId
     */
    protected $FileId = null;

    /**
     * @param int $FileId
     */
    public function __construct($FileId)
    {
      $this->FileId = $FileId;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \Ongoing\File
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getFileBytes()
    {
      return $this->FileBytes;
    }

    /**
     * @param base64Binary $FileBytes
     * @return \Ongoing\File
     */
    public function setFileBytes($FileBytes)
    {
      $this->FileBytes = $FileBytes;
      return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
      return $this->MimeType;
    }

    /**
     * @param string $MimeType
     * @return \Ongoing\File
     */
    public function setMimeType($MimeType)
    {
      $this->MimeType = $MimeType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFileId()
    {
      return $this->FileId;
    }

    /**
     * @param int $FileId
     * @return \Ongoing\File
     */
    public function setFileId($FileId)
    {
      $this->FileId = $FileId;
      return $this;
    }

}
