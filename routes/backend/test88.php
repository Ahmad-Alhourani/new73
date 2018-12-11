<?php

/**
 * Test88 Management
 * All route names are prefixed with 'admin.test88'.
 */
Route::group(
    [
        'namespace' => 'Test88',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Test88 CRUD
         */
        Route::resource('test88', 'Test88Controller');
    }
);
