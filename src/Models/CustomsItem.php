<?php


namespace MichaelB\ShipStation\Models;


class CustomsItem extends BaseModel
{
    /**
     * @var string
     */
    public $customsItemId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $value;

    /**
     * @var string
     */
    public $harmonizedTariffCode;

    /**
     * @var string
     */
    public $countryOfOrigin;
}