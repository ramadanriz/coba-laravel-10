@extends('layouts.app', ['title' => 'Register - Forecasting'])

@section('content')

<div class="col-md-6">
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <h4 class="fw-bold text-uppercase">register</h4>
            <hr>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row row-cols-1 gap-3">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold text-uppercase">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold text-uppercase">Email address</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold text-uppercase">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold text-uppercase">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Konfirmasi Password">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">REGISTER</button>
            </form>
        </div>
    </div>
    <div class="login mt-3 text-center">
        <p>Sudah punya akun ? Login <a href="/login">Disini</a></p>
    </div>
</div>

@endsection