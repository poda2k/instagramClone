<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user ;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    public function signup(Request $request){

        $userData = $request->validate([
            'name'=> 'required|string|max:255',
            'userName'=> 'required|string|max:255',
            'password'=> 'required|string|max:255',
            'email'=> 'required|string|max:255'
        ]);

        if($userData){
            $checkForEmail = user::where('email',$userData['email'])->exists();
            $checkForUserName = user::where('userName',$userData['userName'])->exists();
            if($checkForEmail){
                return view('user.signUp',[
                    'message'=>'email already exists'
                ]);
            }else if($checkForUserName){
                return view('user.signUp',[
                    'message'=>'userName already exists'
                ]);
            }else{
                $password = Hash::make($userData['password']);

                $insertUser = user::create([
                    'name'=> $userData['name'],
                    'userName'=> $userData['userName'],
                    'password'=> $userData['password'],
                    'email'=> $userData['email']
                ]);
                Session::put(['userName'=>$userData->userName,'name'=>$userData->name,'userId'=>$userData->id]);
                return view('post.index');
            }
            

        }
    }

    public function logIn(Request $request){
        
    }

    public function logOut(Request $request){
        
    }
}
