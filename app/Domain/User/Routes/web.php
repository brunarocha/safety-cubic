<?php

Route::get('/teste', function () {
    return view('welcome');
});

//Route::middleware(['auth'])->group(function () {

    Route::resource('users', 'Users\UserController')->names([
        'index'  => 'users.index',
        'create' => 'users.create',
        'store'  => 'users.store',
        'edit'   => 'users.edit',
        'delete' => 'users.delete',
        'show'   => 'users.show',
    ]);

//});