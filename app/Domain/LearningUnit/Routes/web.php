<?php


Route::middleware(['auth'])->group(function () {

    /*Route::resource('courses', 'Course\CourseController')->names([
        'index'  => 'courses.index',
        'create' => 'courses.create',
        'store'  => 'courses.store',
        'edit'   => 'courses.edit',
        'delete' => 'courses.delete',
        'show'   => 'courses.show',
    ]);*/

    Route::resource('student/trainings', 'Student\Training\TrainingController')->names([
        'index'  => 'student.trainings.index',
        'show'   => 'student.trainings.show',
    ]);

//    Route::get('student/trainings/', 'Training\TrainingController@index')->name('student.trainings.index');
//    Route::get('student/trainings/{id}', 'Training\TrainingController@show')->name('student.trainings.show');

});