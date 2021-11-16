<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;

class MainController extends Controller
{
    // Display Top Three News in Home Page
    public function home()
    {
        $news = News::orderBy('id', 'desc')->take(3)->get();
        $events = Event::orderBy('id', 'desc')->take(3)->get();

        return view('home.home', compact('news', 'events'));
    }

    // Display Newses with pagination
    public function newses()
    {
        $newses = News::orderBy('id', 'desc')->paginate(3);
        return view('news.newses', compact('newses'));
    }

    // Display Single News in Detail
    public function news_details($slug)
    {
        $newses = News::where('slug', $slug)->first();

        if ($newses) {
            return view('news.news-detail', compact('newses'));
        } else {
            return view('errors.404');
        }
    }

    // Display Events with pagination
    public function events()
    {
        $events = Event::orderBy('id', 'desc')->paginate(3);
        return view('news.events', compact('events'));
    }

    // Display Single Event in Detail
    public function event_details($slug)
    {
        $events = Event::where('slug', $slug)->first();

        if ($events) {
            return view('news.event-detail', compact('events'));
        } else {
            return view('errors.404');
        }
    }

    // Education Programs
    public function educationPrograms()
    {
        return view('news.education');
    }

    // Events Happenings
    public function eventsHappenings()
    {
        return view('news.events-happening');
    }

    // Training Programs
    public function trainingPrograms()
    {
        return view('news.training-program');
    }

    public function construction()
    {
        return view('home.error');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
