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

    Route::get('student/courses/{id}', 'Course\CourseController@show')->name('student.courses.show');

});