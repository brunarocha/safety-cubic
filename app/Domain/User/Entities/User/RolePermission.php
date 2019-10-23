<?php
/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */

namespace App\Domain\User\Entities\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolePermission
 * @package App\Domain\User\Entities\User
 */
class RolePermission extends Model
{

    protected $table = 'roles_permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'permission_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


}
