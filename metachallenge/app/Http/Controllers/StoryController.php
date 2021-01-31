<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $users = User::all();
        $story = Story::with(['users'])->get();
        return view('story.index', ['story' => $story, 'users' => $users]);
    }

    function new(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'stories' => 'required',
        ]);

        $story = Story::create([
            'user_id' => trim($request->Auth::user()->id()),
            'stories' => trim($request->stories),
        ]);

        if ($story) {
            return redirect()->route('story');
        }
    }
}
