<?php


Route::resource('/institucional/empresa', 'Company\CompanyController')->names([
    'index'  => 'company.index',
    'create' => 'company.create',
    'store'  => 'company.store',
    'edit'   => 'company.edit',
    'update' => 'company.update',
    'delete' => 'company.delete',
    'show'   => 'company.show',
]);

