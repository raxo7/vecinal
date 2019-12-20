<?php

namespace App\Http\Controllers;

use App\Activity;
use App\ActivityType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            ->orderBy('activities.created_at', 'asc')
            ->get();

        return view('admin/activities/index')
            ->with([
                'activities' => $activities
            ]);
    }

    public function createForm()
    {
        return view('admin/activities/new')
            ->with([
                'types' => ActivityType::all()
            ]);
    }

    public function createNew(Request $request)
    {
        // TODO: validar
        $this->validate(
            $request, [

            ]
        );

        $path = Storage::disk('public')->put('img/activities', $request->file('image'));
        $data = $request->except('_token');
        $data['image'] = $path;

        Activity::create($data);

        return redirect('/admin/actividades/')->with('create', true);
    }

    public function editForm($id)
    {
        return view('admin/activities/edit')
            ->with([
                'types' => ActivityType::all(),
                'activity' => Activity::find($id)
            ]);
    }

    public function editActivity(Request $request)
    {
        // TODO: validar
        $this->validate(
            $request, [

            ]
        );

        $activity = Activity::find($request->id);
        $activity->update($request->except('_token'));

        return redirect('/admin/actividades/')->with('edit', $activity->name);
    }

    public function deleteConfirm($id)
    {
        return view('admin/activities/delete_confirm')
            ->with(['activity' => Activity::find($id)]);
    }

    public function deleteActivity($id)
    {
        $activity = Activity::find($id);
        $activity->delete();

        return redirect('/admin/actividades/')->with('delete', $activity->name);
    }
}
