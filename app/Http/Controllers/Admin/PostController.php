<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('posts', $filename, 'public');
        } else {
            $filename = 'default.jpg';
        }

        $post = new Post();

        $post->user_id = Auth::User()->id;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->image = $filename;
        $post->content = $request->content;
        $post->status = $request->status ? true : false;
        $post->is_approved = true;

        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        return redirect('admin/posts')->with('toast_success', 'Data Post Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            // 'image' => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();

            if (Storage::disk('public')->exists('posts/' . $post->image)) {
                if ($post->image !== 'default.jpg') {
                    Storage::disk('public')->delete('posts/' . $post->image);
                }
            }

            $request->image->storeAs('posts', $filename, 'public');
        } else {
            $filename = $post->image;
        }

        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $filename,
            'content' => $request->content,
            'status' => $request->status ? true : false,
            'is_approved' => true,
        ]);

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        return redirect('admin/posts')->with('toast_success', 'Data Post Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (Storage::disk('public')->exists('posts/' . $post->image)) {
            Storage::disk('public')->delete('posts/' . $post->image);
        }
        $post->categories()->detach();
        $post->tags()->detach();

        Post::destroy($post->id);
        return redirect('admin/posts')->with('toast_success', 'Data Post Berhasil Dihapus');
    }
}
