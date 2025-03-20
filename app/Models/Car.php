<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'cars';
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(Category::class , foreignKey:'category_id');
    }
    public function images()
    {
        return $this->hasMany(CarImage::class, 'car_id');
    }


}
