<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Document;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index')->with(['users'=> $users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {        
        $user = User::create($request->all());

        $user->roles()->attach(Role::find($request->role));

        return redirect('/');
    }

    public function show(Request $request)
    {
        $user = User::find($request->user_id);

        return $user;       
    }

    public function update(Request $request)
    {
        $user = User::find($request->user_id);

        $user->name = "Robert";

        $user->save();
    }

    public function delete(Request $request)
    {
        $user = User::find($request->user_id);

        $user->delete();
    }

    public function getDocuments(User $user)
    {
        return $user->documents->count();
    }
}
