<?php

namespace App\Http\Controllers;
use App\Http\Models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewsCategoryController extends BaseController
{
    private $data;
    function index(){
        $this->data['items'] = Page::where('type',3)->orderBy('id', 'desc')->get();
        return view('Admin.News.newscate_index',$this->data);
    }
    function update($id=0){
        $this->data['items'] = Page::where([['type',3],['id',$id]])->get();
        return view('Admin.News.newscate_update',$this->data);
    }
}
