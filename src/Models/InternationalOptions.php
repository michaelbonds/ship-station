<?php


namespace MichaelB\ShipStation\Models;


class InternationalOptions extends BaseModel
{
    /**
     * @value merchandise|documents|gift|returned_goods|sample
     * @var string
     */
    public $contents;

    /**
     * An array of Customs Items
     * @var array CustomsItem
     */
    public $customsItems;

    /**
     * @value return_to_sender|treat_as_abandoned
     * @var string
     */
    public $nonDelivery;
}