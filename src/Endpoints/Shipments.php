<?php


namespace MichaelB\ShipStation\Endpoints;


class Shipments extends BaseEndpoint
{
    protected $endpoint = '/shipments';

    /**
     * Get a list of shipments or query shipments.
     * @param array $query
     * @return \GuzzleHttp\Psr7\Response
     */
    public function listShipments($query = [])
    {
        return $this->get('', ['query' => $query]);
    }

    /**
     *
     * @param array $label
     * @return \GuzzleHttp\Psr7\Response
     */
    public function createLabel($label = [])
    {
        return $this->post('/createlabel', ['form_params' => $label]);
    }

    /**
     *
     * @param array $query
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getRates($query = [])
    {
        return $this->post('/getrates', ['form_params' => $query]);
    }

    /**
     * Voids the specified label by shipmentId
     *
     * @param string $shipmentId
     * @return \GuzzleHttp\Psr7\Response
     */
    public function voidLabel($shipmentId = '')
    {
        return $this->post('/voidlabel', ['form_params' => compact('shipmentId')]);
    }
}