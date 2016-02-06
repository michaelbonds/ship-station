<?php

namespace MichaelB\ShipStation\Models;


class AdvancedOptions extends BaseModel
{
    /**
     * @var int
     */
    public $warehouseId;

    /**
     * @var boolean
     */
    public $nonMachinable;

    /**
     * @var boolean
     */
    public $saturdayDeliver;

    /**
     * @var boolean
     */
    public $containsAlcohol;

    /**
     * @var int
     */
    public $storeId;

    /**
     * @var string
     */
    public $customField1;

    /**
     * @var string
     */
    public $customField2;

    /**
     * @var string
     */
    public $customField3;

    /**
     * @var string
     */
    public $source;

    /**
     * @var boolean
     */
    public $mergedOrSplit;

    /**
     * @values int
     * @var array
     */
    public $mergedIds;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $billToParty;

    /**
     * @var string
     */
    public $billToAccount;

    /**
     * @var string
     */
    public $billToPostalCode;

    /**
     * @var string
     */
    public $billToCountryCode;
}
