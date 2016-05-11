<?php
namespace App\Http\Models;
class Detail_attribute extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'detail_attribute';
    public function getGroup() {
         return $this->belongsTo('App\Http\Models\Group_attribute', 'id_group');
    }
}
