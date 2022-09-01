<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function edit()
    {

    }

    public function update(Request $request)
    {

    }

    public function show(User $user)
    {
        $user->load('links');
        
        return view('users.show', [
            'user' => $user
        ]);
    }
}
