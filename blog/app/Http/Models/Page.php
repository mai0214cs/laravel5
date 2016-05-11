<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    protected $table = 'page';
    
    public function adminAdd() {
         return $this->belongsTo('App\Http\Models\Admin', 'id_admin_add');
    }
    public function adminEdit() {
         return $this->belongsTo('App\Http\Models\Admin', 'id_admin_edit');
    }
}
