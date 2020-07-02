<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function index(Request $request){
        $users_data = Users::all();
        return view('welcome',['users'=>$users_data]);
    }

    public function store(Request $request){
        print_r($request->all());
        // form insert way 1
        // $user = new Users();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();

        // form insert way 2
        Users::create($request->all());
        return back();
    }
}
