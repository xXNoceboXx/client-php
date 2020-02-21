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
class NewProductField implements JsonSerializable
{
    /**
     * Name of the field
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * When field_type is either set or enum, possible options must be supplied as a JSON-encoded
     * sequential array, for example: ["red","blue","lilac"]
     * @var string|null $options public property
     */
    public $options;

    /**
     * Type of the field.<dl class="fields-list"><dt>varchar</dt><dd>Text (up to 255
     * characters)</dd><dt>varchar_auto</dt><dd>Autocomplete text (up to 255
     * characters)</dd><dt>text</dt><dd>Long text (up to 65k characters)</dd><dt>double</dt><dd>Numeric
     * value</dd><dt>monetary</dt><dd>Monetary field (has a numeric value and a currency
     * value)</dd><dt>date</dt><dd>Date (format YYYY-MM-DD)</dd><dt>set</dt><dd>Options field with a
     * possibility of having multiple chosen options</dd><dt>enum</dt><dd>Options field with a single
     * possible chosen option</dd><dt>user</dt><dd>User field (contains a user ID of another Pipedrive
     * user)</dd><dt>org</dt><dd>Organization field (contains an organization ID which is stored on the
     * same account)</dd><dt>people</dt><dd>Person field (contains a product ID which is stored on the same
     * account)</dd><dt>phone</dt><dd>Phone field (up to 255 numbers and/or
     * characters)</dd><dt>time</dt><dd>Time field (format HH:MM:SS)</dd><dt>timerange</dt><dd>Time-range
     * field (has a start time and end time value, both HH:MM:SS)</dd><dt>daterange</dt><dd>Date-range
     * field (has a start date and end date value, both YYYY-MM-DD)</dd></dl>
     * @required
     * @maps field_type
     * @var string $fieldType public property
     */
    public $fieldType;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name      Initialization value for $this->name
     * @param string $options   Initialization value for $this->options
     * @param string $fieldType Initialization value for $this->fieldType
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->name      = func_get_arg(0);
            $this->options   = func_get_arg(1);
            $this->fieldType = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']       = $this->name;
        $json['options']    = $this->options;
        $json['field_type'] = $this->fieldType;

        return $json;
    }
}
