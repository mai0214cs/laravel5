<?php

namespace App\Http\Controllers;
use App\Http\Models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewsListController extends BaseController
{
    private $data;
    function index(){
        $this->data['items'] = Page::where('type',4)->orderBy('id', 'desc')->get();
        return view('Admin.News.newslist_index',$this->data);
    }
    function update($id=0){
        $this->data['items'] = Page::where([['type',4],['id',$id]])->get();
        return view('Admin.News.newslist_update',$this->data);
    }
}
