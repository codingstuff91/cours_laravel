<?php

namespace App\Http\Controllers;

use App\User;
use App\Document;
use Illuminate\Http\Request;
use App\Notifications\DocumentCreated;

class DocumentController extends Controller
{
    public function create()
    {
        return view('documents.create');
    }

    public function store(Request $request)
    {
        $user = User::find(1);
        
        $document = Document::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => $user->id
        ]);

        $user->notify(new DocumentCreated());

        return redirect('/')->with(['success', 'Document crée avec succès !!']);
    }
}
