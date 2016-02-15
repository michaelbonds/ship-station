<?php

namespace MichaelB\ShipStation\Endpoints;


use MichaelB\ShipStation\ShipStationApi;

abstract class BaseEndpoint
{
    /**
     * @var
     */
    protected $api;

    /**
     * @var string
     */
    protected $endpoint = '';

    /**
     * BaseEndpoint constructor.
     *
     * @param ShipStationApi $api
     */
    public function __construct(ShipStationApi $api)
    {
        $this->api = $api;
    }

    /**
     * @param string $endpoint_extension
     * @param array  $options
     * @return \GuzzleHttp\Psr7\Response
     */
    protected function get($endpoint_extension = '', $options = [])
    {
        return $this->api->get($this->endpoint.$endpoint_extension, $options);
    }

    /**
     * @param string $endpoint_extenstion
     * @param array  $options
     * @return \GuzzleHttp\Psr7\Response
     */
    protected function post($endpoint_extenstion = '', $options = [])
    {
        return $this->api->post($this->endpoint.$endpoint_extenstion, $options);
    }

    /**
     * @param string $endpoint_extension
     * @param array  $options
     * @return \GuzzleHttp\Psr7\Response
     */
    protected function put($endpoint_extension = '', $options = [])
    {
        return $this->api->put($this->endpoint.$endpoint_extension, $options);
    }

    /**
     * @param string $endpoint_extension
     * @param array  $options
     * @return \GuzzleHttp\Psr7\Response
     */
    protected function delete($endpoint_extension = '', $options = [])
    {
        return $this->api->delete($this->endpoint.$endpoint_extension, $options);
    }
}