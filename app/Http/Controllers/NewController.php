<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use Carbon\Carbon;



class NewController extends Controller
{
    public function index() {

        $categories = Category::where('status', 1)
        ->withCount(['news' => function($q) {
            $q->where('status', 1);
            $q->where('publish', '<', Carbon::tomorrow());
        }])
        ->get();
        return view('news.index', compact( 'categories'));
    }

    public function list($id) {

        $category = Category::where('id', $id)->where('status', 1)
        ->withCount(['news' => function($q) {
             $q->where('status', 1);
             $q->where('publish', '<', Carbon::tomorrow());
        }])
        ->firstOrFail();
        $news = News::wherehas('category', function($q) use ($id) {
        $q->where('categories.id', $id);
        })
        ->where('status', 1)
        ->where('publish', '<', Carbon::tomorrow())
         ->orderBy('publish', 'desc')->paginate(10);

        return view('news.list', compact('category','news'));
    }

    public function show($id) {

        $new = News::where('id', $id)
        ->where('status', 1)
        ->where('publish', '<', Carbon::tomorrow())
        ->with('category')
        ->firstOrFail();
        $new->count_view = $new->count_view + 1;
        $new->save();
        $category_ids = $new->category->pluck('id');
        $newsTop3 = News::where('status', 1)
        ->wherehas('category', function($q) use ($category_ids) {
            $q->whereIn('categories.id', $category_ids);
        })
        ->where('id','!=',$id)
        ->where('publish', '<', Carbon::tomorrow())
        ->where('publish', '>',  Carbon::now()->subDays(7))
        ->orderBy('count_view', 'desc')
        ->limit(3)
        ->get();

         return view('news.show', compact('new', 'newsTop3'));
    }

}
