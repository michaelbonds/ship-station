<?php


namespace MichaelB\ShipStation\Models;


class Product extends BaseModel
{
    /**
     * @var int
     */
    protected $productId;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $price;

    /**
     * @var int
     */
    protected $defaultCost;

    /**
     * @var int
     */
    protected $length;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var int
     */
    protected $weightOz;

    /**
     * @var string
     */
    protected $internalNotes;

    /**
     * @var string
     */
    protected $fulfillmentSku;

    /**
     * @var string
     */
    protected $createDate;

    /**
     * @var string
     */
    protected $modifyDate;

    /**
     * @var boolean
     */
    protected $active;

    /**
     * @var ProductCategory
     */
    protected $productCategory;

    /**
     * @var string
     */
    protected $productType;

    /**
     * @var string
     */
    protected $warehouseLocation;

    /**
     * @var string
     */
    protected $defaultCarrierCode;

    /**
     * @var string
     */
    protected $defaultServiceCode;

    /**
     * @var string
     */
    protected $defaultPackageCode;

    /**
     * @var string
     */
    protected $defaultIntlCarrierCode;

    /**
     * ?? Not sure if this is the correct name
     * TODO: correct name?
     * @var string
     */
    protected $defaultIntlPackageType;

    /**
     * @var string
     */
    protected $defaultConfirmation;

    /**
     * @var string
     */
    protected $defaultIntlConfirmation;

    /**
     * @var string
     */
    protected $customsDescription;

    /**
     * @var int
     */
    protected $customsValue;

    /**
     * @var string
     */
    protected $customsTariffNo;

    /**
     * @var string
     */
    protected $customsCountryCode;

    /**
     * @var boolean
     */
    protected $noCustoms;

    /**
     * @var ProductTag[]
     */
    protected $tags;

    /**
     * @param $value
     */
    protected function setProductCategoryAttribute($value)
    {
        $this->productCategory =
            ($value instanceof ProductCategory ? $value : new ProductCategory($value));
    }

    /**
     * @param array $tags
     */
    protected function setTagsAttribute($tags = [])
    {
        foreach ($tags as $key => $val) {
            $tags[$key] = $this->getTag($val);
        }

        $this->tags = $tags;
    }

    /**
     * @param $tag
     * @return ProductTag
     */
    private function getTag($tag)
    {
        return ($tag instanceof ProductTag ? $tag : new ProductTag($tag));
    }
}
