<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class NewsCategory extends Pivot
{


    protected $table = 'news_categories';
}
