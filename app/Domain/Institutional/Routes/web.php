<?php


Route::resource('/', 'Institutional\InstitutionalController')->names([
    'index'  => 'users.index',
    'create' => 'users.create',
    'store'  => 'users.store',
    'edit'   => 'users.edit',
    'delete' => 'users.delete',
    'show'   => 'users.show',
]);

