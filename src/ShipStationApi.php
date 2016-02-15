<?php


namespace MichaelB\ShipStation;

use GuzzleHttp\Client;
use MichaelB\ShipStation\Endpoints\Carriers;
use MichaelB\ShipStation\Endpoints\Customers;
use MichaelB\ShipStation\Endpoints\Orders;
use MichaelB\ShipStation\Endpoints\Products;
use MichaelB\ShipStation\Endpoints\Shipments;
use MichaelB\ShipStation\Endpoints\Stores;
use MichaelB\ShipStation\Endpoints\Users;
use MichaelB\ShipStation\Endpoints\Warehouses;
use MichaelB\ShipStation\Endpoints\Webhooks;
use MichaelB\ShipStation\Models\Warehouse;

class ShipStationApi Extends Client
{
    /**
     * @var string
     */
    protected $base_url = 'https://ssapi.shipstation.com';

    /**
     * ShipStationApi constructor.
     *
     * @param string $api_key
     * @param string $api_secret
     * @param array  $options
     */
    public function __construct($api_key = '', $api_secret = '', $options = [])
    {
        $token = base64_encode("$api_key:$api_secret");

        $config = array_merge([
            'base_uri' => $this->base_url,
            'headers' => [
                'Authorization' => "Basic $token"
            ]
        ], $options);

        parent::__construct($config);
    }

    /**
     * @return Webhooks
     */
    public function getWebhooksService()
    {
        return new Webhooks($this);
    }

    /**
     * @return Warehouses
     */
    public function getWarehousesService()
    {
        return new Warehouses($this);
    }

    /**
     * @return Users
     */
    public function getUsersService()
    {
        return new Users($this);
    }

    /**
     * @return Stores
     */
    public function getStoresService()
    {
        return new Stores($this);
    }

    /**
     * @return Shipments
     */
    public function getShipmentsService()
    {
        return new Shipments($this);
    }

    /**
     * @return Products
     */
    public function getProductsService()
    {
        return new Products($this);
    }

    /**
     * @return Customers
     */
    public function getCustomersService()
    {
        return new Customers($this);
    }

    /**
     * @return Carriers
     */
    public function getCarriersService()
    {
        return new Carriers($this);
    }

    /**
     * @return Orders
     */
    public function getOrdersService()
    {
        return new Orders($this);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function __get($name = '')
    {
        $method = 'get'.ucwords($name).'Service';

        if (method_exists($this, $method)) {
            return $this->$method();
        }

        return $this->$name;
    }

}
