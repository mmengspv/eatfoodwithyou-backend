<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodRecipe extends Model
{
    use HasFactory,SoftDeletes;
    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }
    public function cookingProcesses(){
        return $this->hasMany(CookingProcess::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
