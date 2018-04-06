<?php

namespace App\Http\Controllers\Frontend;
use App\User;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    /**
     * Listing of all news
     *
     */
    public function newsListing(){
        $news = News::orderBy('created_at', 'desc')->get();
        return view('frontend.listing', compact('news'));
    }

    /**
     * Listing of Top News
     *
     */
    public function newsListingTop(){
        return view('frontend.topnewslisting');
    }

    /**
     * Single news in english
     *
     */
    public function newsSingleInEnglish(){
        return 0;
    }

    /**
     * Single news in Nepali
     *
     */
    public function newsSingleInNepali(){
        return 0;
    }

    /**
     * Listing of news of a specific author
     *
     */
    public function newsByAuthor(){
        $news= News::all();
        return view('frontend.newslistingbyauthor', compact('news'));
    }

    /**
     * Listing of news by author filter
     *
     */
    public function newsByCategory(){
        return view('frontend.newslistingbycategory');
    }

    /**
     * Listing of news by tag filter
     *
     */
    public function newsByTagname(){
        return 0;
    }

    public function index(){
        $featuredNews = News::where('featured', 1)->orderBy('created_at', 'desc')->first();
        $mainNews = News::where('main_news','1')->orderBy('created_at', 'desc')->limit(2)->get();
        $recentNews = News::orderBy('created_at', 'desc')->get();
        return view('frontend.index-101', compact('featuredNews', 'mainNews', 'recentNews','newss'));
    }
}
