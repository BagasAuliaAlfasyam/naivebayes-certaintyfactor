@extends('layouts.backend.app')

@section('title', 'Hasil Diagnosa')

@section('content')

    <div class="breadcrumb">
        <h1>Detail Riwayat Konsultasi | {{ Auth::user()->name }}</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <section class="ul-widget-stat-s1">

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="timeline-card card">
                    <div class="card-body">
                        <div class="ul-widget__row">
                            <div class="ul-widget-stat__font"><i class="fas fa-disease text-danger"></i></div>
                            <div class="ul-widget__content">
                                <h4 class="heading">Naive Bayes Method</h4>
                                <p class="m-0">{{ $consultation->disease }}</p>
                                <h4 class="heading mt-1">{{ $consultation->score }}%</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="timeline-card card">
                    <div class="card-body">
                        <div class="ul-widget__row">
                            <div class="ul-widget-stat__font"><i class="fas fa-disease text-danger"></i></div>
                            <div class="ul-widget__content">
                                <h4 class="heading">Certainty Factory Method</h4>
                                <p class="m-0">{{ $consultation->disease }}</p>
                                <h4 class="heading mt-1">{{ $consultation->cf_percentage }}%</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="timeline-card card">
                    <div class="card-body">
                        <div class="mb-1"><strong class="mr-1">Info Penyakit</strong>
                            <p class="text-muted">{{ $consultation->created_at->diffForHumans() }}</p>
                        </div>
                        <p>
                            {!! $consultation->information !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="timeline-card card">
                    <div class="card-body">
                        <div class="mb-1"><strong class="mr-1">Saran Dokter</strong>
                            <p class="text-muted">{{ $consultation->created_at->diffForHumans() }}</p>
                        </div>
                        <p>
                            {!! $consultation->suggestion !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="card mb-2 mx-auto">
                    <div class="card-body text-center">
                        <strong class="d-block mb-3">Gambar Penyakit {{ $consultation->disease }}</strong>
                        @if ($imageDiseases->isNotEmpty())
                            <div class="row">
                                @foreach ($imageDiseases as $image)
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                        <img src="{{ asset('storage/images/' . $image->filename) }}" alt="Disease Image"
                                             class="img-fluid img-thumbnail w-100">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-center mt-4 text-danger"><strong>No images available for this disease.</strong></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="separator-breadcrumb border-top mt-5"></div>

@endsection
