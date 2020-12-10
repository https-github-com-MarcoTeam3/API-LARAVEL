<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'category_id',
        'title',
        'price',
        'description',
        'pro_photo',
        'user_id',
    ];
    
    public function category() {
        return $this->hasOne(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
