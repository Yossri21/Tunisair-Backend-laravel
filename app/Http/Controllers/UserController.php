<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::all();
        return response()->json(['users'=> $users] , 200);
    }
}
