<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Car;
use App\Models\News;
use App\Models\NewsCategory;
class CategoryController extends Controller
{
    //
    public function index($slug,$categoryId){
        $setting = Setting::first();
        $categories = Category::where('parent_id', 0)
        ->with('children')
        ->get();
        $cars = Car::where('category_id', $categoryId)
        ->where('status', 'visible')
        ->paginate(9);
        $newcategories = NewsCategory::all();
      return view('car.category.list',compact('setting','categories','cars','newcategories')); 
    }
}
