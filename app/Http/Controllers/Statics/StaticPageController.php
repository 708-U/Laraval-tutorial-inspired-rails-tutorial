<?php

namespace App\Http\Controllers\Statics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    public function home()
    {
        return view('statics.home');
    }

    public function help()
    {
        return view('statics.help');
    }

    public function about()
    {
        return view('statics.about');
    }

    public function contact()
    {
        return view('statics.contact');
    }
}
