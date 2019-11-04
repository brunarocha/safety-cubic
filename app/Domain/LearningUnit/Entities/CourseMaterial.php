<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\LearningUnit\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseMaterial
 * @package App\Domain\LearningUnit\Entities
 */
class CourseMaterial extends Model
{

    protected $table = 'courses_materials';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'file',
        'course_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


}
