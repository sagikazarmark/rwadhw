<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\BoardMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

final class BoardMemberController extends Controller
{
    /**
     * Display the index page.
     *
     * @return \Illuminate\View\View
     */
    final public function index()
    {
        $boardMembers = DB::table('board_members')->get();

        return view('dashboard.boardMembers.index', ['boardMembers' => $boardMembers]);
    }

    /**
     * Display the create page.
     *
     * @return \Illuminate\View\View
     */
    final public function create()
    {
        return view('dashboard.boardMembers.create');
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
            'email' => 'required|string|email|max:255|unique:board_members',
            'address' => 'required|string|max:255',
        ]);

        session()->flash('status', 'Board member successfully created!');

        BoardMember::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect()->route('dashboard.boardMembers');
    }

    /**
     * Show the details of a board member.
     */
    final public function show()
    {
        // Not implemented

        return redirect()->route('dashboard.boardMembers');
    }

    /**
     * Edit a board member.
     */
    final public function edit(int $id)
    {
        $boardMember = BoardMember::find($id);

        return view('dashboard.boardMembers.edit', ['boardMember' => $boardMember]);
    }

    /**
     * Update a board member.
     */
    final public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'required|string|max:255',
        ]);

        $boardMember = BoardMember::find($id);

        $boardMember->name = $request->name;
        $boardMember->email = $request->email;
        $boardMember->address = $request->address;

        $boardMember->save();

        return redirect()->route('dashboard.boardMembers');
    }

    /**
     * Destroy a board member.
     */
    final public function destroy(int $id)
    {
        $boardMember = BoardMember::find($id);
        $boardMember->delete();

        session()->flash('status', sprintf('Board member %d has been eliminated!', $boardMember->id));

        return redirect()->route('dashboard.boardMembers');
    }
}
