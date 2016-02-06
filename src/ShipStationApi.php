<?php


namespace MichaelB\ShipStation;

use GuzzleHttp\Client;
use MichaelB\ShipStation\Endpoints\Orders;

class ShipStationApi Extends Client
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
        $token = base64_encode("$api_key:$api_secret");

        parent::__construct([
            'base_uri' => $this->base_url,
            'headers' => [
                'Authorization' => "Basic $token"
            ]
        ]);
    }

    public function getOrdersService()
    {
        return new Orders($this);
    }

    public function __get($name = '')
    {
        $method = 'get'.ucwords($name).'Service';

        if (method_exists($this, $method)) {
            return $this->$method();
        }

        return $this->$name;
    }

}
