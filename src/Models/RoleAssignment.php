<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 *The assignment data of the Role
 */
class RoleAssignment implements JsonSerializable
{
    /**
     * The ID of the parent Role
     * @maps parent_role_id
     * @var integer|null $parentRoleId public property
     */
    public $parentRoleId;

    /**
     * The name of the Role
     * @var string|null $name public property
     */
    public $name;

    /**
     * The User ID
     * @maps user_id
     * @var integer|null $userId public property
     */
    public $userId;

    /**
     * The Role ID
     * @maps role_id
     * @var integer|null $roleId public property
     */
    public $roleId;

    /**
     * Whether the Role is active or not
     * @maps active_flag
     * @var bool|null $activeFlag public property
     */
    public $activeFlag;

    /**
     * The assignment type
     * @var string|null $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $parentRoleId Initialization value for $this->parentRoleId
     * @param string  $name         Initialization value for $this->name
     * @param integer $userId       Initialization value for $this->userId
     * @param integer $roleId       Initialization value for $this->roleId
     * @param bool    $activeFlag   Initialization value for $this->activeFlag
     * @param string  $type         Initialization value for $this->type
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->parentRoleId = func_get_arg(0);
            $this->name         = func_get_arg(1);
            $this->userId       = func_get_arg(2);
            $this->roleId       = func_get_arg(3);
            $this->activeFlag   = func_get_arg(4);
            $this->type         = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['parent_role_id'] = $this->parentRoleId;
        $json['name']           = $this->name;
        $json['user_id']        = $this->userId;
        $json['role_id']        = $this->roleId;
        $json['active_flag']    = $this->activeFlag;
        $json['type']           = $this->type;

        return $json;
    }
}
