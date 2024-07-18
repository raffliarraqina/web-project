<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Galleries;
use App\Models\Event;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $lattest_news = News::all();

        return view('pages.frontend.index', compact('lattest_news'));
    }

    public function about()
    {
        return view('pages.frontend.pages.about-us');
    }

    public function visiMisi()
    {
        return view('pages.frontend.pages.visi-misi');
    }

    public function indexNews()
    {
        $title              = "Baitulquran Aljahra";
        $news               = News::latest()->get();
        $galleries          = Galleries::all();
        $event              = Event::all();
        $lattest_news       = News::latest()->limit(1)->get();

        return view('pages.frontend.pages.news-page', compact(
            'title',
            'news',
            'galleries',
            'event',
            'lattest_news'
        ));
    }

    public function detailNews($slug)
    {
        $news         = News::where('slug', $slug)->first();
        $text         = News::findOrFail($news->id)->slug;
        $title        = "Berita - $text" ;

        return view('pages.frontend.pages.detail-news', compact(
            'news', 'text', 'title'
        ));
    }

    public function gallery()
    {
        $galleries    = Galleries::all();

        return view('pages.frontend.pages.gallery-page', compact(
            'galleries'
        ));
    }

    public function event(Request $request)
    {
        $event    = Event::all();
        // $query = Event::query();
        // $date  = $request->year_filter;

        // switch ($date) {
        //     case '2024':
        //         $query->whereYear('created_at', Carbon::now()->year);
        //         break;
        //     case '2023':
        //         $query->whereYear('created_at', Carbon::now()->subYear()->year);
        //         break;
        //     }

        // $events = $query->get();

        return view('pages.frontend.pages.event', compact(
            'event'
        ));
    }

    public function detailEvent($slug)
    {
        $event         = Event::where('slug', $slug)->first();
        $text         = Event::findOrFail($event->id)->slug;

        return view('pages.frontend.pages.detail-event', compact(
            'event', 'text'
        ));
    }

}
