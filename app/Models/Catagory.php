<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\FoodRecipe;

class Catagory extends Model
{
    use HasFactory, SoftDeletes;

    protected $touches = ['food_recipes'];

    protected $fillable = ['name'];

    public function food_recipes(){
        return $this->belongsToMany(FoodRecipe::class)
                    ->withTimestamps();
    }
}
