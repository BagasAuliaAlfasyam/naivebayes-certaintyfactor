@extends('layouts.backend.app')

@section('title', 'Aturan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/plugins/datatables.min.css" />
@endpush

@section('content')
    <div class="breadcrumb">
        <h1>Data Aturan | </h1>
        <a href="/admin/rules/create" class="btn btn-primary btn-m ml-3">Tambah Data</a>
    </div>
    <div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Data Aturan</h4>
                    <p>Sistem pakar diagnosa penyakit Udang Vaname</p>
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" id="zero_configuration_table"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Penyakit</th>
                                    <th>Gejala</th>
                                    <th>Probabilitas</th>
                                    <th>CF Pakar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($rules as $rule)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rule->disease->name }}</td>
                                        <td>{{ $rule->symptom->symptom }}</td>
                                        <td>{{ number_format($rule->probability, 2) }}</td>
                                        <td>{{ number_format($rule->cf_pakar, 2) }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="/admin/rules/{{ $rule->id }}/edit"
                                                    class="btn btn-primary btn-sm float-left mr-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.rules.destroy', $rule->id) }}"
                                                    method="POST" id="deleteForm{{ $rule->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete({{ $rule->id }})">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Konfirmasi Penghapusan',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + id).submit();
                }
            })
        }
    </script>
@endpush
