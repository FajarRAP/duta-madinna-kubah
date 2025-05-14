<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('index', [
            'information' => Information::all(),
        ]);
    }
}
