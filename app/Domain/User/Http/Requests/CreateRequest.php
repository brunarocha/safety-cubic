<?php

namespace App\Domain\Invoices\Http\Requests\Admins\Drafts;

use \Illuminate\Support\Facades\Validator;
/**
 * Class CreateRequest
 * @package App\Domain\Invoices\Http\Requests
 */
class CreateRequest
{

    public function make($params){
        return Validator::make(
            $params,
            $this->rules(),
            $this->messages()
        );
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            //'draft_id.required' => 'The field Draft is required',
            //'packlist_products_index.required' => 'The field Packlist is required',
            'english_description.max' => 'The field English Description can not be longer than :max characters.',
            'portuguese_description.max' => 'The field Portuguese Description can not be longer than :max characters.',
            'ncm.max' => 'The field NCM can not be longer than :max characters.',
            'part_number.max' => 'The field Part Number can not be longer than :max characters.',
            'serial_number.max' => 'The field Serial Number can not be longer than :max characters.',
            'aplication.max' => 'The field Application can not be longer than :max characters.',
            'state_registration.max' => 'The field State Registration can not be longer than :max characters.',
            'main_function.max' => 'The field Main Function can not be longer than :max characters.',
            'secondary_function.max' => 'The field Secondary Function can not be longer than :max characters.',
            'where_be_used.max' => 'The field Where it will be used? can not be longer than :max characters.',
            'whitch_machine.max' => 'The field Whitch Machine can not be longer than :max characters.',
            'mechanical_eletric.max' => 'The field Type can not be longer than :max characters.',
            'type_currents.max' => 'The field Type Currents can not be longer than :max characters.',
            'draft_obs.max' => 'The field Note can not be longer than :max characters.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'draft_id' => 'required',
            //'packlist_products_index' => 'required',
            'english_description' => 'max:45',
            'portuguese_description' => 'max:45',
            'ncm' => 'max:191',
            'part_number' => 'max:45',
            'serial_number' => 'max:45',
            'aplication' => 'max:45',
            'state_registration' => 'max:45',
            'main_function' => 'max:45',
            'secondary_function' => 'max:45',
            'where_be_used' => 'max:45',
            'whitch_machine' => 'max:45',
            'mechanical_eletric' => 'max:45',
            'type_currents' => 'max:45',
            'draft_obs' => 'max:191',
        ];
    }
}
