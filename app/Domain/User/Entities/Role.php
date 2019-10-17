<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\User\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * @package App\Domain\User\Entities
 */
class Role extends Model
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


}
