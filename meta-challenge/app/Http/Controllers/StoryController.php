<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        //$users = User::all();
        $story = Story::with(['users', 'like'])->get();
        return view('story.index', ['story' => $story]);
        //return view('story.index', ['users' => $users]);
    }

    function new(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'stories' => 'required',
            'story_id' => 'required',
            'status' => 'required',
        ]);

        $story = Story::create([
            'user_id' => $request->user_id,
            'stories' => $request->stories,
        ]);

        $like = Like::create([
            'user_id' => $request->user_id,
            'story_id' => $request->story_id,
            'status' => $request->status,
        ]);

        if ($story && $like) {
            return redirect()->route('story');
        }
    }

    function like(Request $request)
    {
        Like::updateOrCreate([
            'user_id' => $request->user_id, 'story_id' => $request->story_id,
            'status' => $request->status
        ]);

        return redirect()->route('story');
    }
}
