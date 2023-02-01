<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agnes;
class inserController extends Controller
{
    //
  public function insert(){
     return view ("insert.insert");
    }

    public function add(Request $req){
$insertdata = new agnes;
$insertdata ->name=$req->name;
$insertdata ->email=$req->email;
$insertdata ->password=$req->password;
$insertdata-> save();



    }
}
