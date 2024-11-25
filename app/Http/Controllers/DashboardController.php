<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('post', compact('posts'));
    }

    public function addIndex()
    {
        $categories = Category::with('post')->latest()->get();
        return view('addPost', compact('categories'));
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|string'
        ]);

        $fileName = $request->file('image')->hashName(); // Nama file unik dengan hash
        $filePath = $request->file('image')->storeAs('images', $fileName, 'public');


        $category = Category::find($data['category'])->first();
        $post = $category->post()->create([
            'title' => $data['title'],
            'content' => $data['content'],
            'image' => $filePath,
            'status' => $data['status'],
        ]);

        if ($post) {
            return redirect()->route('berita.add')->with('success', 'Berhasil diposting.');
        } else {
            return redirect()->route('berita.add')->with('error', 'Gagal menambahkan postingan.');
        }
    }

    public function single($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            return redirect()->route('home');
        }
        return view('singleNews', compact('post'));
    }

    public function updateIndex($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::all();
        return view('updatePost', compact('post', 'categories'));
    }
}
