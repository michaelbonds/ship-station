<?php


namespace MichaelB\ShipStation;


class ShipStationApi
{
    /**
     * @var string
     */
    protected $base_url = 'https://ssapi.shipstation.com';


    /**
     * @var string
     */
    private $token;

    public function __construct($api_key = '', $api_secret = '')
    {
        $this->token = base64_encode("$api_key:$api_secret");
        dd($this->token);
    }

}