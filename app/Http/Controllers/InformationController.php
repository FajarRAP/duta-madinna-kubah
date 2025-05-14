<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
    public function index()
    {
        return view('information', [
            'information' => Information::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        Information::create([
            'title' => $validated['title'],
            'image_path' => $request->file('image')->store('images', 'public'),
        ]);

        return back()->with('success', 'Information created successfully.');
    }

    public function destroy(Information $information)
    {
        Storage::disk('public')->delete($information->image_path);
        $information->delete();

        return back()->with('success', 'Information deleted successfully.');
    }
}
