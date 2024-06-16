@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Create Rules</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ route('admin.rules.store') }}" method="post">
                        @csrf
                        <!-- Disease Selection Card -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="disease">Penyakit</label>
                                    <select class="form-control @error('disease_id') is-invalid @enderror" id="disease" name="disease_id">
                                        <option value="">Pilih Penyakit</option>
                                        @foreach ($diseases as $disease)
                                            <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('disease_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Symptoms Cards Grid -->
                        <div class="row">
                            @foreach ($symptoms as $symptom)
                                <div class="col-md-3 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $symptom->symptom }}</h5>
                                            <div class="form-group">
                                                <label for="probability_{{ $symptom->id }}">Probabilitas:</label>
                                                <input type="text" class="form-control @error('probability.' . $symptom->id) is-invalid @enderror" id="probability_{{ $symptom->id }}" name="probability[{{ $symptom->id }}]">
                                                @error('probability.' . $symptom->id)
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="cf_pakar_{{ $symptom->id }}">CF Pakar:</label>
                                                <input type="text" class="form-control @error('cf_pakar.' . $symptom->id) is-invalid @enderror" id="cf_pakar_{{ $symptom->id }}" name="cf_pakar[{{ $symptom->id }}]">
                                                @error('cf_pakar.' . $symptom->id)
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary pd-x-20 mt-3">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
