<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    /**
     * Listing of all news
     *
     */
    public function newsListing(){
        return 0;
    }

    /**
     * Listing of Top News
     *
     */
    public function newsListingTop(){
        return 0;
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
        return 0;
    }

    /**
     * Listing of news by author filter
     *
     */
    public function newsByCategory(){
        return 0;
    }

    /**
     * Listing of news by tag filter
     *
     */
    public function newsByTagname(){
        return 0;
    }

    public function index(){
        $featuredNews = News::where('featured', 1)->orderBy('updated_at', 'desc')->first();
        $mainNews = News::where('main_news','1')->orderBy('updated_at', 'desc')->limit(2)->get();
        $recentNews = News::orderBy('updated_at', 'desc')->get();
        return view('frontend.index-101', compact('featuredNews', 'mainNews', 'recentNews','newss'));
    }
}
