<?php

namespace App\Http\Controllers;

use App\Models\eventEnglish;
use App\Models\eventHindi;
use App\Models\newsEnglish;
use App\Models\newsHindi;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // Display Top Three News in Home Page
    public function home()
    {
        $dataen = newsEnglish::orderBy('id', 'desc')->take(3)->get();
        $datahi = newsHindi::orderBy('id', 'desc')->take(3)->get();
        $eventsen = eventEnglish::orderBy('id', 'desc')->take(3)->get();
        $eventshi = eventHindi::orderBy('id', 'desc')->take(3)->get();

        return view('home.home', compact('dataen', 'datahi', 'eventsen', 'eventshi'));
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
