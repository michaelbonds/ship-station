<?php

namespace MichaelB\ShipStation\Models;


class Warehouse extends BaseModel
{
    /**
     * @var int
     */
    protected $warehouseId;

    /**
     * @var string
     */
    protected $warehouseName;

    /**
     * @var Address
     */
    protected $originAddress;

    /**
     * @var Address
     */
    protected $returnAddress;

    /**
     * @var string
     */
    protected $createDate;

    /**
     * @var boolean
     */
    protected $isDefault;

    /**
     * @param $value
     */
    protected function setReturnAddressAttribute($value)
    {
        $this->returnAddress = $this->resolveAddress($value);
    }

    /**
     * @param $value
     */
    protected function setOriginAddressAttribute($value)
    {
        $this->originAddress = $this->resolveAddress($value);
    }

    /**
     * @param $address
     * @return Address
     */
    private function resolveAddress($address)
    {
        return ($address instanceof Address ? $address : new Address($address));
    }
}