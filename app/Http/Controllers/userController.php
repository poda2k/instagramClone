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
            'name'=> 'required|string|max:255|min:4',
            'userName'=> 'required|string|max:255|min:4',
            'password'=> 'required|string|max:255|min:5',
            'email'=> 'required|string|max:255'
        ]);

        if($userData){
            $checkForEmail = user::where('email',$userData['email'])->exists();
            $checkForUserName = user::where('userName',$userData['userName'])->exists();
            if($checkForEmail){
                return view('users.signUp',[
                    'message'=>'email already exists'
                ]);
            }else if($checkForUserName){
                return view('users.signUp',[
                    'message'=>'userName already exists'
                ]);
            }else{
                $password = Hash::make($userData['password']);

                $insertUser = user::create([
                    'name'=> $userData['name'],
                    'userName'=> $userData['userName'],
                    'password'=> $password,
                    'email'=> $userData['email'],
                    'profilePicture'=>'profilePictures/defaultProfilePicture.png'
                ]);
                Session::put(['userName'=>$insertUser->userName,'name'=>$insertUser->name,'userId'=>$insertUser->id]);
                return view('users.userHome',[
                    'userInfo' => $insertUser
                ]);
            }
            

        }
    }

    public function logIn(Request $request){
        
        $credentials = $request->validate([
            'email'=> 'required|string',
            'password'=> 'required|string'
        ]);

        if($credentials){
            $searchForEmail = user::where('email', $credentials['email'])->first();
                if($searchForEmail){
                    $passwordCheck = Hash::check($credentials['password'],$searchForEmail->password);
                    if($passwordCheck){
                        Session::put(['userId'=>$searchForEmail->id]);
                        // return redirect()->route('userHome',[
                        //     'userInfo'=>$searchForEmail
                        // ]);
                        return view('users.userHome',[
                            'userInfo'=>$searchForEmail
                        ]);
                    }else{
                        $message = 'check for email or password'; 
                        return view('users.logIn',[
                            'message'=> $message
                        ]);
                    }
                }else{
                    $message = 'check for email or password'; 
                    return view('users.logIn',[
                        'message'=> $message
                    ]);
                }
        }
    }

    public function logOut(Request $request){
           $request->session()->flush();
           return redirect()->route('login');
    }
}
