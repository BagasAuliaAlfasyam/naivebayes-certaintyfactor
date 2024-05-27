@extends('layouts.backend.app')

@section('title', 'Dashboard')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/plugins/datatables.min.css" />
@endpush

@section('content')
    <div class="breadcrumb">
        <h1>Penyakit</h1>
        <a href="{{ route('admin.diseases.create') }}" class="btn btn-primary btn-sm ml-2">Create</a>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Data Penyakit</h4>
                    <p>Sistem pakar diagnosa penyakit ginjal</p>
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Probability</th>
                                    <th>Appear</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diseases as $disease)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $disease->code }}</td>
                                        <td>{{ $disease->name }}</td>
                                        <td>{{ $disease->probability }}</td>
                                        <td>{{ $disease->appear }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#imageModal{{ $disease->id }}">Show Image</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="imageModal{{ $disease->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $disease->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="imageModalLabel{{ $disease->id }}">Images for {{ $disease->name }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @if ($disease->images && $disease->images->count() > 0)
                                                                @foreach ($disease->images as $image)
                                                                    <img src="{{ asset('storage/images/' . $image->filename) }}" alt="Disease Image" class="img-thumbnail mb-2" style="width: 100%;">
                                                                @endforeach
                                                            @else
                                                                <p>No images available for this disease.</p>
                                                            @endif
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('admin.diseases.edit', $disease->id) }}" class="btn btn-primary btn-sm mr-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.diseases.destroy', $disease->id) }}" method="POST" id="deleteForm{{ $disease->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $disease->id }})">
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
