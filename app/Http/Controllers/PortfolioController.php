<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio', [
            'portfolios' => Portfolio::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        Portfolio::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_path' => $request->file('image')->store('images', 'public'),
        ]);

        return back()->with('success', 'Information created successfully.');
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($portfolio->image_path);
            $validated['image_path'] = $request->file('image')->store('images', 'public');
        }

        $portfolio->update([
            'title' => $validated['title'],
            'image_path' => $validated['image_path'] ?? $portfolio->image_path,
            'description' => $validated['description'],
        ]);

        return back()->with('success', 'Information updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        Storage::disk('public')->delete($portfolio->image_path);
        $portfolio->delete();

        return back()->with('success', 'Information deleted successfully.');
    }
}
