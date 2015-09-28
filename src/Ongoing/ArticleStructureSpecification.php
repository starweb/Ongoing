<?php

namespace Ongoing;

class ArticleStructureSpecification
{

    /**
     * @var StructureArticleDefinition[] $StructureArticleDefinition
     */
    protected $StructureArticleDefinition = null;

    /**
     * @var ArticleStructureType $ArticleStructureType
     */
    protected $ArticleStructureType = null;

    /**
     * @param ArticleStructureType $ArticleStructureType
     */
    public function __construct($ArticleStructureType)
    {
      $this->ArticleStructureType = $ArticleStructureType;
    }

    /**
     * @return StructureArticleDefinition[]
     */
    public function getStructureArticleDefinition()
    {
      return $this->StructureArticleDefinition;
    }

    /**
     * @param StructureArticleDefinition[] $StructureArticleDefinition
     * @return \Ongoing\ArticleStructureSpecification
     */
    public function setStructureArticleDefinition(array $StructureArticleDefinition = null)
    {
      $this->StructureArticleDefinition = $StructureArticleDefinition;
      return $this;
    }

    /**
     * @return ArticleStructureType
     */
    public function getArticleStructureType()
    {
      return $this->ArticleStructureType;
    }

    /**
     * @param ArticleStructureType $ArticleStructureType
     * @return \Ongoing\ArticleStructureSpecification
     */
    public function setArticleStructureType($ArticleStructureType)
    {
      $this->ArticleStructureType = $ArticleStructureType;
      return $this;
    }

}
