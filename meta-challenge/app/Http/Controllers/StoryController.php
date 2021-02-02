<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Story;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $story = Story::with(['users', 'like'])->get();
        return view('story.index', ['story' => $story]);
    }

    function new(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'stories' => 'required',
        ]);

        $story = Story::create([
            'user_id' => $request->user_id,
            'stories' => $request->stories,
        ]);

        if ($story) {
            return redirect()->route('story');
        }
    }
}
