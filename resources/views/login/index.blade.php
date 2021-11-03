@extends('layout.main')

@section('container')
<main class="form-signin text-center">
@if(session()->has('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{session('loginError')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
    <form action="/login" method="post">
    @csrf
    <div class="form-floating">
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
        <label for="email">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        <label for="password" >Password</label>
    </div>

    <div class="link-register">
        <p>Not Registered?<a href="/register">Register Now !</a> </p>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
</main>
@endsection