<?php

namespace MichaelB\ShipStation\Endpoints;

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
        return $this->get();
    }

    /**
     * @param string $carrierCode
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getCarrier($carrierCode = '')
    {
        return $this->get('getcarrier', ['query' => compact('carrierCode')]);
    }

    /**
     * @param string $carrierCode
     * @param int    $amount
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function addFunds($carrierCode = '', $amount = 0)
    {
        return $this->post('addfunds', ['body' => compact('carrierCode', 'amount')]);
    }

    /**
     * @param string $carrierCode
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function listPackages($carrierCode = '')
    {
        return $this->get('listpackages', ['query' => compact('carrierCode')]);
    }

    /**
     * @param string $carrierCode
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function listServices($carrierCode = '')
    {
        return $this->get('listservices', ['query' => compact('carrierCode')]);
    }
}
