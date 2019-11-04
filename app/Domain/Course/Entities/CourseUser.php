<?php
/**
 * @author: Bruna Rocha
 * @date: 04/11/2019
 */

namespace App\Domain\Course\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseUser
 * @package App\Domain\Course\Entities
 */
class CourseUser extends Model
{

    protected $table = 'courses_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'role_id',
        'course_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


}
