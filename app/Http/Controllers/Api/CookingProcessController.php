<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CookingProcessRequest;
use App\Http\Resources\CookingProcessResource;
use App\Models\CookingProcess;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CookingProcessController extends Controller
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
        $cookingProcess = CookingProcess::get();
        return CookingProcessResource::collection($cookingProcess);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CookingProcessRequest $request)
    {
        $cookingProcess = new CookingProcess();
        $cookingProcess->process = $request->input('process');
        $cookingProcess->food_recipe_id = $request->input('food_recipe_id');
        if($request->file('photo') != null) {
            $file = $request->file('photo');
            $name = '/cookingProcess/' . Carbon::now()->format("dnY-Hisu") . "." . $file->extension();
            $file->storePubliclyAs('public', $name);
            $cookingProcess->photo = $name;
        }
        $cookingProcess->save();
        return new CookingProcessResource($cookingProcess) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CookingProcess  $cookingProcess
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cookingProcess = CookingProcess::findOrFail($id);
        return new CookingProcessResource($cookingProcess) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CookingProcess  $cookingProcess
     * @return \Illuminate\Http\Response
     */
    public function update(CookingProcessRequest $request, $id)
    {
        $cookingProcess = CookingProcess::findOrFail($id);
        if ($request->input('process') != null)
            $cookingProcess->process = $request->input('process');
        if($request->file('photo') != null) {
            $old_file = $cookingProcess->photo;
            if($old_file != null){
                $path = public_path().'/storage/'.$old_file;
                File::delete($path);
            }
            $file = $request->file('photo');
            $name = '/cookingProcess/' . Carbon::now()->format("dnY-Hisu") . "." . $file->extension();
            $file->storePubliclyAs('public', $name);
            $cookingProcess->photo = $name;
        }
        $cookingProcess->save();
        return new CookingProcessResource($cookingProcess) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CookingProcess  $cookingProcess
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cookingProcess = CookingProcess::findOrFail($id);
        $cookingProcess->delete();
        return new CookingProcessResource($cookingProcess) ;
    }
}
