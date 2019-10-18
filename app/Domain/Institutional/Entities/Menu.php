<?php
/**
 * @author: Bruna Rocha
 * @date: 18/10/2019
 */

namespace App\Domain\Institutional\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * @package App\Domain\Institutional\Entities
 */
class Menu extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order',
        'name',
        'display_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


}
