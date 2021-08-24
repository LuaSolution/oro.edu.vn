<?php

use Illuminate\Http\Request;

Route::get('/cache', function (Request $request) {
    \Artisan::call('cache:clear');
    \Artisan::call('route:cache');
    \Artisan::call('config:cache');
    return \Artisan::output();
});
