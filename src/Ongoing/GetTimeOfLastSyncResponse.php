<?php

namespace Ongoing;

class GetTimeOfLastSyncResponse
{

    /**
     * @var \DateTime $GetTimeOfLastSyncResult
     */
    protected $GetTimeOfLastSyncResult = null;

    /**
     * @param \DateTime $GetTimeOfLastSyncResult
     */
    public function __construct(\DateTime $GetTimeOfLastSyncResult)
    {
      $this->GetTimeOfLastSyncResult = $GetTimeOfLastSyncResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getGetTimeOfLastSyncResult()
    {
      if ($this->GetTimeOfLastSyncResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GetTimeOfLastSyncResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GetTimeOfLastSyncResult
     * @return \Ongoing\GetTimeOfLastSyncResponse
     */
    public function setGetTimeOfLastSyncResult(\DateTime $GetTimeOfLastSyncResult)
    {
      $this->GetTimeOfLastSyncResult = $GetTimeOfLastSyncResult->format(\DateTime::ATOM);
      return $this;
    }

}
