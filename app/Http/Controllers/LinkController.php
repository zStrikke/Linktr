<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function index()
    {
        // Working from a parent model down:
        $links = Auth::user()->links()
            ->get();

        return view('links.index', [
            'links' => $links
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit(Link $link)
    {

    }

    public function update(Request $request, Link $link)
    {
        
    }

    public function destroy(Request $request, Link $link)
    {

    }
}
