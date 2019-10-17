<?php

namespace App\Support\Entities;

use App\Domains\Users\Contracts\Protections\ProtectPermissionInterface;
use App\Domains\Users\Traits\ProtectionPermissionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

/**
 * This file is part of Protection Hofund,
 * a role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Hofund\Protection
 */
class ProtectionPermission extends Model implements ProtectPermissionInterface
{
    use ProtectionPermissionTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;
    
    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('protection.permissions_table');
    }
}