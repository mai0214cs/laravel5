<?php
namespace App\Http\Models;
class Comment extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'comment';
    public function getPage() {
         return $this->belongsTo('App\Http\Models\Comment', 'id_page');
    }
}
