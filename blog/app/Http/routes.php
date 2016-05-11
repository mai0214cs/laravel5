<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $datas = App\Http\Models\Product::all();
    
   

    foreach ($datas as $data) {
         print_r($data->InfoPage->title);
    //echo $data->getTitle();
}
    /*
    $collection = collect([1, 2, 3])->avg();
    print_r($collection);*/
    return view('welcome');
});
