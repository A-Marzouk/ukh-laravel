<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 3/1/2019
 * Time: 1:57 AM
 */

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Support\Facades\Route;

class CatalogueController extends Controller
{
    protected $route;

    public function __construct()
    {
        $this->route = Route::currentRouteName();
    }

    public function showCataloguePage(){
        $currentRoute = $this->route ;
        return view('catalogue',compact('currentRoute'));
    }

    public function getCategories(){
        return Category::all();
    }

    public function getCategoryProducts($category_name){
        $category = Category::where('ID_NAME',$category_name)->first();
        return $category->products;
    }

}