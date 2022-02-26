<?php

// Memberships Management
Route::group(['namespace' => 'Memberships'], function () {
    Route::resource('memberships', 'MembershipsController', ['except' => ['show']]);

    //For DataTables
    Route::post('memberships/get', 'MembershipsTableController')
        ->name('Memberships.get');
});
