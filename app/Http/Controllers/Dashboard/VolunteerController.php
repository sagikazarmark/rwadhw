<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\BoardMember;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

final class VolunteerController extends Controller
{
    /**
     * Display the index page.
     *
     * @return \Illuminate\View\View
     */
    final public function index()
    {
        $volunteers = DB::table('volunteers')->get();

        return view('dashboard.volunteers.index', ['volunteers' => $volunteers]);
    }

    /**
     * Display the create page.
     *
     * @return \Illuminate\View\View
     */
    final public function create()
    {
        return view('dashboard.volunteers.create');
    }

    /**
     * Handle an incoming contact request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:volunteers',
            'rank' => 'required|integer|min:0|max:9999',
        ]);

        session()->flash('status', 'Volunteer successfully created!');

        Volunteer::create([
            'name' => $request->name,
            'email' => $request->email,
            'rank' => $request->rank,
        ]);

        return redirect()->route('dashboard.volunteers');
    }

    /**
     * Show the details of a volunteer.
     */
    final public function show()
    {
        // Not implemented

        return redirect()->route('dashboard.volunteers');
    }

    /**
     * Edit a volunteer.
     */
    final public function edit(int $id)
    {
        $volunteer = Volunteer::find($id);

        return view('dashboard.volunteers.edit', ['volunteer' => $volunteer]);
    }

    /**
     * Update a volunteer.
     */
    final public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'rank' => 'required|integer|min:0|max:9999',
        ]);

        $volunteer = Volunteer::find($id);

        $volunteer->name = $request->name;
        $volunteer->email = $request->email;
        $volunteer->rank = $request->rank;

        $volunteer->save();

        return redirect()->route('dashboard.volunteers');
    }

    /**
     * Destroy a volunteer.
     */
    final public function destroy(int $id)
    {
        $volunteer = Volunteer::find($id);
        $volunteer->delete();

        session()->flash('status', sprintf('Volunteer %d has been eliminated!', $volunteer->id));

        return redirect()->route('dashboard.volunteers');
    }
}
