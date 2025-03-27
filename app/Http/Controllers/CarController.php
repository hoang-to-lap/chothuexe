<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Car;
use App\Models\News;
use App\Models\NewsCategory;
class CarController extends Controller
{
    //
    public function index(){
        $setting = Setting::first();
        $categories = Category::where('parent_id', 0)
        ->with('children')
        ->get();
        $newcategories = NewsCategory::all();
        $cars = Car::where('status', 'visible')->paginate(6);
        return view('car.index',compact('setting','categories','cars','newcategories'));
    }
    public function show($id)
{
    $setting = Setting::first();
        $categories = Category::where('parent_id', 0)
        ->with('children')
        ->get();
        $newcategories = NewsCategory::all();
        $car = Car::with('images','category')->findOrFail($id);
        // Lấy các xe cùng danh mục ngoại trừ xe hiện tại
    $relatedCars = Car::where('category_id', $car->category_id)
    ->where('id', '!=', $car->id)
    ->take(3)
    ->get();

// Nếu số xe cùng danh mục < 3, lấy 3 xe mới nhất
if ($relatedCars->count() < 3) {
$relatedCars = Car::where('id', '!=', $car->id)
        ->latest()
        ->take(3)
        ->get();
}
    return view('car.detail', compact('setting','categories','car' ,'relatedCars','newcategories'));
}
}
