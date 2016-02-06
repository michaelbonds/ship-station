<?php

namespace MichaelB\ShipStation\Models;


class Order extends BaseModel
{

    /**
     * @var int
     */
    protected $orderId;

    /**
     * User defined identifier
     * @var string
     */
    protected $orderNumber;

    /**
     * @var string
     */
    protected $orderKey;

    /**
     * @var string
     */
    protected $orderDate;

    /**
     * @var string
     */
    protected $createDate;

    /**
     * @var string
     */
    protected $modifyDate;

    /**
     * @var string
     */
    protected $paymentDate;

    /**
     * @var string
     */
    protected $shipByDate;

    /**
     * @var string
     */
    protected $orderStatus;

    /**
     * @var string
     */
    protected $customerId;

    /**
     * @var string
     */
    protected $customerUsername;

    /**
     * @var string
     */
    protected $customerEmail;

    /**
     * @var Address
     */
    protected $billTo;

    /**
     * @var Address
     */
    protected $shipTo;

    /**
     * @var array OrderItems
     */
    protected $items;

    /**
     * @var int
     */
    protected $orderTotal;

    /**
     * @var int
     */
    protected $amountPaid;

    /**
     * @var int
     */
    protected $taxAmount;

    /**
     * @var int
     */
    protected $shippingAmount;

    /**
     * @var string
     */
    protected $customerNotes;

    /**
     * @var string
     */
    protected $internalNotes;

    /**
     * @var boolean
     */
    protected $gift;

    /**
     * @var string
     */
    protected $gitMessage;

    /**
     * @var string
     */
    protected $requestedShippingService;

    /**
     * @var string
     */
    protected $carrierCode;

    /**
     * @var string
     */
    protected $serviceCode;

    /**
     * @var string
     */
    protected $packageCode;

    /**
     * @var string
     */
    protected $confirmation;

    /**
     * @var string
     */
    protected $shipDate;

    /**
     * @var string
     */
    protected $holdUntilDate;

    /**
     * @var Weight
     */
    protected $weight;

    /**
     * @var Dimensions
     */
    protected $dimensions;

    /**
     * @var InsuranceOptions
     */
    protected $insuranceOptions;

    /**
     * @var InternationalOptions
     */
    protected $internationalOptions;

    /**
     * @var AdvancedOptions
     */
    protected $advancedOptions;

    /**
     * @var array int
     */
    protected $tagIds;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var boolean
     */
    protected $externallyFulfilled;

    /**
     * @var int
     */
    protected $externallyFulfilledBy;

    /**
     * @param $value
     */
    protected function setShipToAttribute($value)
    {
        $this->setAddress('shipTo', $value);
    }

    /**
     * @param $value
     */
    protected function setBillToAttribute($value)
    {
        $this->setAddress('billTo', $value);
    }

    /**
     * @param $name
     * @param $value
     */
    private function setAddress($name, $value)
    {
        if ($value instanceof Address) {
            $this->$name = $value;
        } else {
            $this->$name = new Address($value);
        }
    }

    /**
     * @param $value
     */
    protected function setWeightAttribute($value)
    {
        if ($value instanceof Weight) {
            $this->weight = $value;
        } else {
            $this->weight = new Weight($value);
        }

    }

    /**
     * @param $value
     */
    protected function setDimensionsAttribute($value)
    {
        if ($value instanceof Dimensions) {
            $thisdimensions = $value;
        } else {
            $this->dimensions = new Dimensions($value);
        }
    }

    /**
     * @param $value
     */
    protected function setInsuranceOptionsAttribute($value)
    {
        if ($value instanceof InsuranceOptions) {
            $this->insuranceOptions = $value;
        } else {
            $this->insuranceOptions = new InsuranceOptions($value);
        }
    }

    /**
     * @param $value
     */
    protected function setInternationalOptionsAttribute($value)
    {
        if ($value instanceof InternationalOptions) {
            $this->internationalOptions = $value;
        } else {
            $this->internationalOptions = new InternationalOptions($value);
        }
    }

    /**
     * @param $value
     */
    protected function setAdvancedOptionsAttribute($value)
    {
        if ($value instanceof AdvancedOptions) {
            $this->advancedOptions = $value;
        } else {
            $this->advancedOptions = new AdvancedOptions($value);
        }
    }
}