<?php


namespace MichaelB\ShipStation\Endpoints;


class Customers extends BaseEndpoint
{
    protected $endpoint = '/customers';

    /**
     * Get a single customer by id
     * @param string $customerId
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getCustomer($customerId = '')
    {
        return $this->get($customerId);
    }

    /**
     * Get a listing of customers
     *
     * @param array $query
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getList($query = [])
    {
        return $this->get('', compact('query'));
    }
}