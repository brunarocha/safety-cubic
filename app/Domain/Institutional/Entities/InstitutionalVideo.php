<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Institutional\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InstitutionalVideo
 * @package App\Domain\Institutional\Entities
 */
class InstitutionalVideo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'file',
        'title',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


}
