<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // return view('home');
        return view('admin.dashboard');
    }

    public function karyawan(){
        return view('admin.dashboard');
    }
    public function tutor(){
        return view('user.dashboard');
    }
    public function siswa(){
        return view('user.dashboard');
    }
}
