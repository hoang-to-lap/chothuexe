<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Car;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function index(){
        $sliders = Slider::withoutTrashed()->latest()->get();
        $setting = Setting::first();
        $cars = Car::where('status', 'visible')
        ->latest()
        ->take(5)
        ->withoutTrashed() // Bỏ qua xe đã bị xóa mềm
        ->get();
        $categories = Category::where('parent_id', 0)
        ->with('children')
        ->get();
        return view('home.home', compact('sliders', 'setting' , 'cars' , 'categories'));
    }
}
