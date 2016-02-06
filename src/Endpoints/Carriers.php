<?php

namespace MichaelB\ShipStation\Endpoints;

use GuzzleHttp\Psr7\Request;
use MichaelB\ShipStation\ShipStationApi;

class Carriers extends BaseEndpoint
{
    /**
     * @var string
     */
    protected $endpoint = '/carriers';

    /**
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getList()
    {
        $response = $this->get();
        return $response->getBody();
    }
}