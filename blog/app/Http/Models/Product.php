<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Page;
class Product extends Model {
    protected $table = 'product';
    public function getTitle() {
        return Page::where('id', $this->id_page)->first()->title;
    } // Get 1 field 
    public function InfoPage() {
         return $this->belongsTo('App\Http\Models\Page', 'id_page');
    }
}
