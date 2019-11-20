<?php
/**
 * @author: Bruna Rocha
 * @date: 04/11/2019
 */

namespace App\Domain\LearningUnit\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrainingUser
 * @package App\Domain\LearningUnit\Entities
 */
class TrainingUser extends Model
{

    protected $table = 'trainings_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'role_id',
        'training_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


}
