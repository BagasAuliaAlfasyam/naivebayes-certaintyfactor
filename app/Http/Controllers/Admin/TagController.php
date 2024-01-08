<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::latest()->get();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tag::create(['name' => $request->name, 'slug' => Str::slug($request->name)]);
        return redirect('admin/tags')->with('toast_success', 'Data Tag Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Tag::where('id', $id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect('admin/tags')->with('toast_success', 'Data Tag Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $id)
    {
        Tag::destroy($id);
        return redirect('admin/tags')->with('toast_success', 'Data Tag Berhasil Dihapus');
    }
}
