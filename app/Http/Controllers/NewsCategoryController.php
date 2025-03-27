<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Car;
use App\Models\News;
use App\Models\NewsCategory;

class NewsCategoryController extends Controller
{
    //
    public function index($slug,$newcategoryId){
        $setting = Setting::first();
        $categories = Category::where('parent_id', 0)
        ->with('children')
        ->get();
        $newcategories = NewsCategory::all();
        $blog = News::where('id_categorynews', $newcategoryId)
        ->paginate(9);
      return view('news.newscategory.list',compact('setting','newcategories','blog','categories')); 
    }
}
