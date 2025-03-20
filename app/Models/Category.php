<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories'; // Đảm bảo tên bảng đúng với database
    protected $guarded = [];

    public function cars() {
        return $this->hasMany(Car::class, 'category_id');

}
public function children()
{
    return $this->hasMany(Category::class, 'parent_id');
}

}
