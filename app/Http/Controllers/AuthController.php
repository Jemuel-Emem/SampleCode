<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
//dire gin import ang atun nga model name where db natun ni
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    //
    public function register(){
        return view ("auth.register");
    }

    public function login(){
        return view ("auth.login");
    }

    public function registerUser(Request $request){
      $request ->validate([
        'name' =>'required',
        'email' =>['required','email', Rule::unique('User','email')],
        'password' =>'required|min:5|max:15'
      ]);

      $user = new User();
    $user ->name =$request ->name;
    $user ->email =$request ->email;
    $user ->password =$request ->password;
    $res = $user ->save();
    if($res){
        return back() -> with('success','you register men');
    }else{
        return back() ->with('theres something wrong');
    }
    }

}
