<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create()
    {
        return view('documents.create');
    }

    public function store(Request $request)
    {
        $user = User::find(1);
        $user->notify(new DocumentCreated());
    }
}
