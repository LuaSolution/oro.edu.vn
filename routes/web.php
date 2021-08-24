<?php

Route::middleware(['runall', 'locale'])->group(function () {
    Route::get('/', 'MainController@getHome')->name('getHome');
    Route::get('change-language/{language}', 'MainController@changeLanguage')->name('user.change-language');
    Auth::routes();

    // Admin ***************************************
    Route::prefix('/ad')->group(function () {

        Route::get('/login', 'AdminController@getLogin')->name('adgetLogin');
        Route::post('/login', 'AdminController@postLogin')->name('adpostLogin');

        Route::middleware(['check_admin'])->group(function () {

            // Home
            Route::get('/', 'AdminController@getHome')->name('adgetHome');
            Route::post('/config', 'AdminController@updateConfig')->name('adupdateConfig');

            // News
            Route::get('/news-add', 'AdminController@getAddNews')->name('adgetAddNews');
            Route::post('/news-add', 'AdminController@postAddNews')->name('adpostAddNews');
            Route::get('/news-edit/{id}', 'AdminController@getEditNews')->name('adgetEditNews');
            Route::post('/news-edit/{id}', 'AdminController@postEditNews')->name('adpostEditNews');
            Route::get('/news', 'AdminController@getListNews')->name('adgetListNews');
            Route::get('/news-del/{id}', 'AdminController@getDelNews')->name('adgetDelNews');
//contact
            Route::get('/contact-list', 'AdminController@getListContact')->name('adgetListContact');
            Route::get('/contact-edit/{id}', 'AdminController@getContact')->name('adgetEditContact');
            //order
            Route::get('/order-list', 'AdminController@getListOrder')->name('adgetListOrder');
            Route::get('/order-edit/{id}', 'AdminController@getOrder')->name('adgetEditOrder');
            Route::get('/order-confirm/{id}', 'AdminController@getConfimOrder')->name('adgetConfimOrder');
            // User
            Route::post('/user-add', 'AdminController@postAddUser')->name('adpostAddUser');
            Route::get('/user', 'AdminController@getListUser')->name('adgetListUser');
            Route::get('/user-del/{id}', 'AdminController@getDelUser')->name('adgetDelUser');
            Route::post('/update-password', 'AdminController@postUpdatePassword')->name('adpostUpdatePassword');

            Route::post('/upload-img', 'AdminController@uploadImage')->name('uploadImage');
        });

    });
    // END Admin ***********

    // FRONDEND ***********
    Route::get('/gioi-thieu', function () {
        return view('client.about');
    })->name('getIntro');
    Route::get('/lien-he', function () {
        return view('client.contact');
    })->name('getContact');
    Route::get('/dich-vu', function () {
        return view('client.service');
    })->name('getService');
    Route::get('/dat-sach', function () {
        return view('client.orderbook');
    })->name('getOrderBook');
    Route::post('/post-contact', 'MainController@postContact')->name('postContact');
    Route::post('/post-order', 'MainController@postOrder')->name('postOrder');
    Route::get('/tin-tuc', 'MainController@getAllNews')->name('getAllNews');
    Route::get('/tin-tuc/{news}', 'MainController@getNews')->name('getNews');
});
