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

        // get previous user id
        $previous = News::where('id', '<', $nepalinews->id)->orderBy('id', 'desc')->first();

        // get next user id
        $next = News::where('id', '>', $nepalinews->id)->orderBy('id', 'asc')->first();

        return view('frontend.blog-single', compact('nepalinews', 'previous', 'next'));
    }

    /**
     * Listing of news of a specific author
     *
     */
    public function newsByAuthor($author)
    {
        $author = $author;
        $news = News::where('created_by', $author)->get();
        return view('frontend.newslistingbyauthor', compact('news'));
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
        }
        else
            abort(404);
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


