<?php

namespace Ongoing;

class ArticleClass
{

    /**
     * @var int $SystemId
     */
    protected $SystemId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ArticleNumber
     */
    protected $ArticleNumber = null;

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var string $BarCode
     */
    protected $BarCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $SupplierArticleNumber
     */
    protected $SupplierArticleNumber = null;

    /**
     * @var string $StatisticsNumber
     */
    protected $StatisticsNumber = null;

    /**
     * @var string $ArticleGroupName
     */
    protected $ArticleGroupName = null;

    /**
     * @var string $ArticleGroupCode
     */
    protected $ArticleGroupCode = null;

    /**
     * @var string $MainSupplierName
     */
    protected $MainSupplierName = null;

    /**
     * @var string $MainSupplierNumber
     */
    protected $MainSupplierNumber = null;

    /**
     * @var string $ArticleCategoryName
     */
    protected $ArticleCategoryName = null;

    /**
     * @var string $ArticleCategoryCode
     */
    protected $ArticleCategoryCode = null;

    /**
     * @var string $CountryOfOriginCode
     */
    protected $CountryOfOriginCode = null;

    /**
     * @var boolean $IsStockArticle
     */
    protected $IsStockArticle = null;

    /**
     * @var string $ArticleUnitCode
     */
    protected $ArticleUnitCode = null;

    /**
     * @var string $VatCode
     */
    protected $VatCode = null;

    /**
     * @var float $VatPercent
     */
    protected $VatPercent = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var float $CustomerPrice
     */
    protected $CustomerPrice = null;

    /**
     * @var float $PurchasePrice
     */
    protected $PurchasePrice = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $NetWeight
     */
    protected $NetWeight = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var float $QuantityPerPallet
     */
    protected $QuantityPerPallet = null;

    /**
     * @var float $QuantityPerPackage
     */
    protected $QuantityPerPackage = null;

    /**
     * @var DangerousGoods[] $DangerousGoods
     */
    protected $DangerousGoods = null;

    /**
     * @var string $PurchaseCurrencyCode
     */
    protected $PurchaseCurrencyCode = null;

    /**
     * @var string $PurchaseCurrencyName
     */
    protected $PurchaseCurrencyName = null;

    /**
     * @param boolean $IsStockArticle
     */
    public function __construct($IsStockArticle)
    {
      $this->IsStockArticle = $IsStockArticle;
    }

    /**
     * @return int
     */
    public function getSystemId()
    {
      return $this->SystemId;
    }

