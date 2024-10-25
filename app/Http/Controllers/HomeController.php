<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
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

        $articles = Blog::where('slug', '!=', $slug)->get();
        return view('article-detail', compact('article', 'articles'));
    }

    public function leaderboard(){
        $items = User::orderBy('score', 'desc')->limit(10)->get();
        return view('leaderboard', compact('items'));
    }

    public function articleCategory($id){
        $articles = Blog::where('blog_category_id', $id)->paginate(10);
        $blog_name = BlogCategory::where('id', $id)->first();
        $count = Blog::where('blog_category_id', $id)->count();
        $categories = BlogCategory::all();
        $chosenArticles = Blog::where('isChoose', 1)->get();
        return view('article-category', compact('articles', 'count', 'blog_name', 'categories', 'chosenArticles'));
    }

    public function searchArticle(Request $request){
        $query = $request->input('search');
        $categories = BlogCategory::all();
        $chosenArticles = Blog::where('isChoose', 1)->get();
        if ($query) {
            $articles = Blog::whereTitle('LIKE', "%{$query}%")->orWhere('tags', 'LIKE', "%{$query}%")->orWhere('content', 'LIKE', "%{$query}%")->paginate(10);
            $count = $articles->count();
        } else {
            $articles = collect();
        }
        return view('searchArticle', compact('articles', 'categories', 'chosenArticles', 'count', 'query'));
    }
}
