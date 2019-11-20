<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\LearningUnit\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrainingMaterial
 * @package App\Domain\LearningUnit\Entities
 */
class TrainingMaterial extends Model
{

    protected $table = 'trainings_materials';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'file',
        'training_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


}
