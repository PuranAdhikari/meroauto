<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){
        $featuredNews = News::where('featured', 1)->orderBy('updated_at', 'desc')->first();
        $mainNews = News::where('main_news','1')->orderBy('updated_at', 'desc')->limit(2)->get();
        $recentNews = News::orderBy('updated_at', 'desc')->get();
        return view('frontend.index-101', compact('featuredNews', 'mainNews', 'recentNews','newss'));
    }
}
