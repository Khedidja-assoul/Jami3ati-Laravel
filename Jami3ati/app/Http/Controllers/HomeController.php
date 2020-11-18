<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front-end.module');

    }
    public function module()
    {
        return view('front-end.module');

    }
    public function forum()
    {
        return view('front-end.forum');

    }
    public function data(){

        $result = DB::select('select * from module ');
        return $result;
    }
}
