<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Nationality;
use App\MaritalState;
use App\City;
use App\Village;
use Illuminate\Http\Request;

class NeighbourController extends Controller
{
    public function createForm()
    {
        return view('neighbours/new')
            ->with([
                'genres' => Genre::all(),
                'nationalities' => Nationality::all(),
                'marital_states' => MaritalState::all(),
                'cities' => City::all(),
                'villages' => Village::all()
            ]);
    }
}
