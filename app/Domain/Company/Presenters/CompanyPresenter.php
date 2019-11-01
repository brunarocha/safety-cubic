<?php

namespace App\Domain\Company\Presenters;

use Laracasts\Presenter\Presenter;

class CompanyPresenter extends Presenter
{

    /**
     * return pattern: Address, Number, City - State
     * */
    public function fullAddress()
    {
        return $this->address.', '.$this->address_number.', '.$this->city. ' - '.$this->state;
    }
}