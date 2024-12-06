<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {

        $news = Post::where('status', 'published')->orderBy('created_at', 'desc')->get();

        return view('news', compact('news'));
    }
}
