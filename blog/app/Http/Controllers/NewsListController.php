<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsListController extends BaseController
{
    function index(){
        return view('Admin.News.newslist_index',array());
    }
}
