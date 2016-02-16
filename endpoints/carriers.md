### Accessing the Carriers endpoint

~~~
<?php
use MichaelB\ShipStation\ShipStationApi;

$apiKey = '1l2kh...';
$apiSecret = '12lk3j3k4...';
$options = [];

// Initialize the api
$shipstation = new ShipStationApi($apiKey, $apiSecret, $options);

// Grab the endpoint via property
$carriers_endpoint = $shipstation->carriers;

// or via method;
$carriers_endpoint = $shipstation->getCarriersService();

// or instantiate directly and pass your instance of the ShipStationApi
use MichaelB\ShipStationApi\Endpoints\Carriers;
$carriers_endpoint = new Carriers($shipstation);
~~~
