<?php

namespace Ongoing;

class TrackingClass
{

    /**
     * @var string $trackingUrl
     */
    public $trackingUrl = null;


    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $TrackingUrl
     * @return \Ongoing\TrackingClass
     */
    public function setSystemId($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

}
