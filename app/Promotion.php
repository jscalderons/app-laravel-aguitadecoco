<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public $timestamps = false;
    protected $fillable = ['description', 'discount', 'started_at', 'ended_at'];

    public function products() {
        return $this->belongsToMany('\App\Product');
    }
}
