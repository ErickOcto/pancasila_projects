<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function blogs(){
        $articles = Blog::latest()->paginate(10);
        $categories = BlogCategory::all();
        $chosenArticles = Blog::where('isChoose', true)->limit(5)->get();
        return view('article', compact('articles', 'categories', 'chosenArticles'));
    }

    public function blogDetails($slug){
        $article = Blog::where('slug', $slug)->first();

        $articles = Blog::all();
        return view('article-detail', compact('article', 'articles'));
    }

    public function leaderboard(){
        return view();
    }
}
