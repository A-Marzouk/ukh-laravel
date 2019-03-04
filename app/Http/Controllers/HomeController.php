<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    protected $route;

    public function __construct()
    {
        $this->middleware('auth');
        $this->route = Route::currentRouteName();
    }

    public function showWelcomePage(){
        $currentRoute = $this->route ;
        return view('welcome',compact('currentRoute'));
    }

    public function admin()
    {
        return view('admin.home');
    }
}
