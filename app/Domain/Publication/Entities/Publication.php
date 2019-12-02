<?php
/**
 * @author: Bruna Rocha
 * @date: 02/12/2019
 */

namespace App\Domain\Publication\Entities;

use App\Domain\User\Entities\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Publication
 * @package App\Domain\Publication\Entities
 */
class Publication extends Model
{
    protected $table = 'publications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'publication',
        'date',
        'image',
        'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }


}
