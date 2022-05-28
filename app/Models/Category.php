<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function news() {
        return $this->hasManyThrough(
            News::class,
            NewsCategory::class,
            'category_id',
            'id',
            'id',
            'new_id');
    }

}
