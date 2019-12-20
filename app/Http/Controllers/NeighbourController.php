<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Nationality;
use App\MaritalState;
use App\City;
use App\Village;
use App\Neighbour;
use Illuminate\Http\Request;

class NeighbourController extends Controller
{
    public function index()
    {
        return view('admin/neighbours/index')
            ->with([
                'neighbours' => Neighbour::all()
            ]);
    }

    public function createForm()
    {
        return view('admin/neighbours/new')
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

        Neighbour::create($request->except('_token'));

        return redirect('/admin/vecinos/')->with('create', true);
    }

    public function editForm($id)
    {
        return view('admin/neighbours/edit')
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

        return redirect('/admin/vecinos/')->with('edit', sprintf(
            "%s %s %s",
            $neighbour->name,
            $neighbour->father_last_name,
            $neighbour->mother_last_name
        ));
    }

    public function deleteConfirm($id)
    {
        return view('admin/neighbours/delete_confirm')
            ->with(['neighbour' => Neighbour::find($id)]);
    }

    public function deleteNeighbour($id)
    {
        $neighbour = Neighbour::find($id);
        $neighbour->delete();

        return redirect('/admin/vecinos/')->with('delete', sprintf(
            "%s %s %s",
            $neighbour->name,
            $neighbour->father_last_name,
            $neighbour->mother_last_name
        ));
    }
}
