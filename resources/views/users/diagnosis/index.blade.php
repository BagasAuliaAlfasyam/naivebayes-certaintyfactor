@extends('layouts.backend.app')

@section('title', 'Users Dashboard | Daftar Gejala Penyakit Udang Vaname')

@section('content')

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body text-center">
                    <h5 class="my-0">Berikut adalah gejala penyakit Udang Vaname yang bisa anda pilih sesuai gejala yang
                        anda lihat</h5><br>
                    <h5 class="my-0">Anda bisa klik <code>checkbox</code> atau <code>nama gejala yang dibawah ini</code>
                    </h5><br>
                    <h5 class="my-0">Klik <code>Submit</code> jika sudah memilih semua gejala yang anda lihat</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <form action="{{ route('users.diagnosis.proccess') }}" method="POST" class="col-md-12">
            @csrf
            <div class="row">
                @foreach ($symptoms as $symptom)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="checkbox checkbox-outline-primary">
                                        <input type="checkbox" id="symptom_{{ $symptom->id }}"
                                            name="symptoms[{{ $symptom->id }}]" value="{{ $symptom->id }}" />
                                        <span class="fw-bold fs-6">{{ $symptom->symptom }}</span>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <img src="http://127.0.0.1:8000/assets/backend/images/logo.png" width="200"
                                    height="200" alt="Gambar Gejala" class="img-fluid mt-3">
                                <div id="cf_user_{{ $symptom->id }}" class="cf-options mt-3 fs-6 text-left"
                                    style="display: none;">
                                    <p class="fw-bold mx-1 mb-2 fs-6">Tingkat keyakinan Anda?
                                    </p>
                                    <label class="ml-3">
                                        <input type="radio" name="cf_user[{{ $symptom->id }}]" value="1.0"> Pasti
                                    </label><br>
                                    <label class="ml-3">
                                        <input type="radio" name="cf_user[{{ $symptom->id }}]" value="0.8"> Hampir
                                        pasti
                                    </label><br>
                                    <label class="ml-3">
                                        <input type="radio" name="cf_user[{{ $symptom->id }}]" value="0.6">
                                        Kemungkinan besar
                                    </label><br>
                                    <label class="ml-3">
                                        <input type="radio" name="cf_user[{{ $symptom->id }}]" value="0.4"> Mungkin
                                    </label><br>
                                    <label class="ml-3">
                                        <input type="radio" name="cf_user[{{ $symptom->id }}]" value="0"> Tidak
                                        tahu
                                    </label><br>
                                    <label class="ml-3">
                                        <input type="radio" name="cf_user[{{ $symptom->id }}]" value="-0.4"> Mungkin
                                        tidak
                                    </label><br>
                                    <label class="ml-3">
                                        <input type="radio" name="cf_user[{{ $symptom->id }}]" value="-0.6">
                                        Kemungkinan besar tidak
                                    </label><br>
                                    <label class="ml-3">
                                        <input type="radio" name="cf_user[{{ $symptom->id }}]" value="-0.8"> Hampir
                                        pasti tidak
                                    </label><br>
                                    <label class="ml-3">
                                        <input type="radio" name="cf_user[{{ $symptom->id }}]" value="-1.0"> Pasti
                                        tidak
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    let cfOptions = document.getElementById('cf_user_' + this.value);
                    if (this.checked) {
                        cfOptions.style.display = 'block';
                    } else {
                        cfOptions.style.display = 'none';
                        cfOptions.querySelectorAll('input[type="radio"]').forEach(function(radio) {
                            radio.checked = false;
                        });
                    }
                });
            });
        });
    </script>

@endsection
