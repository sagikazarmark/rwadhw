<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

final class PhotoController extends Controller
{

    final public function index()
    {
        $photos = DB::table('photos')->get();

        return view('photos', ['photos' => $photos]);
    }

    final public function upload_form()
    {
        return view('upload');
    }

    final public function upload_save(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpeg|max:20000',
        ]);

        $image = $request->file('file');
        $newName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage'), $newName);

        Photo::create([
            'title' => $request->title,
            'filename' => $newName,
            'user_id' => $request->user()->id,
        ]);

        session()->flash('status', 'Photo successfully uploaded!');

        return redirect()->route('photos');
    }
}
