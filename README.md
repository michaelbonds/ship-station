# ShipStation Api Wrapper for PHP

## Install
---
```
composer require michaelb/ship-station
```

## Docs
---

Using ShipStationApi
```php

use MichaelB\ShipStation\ShipStationApi;

$apiKey = ''; // Your ShipStation Api Key
$apiSecret = ''; // Your ShipStation Api Secret
$options = []; // Options to be merged into the normal GuzzleHttp\Client options

// ShipStationApi Extends GuzzleHttp\Client
$shipstation = new ShipStationApi($apiKey, $apiSecret, $options);

/*
 * Get a service instance
 */
 
// Orders
$orderService = $shipstation->orders;

// Products
$products = $shipstation->products;

// ...

/*
 * Use the service
 */
$order = $orderService->getOrder('1234');

// All service methods return a GuzzleHttp\Psr7\Response object
$json = $order->getBody(); // { 'order': {...} }
$status = $order->getStatusCode(); // 200
```
