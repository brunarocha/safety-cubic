<?php


Route::resource('/', 'Institutional\InstitutionalController')->names([
    'index'  => 'institutional.index',
    'create' => 'users.create',
    'store'  => 'users.store',
    'edit'   => 'users.edit',
    'delete' => 'users.delete',
    'show'   => 'users.show',
]);

Route::prefix('consultoria')->group(function () {
    Route::get('/escolas', 'Institutional\InstitutionalController@consultingSchool')->name('consulting.schools');
    Route::get('/empresas', 'Institutional\InstitutionalController@consultingCompany')->name('consulting.companies');
});


Route::prefix('treinamentos')->group(function () {
    Route::get('/{name}', 'Training\TrainingController@index')->name('institutional.training.index');
    Route::get('/detail/{id}', 'Training\TrainingController@show')->name('institutional.training.show');
});

Route::prefix('publicacoes')->group(function () {
    Route::get('/', 'Publication\PublicationController@index')->name('institutional.publication.index');
    Route::get('/{id}', 'Publication\PublicationController@show')->name('institutional.publication.show');
});


Route::post('/contact', 'Institutional\InstitutionalController@contact')->name('institutional.contact');
Route::get('/contact', 'Institutional\InstitutionalController@viewcontact');
Route::get('/contactTeste', 'Institutional\InstitutionalController@viewcontactteste');
