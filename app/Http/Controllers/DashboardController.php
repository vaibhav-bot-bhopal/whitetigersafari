<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Display Info in Dashboard
        $user = Auth::user();
        $news_count = News::all()->count();
        $event_count = Event::all()->count();
        $gallery_count = Gallery::all()->count();
        return view('admin.dashboard.dashboard', compact('news_count', 'event_count', 'gallery_count'));
    }
}
