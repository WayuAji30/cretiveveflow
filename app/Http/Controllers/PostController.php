<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(Request $request)
    {
        $posts = Post::where('is_sponsored', false)->latest()->take(10)->get();

        $sponsored = Post::where('is_sponsored', true)->take(2)->get();

        return view('home', [
            'posts' => $posts,
            'sponsored' => $sponsored,
        ]);
    }

    public function posts(Request $request)
    {
        // Mulai query untuk post
        $query = Post::latest();

        // Cek apakah parameter 'search' ada
        if ($request->has('search') && $request->input('search') !== '') {
            $search = $request->input('search');
            $query->where('title', 'like', '%' . $search . '%');
        }

        // Ambil hasil query dengan urutan terbaru
        $posts = $query->simplePaginate(20);

        // Return view dengan data hasil query
        return view('posts', [
            'posts' => $posts,
            'search' => $request->input('search'), // Kirim kembali kata kunci ke view
        ]);
    }


    public function post($slug)
    {
        $data = [
            'posts' => Post::where('slug', '!=', $slug)->get(),
            'category' => Post::all()
        ];

        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', $data, compact('post'));
    }
}
