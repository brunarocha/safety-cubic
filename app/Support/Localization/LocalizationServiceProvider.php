<?php
/**
 * Localization.php
 *
 * @author Breno Pereira <breno.pereira@nextem.com.br>
 * @package Hofund
 */

namespace App\Support\Localization;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Auth;

/**
 * Class LocalizationServiceProvider.
 */
class LocalizationServiceProvider extends ServiceProvider
{
    /**
     * Start
     */
    public function boot()
    {
        Carbon::setLocale(app()->getLocale());
    }
}