<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodRecipe extends Model
{
    use HasFactory,SoftDeletes;
    protected $appends = ['category_names' , 'photo_url'];

    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }
    public function cookingProcesses(){
        return $this->hasMany(CookingProcess::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function getCategoryNamesAttribute(){
        return implode(", ", $this->categories->pluck('name')->all());
    }

    public function getPhotoUrlAttribute(){
        return env('APP_URL').':8000'.'/storage'.'/foodRecipe/'.$this->photo;
    }

    // public function getUserNameAttribute(){
    //     return $this->user->name ;
    // }
}
