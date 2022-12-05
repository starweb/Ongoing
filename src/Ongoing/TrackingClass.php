<?php

namespace Ongoing;

class TrackingClass
{

    /**
     * @var string $TrackingUrl
     */
    public $TrackingUrl = null;


    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->TrackingUrl;
    }

    /**
     * @param string $TrackingUrl
     * @return \Ongoing\TrackingClass
     */
    public function setSystemId($TrackingUrl)
    {
        $this->TrackingUrl = $TrackingUrl;
        return $this;
    }

}
