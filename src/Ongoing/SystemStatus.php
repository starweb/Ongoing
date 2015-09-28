<?php

namespace Ongoing;

class SystemStatus
{

    /**
     * @var string $SystemStatusText
     */
    protected $SystemStatusText = null;

    /**
     * @var boolean $IsRunning
     */
    protected $IsRunning = null;

    /**
     * @var \DateTime $BuildTime
     */
    protected $BuildTime = null;

    /**
     * @param boolean $IsRunning
     * @param \DateTime $BuildTime
     */
    public function __construct($IsRunning, \DateTime $BuildTime)
    {
      $this->IsRunning = $IsRunning;
      $this->BuildTime = $BuildTime->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getSystemStatusText()
    {
      return $this->SystemStatusText;
    }

    /**
     * @param string $SystemStatusText
     * @return \Ongoing\SystemStatus
     */
    public function setSystemStatusText($SystemStatusText)
    {
      $this->SystemStatusText = $SystemStatusText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRunning()
    {
      return $this->IsRunning;
    }

    /**
     * @param boolean $IsRunning
     * @return \Ongoing\SystemStatus
     */
    public function setIsRunning($IsRunning)
    {
      $this->IsRunning = $IsRunning;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBuildTime()
    {
      if ($this->BuildTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BuildTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BuildTime
     * @return \Ongoing\SystemStatus
     */
    public function setBuildTime(\DateTime $BuildTime)
    {
      $this->BuildTime = $BuildTime->format(\DateTime::ATOM);
      return $this;
    }

}
