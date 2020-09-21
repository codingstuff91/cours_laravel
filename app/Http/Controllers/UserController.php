<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search()
    {
        $users = User::all();

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

    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->prenom;
        $user->email = "test4@test.fr";
        $user->password = "secret"; 
        
        $user->save();

        return redirect('/');
    }

    public function storeFakeData()
    {
        $user = factory(User::class, 30)->create();
        dd($user);
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

    public function getComments()
    {
        $user = User::find(1);

        $comments = $user->comments;
    }
}
