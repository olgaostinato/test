<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function category() {
      return $this->belongsToMany(Category::class, 'news_categories', 'new_id', 'category_id' );
    }

}
