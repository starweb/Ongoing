<?php

namespace Ongoing;

class WsiSystem
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $PassWord
     */
    protected $PassWord = null;

    /**
     * @var string $SystemName
     */
    protected $SystemName = null;

    /**
     * @var string $ToSystemName
     */
    protected $ToSystemName = null;

    /**
     * @var string $FromSystemName
     */
    protected $FromSystemName = null;

    /**
     * @var string $FromWsiPath
     */
    protected $FromWsiPath = null;

    /**
     * @var string $ToWSiPath
     */
    protected $ToWSiPath = null;

    /**
     * @var string $Setting1
     */
    protected $Setting1 = null;

    /**
     * @var string $Setting2
     */
    protected $Setting2 = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @var int $ReportId
     */
    protected $ReportId = null;

    /**
     * @var string $ReportName
     */
    protected $ReportName = null;

    /**
     * @var string $ReportExportFormat
     */
    protected $ReportExportFormat = null;

    /**
     * @var int $PollingInterval
     */
    protected $PollingInterval = null;

    /**
     * @var string $OnErrorEmail
     */
    protected $OnErrorEmail = null;

    /**
     * @var string $Encoding
     */
    protected $Encoding = null;

    /**
     * @var boolean $OrderAdressGroupByCustomer
     */
    protected $OrderAdressGroupByCustomer = null;

    /**
     * @param int $ReportId
     * @param int $PollingInterval
     * @param boolean $OrderAdressGroupByCustomer
     */
    public function __construct($ReportId, $PollingInterval, $OrderAdressGroupByCustomer)
    {
      $this->ReportId = $ReportId;
      $this->PollingInterval = $PollingInterval;
      $this->OrderAdressGroupByCustomer = $OrderAdressGroupByCustomer;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \Ongoing\WsiSystem
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassWord()
    {
      return $this->PassWord;
    }

    /**
     * @param string $PassWord
     * @return \Ongoing\WsiSystem
     */
    public function setPassWord($PassWord)
    {
      $this->PassWord = $PassWord;
      return $this;
    }

    /**
     * @return string
     */
    public function getSystemName()
    {
      return $this->SystemName;
    }

    /**
     * @param string $SystemName
     * @return \Ongoing\WsiSystem
     */
    public function setSystemName($SystemName)
    {
      $this->SystemName = $SystemName;
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
     * @return \Ongoing\WsiSystem
     */
    public function setToSystemName($ToSystemName)
    {
      $this->ToSystemName = $ToSystemName;
      return $this;
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
     * @return \Ongoing\WsiSystem
     */
    public function setFromSystemName($FromSystemName)
    {
      $this->FromSystemName = $FromSystemName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromWsiPath()
    {
      return $this->FromWsiPath;
    }

    /**
     * @param string $FromWsiPath
     * @return \Ongoing\WsiSystem
     */
    public function setFromWsiPath($FromWsiPath)
    {
      $this->FromWsiPath = $FromWsiPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getToWSiPath()
    {
      return $this->ToWSiPath;
    }

    /**
     * @param string $ToWSiPath
     * @return \Ongoing\WsiSystem
     */
    public function setToWSiPath($ToWSiPath)
    {
      $this->ToWSiPath = $ToWSiPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getSetting1()
    {
      return $this->Setting1;
    }

    /**
     * @param string $Setting1
     * @return \Ongoing\WsiSystem
     */
    public function setSetting1($Setting1)
    {
      $this->Setting1 = $Setting1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSetting2()
    {
      return $this->Setting2;
    }

    /**
     * @param string $Setting2
     * @return \Ongoing\WsiSystem
     */
    public function setSetting2($Setting2)
    {
      $this->Setting2 = $Setting2;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return \Ongoing\WsiSystem
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

    /**
     * @return int
     */
    public function getReportId()
    {
      return $this->ReportId;
    }

    /**
     * @param int $ReportId
     * @return \Ongoing\WsiSystem
     */
    public function setReportId($ReportId)
    {
      $this->ReportId = $ReportId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportName()
    {
      return $this->ReportName;
    }

    /**
     * @param string $ReportName
     * @return \Ongoing\WsiSystem
     */
    public function setReportName($ReportName)
    {
      $this->ReportName = $ReportName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportExportFormat()
    {
      return $this->ReportExportFormat;
    }

    /**
     * @param string $ReportExportFormat
     * @return \Ongoing\WsiSystem
     */
    public function setReportExportFormat($ReportExportFormat)
    {
      $this->ReportExportFormat = $ReportExportFormat;
      return $this;
    }

    /**
     * @return int
     */
    public function getPollingInterval()
    {
      return $this->PollingInterval;
    }

    /**
     * @param int $PollingInterval
     * @return \Ongoing\WsiSystem
     */
    public function setPollingInterval($PollingInterval)
    {
      $this->PollingInterval = $PollingInterval;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnErrorEmail()
    {
      return $this->OnErrorEmail;
    }

    /**
     * @param string $OnErrorEmail
     * @return \Ongoing\WsiSystem
     */
    public function setOnErrorEmail($OnErrorEmail)
    {
      $this->OnErrorEmail = $OnErrorEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param string $Encoding
     * @return \Ongoing\WsiSystem
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOrderAdressGroupByCustomer()
    {
      return $this->OrderAdressGroupByCustomer;
    }

    /**
     * @param boolean $OrderAdressGroupByCustomer
     * @return \Ongoing\WsiSystem
     */
    public function setOrderAdressGroupByCustomer($OrderAdressGroupByCustomer)
    {
      $this->OrderAdressGroupByCustomer = $OrderAdressGroupByCustomer;
      return $this;
    }

}
