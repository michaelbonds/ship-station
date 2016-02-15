<?php


namespace MichaelB\ShipStation\Models;


class Store extends BaseModel
{
    /**
     * @var int
     */
    protected $storeId;

    /**
     * @var string
     */
    protected $storeName;

    /**
     * @var int
     */
    protected $marketplaceId;

    /**
     * @var string
     */
    protected $marketplaceName;

    /**
     * @var string
     */
    protected $email;

    /** * @var string */
    protected $integrationUrl;

    /**
     * @var boolean
     */
    protected $active;

    /**
     * @var string
     */
    protected $companyName;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $publicEmail;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var string
     */
    protected $refreshDate;

    /**
     * @var string
     */
    protected $lastRefreshAttempt;

    /**
     * @var string
     */
    protected $createDate;

    /**
     * @var string
     */
    protected $modifyDate;

    /**
     * @var boolean
     */
    protected $autoRefresh;

    /**
     * @var array
     */
    protected $statusMappings;
}
