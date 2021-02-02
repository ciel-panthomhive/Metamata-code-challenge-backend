<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Models\Story;
use App\Models\User as ModelsUser;

class MyStoryController extends Controller
{
    public function newMy($id)
    {
        $users = ModelsUser::find($id);
        // $story = Story::find($id);
        // $story = Story::with(['users' => function ($query) {
        //     $query->where('id', 2);
        // }])->get();
        $users->load(['story']);
        // $user = Story::with(['users'])->get();
        // dd($storys);
        return view('mystory', ['users' => $users]);
    }
}
