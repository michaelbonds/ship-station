<?php


namespace MichaelB\ShipStation\Models;


class InsuranceOptions extends BaseModel
{
//    protected $attributes = [
//        'provider',
//        'insureShipment',
//        'insuredValue'
//    ];

    /**
     * @var string
     */
    public $provider;

    /**
     * @var bool
     */
    public $insureShipment;

    /**
     * @var int
     */
    public $insuredValue;
}