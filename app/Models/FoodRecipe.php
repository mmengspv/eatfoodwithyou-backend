<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Catagory;

class FoodRecipe extends Model
{
    use HasFactory,SoftDeletes;
    protected $appends = ['catagory_names'];

    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }
    public function cookingProcesses(){
        return $this->hasMany(CookingProcess::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function catagorys(){
        return $this->belongsToMany(Catagory::class)
                    ->withTimestamps();
    }

    public function getCatagoryNamesAttribute(){
        return implode(", ", $this->catagorys->pluck('name')->all());
    }
}
