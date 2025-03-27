<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'id_categorynews');
    }
}
