<?php

    /*
     * Login
     * */
    Route::resource('login', 'Auth\LoginController')->names([
        'index'  => 'auth.login.index',
        'store'  => 'auth.login.store',
    ]);

    Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

    Route::get('register', 'User\UserController@create');


    Route::middleware(['auth'])->group(function () {

        /*
         * Users
         * */
        Route::resource('users', 'User\UserController')->names([
            'index'     => 'user.index',
            'create'    => 'user.create',
            'store'     => 'user.store',
            'edit'      => 'user.edit',
            'delete'    => 'user.delete',
            'show'      => 'user.show',
        ]);

    });