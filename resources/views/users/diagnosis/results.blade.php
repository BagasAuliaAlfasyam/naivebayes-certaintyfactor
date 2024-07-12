@extends('layouts.backend.app')

@section('title', 'Hasil Diagnosa')

@section('content')

    <div class="breadcrumb">
        <h1>Hasil Diagnosa</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <section class="ul-widget-stat-s1">

        <div class="row mt-3">
            <div class="col-sm-6">
                <div class="timeline-card card">
                    <div class="card-body">
                        <div class="ul-widget__row">
                            <div class="ul-widget-stat__font"><i class="fas fa-disease text-danger"></i></div>
                            <div class="ul-widget__content">
                                <p class="m-0 fw-bold fs-4">Naive Bayes</p>
                                @if ($diagnosisMax)
                                    <p class="m-0">{{ $diagnosisMax->name }}</p>
                                    <h4 class="heading">{{ floor($diagnosisMax->results * 100) }}%</h4>
                                @else
                                    <p class="m-0">No diagnosis available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="timeline-card card">
                    <div class="card-body">
                        <div class="ul-widget__row">
                            <div class="ul-widget-stat__font"><i class="fas fa-disease text-danger"></i></div>
                            <div class="ul-widget__content">
                                <p class="m-0 fw-bold fs-4">Certainty Factor</p>
                                @if ($diagnosisMax)
                                    <p class="m-0">{{ $diagnosisMax->name }}</p>
                                    <h4 class="heading">{{ floor($diagnosisMax->cf_combine * 100) }}%</h4>
                                @else
                                    <p class="m-0">No diagnosis available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($diagnosisMax)
            <div class="row mt-3">
                <div class="col-sm-6">
                    <div class="timeline-card card">
                        <div class="card-body">
                            <div class="mb-1"><strong class="mr-1">Info Penyakit</strong>
                                <p class="text-muted">{{ $diagnosisMax->created_at }}</p>
                            </div>
                            <p>
                                {!! $diagnosisMax->information !!}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="timeline-card card">
                        <div class="card-body">
                            <div class="mb-1"><strong class="mr-1">Saran Dokter</strong>
                                <p class="text-muted">{{ $diagnosisMax->created_at }}</p>
                            </div>
                            <p>
                                {!! $diagnosisMax->suggestion !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row mt-3">
            <div class="col">
                <div class="card mb-2 mx-auto">
                    <div class="card-body text-center">
                        <strong class="d-block mb-3">Gambar Penyakit {{ $diagnosisMax->disease }}</strong>
                        @if ($diagnosisMax->imageDiseases->isNotEmpty())
                        <div class="row">
                            @foreach ($diagnosisMax->imageDiseases as $image)
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

    <!-- end of row-->
    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Hasil Perhitungan</h4>
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" id="zero_configuration_table"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Penyakit</th>
                                    <th>Hasil Naive Bayes</th>
                                    <th>Hasil Certainty Factor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diagnosis as $diagnosa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $diagnosa->code }}</td>
                                        <td>{{ $diagnosa->name }}</td>
                                        <td>{{ floor($diagnosa->results * 100) }}%</td>
                                        <td>{{ floor($diagnosa->cf_combine * 100) }}%</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of col-->
    </div>
@endsection
