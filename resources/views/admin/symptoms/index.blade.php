@extends('layouts.backend.app')

@section('title', 'Beranda Gejala')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/plugins/datatables.min.css" />
@endpush

@section('content')
    <div class="breadcrumb">
        <h1>Gejala | </h1>
        <a href="/admin/symptoms/create" class="btn btn-primary btn-m ml-3">Tambah Data</a>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Data Gejala</h4>
                    <p>Sistem pakar diagnosa penyakit Udang Vaname</p>
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" id="zero_configuration_table"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Tanggal Buat</th>
                                    <th>Tanggal Diperbarui</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($symptoms as $symptom)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $symptom->code }}</td>
                                        <td>{{ $symptom->symptom }}</td>
                                        <td>{{ $symptom->created_at }}</td>
                                        <td>{{ $symptom->updated_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="/admin/symptoms/{{ $symptom->id }}/edit"
                                                    class="btn btn-primary btn-sm float-left mr-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <form action="/admin/symptoms/{{ $symptom->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Data gejala akan terhapus')">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/backend') }}/js/plugins/datatables.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/scripts/datatables.script.min.js"></script>
@endpush
