<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Company\Entities;

use App\Domain\Company\Presenters\CompanyPresenter;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

/**
 * Class Company
 * @package App\Domain\Company\Entities
 */
class Company extends Model
{

    use PresentableTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'register',
        'fancy_name',
        'address',
        'address_number',
        'zip_code',
        'city',
        'state',
        'country',
        'email',
        'phone',
        'url_google_maps',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    protected $presenter =  CompanyPresenter::class;

}
