<?php
namespace App\Http\Models;
class Modul_list extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'modul_list';
    public function modulCategory() {
         return $this->belongsTo('App\Http\Models\Modul_category', 'id_category');
    }
}
