<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title', 
        'description', 
        'price'
    ];
    protected $appends = ['discount'];


    public function promotions() 
    {
        return $this->belongsToMany('App\Promotion');
    }

    public function getDiscountAttribute() 
    {
        $today = now();
        $promotion = $this->promotions()
            ->where('started_at', '<=', $today)
            ->where('ended_at', '>=', $today)
            ->first();

        if ($promotion) {
            $discount = $promotion->discount / 100;
            $price = $this->price;
            return $price - ($price * $discount);
        }

        return null;
    }
}
