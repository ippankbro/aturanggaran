@extends('layout.main')

@section('container')
<main class="form-signin text-center">
    
    <h1 class="h3 mb-3 fw-normal">Form Registrasi</h1>
    <form action='/register' method="post" >
        @csrf
        <div class="form-floating">
            <input type="input" class="form-control @error('name') is-invalid @enderror"  name="name"  placeholder="example" value="{{old('name')}}">
            <label for="name">Nama</label>
            @error('name')
            <div class="invalid-feedback">
                 {{$message}}
            </div>
            @enderror
            
        </div>
        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="name@example.com" value="{{old('email')}}">
            <label for="floatingInput">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                 {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
            <div class="invalid-feedback">
                 {{$message}}
            </div>
            @enderror
        </div>



        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
    <div class="link-login">
        <p>Sudah terdaftar?<a href="/login">Silahkan login</a> </p>
    </div>
</main>
@endsection