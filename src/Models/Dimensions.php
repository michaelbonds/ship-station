<?php


namespace MichaelB\ShipStation\Models;


class Dimensions extends BaseModel
{
    /**
     * The length of the package
     * @var int
     */
    public $length;

    /**
     * The Width of the package
     * @var int
     */
    public $width;

    /**
     * The height of the package
     * @var int
     */
    public $height;

    /**
     * The measurement units
     * @var string
     */
    public $units;
}