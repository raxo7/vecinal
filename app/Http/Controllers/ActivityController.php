<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Nationality;
use App\MaritalState;
use App\City;
use App\Village;
use App\Neighbour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = DB::table('activities')
            ->join(
                'activity_types',
                'activities.type_id',
                '=',
                'activity_types.id'
            )
            ->select(
                'activities.*',
                'activity_types.name as type_name'
            )
            ->get();

        return view('activities/index')
            ->with([
                'activities' => $activities
            ]);
    }

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

    public function createNew(Request $request)
    {
        // TODO: validar
        $this->validate(
            $request, [

            ]
        );

        // dd($request->all());

        return Neighbour::create($request->except('_token'));
    }

    public function editForm($id)
    {
        return view('neighbours/edit')
            ->with([
                'genres' => Genre::all(),
                'nationalities' => Nationality::all(),
                'marital_states' => MaritalState::all(),
                'cities' => City::all(),
                'villages' => Village::all(),
                'neighbour' => Neighbour::find($id)
            ]);
    }

    public function editNeighbour(Request $request)
    {
        // TODO: validar
        $this->validate(
            $request, [

            ]
        );

        $neighbour = Neighbour::find($request->id);
        $neighbour->update($request->except('_token'));

        return redirect('/vecinos/')->with('edit', sprintf(
            "%s %s %s",
            $neighbour->name,
            $neighbour->father_last_name,
            $neighbour->mother_last_name
        ));
    }

    public function deleteConfirm($id)
    {
        return view('neighbours/delete_confirm')
            ->with(['neighbour' => Neighbour::find($id)]);
    }

    public function deleteNeighbour($id)
    {
        $neighbour = Neighbour::find($id);
        $neighbour->delete();

        return redirect('/vecinos/')->with('delete', sprintf(
            "%s %s %s",
            $neighbour->name,
            $neighbour->father_last_name,
            $neighbour->mother_last_name
        ));
    }
}
