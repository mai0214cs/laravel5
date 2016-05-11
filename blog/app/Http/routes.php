<?php
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'news'], function () {
        Route::get('list', ['as' => 'list', 'uses' => 'NewsListController@index']);
        Route::get('updatelist/{id?}', ['as' => 'updatelist', 'uses' => 'NewsListController@update']);
        Route::get('cate', ['as' => 'cate', 'uses' => 'NewsCategoryController@index']);
        Route::get('updatecate/{id?}', ['as' => 'updatecate', 'uses' => 'NewsCategoryController@update']);
    });
});








Route::get('/', function () {
    
    /*$datas = App\Http\Models\Product::all();
    foreach ($datas as $data) {
         print_r($data->InfoPage->title);
    }*/
    return view('welcome');
});
