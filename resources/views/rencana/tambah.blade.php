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

      <form action="/rencanas" method='post'>
        @csrf
        <div class="form-floating mb-3">
          <input class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama " placeholder="nama" value="{{old('nama')}}">
          <label for="nama">Nama </label>
          @error('nama')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="form-floating mb-3">
          <input  class="form-control @error('pagu') is-invalid @enderror" name="pagu" id="pagu " placeholder="limit" value="{{old('pagu')}}">
          <label for="pagu">Limit </label>
          @error('pagu')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="form-floating mb-3">
          <input  class="form-control @error('catatan') is-invalid @enderror" name="catatan" id="catatan " placeholder="catatan" value="{{old('catatan')}}">
          <label for="catatan">Catatan </label>
          @error('catatan')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
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
        <a class="btn btn-danger" href="/rencanas" role="button">Batal</a>

      </form>
    </div>
  </div>
  <!-- Container End -->

</main>
@endsection