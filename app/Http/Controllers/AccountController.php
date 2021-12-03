<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

class AccountController extends Controller
{
    public function AccountView(){
        return view('account');
    }

    public function EditAccountView(){
        return view('editAccount');
    }

    public function EditAccount(Request $request){

        $fields = $request->validate([
            'name' => 'required|string|min:3|max:15',
            'email' => 'required|string|unique:users,email',
            'oldpassword' => 'required|string',
            'password' => 'string|confirmed'
        ]);

        //$userId = $request()->session()->get('id');
        $userId = $request->input('id');
        //$user = User::find($userId);
        $user = User::find($userId);

        if( !Hash::check(bcrypt($fields['oldpassword']), $user->password)) {

            $newUser[] = array(
                'id'            => $userId,
                'name'          => $fields['name'],
                'email'         => $fields['email']
            );


                if ($fields['password'] != null) {
                    aray_push($newUser,array('password' => bcrypt($fields['password'])));
                }else{
                    aray_push($newUser,array('password' => bcrypt($fields['oldpassword'])));
                }

            $user->update($newUser);
        
            //$token = $user->createToken('myapptoken')->plainTextToken;
            
            return 1;
            //redirect()->route('AccountView');

            }else{
            return 2;
            //response("Mevcut şifrenizi hatalı girdiniz.",401);
        }

        
    }
}