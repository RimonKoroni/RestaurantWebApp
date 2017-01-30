<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $table = 'food_type';
    
    public $timestamps = false;

    protected $fillable = [
        'arabic_name', 'english_name', 'turkish_name',
    ];

    public function getName($local)
    {
    	if ($local == "en") {
    		return $this->attributes['english_name'];
    	} 

    	if ($local == "ar") {
    		return $this->attributes['arabic_name'];
    	} 

    	if ($local == "tr") {
    		return $this->attributes['turkish_name'];
    	}
    }
}
