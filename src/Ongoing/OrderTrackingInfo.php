<?php

namespace Ongoing;

class OrderTrackingInfo
{

    /**
     * @var string $TrackingUrl
     */
    protected $TrackingUrl = null;

    /**
     * @var string $Waybill
     */
    protected $Waybill = null;

    /**
     * @var \DateTime $Created
     */
    protected $Created = null;

    /**
     * @param string $TrackingUrl
     * @param string $Waybill
     * @param \DateTime $Created
     */
    public function __construct($TrackingUrl, $Waybill, \DateTime $Created)
    {
      $this->TrackingUrl = $TrackingUrl;
      $this->Waybill = $Waybill;
      $this->Created = $Created->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
      return $this->TrackingUrl;
    }

    /**
     * @param string $TrackingUrl
     * @return \Ongoing\OrderTrackingInfo
     */
    public function setTrackingUrl($TrackingUrl)
    {
      $this->TrackingUrl = $TrackingUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaybill()
    {
      return $this->Waybill;
    }

    /**
     * @param string $Waybill
     * @return \Ongoing\OrderTrackingInfo
     */
    public function setWaybill($Waybill)
    {
      $this->Waybill = $Waybill;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
      if ($this->Created == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Created);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Created
     * @return \Ongoing\OrderTrackingInfo
     */
    public function setCreated(\DateTime $Created)
    {
      $this->Created = $Created->format(\DateTime::ATOM);
      return $this;
    }

}
