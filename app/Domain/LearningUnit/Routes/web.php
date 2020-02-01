<?php

Route::middleware(['auth'])->group(function () {

    Route::resource('student/trainings', 'Student\Training\TrainingController')->names([
        'index'  => 'student.trainings.index',
        'show'   => 'student.trainings.show',
    ]);

    Route::get('student/trainings/{id}/material', 'Student\Training\Material\MaterialController@index')->name('student.trainings.material.index');

//    Route::get('student/trainings/', 'Training\TrainingController@index')->name('student.trainings.index');
//    Route::get('student/trainings/{id}', 'Training\TrainingController@show')->name('student.trainings.show');

});