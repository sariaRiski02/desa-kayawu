<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->get();
        $countCategory = Category::count();
        $countPost = Post::count();
        $countDraft = Post::where('status', 'Draft')->count();

        return view('post', compact('posts', 'countCategory', 'countPost', 'countDraft'));
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

        if ($request->file('image')) {
            $fileName = $request->file('image')->hashName(); // Nama file unik dengan hash
            $filePath = $request->file('image')->storeAs('images', $fileName, 'public');
        }


        $category = Category::find($data['category'])->first();
        $post = $category->post()->create([
            'title' => $data['title'],
            'content' => $data['content'],
            'image' => $filePath ?? '',
            'status' => $data['status'],
        ]);

        if ($post) {
            return redirect()->route('berita')->with('success', 'Berhasil diposting.');
        } else {
            return redirect()->route('berita')->with('error', 'Gagal menambahkan postingan.');
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
        if (!$post) {
            return redirect()->route('berita');
        }

        $categories = Category::all();
        return view('updatePost', compact('post', 'categories'));
    }

    public function update(Request $request, $slug)
    {

        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            return redirect()->route('berita');
        }

        $data = $request->validate([
            'title' => 'nullable|string',
            'category' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'nullable|string'
        ]);

        if ($request->file('image')) {
            if ($post->image) {
                $imagePath = public_path('storage/' . $post->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $fileName = $request->file('image')->hashName();
            $filePath = $request->file('image')->storeAs('images', $fileName, 'public');
            $data['image'] = $filePath;
        }

        // Remove empty fields from the data array
        $data = array_filter($data, function ($value) {
            return !is_null($value) && $value !== '';
        });

        $post->update($data);

        if ($post) {
            return redirect()->route('berita')->with('success', 'Berhasil diupdate.');
        } else {
            return redirect()->route('berita')->with('error', 'Gagal memperbarui postingan.');
        }
    }

    public function delete($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            return redirect()->back()->with('error', 'Gagal menghapus postingan.');
        }

        if ($post->image) {

            $imagePath = public_path('storage/' . $post->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $post->delete();
        return redirect()->back()->with('success', 'Postingan berhasil dihapus.');
    }
}
