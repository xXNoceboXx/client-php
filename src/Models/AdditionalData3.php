<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class AdditionalData3 implements JsonSerializable
{
    /**
     * The Cc email of the Deal
     * @maps dropbox_email
     * @var string|null $dropboxEmail public property
     */
    public $dropboxEmail;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $dropboxEmail Initialization value for $this->dropboxEmail
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->dropboxEmail = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['dropbox_email'] = $this->dropboxEmail;

        return $json;
    }
}
