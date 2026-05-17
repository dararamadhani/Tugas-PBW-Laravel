<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planner;
use App\Models\Menu;

class PlannerController extends Controller
{
    public function index()
    {
        $planners = Planner::all();

        return view('planner.index', compact('planners'));
    }

    public function create()
    {
        $menus = Menu::all();

        return view('planner.create', compact('menus'));
    }

    public function store(Request $request)
    {
        Planner::create([

            'hari' => $request->hari,

            'sarapan_id' => $request->sarapan_id,

            'siang_id' => $request->siang_id,

            'malam_id' => $request->malam_id,

        ]);

        return redirect('/planner');
    }

    public function edit($id)
    {
        $planner = Planner::findOrFail($id);

        $menus = Menu::all();

        return view('planner.edit',
        compact('planner', 'menus'));
    }

    public function update(Request $request, $id)
    {
        $planner = Planner::findOrFail($id);

        $planner->update([

            'hari' => $request->hari,

            'sarapan_id' => $request->sarapan_id,

            'siang_id' => $request->siang_id,

            'malam_id' => $request->malam_id,

        ]);

        return redirect('/planner');
    }

    public function destroy($id)
    {
        $planner = Planner::findOrFail($id);

        $planner->delete();

        return redirect('/planner');
    }
}