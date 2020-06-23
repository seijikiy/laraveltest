<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class YourController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id)->product()->orderBy('name')->paginate(10);

        return view('your')->with('products', $user);
    }

    public function create()
    {
        return view('your');
    }

}
