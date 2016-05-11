<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    protected $table = 'page';
    
    public function getAdminAdd() {
        try{
            return $this->belongsTo('App\Http\Models\Admin','id_admin_add');
        }  catch (Exception $e){
            return NULL;
        }
    }
    public function getAdminEdit() {
        try{
            return $this->belongsTo('App\Http\Models\Admin','id_admin_edit');
        }  catch (Exception $e){
            return NULL;
        }
    }
    public function getCate() {
        try{
            return Page::select('id', 'id_page', 'title', 'url')->where('id', $this->id_page)->first();
        }  catch (Exception $e){
            return NULL;
        }
    }
}
