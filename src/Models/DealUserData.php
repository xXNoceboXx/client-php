<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 *The User who is associated with the Deal
 */
class DealUserData implements JsonSerializable
{
    /**
     * The ID of the User
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The Name of the User
     * @var string|null $name public property
     */
    public $name;

    /**
     * The email of the User
     * @var string|null $email public property
     */
    public $email;

    /**
     * If the User has a picture or not
     * @maps has_pic
     * @var bool|null $hasPic public property
     */
    public $hasPic;

    /**
     * The User picture hash
     * @maps pic_hash
     * @var string|null $picHash public property
     */
    public $picHash;

    /**
     * If the User is activated or not
     * @maps active_flag
     * @var bool|null $activeFlag public property
     */
    public $activeFlag;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id         Initialization value for $this->id
     * @param string  $name       Initialization value for $this->name
     * @param string  $email      Initialization value for $this->email
     * @param bool    $hasPic     Initialization value for $this->hasPic
     * @param string  $picHash    Initialization value for $this->picHash
     * @param bool    $activeFlag Initialization value for $this->activeFlag
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->id         = func_get_arg(0);
            $this->name       = func_get_arg(1);
            $this->email      = func_get_arg(2);
            $this->hasPic     = func_get_arg(3);
            $this->picHash    = func_get_arg(4);
            $this->activeFlag = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']          = $this->id;
        $json['name']        = $this->name;
        $json['email']       = $this->email;
        $json['has_pic']     = $this->hasPic;
        $json['pic_hash']    = $this->picHash;
        $json['active_flag'] = $this->activeFlag;

        return $json;
    }
}
