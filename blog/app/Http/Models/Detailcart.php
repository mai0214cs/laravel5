<?php
namespace App\Http\Models;
class Detailcart extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'detailcart';
    public function getInfocart() {
         return $this->belongsTo('App\Http\Models\Infocart', 'id_cart');
    }
    public function getPage() {
         return $this->belongsTo('App\Http\Models\Page', 'id_page');
    }
}
