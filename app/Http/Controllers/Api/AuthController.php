<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login' , 'register']]);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (! $token = JWTAuth::attempt($validator->validated())) {
            return response()->json(['error' => 'Wrong EMAIL OR PASSWORD'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:8',
            'age' => 'required|integer' ,

        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

//        $user = User::create(
//            $validator->validated(),
//            [   'name' => $request->input('name'),
//                'email' => $request->input('email'),
//                'age' => $request->input('age'),
//                'gender' => $request->input('gender'),
//                'role' => $request->input('role'),
//                'password' => bcrypt($request->password)]
//        );

        $user = new User() ;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        $user->role = $request->input('role');
        $user->password = bcrypt($request->password);
//        $user->status = $request->input('status') ;
        $user->save() ;

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }
    public function me(Request $request)
    {
        $user = JWTAuth::user();
        $foodrecipe = $user->foodRecipes ;
//        $cookingProcess = $foodrecipe->cookingProcesses;
//        $ingredient = $foodrecipe->ingredients;
        return response()->json($user);
    }

    public function index ()
    {
        $user = User::where('role','USER')->get();
        return $user ;
    }

    public function updateStatus (Request $request, $id)
    {
        $user = User::findOrFail($id) ;
        $user->status = $request->input("status") ;
        $user->save() ;
        return $user ;
    }


    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh(Request $request)
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => config('jwt.ttl') * 60,
            'user' => auth()->user()
        ]);
    }
}
