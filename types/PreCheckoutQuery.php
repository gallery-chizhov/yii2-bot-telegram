<?php

namespace aki\telegram\types;

use aki\telegram\base\Type;

/**
 * This object represents a pre checkout query.
 */
class PreCheckoutQuery extends Type
{
    /**
     * Unique identifier of query.
     * @var int
     */
    public $id;

    /**
     * Optional. Sender, empty for messages sent to channels
     * @var From
     */
    public $_from;

    /**
     * Three-letter ISO 4217 currency code.
     * @var string
     */
    public $currency;

    /**
     * Total price in the smallest units of the currency (integer, not float/double).
     * @var integer
     */
    public $total_amount;

    /**
     * Bot specified invoice payload.
     * @var string
     */
    public $invoice_payload;

    /**
     * Gets the $_from property.
     * @return From
     */
    public function getFrom(): From
    {
        return $this->_from;
    }

    /**
     * Setup the $_form property.
     * @param array $value
     * @return void
     */
    public function setFrom(array $value): void
    {
        $this->_from = new From($value);
    }
}