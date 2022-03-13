<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index(Request $request) {
        if ($request->has('name')) {
            $records = Post::where('name', $request->name)->get();
        } else {
            $records = Post::all();
        }

        Log::info($request->name.PHP_EOL);

        return view('forum', compact('records'));
    }
}
