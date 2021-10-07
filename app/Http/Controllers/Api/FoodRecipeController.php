<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodRecipeRequest;
use App\Http\Resources\FoodRecipeResource;
use App\Models\FoodRecipe;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FoodRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public  function __construct() {
        $this->middleware('auth:api', ['except' => ['index' , 'show','searchFoodRecipes','randomFoodRecipes','randomFoodRecipe']]) ;
    }

    public function index()
    {
        $foodRecipes = FoodRecipe::with('ingredients','cookingProcesses')->get();
        return FoodRecipeResource::collection($foodRecipes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodRecipeRequest $request)
    {
        $foodRecipe = new FoodRecipe();
        $foodRecipe->name = $request->input('name');
        $foodRecipe->user_id = $request->input('user_id');
        $foodRecipe->detail = $request->input('detail');
        if($request->file('photo') != null) {
            $file = $request->file('photo');
            $name = Carbon::now()->format("dnY-Hisu") . "." . $file->extension();
            $file->storePubliclyAs('public/foodRecipe/', $name);
            $foodRecipe->photo = $name;
        }
        $foodRecipe->save();
        return new FoodRecipeResource($foodRecipe);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foodRecipe = FoodRecipe::with('ingredients','cookingProcesses')->findOrFail($id);
        return new FoodRecipeResource($foodRecipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function update(FoodRecipeRequest $request, $id)
    {
        $foodRecipe = FoodRecipe::with('ingredients','cookingProcesses')->findOrFail($id);
        if ($request->input('name')!= null)
            $foodRecipe->name = $request->input('name');
        if ($request->input('detail')!= null)
            $foodRecipe->detail = $request->input('detail');
        if($request->file('photo') != null) {
            $old_file = $foodRecipe->photo;
            if($old_file != null){
                $path = public_path().'/storage/foodRecipe/'.$old_file;
                File::delete($path);
            }
            $file = $request->file('photo');
            $name = Carbon::now()->format("dnY-Hisu") . "." . $file->extension();
            $file->storePubliclyAs('public/foodRecipe/', $name);
            $foodRecipe->photo = $name;
        }
        $foodRecipe->save();
        return new FoodRecipeResource($foodRecipe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodRecipe = FoodRecipe::findOrFail($id);
        $foodRecipe->delete();
        return new FoodRecipeResource($foodRecipe);
    }

    public function searchFoodRecipes($name){
        $foodRecipe = FoodRecipe::where('name','LIKE',"%{$name}%")->with('ingredients','cookingProcesses')->get();
        return FoodRecipeResource::collection($foodRecipe);
    }

    public function randomFoodRecipes(){
        $foodRecipes = FoodRecipe::with('ingredients','cookingProcesses')->inRandomOrder()->limit(5)->get();
        return FoodRecipeResource::collection($foodRecipes);
    }

    public function randomFoodRecipe(){
        $foodRecipe = FoodRecipe::with('ingredients','cookingProcesses')->inRandomOrder()->first();
        return new FoodRecipeResource($foodRecipe);
    }
}
