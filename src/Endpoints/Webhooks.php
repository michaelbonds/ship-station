<?php

namespace MichaelB\ShipStation\Endpoints;


class Webhooks extends BaseEndpoint
{
    /**
     * @var string
     */
    protected $endpoint = '/webhooks';

    /**
     * @param string $friendly_name
     * @param string $target_url
     * @param string $event
     * @param string $store_id
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function subscribe($friendly_name = '', $target_url = '', $event = '', $store_id = '')
    {
        return $this->post('subscribe', ['form_params' => compact('friendly_name', 'target_url', 'event', 'store_id')]);
    }

    /**
     * @param string $webhookId
     *
     * @return Webhooks
     */
    public function unsubscribe($webhookId = '')
    {
        return $this-delete($webhookId);
    }
}