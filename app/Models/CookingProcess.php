<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CookingProcess extends Model
{
    use HasFactory,SoftDeletes;

    public function foodRecipe(){
        return $this->belongsTo(FoodRecipe::class);
    }
}