    /**
     * @param int $SystemId
     * @return \Ongoing\ArticleClass
     */
    public function setSystemId($SystemId)
    {
      $this->SystemId = $SystemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Ongoing\ArticleClass
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleNumber()
    {
      return $this->ArticleNumber;
    }

    /**
     * @param string $ArticleNumber
     * @return \Ongoing\ArticleClass
     */
    public function setArticleNumber($ArticleNumber)
    {
      $this->ArticleNumber = $ArticleNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return \Ongoing\ArticleClass
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
      return $this->BarCode;
    }

    /**
     * @param string $BarCode
     * @return \Ongoing\ArticleClass
     */
    public function setBarCode($BarCode)
    {
      $this->BarCode = $BarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Ongoing\ArticleClass
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierArticleNumber()
    {
      return $this->SupplierArticleNumber;
    }

    /**
     * @param string $SupplierArticleNumber
     * @return \Ongoing\ArticleClass
     */
    public function setSupplierArticleNumber($SupplierArticleNumber)
    {
      $this->SupplierArticleNumber = $SupplierArticleNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatisticsNumber()
    {
      return $this->StatisticsNumber;
    }

    /**
     * @param string $StatisticsNumber
     * @return \Ongoing\ArticleClass
     */
    public function setStatisticsNumber($StatisticsNumber)
    {
      $this->StatisticsNumber = $StatisticsNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleGroupName()
    {
      return $this->ArticleGroupName;
    }

    /**
     * @param string $ArticleGroupName
     * @return \Ongoing\ArticleClass
     */
    public function setArticleGroupName($ArticleGroupName)
    {
      $this->ArticleGroupName = $ArticleGroupName;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleGroupCode()
    {
      return $this->ArticleGroupCode;
    }

    /**
     * @param string $ArticleGroupCode
     * @return \Ongoing\ArticleClass
     */
    public function setArticleGroupCode($ArticleGroupCode)
    {
      $this->ArticleGroupCode = $ArticleGroupCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMainSupplierName()
    {
      return $this->MainSupplierName;
    }

    /**
     * @param string $MainSupplierName
     * @return \Ongoing\ArticleClass
     */
    public function setMainSupplierName($MainSupplierName)
    {
      $this->MainSupplierName = $MainSupplierName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMainSupplierNumber()
    {
      return $this->MainSupplierNumber;
    }

    /**
     * @param string $MainSupplierNumber
     * @return \Ongoing\ArticleClass
     */
    public function setMainSupplierNumber($MainSupplierNumber)
    {
      $this->MainSupplierNumber = $MainSupplierNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleCategoryName()
    {
      return $this->ArticleCategoryName;
    }

    /**
     * @param string $ArticleCategoryName
     * @return \Ongoing\ArticleClass
     */
    public function setArticleCategoryName($ArticleCategoryName)
    {
      $this->ArticleCategoryName = $ArticleCategoryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleCategoryCode()
    {
      return $this->ArticleCategoryCode;
    }

    /**
     * @param string $ArticleCategoryCode
     * @return \Ongoing\ArticleClass
     */
    public function setArticleCategoryCode($ArticleCategoryCode)
    {
      $this->ArticleCategoryCode = $ArticleCategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfOriginCode()
    {
      return $this->CountryOfOriginCode;
    }

    /**
     * @param string $CountryOfOriginCode
     * @return \Ongoing\ArticleClass
     */
    public function setCountryOfOriginCode($CountryOfOriginCode)
    {
      $this->CountryOfOriginCode = $CountryOfOriginCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStockArticle()
    {
      return $this->IsStockArticle;
    }

    /**
     * @param boolean $IsStockArticle
     * @return \Ongoing\ArticleClass
     */
    public function setIsStockArticle($IsStockArticle)
    {
      $this->IsStockArticle = $IsStockArticle;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleUnitCode()
    {
      return $this->ArticleUnitCode;
    }

    /**
     * @param string $ArticleUnitCode
     * @return \Ongoing\ArticleClass
     */
    public function setArticleUnitCode($ArticleUnitCode)
    {
      $this->ArticleUnitCode = $ArticleUnitCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatCode()
    {
      return $this->VatCode;
    }

    /**
     * @param string $VatCode
     * @return \Ongoing\ArticleClass
     */
    public function setVatCode($VatCode)
    {
      $this->VatCode = $VatCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getVatPercent()
    {
      return $this->VatPercent;
    }

    /**
     * @param float $VatPercent
     * @return \Ongoing\ArticleClass
     */
    public function setVatPercent($VatPercent)
    {
      $this->VatPercent = $VatPercent;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param float $Length
     * @return \Ongoing\ArticleClass
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param float $Width
     * @return \Ongoing\ArticleClass
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param float $Height
     * @return \Ongoing\ArticleClass
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \Ongoing\ArticleClass
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return float
     */
    public function getCustomerPrice()
    {
      return $this->CustomerPrice;
    }

    /**
     * @param float $CustomerPrice
     * @return \Ongoing\ArticleClass
     */
    public function setCustomerPrice($CustomerPrice)
    {
      $this->CustomerPrice = $CustomerPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchasePrice()
    {
      return $this->PurchasePrice;
    }

    /**
     * @param float $PurchasePrice
     * @return \Ongoing\ArticleClass
     */
    public function setPurchasePrice($PurchasePrice)
    {
      $this->PurchasePrice = $PurchasePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return \Ongoing\ArticleClass
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetWeight()
    {
      return $this->NetWeight;
    }

    /**
     * @param float $NetWeight
     * @return \Ongoing\ArticleClass
     */
    public function setNetWeight($NetWeight)
    {
      $this->NetWeight = $NetWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param float $Volume
     * @return \Ongoing\ArticleClass
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPerPallet()
    {
      return $this->QuantityPerPallet;
    }

    /**
     * @param float $QuantityPerPallet
     * @return \Ongoing\ArticleClass
     */
    public function setQuantityPerPallet($QuantityPerPallet)
    {
      $this->QuantityPerPallet = $QuantityPerPallet;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPerPackage()
    {
      return $this->QuantityPerPackage;
    }

    /**
     * @param float $QuantityPerPackage
     * @return \Ongoing\ArticleClass
     */
    public function setQuantityPerPackage($QuantityPerPackage)
    {
      $this->QuantityPerPackage = $QuantityPerPackage;
      return $this;
    }

    /**
     * @return DangerousGoods[]
     */
    public function getDangerousGoods()
    {
      return $this->DangerousGoods;
    }

    /**
     * @param DangerousGoods[] $DangerousGoods
     * @return \Ongoing\ArticleClass
     */
    public function setDangerousGoods(array $DangerousGoods = null)
    {
      $this->DangerousGoods = $DangerousGoods;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseCurrencyCode()
    {
      return $this->PurchaseCurrencyCode;
    }

    /**
     * @param string $PurchaseCurrencyCode
     * @return \Ongoing\ArticleClass
     */
    public function setPurchaseCurrencyCode($PurchaseCurrencyCode)
    {
      $this->PurchaseCurrencyCode = $PurchaseCurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseCurrencyName()
    {
      return $this->PurchaseCurrencyName;
    }

    /**
     * @param string $PurchaseCurrencyName
     * @return \Ongoing\ArticleClass
     */
    public function setPurchaseCurrencyName($PurchaseCurrencyName)
    {
      $this->PurchaseCurrencyName = $PurchaseCurrencyName;
      return $this;
    }

}
