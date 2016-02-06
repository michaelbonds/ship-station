<?php


namespace MichaelB\ShipStation\Endpoints;


use MichaelB\ShipStation\Models\AdvancedOptions;
use MichaelB\ShipStation\Models\Dimensions;
use MichaelB\ShipStation\Models\InsuranceOptions;
use MichaelB\ShipStation\Models\InternationalOptions;
use MichaelB\ShipStation\Models\Order;
use MichaelB\ShipStation\Models\Weight;

class Orders extends BaseEndpoint
{
    protected $endpoint = '/orders/';

    /**
     * Get a single order
     *
     * @param string $order_id
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getOrder($order_id = '')
    {
        return $this->get($order_id);
    }

    /**
     * Delete an order
     *
     * @param string $order_id
     * @return \GuzzleHttp\Psr7\Response
     */
    public function deleteOrder($order_id = '')
    {
        return $this->delete($order_id);
    }

    /**
     * Add a tag for an order
     *
     * @param int $order_id
     * @param int $tag_id
     * @return \GuzzleHttp\Psr7\Response
     */
    public function addTag($order_id, $tag_id)
    {
        return $this->post('addTag', [
            'body' => [
                'orderId' => $order_id,
                'tagId' => $tag_id
            ]
        ]);
    }

    public function assignUser($order_ids = [], $user_id = '')
    {
        return $this->post('assignUser', [
            'body' => [
                'orderIds' => $order_ids,
                'userId' => $user_id
            ]
        ]);
    }

    /**
     * @param int                       $order_id
     * @param string                    $carrier_code
     * @param string                    $service_code
     * @param string                    $package_code
     * @param string                    $confirmation
     * @param string                    $ship_date
     * @param Weight|null               $weight
     * @param Dimensions|null           $dimensions
     * @param InsuranceOptions|null     $insurance_options
     * @param InternationalOptions|null $international_options
     * @param AdvancedOptions|null      $advanced_options
     * @param bool|false                $test_label
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function createLabelForOrder($order_id, $carrier_code = '', $service_code = '',
        $package_code = '', $confirmation = '', $ship_date = '', Weight $weight = null, Dimensions $dimensions = null,
        InsuranceOptions $insurance_options = null, InternationalOptions $international_options = null, AdvancedOptions
        $advanced_options = null, $test_label = false)
    {
        return $this->post('createlabelfororder', [
            'body' => [
                'orderId'=> $order_id,
                'carrierCode' => $carrier_code,
                'serviceCode' => $service_code,
                'packageCode' => $package_code,
                'confirmation' => $confirmation,
                'shipDate' => $ship_date,
                'weight' => $weight,
                'dimensions' => $dimensions,
                'insuranceOptions' => $insurance_options,
                'internationalOptions' => $international_options,
                'advancedOptions' => $advanced_options,
                'testLabel' => $test_label
            ]
        ]);

    }

    /**
     * Create a single order
     *
     * @param Order $order
     * @return \GuzzleHttp\Psr7\Response
     */
    public function createOrder(Order $order)
    {
        return $this->post('createorder', [
            'form_params' => $order->toArray()
        ]);
    }

    /**
     * Create multiple orders in one request
     *
     * @param array $orders
     * @return \GuzzleHttp\Psr7\Response
     */
    public function createOrders($orders = [])
    {
        return $this->post('createorders', [
            'form_params' => $orders->toArray()
        ]);
    }

    /**
     * Hold an order until a date
     *
     * @param string $order_id
     * @param string $hold_until_date
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function holdUntil($order_id = '', $hold_until_date = '')
    {
        return $this->post('holduntil', [
            'form_params' => [
                'orderid' => $order_id,
                'holdUntil' => $hold_until_date
            ]
        ]);
    }

    /**
     * Get a filtered listing of orders
     *
     * @param array $query
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getListing($query = [])
    {
        return $this->get('', [
            'query' => $query
        ]);
    }

    /**
     * get a listing of orders by tag
     *
     * @param array $query
     * @return \GuzzleHttp\Psr7\Response
     */
    public function listByTag($query = [])
    {
        return $this->get('listbytag', [
            'query' => $query
        ]);
    }

    /**
     * @param int        $order_id
     * @param string     $carrier_code
     * @param string     $ship_date
     * @param string     $tracking_number
     * @param bool|false $notify_customer
     * @param bool|false $notify_sales_channel
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function markAsShipped($order_id, $carrier_code = '', $ship_date = '', $tracking_number = '', $notify_customer = false, $notify_sales_channel = false)
    {
        return $this->post('markasshipped', [
            'form_params' => [
                'orderId' => $order_id,
                'carrierCode' => $carrier_code,
                'shipDate' => $ship_date,
                'trackingNumber' => $tracking_number,
                'notifyCustomer' => $notify_customer,
                'notifySalesChannel' => $notify_sales_channel,
            ]
        ]);
    }

    /**
     * @param int $order_id
     * @param int $tag_id
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function removeTag($order_id, $tag_id)
    {
        return $this->post('removeTag', [
            'form_params' => [
                'orderId' => $order_id,
                'tagId' => $tag_id
            ]
        ]);
    }

    /**
     * @param int $order_id
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function restoreFromHold($order_id)
    {
        return $this->post('restorefromhold', [
            'form_params' => [
                'orderId' => $order_id
            ]
        ]);
    }

    /**
     * @param array $order_id
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function unassignUser($order_ids = [])
    {
        return $this->post('unassignuser', [
            'form_params' => [
                'orderIds' => $order_ids
            ]
        ]);
    }
}