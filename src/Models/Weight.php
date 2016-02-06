<?php


namespace MichaelB\ShipStation\Models;


class Weight extends BaseModel
{
    /**
     * The weight value
     * @var int
     */
    public $value;

    /**
     * The units used to weigh
     * @value pounds|ounces|grams
     * @var string
     */
    public $units;
}