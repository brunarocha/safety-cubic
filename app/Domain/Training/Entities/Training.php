<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Entities;

use App\Domain\LearningUnit\Entities\TrainingMaterial;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Training
 * @package App\Domain\Training\Entities
 */
class Training extends Model
{
    protected $table = 'trainings';

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
        'objective',
        'target_public',
        'course_load',
        'payment',
        'program_content',
        'picture',
        'value',
        'category_id'
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
        return $this->hasMany(TrainingMaterial::class, 'course_id', 'id');
    }

    public function category()
    {
        return $this->hasOne(TrainingCategory::class, 'id', 'category_id');
    }


}
