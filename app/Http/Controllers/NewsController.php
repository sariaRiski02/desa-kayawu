<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {

        $news = Post::where('status', 'published')->orderBy('created_at', 'desc')->get();

        return view('news', compact('news'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|max:255',
        ]);

        $query = $request->input('query');
        $news = Post::where('status', 'published')
            ->where('title', 'like', '%' . $query . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('news', compact('news'));
    }

    public function category($categorySlug)
    {
        // Ambil kategori berdasarkan slug
        $category = Category::where('name', $categorySlug)->firstOrFail();

        // Ambil berita yang sesuai dengan kategori
        $news = Post::where('status', 'published')
            ->where('id_category', $category->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('newsByCategory', compact('news', 'category'));
    }
}
