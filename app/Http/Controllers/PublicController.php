<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
