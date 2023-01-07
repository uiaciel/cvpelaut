<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;

class CrewController extends Controller
{

    public function index()
    {
        $crew = Crew::All();

        return view('crew.index', [
            'crews' => $crew
        ]);
    }


    public function create()
    {
        return view('crew.create');
    }

    public function store(Request $request)
    {
        Crew::create($request->all());

        return redirect()->back()->with('success', 'Crew posted successfully.');
    }

    public function show(Crew $crew)
    {
        //
    }

    public function edit(Crew $crew)
    {
        return view('crew.edit', compact('crew'));
    }

    public function update(Request $request, Crew $crew)
    {
        $crew->update($request->all());

        return redirect()->back()->with('success', 'Crew updated successfully.');
    }

    public function destroy(Crew $crew)
    {
        $crew->delete();

        return redirect()->back()->with('success', 'Crew deleted successfully.');
    }
}
