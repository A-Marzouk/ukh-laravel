<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 3/1/2019
 * Time: 1:57 AM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    protected $route;

    public function __construct()
    {
        $this->route = Route::currentRouteName();
    }

    public function showWelcomePage(){
        $currentRoute = $this->route ;
        return view('welcome',compact('currentRoute'));
    }


}