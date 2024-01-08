<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disease;

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
        ]);

        Disease::create($request->all());
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
        ]);

        Disease::where('id', $id)->update([
            'code' => $request->code,
            'name' => $request->name,
            'probability' => $request->probability,
            'appear' => $request->appear,
            'information' => $request->information,
            'suggestion' => $request->suggestion,
        ]);

        return redirect('admin/diseases')->with('toast_success', 'Data Penyakit Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Disease::destroy($id);
        return redirect('/admin/diseases')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
