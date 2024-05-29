<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Disease;
use App\Models\Symptom;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rules = Rule::all();
        return view('admin.rules.index', compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $diseases = Disease::latest()->get();
        $symptoms = Symptom::latest()->get();
        return view('admin.rules.create', compact('diseases', 'symptoms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'disease_id' => 'required',
            'symptom_id' => 'required',
            'probability' => 'required',
            'cf_pakar' => 'required'
        ]);

        Rule::create([
            'disease_id' => $request->disease_id,
            'symptom_id' => $request->symptom_id,
            'probability' => $request->probability,
            'cf_pakar' => $request->cf_pakar
        ]);

        return redirect('/admin/rules')->with('toast_success', 'Data Rule Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rule $rule)
    {
        $diseases = Disease::latest()->get();
        $symptoms = Symptom::latest()->get();
        return view('admin.rules.edit', compact('rule', 'diseases', 'symptoms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'disease_id' => 'required',
            'symptom_id' => 'required',
            'probability' => 'required',
            'cf_pakar' => 'required'
        ]);

        Rule::where('id', $id)->update([
            'disease_id' => $request->disease_id,
            'symptom_id' => $request->symptom_id,
            'probability' => $request->probability,
            'cf_pakar' => $request->cf_pakar
        ]);

        return redirect('/admin/rules')->with('toast_success', 'Data Rule Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Rule::destroy($id);
        return redirect('/admin/rules')->with('toast_success', 'Data Rule Berhasil Dihapus');
    }
}
