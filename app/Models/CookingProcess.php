<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CookingProcess extends Model
{
    use HasFactory,SoftDeletes;

    protected $appends = ['photo_url'];

    public function foodRecipe(){
        return $this->belongsTo(FoodRecipe::class);
    }

    public function getPhotoUrlAttribute(){
        return env('APP_URL').':8000'.'/storage'.'/cookingProcess/'.$this->photo;
    }
}
