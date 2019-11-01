<?php


Route::resource('/company', 'Company\CompanyController')->names([
    'index'  => 'company.index',
    'create' => 'company.create',
    'store'  => 'company.store',
    'edit'   => 'company.edit',
    'delete' => 'company.delete',
    'show'   => 'company.show',
]);

