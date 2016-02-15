<?php


namespace MichaelB\ShipStation\Endpoints;


class Shipments extends BaseEndpoint
{
    protected $endpoint = '/shipments';

    /**
     * Get a list o
     * @param array $query
     * @return \GuzzleHttp\Psr7\Response
     */
    public function listShipments($query = [])
    {
        return $this->get('', ['body' => $query]);
    }

    /**
     *
     * @param array $label
     * @return \GuzzleHttp\Psr7\Response
     */
    public function createLabel($label = [])
    {
        return $this->post('createlabel', ['body' => $label]);
    }

    /**
     *
     * @param array $query
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getRates($query = [])
    {
        return $this->post('getrates', ['body' => $query]);
    }

    /**
     * Voids the specified label by shipmentId
     *
     * @param string $shipmentId
     * @return \GuzzleHttp\Psr7\Response
     */
    public function voidLabel($shipmentId = '')
    {
        return $this->post('voidlabel', ['body' => compact('shipmentId')]);
    }
}