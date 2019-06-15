<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $cat_news = Category::where('slug','tin-tuc')->first();
        $news = $cat_news->articles()->where('featured',0)->published()->paginate(5);
        $cat_events = Category::where('slug','su-kien')->first();
        $events = $cat_events->articles()->published()->take(5)->get();
        $news_fea = Article::where('featured',1)->published()->get();
        return view('frontend.pages.category',compact('news','events','news_fea'));
    }
    public function category(Request $request, $cat_slug){
        $cat_news = Category::where('slug',$cat_slug)->first();
        $news = $cat_news->articles()->where('featured',0)->published()->paginate(5);
        $news_lastest = Article::orderBy('date','desc')->published()->take(5)->get();
        $news_fea = Article::where('featured',1)->published()->get();
        return view('frontend.pages.cat_detail',compact('cat_news','news','news_lastest','news_fea'));
    }
    public function article(Request $request, $cat_slug, $art_slug){
        $cat = Category::where('slug',$cat_slug)->first();
        $news = Article::where('slug',$art_slug)->first();
        $news_rela = $cat->articles()->where('slug','!=',$art_slug)->take(4)->get();
        $cat_events = Category::where('slug','su-kien')->first();
        $events = $cat_events->articles()->published()->take(5)->get();
        return view('frontend.pages.article',compact('news','news_rela','events'));
    }
}
