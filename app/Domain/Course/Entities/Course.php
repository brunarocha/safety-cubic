<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Course\Entities;

use App\Domain\LearningUnit\Entities\CourseMaterial;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 * @package App\Domain\Course\Entities
 */
class Course extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_pt_br',
        'name_en',
        'description_pt_br',
        'description_en',
        'picture',
        'value',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function materials()
    {
        return $this->hasMany(CourseMaterial::class, 'course_id', 'id');
    }


}
