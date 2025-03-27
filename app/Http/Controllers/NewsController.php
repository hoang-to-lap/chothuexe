<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Car;
use App\Models\News;
use App\Models\NewsCategory;

class NewsController extends Controller
{
    //
    public function show($id)
    {
        $setting = Setting::first();
            $categories = Category::where('parent_id', 0)
            ->with('children')
            ->get();
            $newcategories = NewsCategory::all();
            $blog = News::with('category')->findOrFail($id);
            // Lấy các bài viết gần đây nhất
            $recentPosts = News::where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();
        return view('news.detail', compact('setting','categories','blog' ,'newcategories','recentPosts'));
    }
}
