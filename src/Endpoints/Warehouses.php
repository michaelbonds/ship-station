<?php

namespace MichaelB\ShipStation\Endpoints;


use MichaelB\ShipStation\Models\Warehouse;

class Warehouses extends BaseEndpoint
{
    protected $endpoint = '/warehouses';

    /**
     * @param string $warehouseId
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getWarehouse($warehouseId = '')
    {
        return $this->get($warehouseId);
    }

    /**
     * @param Warehouse $warehouse
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function updateWarehouse(Warehouse $warehouse)
    {
        return $this->put($warehouse->warehouseId, ['form_params' => $warehouse->toArray()]);
    }

    /**
     * @param Warehouse $warehouse
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function createWarehouse(Warehouse $warehouse)
    {
        return $this->post('createwarehouse', ['form_params' => $warehouse->toArray()]);
    }

    /**
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getList()
    {
        return $this->get();
    }
}