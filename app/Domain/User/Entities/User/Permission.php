<?php
/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */

namespace App\Domain\User\Entities\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 * @package App\Domain\User\Entities\User
 */
class Permission extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }

}
