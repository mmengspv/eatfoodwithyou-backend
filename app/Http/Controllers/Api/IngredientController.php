<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientRequest;
use App\Http\Resources\IngredientResource;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public  function __construct() {
        $this->middleware('auth:api', ['except' => ['index' , 'show']]) ;
    }

    public function index()
    {
        $ingredient = Ingredient::get();
        return IngredientResource::collection($ingredient);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngredientRequest $request)
    {
        $ingredient = new Ingredient();
        $ingredient->name = $request->input('name');
        $ingredient->quantity = $request->input('quantity');
        $ingredient->food_recipe_id = $request->input('food_recipe_id');
        $ingredient->unit = $request->input('unit');
        $ingredient->save();
        return new IngredientResource($ingredient);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        return new IngredientResource($ingredient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(IngredientRequest $request, Ingredient $ingredient)
    {
        if($request->input('name') != null)
            $ingredient->name = $request->input('name');
        if($request->input('quantity') != null)
            $ingredient->quantity = $request->input('quantity');
        if($request->input('unit') != null)
            $ingredient->unit = $request->input('unit');
        $ingredient->save();
        return new IngredientResource($ingredient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();
        return new IngredientResource($ingredient);
    }
}
