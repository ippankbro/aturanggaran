@extends('layout.main')

@section('header')
@include('partial.header')
@endsection

@section('nav')
@include('partial.nav')
@endsection



@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{$title}}</h1>
  
  </div>

  <!-- Container -->
  <div class="row">

    <div class="col-lg-8">

      <form action="/users/{{$user->id}}" method='post'>
        @csrf
        @method('put')
        <div class="form-floating mb-3">
          <input class="form-control @error('name') is-invalid @enderror" name="name" id="name " placeholder="nama" value="{{old('name',$user->name)}}">
          <label for="name">Nama </label>
          @error('name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="form-floating mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email " placeholder="nama" value="{{old('email',$user->email)}}">
          <label for="email">Nama </label>
          @error('email')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" aria-label="First name">
            <label for="password " >Password </label>
        </div>




        <!-- <div class="row ">
            <div class="col-md-6 form-floating mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" aria-label="First name">
                <label for="password " class="ms-3">Password </label>
            </div>
            <div class="col-md-6 form-floating mb-3">
                <input type="password" class="form-control" name="confpassword" id="confpassword" placeholder="Konfirmasi Password" aria-label="Last name">
                <label for="confpassword" class="ms-3">Konfirmasi Password </label>
            </div>
        </div> -->

        <button class="btn btn-primary" type="submit">Simpan</button>
        <button type="reset" class="btn btn-outline-primary">Reset</button>
        <a class="btn btn-danger" href="/users" role="button">Batal</a>

      </form>
    </div>
  </div>
  <!-- Container End -->

</main>
@endsection