<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function search()
    {
        $users = User::all();

        // return view('vueExemple', compact('users'));
        return view('vueExemple')->with(['trucs'=> $users]);
    }

    public function create()
    {
        $user = User::create([
            'name' => 'Matthieu',
            'email' => 'test2@test.fr',
            'password' => 'tutu'
        ]);
    }
}
