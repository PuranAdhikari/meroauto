<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    /**
     * Listing of all news
     *
     */
    public function newsListing()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('frontend.listing', compact('news'));
    }

    /**
     * Listing of Top News
     *
     */
    public function newsListingTop()
    {
        return view('frontend.topnewslisting');
    }

    /**
     * Single news in english
     *
     */
    public function newsSingleInEnglish($slug)
    {
        $englishnews = News::findOrFail($slug);
        return view('frontend.blog-single', compact('englishnews'));
    }

    /**
     * Single news in Nepali
     *
     */

    public function newsSingleInNepali($slug)
    {
        $nepalinews = News::where('slug', $slug)->first();
        return view('frontend.blog-single', compact('nepalinews'));
    }

    /**
     * Listing of news of a specific author
     *
     */
    public function newsByAuthor()
    {
        return 0;
    }

    /**
     * Listing of news by author filter
     *
     */
    public function newsByCategory($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            $news = $category->news()->latest()->get();
            return view('frontend.listing', compact(['news', 'category']));
        } else abort(404);
    }

    /**
     * Listing of news by tag filter
     *
     */
    public function newsByTagname()
    {
        return 0;
    }

    public function index()
    {
        $featuredNews = News::where('featured', 1)->orderBy('updated_at', 'desc')->first();
        $mainNews = News::where('main_news', '1')->orderBy('updated_at', 'desc')->limit(2)->get();
        $recentNews = News::orderBy('updated_at', 'desc')->get();
        return view('frontend.index-101', compact('featuredNews', 'mainNews', 'recentNews', 'newss'));
    }
}