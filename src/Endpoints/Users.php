<?php

namespace MichaelB\ShipStation\Endpoints;


class Users extends BaseEndpoint
{
    protected $endpoint = '/users';

    /**
     * @param bool|false $showInactive
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getList($showInactive = false)
    {
        return $this->get('', ['query' => compact('showInactive')]);
    }
}