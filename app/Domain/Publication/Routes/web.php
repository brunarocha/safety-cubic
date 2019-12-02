<?php


Route::middleware(['auth'])->group(function () {

    Route::resource('cadastros/publicacoes', 'Publication\Admin\PublicationController')->names([
        'index'   => 'publication.admin.index',
        'create'  => 'publication.admin.create',
        'store'   => 'publication.admin.store',
        'edit'    => 'publication.admin.edit',
        'update'  => 'publication.admin.update',
        'destroy' => 'publication.admin.delete',
        'show'    => 'publication.admin.show',
    ]);

});