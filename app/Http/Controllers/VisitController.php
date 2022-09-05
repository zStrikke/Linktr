<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\Link;

class VisitController extends Controller
{
    public function store(Request $request, Link $link)
    {
        return $link->visits()
                ->create([
                    'user_agent' => $request->userAgent()
                ]);
    }

}
