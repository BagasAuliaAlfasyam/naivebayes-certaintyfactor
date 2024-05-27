<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disease;
use App\Models\ImageDisease;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diseases = Disease::all();
        return view('admin.diseases.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.diseases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'probability' => 'required',
            'appear' => 'required',
            'information' => 'required',
            'suggestion' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $disease = Disease::create($request->all());

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('storage//images'), $imageName);

                ImageDisease::create([
                    'disease_id' => $disease->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect('admin/diseases')->with('toast_success', 'Data Penyakit Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disease $disease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disease $disease)
    {
        return view('admin.diseases.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'probability' => 'required',
            'appear' => 'required',
            'information' => 'required',
            'suggestion' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $disease = Disease::find($id);
        $disease->update($request->all());

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('storage/images'), $imageName);

                ImageDisease::create([
                    'disease_id' => $disease->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect('admin/diseases')->with('toast_success', 'Data Penyakit Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $disease = Disease::find($id);

        if (!$disease) {
            return redirect('/admin/diseases')->with('toast_error', 'Data tidak ditemukan');
        }

        $images = $disease->images;

        if ($images) {
            foreach ($images as $image) {
                $imagePath = public_path('storage/images') . '/' . $image->filename;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
            }
        }

        $disease->delete();

        return redirect('/admin/diseases')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
