@extends('layouts.backend.authentication')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/backend/css/themes/animation.css') }}">
    <div class="area">
        <ul class="circles">
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/1.jpg') }}" alt="Image 1"></div>
            </li>
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/2.jpg') }}" alt="Image 1"></div>
            </li>
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/3.jpg') }}" alt="Image 1"></div>
            </li>
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/4.jpg') }}" alt="Image 1"></div>
            </li>
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/5.jpg') }}" alt="Image 1"></div>
            </li>
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/6.jpg') }}" alt="Image 1"></div>
            </li>
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/7.jpg') }}" alt="Image 1"></div>
            </li>
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/8.jpg') }}" alt="Image 1"></div>
            </li>
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/9.jpg') }}" alt="Image 1"></div>
            </li>
            <li>
                <div class="gallery-item"><img src="{{ asset('assets/background/10.jpg') }}" alt="Image 1"></div>
            </li>
        </ul>
    </div>

    <div class="auth-layout-wrap">
        <div class="auth-content row justify-content-center">
            <div class="card o-hidden col-lg-6">
                <div class="row">
                    <div class="col-lg">
                        <div class="p-4">
                            <h1 class="text-24 text-center">Sistem Pakar </h1>
                            <h1 class="mb-3 text-18 text-center">Udang Vaname</h1>
                            <div class="auth-logo text-center mb-4">
                                <img src="{{ asset('assets/backend/images/logo.png') }}">
                            </div>

                            <h2 class="mb-3 text-18">Masuk</h2>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control form-control-rounded @error('email') is-invalid @enderror"
                                        id="email" type="email" name="email" value="{{ old('email') }}" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Kata sandi</label>
                                    <input class="form-control form-control-rounded @error('password') is-invalid @enderror"
                                        name="password" id="password" type="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Masuk</button>
                            </form>
                            <div class="mt-3 text-center">
                                <a class="text-muted" href="/register">
                                    <u>Daftar</u>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
