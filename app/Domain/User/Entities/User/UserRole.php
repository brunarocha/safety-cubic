<?php
/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */

namespace App\Domain\User\Entities\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserRole
 * @package App\Domain\User\Entities\User
 */
class UserRole extends Model
{

    protected $table = 'users_roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


}
