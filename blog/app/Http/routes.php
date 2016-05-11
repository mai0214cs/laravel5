<?php
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'news'], function () {
        Route::get('list', ['as' => 'list', 'uses' => 'NewsListController@index']);
    });
});








Route::get('/', function () {
    
    /*$datas = App\Http\Models\Product::all();
    foreach ($datas as $data) {
         print_r($data->InfoPage->title);
    }*/
    return view('welcome');
});
