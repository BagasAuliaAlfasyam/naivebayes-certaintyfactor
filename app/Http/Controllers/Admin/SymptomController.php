<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Symptom;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $symptoms = Symptom::all();
        return view('admin.symptoms.index', compact('symptoms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.symptoms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'symptom' => 'required',
        ]);

        Symptom::create($request->all());
        return redirect('admin/symptoms')->with('toast_success', 'Data Gejala Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Symptom $symptom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Symptom $symptom)
    {
        return view('admin.symptoms.edit', compact('symptom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Symptom $symptom)
    {
        $request->validate([
            'code' => 'required',
            'symptom' => 'required',
        ]);

        Symptom::where('id', $symptom->id)->update([
            'code' => $request->code,
            'symptom' => $request->symptom
        ]);
        return redirect('admin/symptoms')->with('toast_success', 'Data Gejala Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Symptom::destroy($id);
        return redirect('admin/symptoms')->with('toast_success', 'Data Gejala Berhasil Dihapus');
    }
}
