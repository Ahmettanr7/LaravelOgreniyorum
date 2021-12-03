<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Closure;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function registerView(){
        return view('register');
    }
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string|min:3|max:15',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);
        $user = User::where('email', $fields['email'])->first();
        if(!$fields->passes()){
            return response()->json(['status'=>0, 'error'=>$fields->errors()->toArray()]);
        }else if($user){
            return response()->json(['status'=>401, 'error'=>'Bu email zaten kayıtlı']);
        }else{

            $user = User::create([
                'name' => $fields['name'],
                'email' => $fields['email'],
                'password' => bcrypt($fields['password'])
            ]);
    
            $token = $user->createToken('myapptoken')->plainTextToken;
    
    
            $response = [
                'user'  => $user,
                'token' => $token
            ];

            return response()->json($response, 201);
        }

        

    }

    public function loginView(){
        return view('login');
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            $response = [
                'message' => 'Hatalı şifre girdiniz !' 
            ];
            return response($response, 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $request->session()->put([
            'id'    => $user['id'],
            'name'  => $user['name'],
            'email' => $user['email']
        ]);

        $response = [
            'message' => 'Giriş Başarılı',
            'user' => $user,
            'token' => $token
        ];

        Cookie::queue('accessToken', $token);

        return response($response, 201);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        $request->session()->flush();

        Cookie::queue(\Cookie::forget('accessToken'));

        return redirect()->route('home');
    }
}