<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrainingCategory
 * @package App\Domain\Training\Entities
 */
class TrainingCategory extends Model
{
    protected $table = 'trainings_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_pt_br',
        'name_en',
        'name_slug_en',
        'name_slug_pt_br',
        'description_pt_br',
        'description_en',
        'picture',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function trainings()
    {
        return $this->hasMany(Training::class, 'category_id', 'id');
    }


}
