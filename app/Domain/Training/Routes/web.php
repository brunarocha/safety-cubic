<?php


//Route::middleware(['auth'])->group(function () {

    //Route::get(trans('training::routes.trainings'), 'Training\Admin\TrainingController@index')->name('admin.trainings.index');
    //Route::get('treinamentos', 'Training\Admin\TrainingController@index')->name('admin.trainings.index');

    /*Route::resource('trainings', 'Training\TrainingController')->names([
        'index'  => 'trainings.index',
        'create' => 'trainings.create',
        'store'  => 'trainings.store',
        'edit'   => 'trainings.edit',
        'delete' => 'trainings.delete',
        'show'   => 'trainings.show',
    ]);*/

    Route::resource('institucional/treinamentos', 'Training\Admin\TrainingController')->names([
        'index'  => 'admin.trainings.index',
        'create' => 'admin.trainings.create',
        'store'  => 'admin.trainings.store',
        'edit'   => 'admin.trainings.edit',
        'update' => 'admin.trainings.update',
        'delete' => 'admin.trainings.delete',
        'show'   => 'admin.trainings.show',
    ]);



//});