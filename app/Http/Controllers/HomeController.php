<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function news()
    {
        $activities = Activity::all();

        return view('news')
            ->with([
                'activities' => $activities
            ]);
    }
}
