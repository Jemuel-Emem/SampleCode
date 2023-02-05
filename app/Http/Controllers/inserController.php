<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agnes;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class inserController extends Controller
{
    //
  public function insert(){
     return view ("insert.insert");

    }

    public function home(){
        return view ("insert.home");
       }

    public function add(Request $req){
$insertdata = new agnes;
$insertdata ->name=$req->name;
$insertdata ->email=$req->email;
$insertdata ->password=$req->password;
$insertdata-> save();
$data=agnes ::all();
return view('insert.home', compact('data'));


    }

    public function show (){
        $data=agnes ::all();
        return view('insert.home', compact('data')); // dire gin transfer tund variable data

}

public function edit($id){
    $data = agnes ::find($id);
 return view('insert.edit' , compact('data'));

}

public function update(Request $request, $id){
    $data = agnes ::find($id);
    $data ->name = $request-> input('name');
    $data ->email = $request-> input('email');
    $data ->password = $request-> input('password');

    $data->update();
    return redirect ('/insert')->with('status', "Data successfuly updated");


}


}
