<?php

namespace Ongoing;

class CommunicationInfo
{

    /**
     * @var string $FromSystemName
     */
    protected $FromSystemName = null;

    /**
     * @var string $ToSystemName
     */
    protected $ToSystemName = null;

    /**
     * @var string $MessageId
     */
    protected $MessageId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFromSystemName()
    {
      return $this->FromSystemName;
    }

    /**
     * @param string $FromSystemName
     * @return \Ongoing\CommunicationInfo
     */
    public function setFromSystemName($FromSystemName)
    {
      $this->FromSystemName = $FromSystemName;
      return $this;
    }

    /**
     * @return string
     */
    public function getToSystemName()
    {
      return $this->ToSystemName;
    }

    /**
     * @param string $ToSystemName
     * @return \Ongoing\CommunicationInfo
     */
    public function setToSystemName($ToSystemName)
    {
      $this->ToSystemName = $ToSystemName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param string $MessageId
     * @return \Ongoing\CommunicationInfo
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

}
