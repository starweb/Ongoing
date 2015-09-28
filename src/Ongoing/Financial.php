<?php

namespace Ongoing;

class Financial
{

    /**
     * @var TransportPaymentType $TransportPaymentType
     */
    protected $TransportPaymentType = null;

    /**
     * @var string $ArticleCode
     */
    protected $ArticleCode = null;

    /**
     * @var string $PriceListCode
     */
    protected $PriceListCode = null;

    /**
     * @var int $TransporterAgreementId
     */
    protected $TransporterAgreementId = null;

    /**
     * @param TransportPaymentType $TransportPaymentType
     * @param int $TransporterAgreementId
     */
    public function __construct($TransportPaymentType, $TransporterAgreementId)
    {
      $this->TransportPaymentType = $TransportPaymentType;
      $this->TransporterAgreementId = $TransporterAgreementId;
    }

    /**
     * @return TransportPaymentType
     */
    public function getTransportPaymentType()
    {
      return $this->TransportPaymentType;
    }

    /**
     * @param TransportPaymentType $TransportPaymentType
     * @return \Ongoing\Financial
     */
    public function setTransportPaymentType($TransportPaymentType)
    {
      $this->TransportPaymentType = $TransportPaymentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleCode()
    {
      return $this->ArticleCode;
    }

    /**
     * @param string $ArticleCode
     * @return \Ongoing\Financial
     */
    public function setArticleCode($ArticleCode)
    {
      $this->ArticleCode = $ArticleCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceListCode()
    {
      return $this->PriceListCode;
    }

    /**
     * @param string $PriceListCode
     * @return \Ongoing\Financial
     */
    public function setPriceListCode($PriceListCode)
    {
      $this->PriceListCode = $PriceListCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransporterAgreementId()
    {
      return $this->TransporterAgreementId;
    }

    /**
     * @param int $TransporterAgreementId
     * @return \Ongoing\Financial
     */
    public function setTransporterAgreementId($TransporterAgreementId)
    {
      $this->TransporterAgreementId = $TransporterAgreementId;
      return $this;
    }

}
